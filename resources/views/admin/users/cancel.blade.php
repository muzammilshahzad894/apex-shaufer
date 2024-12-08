@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column mb-4">
        <h3 class="mb-3">Cancel Bookings</h3>
    </div>

    <div class="row">
        @include('partials.messages')
        <div class="col-xl-12">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone </th>
                            <th>Pickup </th>
                            <th class="max-content-display">Via Locations</th>
                            <th>DropOff </th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if($confirmbookings->count())
                            @foreach($confirmbookings as $draft)
                                <tr>
                                    <td>{{ $draft->name }}</td>
                                    <td>{{ $draft->email }}</td>
                                    <td>{{ $draft->phone_number }}</td>
                                    <td> <div class="max-content-display">{{ $draft->pickup_location }}</div></td>
                                    <td>
                                         <div class="max-content-display">
                                            @if($draft->via_locations)
                                                @php
                                                    $viaLocations = json_decode($draft->via_locations, true);
                                                @endphp
                                        
                                                @if(is_array($viaLocations) && !empty($viaLocations))
                                                    @foreach($viaLocations as $index => $location)
                                                        <div class="location-container">
                                                            <div class="location-box">
                                                                <strong>Location {{ $index + 1 }}:</strong>
                                                                <p>{{ $location }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    @else
                                                    <div style="padding-left:50px;">--</div>
                                                    
                                                @endif
                                            @endif
                                        </div>
                                    </td>
                                    <td> <div class="max-content-display">{{ $draft->dropoff_location }}</div></td>
                                    <td>£{{ $draft->total_price }}</td>
                                    <td>{{ formatDate($draft->booking_date) }}</td>
                                    <td>{{ foramtTime($draft->booking_time) }}</td>
                                    <td>
                                        <span class="badge badge-danger">Cancel</span>     
                                    </td> 
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="11" class="text-center">No Records Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $confirmbookings->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <style>
        .filters-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-item {
            flex: 0 0 150px;
        }

        .filter-item label {
            display: block;
            margin-bottom: 5px;
        }
        td {
    font-size: 14px;
}

        .filter-item input,
        .filter-item select {
            width: 100%;
        }

        .filter-item button {
            width: 100%;
        }

        @media (max-width: 350px) {
            .filter-item {
                flex: 1 1 100%;
            }

            .filter-item button {
                margin-top: 10px;
            }
        }
    </style>
@endsection