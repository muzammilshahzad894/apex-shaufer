<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\AddCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Booking;
use App\Models\FleetTax;
use App\Models\Coupon;
use App\Models\User;
use App\Models\Status;
use App\Models\UsedCoupon;
use App\Services\EmailService;

class DraftController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }
    
    public function index(Request $request)
    {
        try {
            $draftUsers  = Booking::where('is_draft', 1);

            if (isset($request->from_date) && !empty($request->from_date)) {
                $draftUsers = $draftUsers->where('booking_date', '>=', $request->from_date);
            }

            if (isset($request->to_date) && !empty($request->to_date)) {
                $draftUsers = $draftUsers->where('booking_date', '<=', $request->to_date);
            }

            if (isset($request->from_time) && !empty($request->from_time)) {
                $draftUsers = $draftUsers->where('booking_time', '>=', $request->from_time);
            }

            if (isset($request->to_time) && !empty($request->to_time)) {
                $draftUsers = $draftUsers->where('booking_time', '<=', $request->to_time);
            }

            if (isset($request->sort) && !empty($request->sort)) {
                $draftUsers = $draftUsers->orderBy('booking_date', $request->sort)->orderBy('booking_time', $request->sort);
            } else {
                $draftUsers = $draftUsers->orderBy('booking_date', 'asc')->orderBy('booking_time', 'asc');
            }

            $draftUsers = $draftUsers->paginate(10);

            return view('admin.draft.index', compact('draftUsers'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function bookByAdmin(Request $request){
        try {
            $bookByAdmin  = Booking::where('is_draft', 1)->where('user_id', 1);
            $drivers = User::where('role', 'driver')->get();
            $statuses = Status::all();

            if (isset($request->from_date) && !empty($request->from_date)) {
                $bookByAdmin = $bookByAdmin->where('booking_date', '>=', $request->from_date);
            }

            if (isset($request->to_date) && !empty($request->to_date)) {
                $bookByAdmin = $bookByAdmin->where('booking_date', '<=', $request->to_date);
            }

            if (isset($request->from_time) && !empty($request->from_time)) {
                $bookByAdmin = $bookByAdmin->where('booking_time', '>=', $request->from_time);
            }

            if (isset($request->to_time) && !empty($request->to_time)) {
                $bookByAdmin = $bookByAdmin->where('booking_time', '<=', $request->to_time);
            }

            if (isset($request->status) && !empty($request->status)) {
                $bookByAdmin = $bookByAdmin->where('status_id', $request->status);
            }

            if (isset($request->sort) && !empty($request->sort)) {
                $bookByAdmin = $bookByAdmin->orderBy('booking_date', $request->sort)->orderBy('booking_time', $request->sort);
            } else {
                $bookByAdmin = $bookByAdmin->orderBy('booking_date', 'asc')->orderBy('booking_time', 'asc');
            }

            $bookByAdmin = $bookByAdmin->paginate(10);

            return view('admin.draft.bookByAdmin', compact('bookByAdmin', 'drivers', 'statuses'));
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
  
    public function delete($id)
    {
        try {
            Booking::find($id)->delete();
            return redirect()->route('admin.draft.index')->with('success', 'Draft booking deleted successfully');
        } catch (Exception $e) {
            Log::error(__CLASS__ . '::' . __LINE__ . ' Exception: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function acceptDraft($id)
    {
        $draft = Booking::find($id);
        if ($draft) {
            $draft->is_draft = 0; // Update is_draft to 0
            $draft->save(); // Save the updated record
            
            $returnBooking = null;
            if ($draft->return_id) {
                $returnBooking = Booking::find($draft->return_id);
            }
            $user = User::find($draft->user_id);
            $couponDiscount = UsedCoupon::where('user_id', $user->id)->first();
            $coupon = null;
            if ($couponDiscount) {
                $coupon = Coupon::where('id', $couponDiscount->coupon_id)->first();
            }
            $bookingDetails = (object) [
                'bookingId' => $draft->id,
                'serviceType' => $draft->service->name,
                'pickupLocation' => $draft->return_id ? $returnBooking->pickup_location : $draft->pickup_location,
                'via_locations' => $draft->via_locations ? json_decode($draft->via_locations) : [],
                'dropoffLocation' => $draft->return_id ? $returnBooking->dropoff_location : $draft->dropoff_location,
                'dateAndTime' => $draft->return_id ? formatDate($returnBooking->booking_date) . ' ' . foramtTime($returnBooking->booking_date) : formatDate($draft->booking_date) . ' ' . foramtTime($draft->booking_time),
                'is_return' => $draft->return_id ? true : false,
                'return_dateAndTime' => $draft->return_id ? formatDate($draft->booking_date) . ' ' . foramtTime($draft->booking_time) : null,
                'name' => $draft->name,
                'telephone' => $draft->phone_number,
                'email' => $draft->email,
                'no_of_passenger' => $draft->no_of_passenger,
                'is_childseat' => $draft->is_childseat ? $draft->is_childseat : '-',
                'is_meet_greet' => $draft->is_meet_greet ? 'Yes' : '-',
                'no_suit_case' => $draft->no_suit_case,
                'no_of_laugage' => $draft->no_of_laugage,
                'summary' => $draft->summary ? $draft->summary : '-',
                'other_name' => $draft->other_name ? $draft->other_name : '-',
                'other_phone_number' => $draft->other_phone_number ? $draft->other_phone_number : '-',
                'other_email' => $draft->other_email ? $draft->other_email : '-',
                'fleet_price' => $draft->total_price,
                'is_extra_lauggage' => $draft->is_extra_lauggage ? 'Yes' : '-',
                'coupon_discount' => $coupon ? $coupon->discount : 0,
            ];
            
            $this->emailService->sendBookingConfirmation($user, $bookingDetails);
        }

        return redirect()->route('admin.draft.index')->with('success', 'Draft accepted successfully.');
    }
    public function rejectDraft($id)
    {
        $draft = Booking::find($id);
        if ($draft) {
            $draft->is_draft = 2; // Update is_draft to 2
            $draft->save(); // Save the updated record
            
            $returnBooking = null;
            if ($draft->return_id) {
                $returnBooking = Booking::find($draft->return_id);
            }
            $user = User::find($draft->user_id);
            $couponDiscount = UsedCoupon::where('user_id', $user->id)->first();
            $coupon = null;
            if ($couponDiscount) {
                $coupon = Coupon::where('id', $couponDiscount->coupon_id)->first();
            }
            $bookingDetails = (object) [
                'bookingId' => $draft->id,
                'serviceType' => $draft->service->name,
                'pickupLocation' => $draft->return_id ? $returnBooking->pickup_location : $draft->pickup_location,
                'via_locations' => $draft->via_locations ? json_decode($draft->via_locations) : [],
                'dropoffLocation' => $draft->return_id ? $returnBooking->dropoff_location : $draft->dropoff_location,
                'dateAndTime' => $draft->return_id ? formatDate($returnBooking->booking_date) . ' ' . foramtTime($returnBooking->booking_date) : formatDate($draft->booking_date) . ' ' . foramtTime($draft->booking_time),
                'is_return' => $draft->return_id ? true : false,
                'return_dateAndTime' => $draft->return_id ? formatDate($draft->booking_date) . ' ' . foramtTime($draft->booking_time) : null,
                'name' => $draft->name,
                'telephone' => $draft->phone_number,
                'email' => $draft->email,
                'no_of_passenger' => $draft->no_of_passenger,
                'is_childseat' => $draft->is_childseat ? $draft->is_childseat : '-',
                'is_meet_greet' => $draft->is_meet_greet ? 'Yes' : '-',
                'no_suit_case' => $draft->no_suit_case,
                'no_of_laugage' => $draft->no_of_laugage,
                'summary' => $draft->summary ? $draft->summary : '-',
                'other_name' => $draft->other_name ? $draft->other_name : '-',
                'other_phone_number' => $draft->other_phone_number ? $draft->other_phone_number : '-',
                'other_email' => $draft->other_email ? $draft->other_email : '-',
                'fleet_price' => $draft->total_price,
                'is_extra_lauggage' => $draft->is_extra_lauggage ? 'Yes' : '-',
                'coupon_discount' => $coupon ? $coupon->discount : 0,
            ];
            
            $this->emailService->sendBookingCancellation($user, $bookingDetails);
        }

        return redirect()->route('admin.draft.index')->with('success', 'Draft rejected successfully.');
    }
}