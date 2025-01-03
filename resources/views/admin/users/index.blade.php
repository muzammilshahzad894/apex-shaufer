@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column mb-4">
        <h3 class="mb-3">Accepted Bookings</h3>
        <!-- Filters -->
        <div class="filter">
            <form action="{{ route('admin.confirm.index') }}" method="GET">
                <div class="filters-container">
                    <div class="filter-item">
                        <label for="date">From Date</label>
                        <input type="date" name="from_date" id="date" class="form-control" value="{{ request()->from_date }}">
                    </div>
                    <div class="filter-item">
                        <label for="date">To Date</label>
                        <input type="date" name="to_date" id="date" class="form-control" value="{{ request()->to_date }}">
                    </div>
                    <div class="filter-item">
                        <label for="from_time">From Time</label>
                        <input type="time" name="from_time" id="from_time" class="form-control" value="{{ request()->from_time }}">
                    </div>
                    <div class="filter-item">
                        <label for="to_time">To Time</label>
                        <input type="time" name="to_time" id="to_time" class="form-control" value="{{ request()->to_time }}">
                    </div>
                    {{-- <div class="filter-item">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" selected>Select Status</option>
                           <option value="0" {{ request()->status == 0 ? 'selected' : '' }}>Confirmed</option>
                            <option value="2" {{ request()->status == 2 ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div> --}}
                    <div class="filter-item">
                        <label for="sort">Sort</label>
                        <select name="sort" id="sort" class="form-control">
                            <option value="asc" {{ request()->sort != 'desc' ? 'selected' : '' }}>Ascending</option>
                            <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <button type="submit" class="btn btn-primary mt-4">Filter</button>
                    </div>
                </div>
            </form>
        </div>
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
                            <th>Service </th>
                            <th>Fleet </th>
                            <th>Pickup </th>
                            <th class="max-content-display">Via Locations</th>
                            <th>DropOff </th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($draftUsers->count())
                            @foreach($draftUsers as $draft)
                                <tr>
                                    <td>{{ $draft->name }}</td>
                                    <td>{{ $draft->email }}</td>
                                    <td>{{ $draft->phone_number }}</td>
                                    <td>
                                        {{ $draft->service->name ?? 'No Service Assigned' }}
                                    </td>
                                    <td>
                                        {{ $draft->fleet->name ?? 'No Fleet Assigned' }}
                                    </td>
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
                                       @if($draft->is_draft == 1)
                                            <span class="badge badge-warning">Draft</span>
                                        @elseif($draft->is_draft == 0)
                                            <span class="badge badge-primary">Pending</span>
                                        @elseif($draft->is_draft == 2)
                                            <span class="badge badge-danger">Cancelled</span>
                                        @endif
                                    </td>
                                 
                                    <td class="text-nowrap">
                                        <div class="btn-group" role="group" aria-label="Action Buttons">
                                            <form action="{{ route('admin.confirm.complete', $draft->id) }}" method="POST">
                                                @csrf
                                                <button type="submit"  class="btn btn-success btn-sm">Complete</button>
                                            </form>
                                             
                                        </div>
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
                {{ $draftUsers->links() }}
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