@extends('layouts.frontend.app')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->


<style>
    .icon_text{
        display: flex;
        gap: 5px;
    }
    #submit{
    padding: 10px 30px;
    background: #dec151;
    border: none;
    color: white;
    }
    .form-control {
        padding: 12px !important;
    }
    .alert-success{
        background: green !important;
        color: white !important;
    }
    .design_style{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    .description{
        font-size: 17px !important;
        font-weight: 500 !important;
    }
    .custom_lable{
        color: black;
        margin-bottom: 5px;
    }
    .form-control:focus, .form-control.filled{
        border-color: #f0dd94 !important;
       
    }
    .google-map {
        width: 100%;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        height: 475px;
        overflow: hidden;
        border-radius: 20px;
    }

    .color_theme {
        color: #dec151 !important;
    }
</style>

@php
    $distance = 1;
    $totalPrice = 0;

@endphp



@section('content')
    <section class="banner-header section-padding bg-img" data-overlay-dark="4"
        data-background="{{ asset('frontend-assets/img/slider/quote.webp') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row design_style">
                    <div class="col-lg-8 col-md-12 mt-30" style="background: rgb(0 0 0 / 42%);padding-bottom:20px;">
                        <div class="post-wrapper">
                        </div>
                        <h1 style="color: #ffe079">Request a Quote</h1>
                        <p class="description" style="color: white; line-height: 25px;">Get a personalized quotation for our 24-hour chauffeur hire service in Bristol and across the UK. Simply provide your details, and one of our representatives will reach out to you promptly with tailored pricing information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="post section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>


        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
            <div class="row payment_section">
                <div class="col-md-8">
                    <h3 class="color color_theme mb-3">Get a Quote</h3>
                    <form action="{{ route('frontend.getquotePost') }}" method="POST" id="booking_form">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="fullname">NAME *</label>
                            <input name="fullname" type="text" value="{{ old('fullname') }}" class="form-control" placeholder="Full Name">
                            @if ($errors->has('fullname'))
                                <span class="text-danger">{{ $errors->first('fullname') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="email">Email *</label>
                            <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="phone">TELEPHONE *</label>
                            <input name="phone" type="text" value="{{ old('phone') }}" class="form-control" placeholder="Telephone">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="date">COLLECTION DATE *</label>
                            <input name="date" type="datetime-local" value="" id="date-time" class="form-control   border-radius-0 mb-0" placeholder="Date">
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="fleet_id">FLEET *</label>
                            <select name="fleet_id" id="fleet_id" class="form-control styled-input border-radius-0 mb-0 select select2">
                                <option value="">Select Fleet</option>
                                @foreach ($fleets as $service)
                                    <option value="{{ $service->id }}" {{ old('fleet_id') == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('fleet_id'))
                                <span class="text-danger">{{ $errors->first('fleet_id') }}</span>
                            @endif
                        </div>
                        
                        @php
                            $id = request('id');
                        @endphp
                        <div class="col-md-12 mb-3">
                            <label for="service_id">SERVICE</label>
                            <select name="service_id" id="service_id" class="form-control styled-input border-radius-0 mb-0 select select2">
                                <option value="">Select Service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ old('service_id') == $service->id || ($id && $id == $service->id) ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('service_id'))
                                <span class="text-danger">{{ $errors->first('service_id') }}</span>
                            @endif
                        </div>
                        
                        <h3 class="color color_theme mb-3">COLLECTION ADDRESS</h3>
                        
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="pickup">ADDRESS *</label>
                            <input name="pickup" type="text" value="{{ old('pickup') }}" class="form-control" placeholder="Collection Address">
                            @if ($errors->has('pickup'))
                                <span class="text-danger">{{ $errors->first('pickup') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="pickup_postal_code">POSTCODE *</label>
                            <input name="pickup_postal_code" type="text" value="{{ old('pickup_postal_code') }}" class="form-control" placeholder="Postcode">
                            @if ($errors->has('pickup_postal_code'))
                                <span class="text-danger">{{ $errors->first('pickup_postal_code') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="pickup_city">TOWN / CITY *</label>
                            <input name="pickup_city" type="text" value="{{ old('pickup_city') }}" class="form-control" placeholder="TOWN / CITY">
                            @if ($errors->has('pickup_city'))
                                <span class="text-danger">{{ $errors->first('pickup_city') }}</span>
                            @endif
                        </div>

                        <h3 class="color color_theme mb-3">DESTINATION ADDRESS</h3>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="dropoff">ADDRESS LINE 1 *</label>
                            <input name="dropoff" type="text" value="{{ old('dropoff') }}" class="form-control" placeholder="Destination Address">
                            @if ($errors->has('dropoff'))
                                <span class="text-danger">{{ $errors->first('dropoff') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="dropoff_postal_code">POSTCODE *</label>
                            <input name="dropoff_postal_code" type="text" value="{{ old('dropoff_postal_code') }}" class="form-control" placeholder="Postcode">
                            @if ($errors->has('dropoff_postal_code'))
                                <span class="text-danger">{{ $errors->first('dropoff_postal_code') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="dropoff_city">TOWN / CITY *</label>
                            <input name="dropoff_city" type="text" value="{{ old('dropoff_city') }}" class="form-control" placeholder="TOWN / CITY">
                            @if ($errors->has('dropoff_city'))
                                <span class="text-danger">{{ $errors->first('dropoff_city') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="custom_lable" for="return_journey">DO YOU REQUIRE A RETURN JOURNEY? *</label>
                            <select name="return_journey" id="return_journey" class="form-control">
                                <option value="">-- Please choose an option --</option>
                                <option value="0" {{ old('return_journey') == '0' ? 'selected' : '' }}>No</option>
                                <option value="1" {{ old('return_journey') == '1' ? 'selected' : '' }}>Yes</option>
                            </select>
                            @if ($errors->has('return_journey'))
                                <span class="text-danger">{{ $errors->first('return_journey') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label class="custom_lable" for="comment">COMMENTS AND FURTHER REQUIREMENTS</label>
                            <textarea name="comment" class="form-control" placeholder="via addresses, waiting time or any additional information." rows="5">{{ old('comment') }}</textarea>
                            @if ($errors->has('comment'))
                                <span class="text-danger">{{ $errors->first('comment') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <button class="button-1 mt-15 mb-15 cutom_button" id="submit">REQUEST A QUOTE</button>
                        </div>
                    </form>

                </div>
                <div class="col-md-4" style="border-left: 1px solid #ccc;background:#ead58e;">

                    <h3 class="color mb-2" style="padding: 10px;">Location</h3>
                    
                    <div class="google-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24301.0311484067!2d-2.6174498609618677!3d51.45451443765247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48719c1653d8c9a9%3A0xb47bdb0a605f0a0!2sBristol%2C%20UK!5e0!3m2!1sen!2s!4v1605382028827!5m2!1sen!2s"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                    <div style="padding: 10px;margin-top:10px">
                        <h5 class="color">All classes include:</h5>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-check"></i>
                            <p>
                                Free registration.
                            </p>
                        </div>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-check"></i>
                            <p>
                                Free cancellation up to 24 hours before your scheduled pick-up.
                            </p>
                        </div>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-check"></i>
                            <p>
                                Enjoy complimentary 1 hour waiting time for airport pickups.
                            </p>
                        </div>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-check"></i>
                            <p>
                                Luggage assistance.
                            </p>
                        </div>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-check"></i>
                            <p>
                                Complimentary 15 min waiting period at all other pickups.
                            </p>
                        </div>
                    </div>
                    <div style="padding: 10px;margin-top:10px">
                        <h5 class="color">Please Note:</h5>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-exclamation"></i>
                            <p>
                                Guest/laggage capacities must be abided by for safety reasons. if you are unsure select a
                                large class as driver may turn down service when they are exceeded.
                            </p>
                        </div>
                        <div class="icon_text mt-3">
                            <i class="fa-solid fa-exclamation"></i>
                            <p>
                                The vehicle images above are examples.You may get a different vehicle of the similar quality.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Alert</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div id="countdown">
                            <h4 id="message">Booking block for this day please contact to the support!</h4>
                            <div id="first_url " class="modal_style_p">
                                <p id="client_url"></p>
                                <button class="view_details" id="copy_btn" onclick="copyToClipboard()">Copy</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const url = new URL(window.location.href);
            const source = url.searchParams.get('source');
            var element = document.getElementById('request_by_admin');
            var element1 = document.getElementById('payment_section_main');
            if (source == 'get_a_quote') {
                element.style.display = 'block';
                element1.style.display = 'none';
            } else {
                element.style.display = 'none';
                element1.style.display = 'block';
            }
        });
    </script>
    <script>
        document.getElementById('date-time').addEventListener('click', function() {
            this.showPicker(); // Opens the native datetime picker
        });
    </script>
   <script>
    flatpickr("#date-time", {
        enableTime: true,
        dateFormat: "Y-m-d\\TH:i",
        time_24hr: false,
        minDate: "today" // Disables all previous dates
    });
</script>
    {{-- @include('frontend.booking.style-css') --}}
@endsection

@section('scripts')
@endsection
