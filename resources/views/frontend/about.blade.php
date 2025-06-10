@extends('layouts.frontend.app')
<style>
    .about-us.section-padding{
        background: rgb(0 0 0 / 4%);
    }
    .section-padding {
        padding: 70px 0px 0px 0px;
    }

    .home_heading {
        font-size: 60px;
    }

    .banner-header {
        min-height: 520px;
        
    }

    .offer_img {
        height: 300px;
        max-width: 450px !important;

    }

    .img-fluid {
        height: 450px !important;

    }

    .padding-top {
        margin-top: 4.5rem !important;
    }

    .inner-title {
        font-weight: bold;
        color: #d5b941;
        font-size: 17px;
    }

    @media (max-width: 767px) {
        .mobile_screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .home_heading {
            font-size: 40px;
        }

        .order_1 {
            order: 2 !important;
        }

        .order_2 {
            order: 1 !important;
        }
    }
    /* Base styles for both title and subtitle */
    .section-title{
        display:flex;
        align-items: center;
    }
.custom-title, .custom-subtitle {
    padding: 10px 45px;
    font-size: 18px;
}

/* Title-specific styles */
.custom-title {
    clip-path: polygon(0% 0, 100% 0, 87% 100%, 0% 100%);
    background: #d5b941;
    color: white;
}

/* Subtitle-specific styles */
.custom-subtitle {
    clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    background: black;
    color: wheat;
    margin-left: -50px;
}

/* Media query for small screens */
@media (max-width: 768px) {
    .custom-title, .custom-subtitle {
        font-size: 14px; /* Reduce font size */
        padding: 10px 44px 10px 10px; /* Adjust padding */
    }
}
._padding{
    padding: 20px;
}
.section-subtitle {
    font-size: 10px;
    line-height: 10px;
    font-family: 'Outfit', sans-serif;
    font-weight: 300;
    color: #d5b941;
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
    z-index: 1;
    text-transform: uppercase;
    letter-spacing: 6px;
}
.section-subtitle.white {
    color: black;
}
.section-title {
    font-size: 35px;
    font-family: 'Outfit', sans-serif;
    color: black;
    position: relative;
    margin-bottom: 15px;
    line-height: 1.25em;
    font-weight: 700;
}
[data-overlay-dark] .section-title span,
.section-title span {
    color: #d5b941;
}
.section-title.white {
    color: black;
}
.section-title.black {
    color: #1b1b1b;
}
.list-icon{
    padding: 10px;
    background: #d5b941;
    color: white;
    border-radius: 50px;
    font-size: 14px
}
.list-unstyled li{
    display:flex;
    align-items:center;
    gap:9px;
}
.bg-how-it-works{
    background-color: #916430 !important;
}
.home_heading{
    background: rgb(255 165 0 / 30%);
    font-size: 42px;
    padding: 0 30px;
    color: white;
    clip-path: polygon(15% 0, 100% 0, 85% 100%, 0% 100%);
}
</style>

@section('content')
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="4"
        data-background="{{ asset('frontend-assets/img/slider/aboutus.png') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-12 mobile_screen">
                    <h1>About <span>Us</span></h1>
                </div> --}}


                    <div class="col-md-12 text-center " style="">
                        <h1 style="" class="home_heading">About Us </h1>
                        <!-- <p class="home_p" style="max-width: 600px; margin: 0 auto; color:#ffc107;">
                                Your premier pre-booking platform for reliable taxi services in Bristol, UK. Enjoy seamless
                                travel from airport transfers to city tours. Book now for stress-free journeys!
                            </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us section-padding">
        <div class="container">
            <div class="row">
                <div class="section-subtitle"></div>
                <h4 class="section-title">
                    <div class="custom-title">
                    Apex Executive Cars

                    </div>
                    <span class="custom-subtitle">
                    Luxury Chauffeur Hire Services 
                    </span>
                </h4>
                <p class="_padding">
                Exceptional Chauffeur Hire and Airport Transfer services for Corporate Clients and Private individuals in Bristol and surrounding areas.
                </p>
            </div>
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="">
                            <div class="" style="width:100%; justify-content:center; padding:20px 0px">
                                <h4 class="section-title">
                                    <div class="custom-title">
                                    About Apex Executive 
                                    </div>
                                    <span class="custom-subtitle">
                                    Cars
                                    </span>
                                </h4>
                            </div>
                            <div class="section-text">
                                <p class="highlight">At Apex Executive Cars, we pride ourselves on delivering a premium chauffeur-driven experience defined by luxury, professionalism, and reliability. Our impressive fleet features some of the finest executive vehicles on the market, including the Mercedes E-Class, Mercedes S-Class, BMW 7 Series and the spacious Mercedes V-Class, all meticulously maintained to ensure the highest standards of comfort, safety, and style. Whether you’re traveling for business or leisure, our experienced chauffeurs are dedicated to making every journey smooth, punctual, and memorable.</p>
                                <br>
                                <p class="highlight">
                                    <span class="inner-title">Founded in 2024, </span>Apex Executive Cars was created to cater to the growing demand for high-end transportation services. Starting with a small but select fleet, our vision was to provide clients with a first-class travel experience that combines sophistication, efficiency, and exceptional customer service. Over the years, we’ve grown steadily, adding more luxury vehicles to our lineup to meet the evolving needs of our clients. Today, we are proud to offer a diverse fleet that caters to individuals, groups, corporate clients, and special occasions alike.
                                </p>
                                <br>
                                <p>Our services are tailored to meet the varied needs of our clients, including Executive Transfers for Corporate Professionals, reliable Airport Transfers to ensure stress-free travel, Private Chauffeur Hire for Leisure Trips and Special Occasions, Event Transportation for Weddings and VIP functions, and City-To-City Transfers designed for comfort and efficiency. No matter the purpose of your journey, we are committed to delivering a seamless, luxurious, and highly personalized experience.</p>
                                <br>
                                <p>From the refined elegance of the Mercedes S-Class, ideal for executive or VIP travel, to the spacious versatility of the Mercedes V-Class for family or group journeys, every vehicle in our fleet is maintained to the highest standards, offering plush interiors, advanced technology, and unrivaled comfort. Our chauffeurs are experienced professionals who combine exceptional driving expertise with the utmost discretion and attention to detail, ensuring an unparalleled travel experience.</p>
                                <br>
                                <p>Whether you’re planning a Business Trip, attending an Event, or simply want to travel in luxury, Apex Executive Cars is your trusted partner in delivering sophisticated, reliable, and memorable chauffeur-driven transportation. Book your next journey with us and experience the difference.
                                </p>
                                
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="d-flex text-center" style="width:100%; justify-content:center; padding:20px 0px">
                    <h4 class="section-title">
                        <div class="custom-title">
                            Services
                        </div>
                        <span class="custom-subtitle">
                            Offered
                        </span>
                    </h4>
                </div>

                <!-- Desktop version -->
                <div class="row d-none d-lg-flex">
                    @php $counter = 0; @endphp
                    @foreach ($services as $service)
                        @if ($counter % 2 == 0)
                            <!-- Normal order -->
                            <div class="col-lg-6 col-md-12 mb-30 mt-2">
                                <div class="content">
                                    <div class="section-subtitle">{{ $service->detail_page_tag }}</div>
                                    <div class="section-title">{{ $service->detail_page_first_heading }}
                                        <span>{{ $service->detail_page_second_heading }}</span>
                                    </div>
                                    <p class="mb-30">{{ $service->detail_page_description }}</p>
                                    <ul class="list-unstyled list mb-30">
                                        @foreach (explode(',', $service->detail_page_features) as $feature)
                                            <li>
                                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                                <div class="list-text">
                                                    <p>{{ $feature }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-12 mt-2">
                                <div class="item">
                                    <img src="{{ asset('uploads/services/' . $service->image) }}" alt="about"
                                        class="img-fluid">
                                </div>
                            </div>
                        @else
                            <!-- Reversed order -->
                            <div class="col-lg-5 col-md-12 mb-30 mt-2">
                                <div class="item">
                                    <img src="{{ asset('uploads/services/' . $service->image) }}" alt="about"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-md-12 mt-2">
                                <div class="content">

                                    <div class="section-subtitle">{{ $service->detail_page_tag }}</div>
                                    <div class="section-title">{{ $service->detail_page_first_heading }}
                                        <span>{{ $service->detail_page_second_heading }}</span>
                                    </div>
                                    <p class="mb-30">{{ $service->detail_page_description }}</p>
                                    <ul class="list-unstyled list mb-30">
                                        @foreach (explode(',', $service->detail_page_features) as $feature)
                                            <li>
                                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                                <div class="list-text">
                                                    <p>{{ $feature }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @php $counter++; @endphp
                    @endforeach
                </div>
                <!-- Mobile version -->
                <div class="row d-lg-none">
                    @foreach ($services as $service)
                        <!-- Normal order for all items -->
                        <div class="col-md-12 mb-30 mt-2">
                            <div class="content">
                                <div class="section-title">{{ $service->detail_page_first_heading }}
                                    <span>{{ $service->detail_page_second_heading }}</span>
                                </div>
                                <p class="mb-30">{{ $service->detail_page_description }}</p>
                                <ul class="list-unstyled list mb-30">
                                    @foreach (explode(',', $service->detail_page_features) as $feature)
                                        <li>
                                            <div class="list-icon"> <span class="ti-check"></span> </div>
                                            <div class="list-text">
                                                <p>{{ $feature }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="item">
                                <img src="{{ asset('uploads/services/' . $service->image) }}" alt="about"
                                    class="img-fluid">
                            </div>
                        </div>
                    @endforeach
                </div>

                <section class="section mt-40">
                    <div class="container-sub">
                        <div class="row align-items-center">
                            <div class="text-center mb-5">
                                <h2 class="fw-bold">Booking Process</h2>
                            </div>
                        </div>
                        <div class="row mt-50 cardIconStyleCircle">
                            <div class="col-lg-4">
                                <div class="cardIconTitleDesc wow fadeInUp">
                                    <div class="mb-3 d-flex justify-content-center booking-process-step">
                                        <i class="fa fa-calendar-alt fa-3x booking-process-icon d-flex justify-content-center align-items-center"></i>
                                    </div>
                                    <div class="cardTitle">
                                        <h5 class="text-20-medium color-text">Book Online or Get a Quote</h5>
                                    </div>
                                    <div class="cardDesc">
                                        <p class="text-16 color-text">Make your booking online or request a quote through our user-friendly website, ensuring safe payments, data protection, and customer safety.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cardIconTitleDesc wow fadeInUp">
                                    <div class="mb-3 d-flex justify-content-center booking-process-step">
                                        <i class="fa fa-car fa-3x booking-process-icon d-flex justify-content-center align-items-center"></i>
                                    </div>
                                    <div class="cardTitle">
                                        <h5 class="text-20-medium color-text">Choose Your Vehicle</h5>
                                    </div>
                                    <div class="cardDesc">
                                        <p class="text-16 color-text">Explore Apex Cabbie’s diverse fleet and service options for a seamless and enjoyable ride.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cardIconTitleDesc wow fadeInUp">
                                    <div class="mb-3 d-flex justify-content-center booking-process-step">
                                        <i class="far fa-smile fa-3x booking-process-icon d-flex justify-content-center align-items-center"></i>
                                    </div>
                                    <div class="cardTitle">
                                        <h5 class="text-20-medium color-text">Enjoy Your Ride</h5>
                                    </div>
                                    <div class="cardDesc">
                                        <p class="text-16 color-text">Experience each journey with Apex Cabbie, where our skilled drivers guarantee a smooth and secure ride.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                {{-- <div class="d-flex text-center" style="width:100%; justify-content:center; padding:20px 0px">
                    <h4 class="section-title">Why Choose <span>Us</span></h4>
                </div>

                <div class="col-md-6 order_2">
                    <div class="section-subtitle"></div>
                    <h4 class="section-title">Competitive <span>Rates:</span></h4>
                    <p>We offer competitive rates without compromising on the quality of service, making transportation
                        accessible for all budgets.
                    </p>
                </div>
                <div class="col-md-6 order_2">
                    <div class="item">
                        <img src="{{ asset('frontend-assets/img/about/competitive-rates1.jpg') }}" alt="about"
                            style="max-height:  300px !important;" class="img-fluid offer_img">
                    </div>
                </div>
                <div class="col-md-6 padding-top  order_1">
                    <div class="item">
                        <img src="{{ asset('frontend-assets/img/about/professional-staff.jpg') }}" alt="about"
                            style="max-height:  300px !important;" class="img-fluid offer_img">
                    </div>
                </div>

                <div class="col-md-6 padding-top order_2">
                    <div class="section-subtitle"></div>
                    <h4 class="section-title">Highly Professional <span>Staff:</span></h4>
                    <p> Our team of experienced drivers undergo rigorous training and background checks to ensure
                        professionalism, courtesy, and safety at all times.
                    </p>
                </div>
                <div class="col-md-6 padding-top order_1">
                    <div class="section-subtitle"></div>
                    <h4 class="section-title">24/7 <span>Availability:</span></h4>
                    <p>Our services are available 24/7, ensuring they are delivered whenever you need them. For any
                        inquiries, you can contact us via phone during our business hours, which vary according to our
                        opening times. Outside of these hours, feel free to send us an email or message for assistance.
                    </p>
                </div>
                <div class="col-md-6 padding-top  order_2">
                    <div class="item">
                        <img src="{{ asset('frontend-assets/img/about/247.jpeg') }}" alt="about"
                            style="max-height:  300px !important;" class="img-fluid offer_img">
                    </div>
                </div>
                <div class="col-md-6 padding-top order_1">
                    <div class="item">
                        <img src="{{ asset('frontend-assets/img/about/booking.jpg') }}" alt="about"
                            style="max-height:  300px !important;" class="img-fluid offer_img">
                    </div>
                </div>
                <div class="col-md-6 padding-top order_2">
                    <div class="section-subtitle"></div>
                    <h4 class="section-title">Easy Booking <span> Process:</span></h4>
                    <p>With our user-friendly booking platform, you can reserve your ride in advance with just a few clicks,
                        eliminating the hassle of last-minute arrangements.
                    </p>
                    <p>Experience the ultimate convenience and comfort in transportation with our pre-booking cab service.
                        Book your ride today and let us take you wherever you need to go in style and confidence.
                    </p>
                </div> --}}
            </div>
        </div>
    </section>
    <style>
        .first-footer {
            padding: 0px !important;
        }

        @media (max-width: 767px) {

            .section-title {
                font-size: 19px;
            }
        }
    </style>
@endsection
