@extends('layouts.admin.app')
<style>
    .container-fluid{
        height: 100vh;
    }
</style>
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row separate-row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="job-icon pb-4 d-flex justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <h2 class="mb-0 lh-1">{{ $todayPendingBookings }}</h2>
                                    </div>
                                    <span class="fs-14 d-block mb-2">Total Pending Bookings</span>
                                </div>
                                <i class="fa fa-car pending-bookings" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="job-icon pb-4 d-flex justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <h2 class="mb-0 lh-1">{{ $todayCompletedBookings }}</h2>
                                    </div>
                                    <span class="fs-14 d-block mb-2">Total Completed Rides</span>
                                </div>
                                <i class="fa fa-car completed-bookings" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        var activityBar1 = function(){
            var activity1 = document.getElementById("activity1");
            if (activity1 !== null) {
                activity1.height = 200;
                
                var config = {
                    type: "bar",
                    data: {
                        labels: [
                            "Completed Bookings",
                            "Pending Bookings",
                            "Inprogress Bookings",
                            "Refunded Bookings",
                            "Draft Bookings"
                        ],
                        datasets: [
                            {
                                label: "Bookings",
                                data: [{{ implode(',', $graphData) }}],
                                borderColor: 'var(--primary)',
                                borderWidth: "0",
                                barThickness:'60',
                                backgroundColor: '#F73A0B',
                                minBarLength: 10,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins:{
                            legend: false,
                        },
                        legend: {
                            display: false
                        },
                        scales: {
                            y: {
                                grid: {
                                    color: "rgba(233,236,255,0.5)",
                                    drawBorder: true
                                },
                                ticks: {
                                    fontColor: "#6E6E6E",
                                    max: 60,
                                    min: 0,
                                    stepSize: 20
                                },
                            },
                            x: {
                                barPercentage: 0.3,
                                
                                grid: {
                                    display: false,
                                    zeroLineColor: "transparent"
                                },
                                ticks: {
                                    stepSize: 20,
                                    fontColor: "#6E6E6E",
                                    fontFamily: "Nunito, sans-serif"
                                }
                            }
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false,
                            titleFontColor: "#888",
                            bodyFontColor: "#555",
                            titleFontSize: 12,
                            bodyFontSize: 15,
                            backgroundColor: "rgba(255,255,255,1)",
                            displayColors: true,
                            xPadding: 10,
                            yPadding: 7,
                            borderColor: "rgba(220, 220, 220, 1)",
                            borderWidth: 1,
                            caretSize: 6,
                            caretPadding: 10
                        }
                    }
                };

                var ctx = document.getElementById("activity1").getContext("2d");
                var myLine = new Chart(ctx, config);
            }
        }
    </script>
@endsection

@section('styles')
    <style>
        .pending-bookings {
            color: #F93A0B;
            font-size: xx-large;
        }
        .inprogress-bookings {
            color: #3385D6;
            font-size: xx-large;
        }
        .completed-bookings {
            color: #2ECC71;
            font-size: xx-large;
        }
        .card-header .form-control {
            height: 38px;
        }
        .card-header .btn-primary {
            height: 38px;
            line-height: 1.5;
        }
    </style>
@endsection