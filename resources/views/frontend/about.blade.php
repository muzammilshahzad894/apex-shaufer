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
        data-background="{{ asset('frontend-assets/img/slider/3.jpg') }}">
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
                        Pre-Booking Cab Service in Bristol
                    </div>
                    <span class="custom-subtitle">
                        Across the United Kingdom
                    </span>
                </h4>
                <p class="_padding">
                    Welcome to our premier pre-booking cab service, serving Bristol and cities across the United
                    Kingdom. We offer a range of transportation solutions tailored to your needs, ensuring comfort,
                    convenience, and reliability at affordable rates.
                </p>
            </div>
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="">
                            <div class="" style="width:100%; justify-content:center; padding:20px 0px">
                                <h4 class="section-title">
                                    <div class="custom-title">
                                        Our Story – The Family 
                                    </div>
                                    <span class="custom-subtitle">
                                        Business
                                    </span>
                                </h4>
                                {{-- <h4 class="section-title">Our Story – The Family <span> Business</span></h4> --}}
                            </div>
                            <div class="section-text">
                                <p class="highlight">At Bristol Cabwise, we pride ourselves on providing an exceptional door-to-door cab service focused on comfort, reliability, and customer satisfaction. Our fleet features a range of top-tier executive and comfort vehicles, all driven by experienced chauffeurs dedicated to ensuring each journey is smooth and enjoyable.</p>
                                
                                <p class="highlight">
                                    <span class="inner-title">Founded in 2022,</span> Bristol Cabwise was established with the goal of delivering premium transportation solutions tailored to the needs of professionals, tourists, local residents, and anyone seeking a dependable pre-booked cab service. Starting with a modest fleet, including a Mercedes E-Class, a Mercedes Vito, and a VW Transporter, we began with just two skilled drivers. From day one, our commitment to excellence was clear, as we strived to offer a safe, comfortable, and efficient travel experience for our clients.
                                </p>
                                
                                <p>Our unwavering dedication to quality quickly earned us the trust of our customers, leading to a steady increase in demand for our services. As a result, we've expanded both our fleet and team. Today, Bristol Cabwise operates a wide range of executive and comfort vehicles, all maintained to the highest standards to ensure safety, reliability, and comfort for our clients.</p>
                                
                                <p>We offer a comprehensive selection of services designed to meet the diverse needs of our clients. These include city-to-city transfers, airport pick-ups and drop-offs, private journeys, business transfers, and event transportation. We also specialize in bespoke services for private tours, corporate events, and special occasions. Whether you're traveling for business, leisure, or any other purpose, we have the perfect transportation solution for you.</p>
                                
                                <p>Our easy-to-use pre-booking system allows customers to secure their rides with just a few clicks, and our dedicated team is available around the clock to provide exceptional service. We offer competitive rates, without ever compromising on the quality of our service.</p>
                                
                                <p class="highlight">At Bristol Cabwise, our mission is to make every journey an enjoyable and memorable experience. We believe that transportation should be more than just getting from point A to point B – it should be something you look forward to. As we continue to grow, we remain committed to providing reliable, comfortable, and high-quality transportation services that our clients can trust.</p>
                                
                                <p>Book your ride with Bristol Cabwise today and discover the convenience, comfort, and reliability that has made us the preferred choice for many. Let us take you where you need to go, with confidence, comfort, and style.</p>
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

                <section class="section mt-20 pt-120 pb-20 bg-primary bg-how-it-works" >
                    <div class="container-sub">
                        <h2 class="heading-44-medium color-white mb-60 wow fadeInUp">How It Works</h2>
                        <div class="row">
                            <div class="col-lg-6 order-lg-last">
                                <div class="box-main-slider">
                                    <div class="detail-gallery wow fadeInUp">
                                        <div class="main-image-slider">
                                            <figure><img
                                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/laptop.png') }}"
                                                    alt="luxride"></figure>
                                            <figure><img
                                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/desktop.png') }}"
                                                    alt="luxride"></figure>
                                            <figure><img
                                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/desktop2.png') }}"
                                                    alt="luxride"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-first justify-content-between position-z3 wow fadeInUp">
                                <ul class="slider-nav-thumbnails list-how">
                                    <li> <span class="line-white"></span>
                                        <h4 class="text-20-medium mb-20">Create Your Route</h4>
                                        <p class="text-16">Enter your pickup & dropoff locations or the number of hours you
                                            wish to
                                            book a car and driver for</p>
                                    </li>
                                    <li> <span class="line-white"></span>
                                        <h4 class="text-20-medium mb-20">Choose Vehicle For You</h4>
                                        <p class="text-16">On the day of your ride, you will receive two email and SMS
                                            updates -
                                            one informing you that.</p>
                                    </li>
                                    <li> <span class="line-white"></span>
                                        <h4 class="text-20-medium mb-20">Enjoy The Journey</h4>
                                        <p class="text-16">After your ride has taken place, we would appreciate it if you
                                            could
                                            rate your car and driver.</p>
                                    </li>
                                </ul>
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
