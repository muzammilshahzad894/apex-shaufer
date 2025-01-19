@extends('layouts.frontend.app')
<style>
    .box-banner-info {
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        background: rgb(0 0 0 / 50%);
        padding-top: 30px;
    }

    .getaquote{
        display: flex;
        justify-content: center;
    }
    .getaquote a{
        padding: 20px 40px;
        background: #fcd852;
        border: none;
        color: white;
    }
    .box-banner-info p {
        font-size: 40px;
        color: #caac68 !important;
    }

    .box-banner-info h2 p {
        font-size: 24px !important;
        color: white !important;
    }

    .box-banner-info h2 {
        font-size: 44px !important;
        line-height: 42px !important;
        padding-top: 20px;
    }

    .cardService .cardImage {
        height: 350px !important;
    }

    .slick-active h4 {
        color: #e4d088 !important;
    }

    @media (min-width: 320px) and (max-width: 750px) {
        .box-banner-info p {
            font-size: 20px;
        }

        .box-banner-info h2 {
            font-size: 20px !important;
            line-height: 28px !important;
            padding-top: 6px;
        }

        .box-banner-info h2 p {
            font-size: 12px !important;
        }

        .box-cover-image {
            background-size: cover;
            /* Ensures the image covers the area while maintaining its aspect ratio */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
            width: 100%;
            /* Makes the width of the image full-screen */
            height: 400px !important;
            /* Default height */
        }

    }
</style>
@section('content')
    <main class="main">
        <section class="section banner-home1">
            <div class="box-swiper">
                <div class="swiper-container swiper-banner-1 pb-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            {{-- {{ asset('frontend-assets/ --}}
                            {{-- <div class="box-cover-image" style="background-image:url(assets/imgs/page/homepage1/banner.png)"> --}}
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner.png') }})">

                            </div>
                            <div class="box-banner-info">
                                <p class="wow fadeInUp">Apex Executive Cars</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Luxury Chauffeur Hire Services <p>
                                        Exceptional chauffeur hire and airport transfer services for corporate clients and
                                        private individuals in Bristol and surrounding areas.</p>
                                </h2>
                                <div class="getaquote">
                                    <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner2.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="wow fadeInUp">Apex Executive Cars</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Luxury Chauffeur Hire Services <p>
                                        Exceptional chauffeur hire and airport transfer services for corporate clients and
                                        private individuals in Bristol and surrounding areas.</p>
                                </h2>
                                <div class="getaquote">
                                    <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner3.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="wow fadeInUp">Apex Executive Cars</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Luxury Chauffeur Hire Services <p>
                                        Exceptional chauffeur hire and airport transfer services for corporate clients and
                                        private individuals in Bristol and surrounding areas.</p>
                                </h2>
                                <div class="getaquote">
                                    <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner4.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="wow fadeInUp">Apex Executive Cars</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Luxury Chauffeur Hire Services <p>
                                        Exceptional chauffeur hire and airport transfer services for corporate clients and
                                        private individuals in Bristol and surrounding areas.</p>
                                </h2>
                                <div class="getaquote">
                                    <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box-cover-image"
                            style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner5.png') }})">
                        </div>
                        <div class="box-banner-info">
                            <p class="wow fadeInUp">Apex Executive Cars</p>
                            <h2 class="heading-52-medium color-white wow fadeInUp">Luxury Chauffeur Hire Services<p>
                                    Exceptional chauffeur hire and airport transfer services for corporate clients and
                                    private individuals in Bristol and surrounding areas.</p>
                            </h2>
                            <div class="getaquote">
                                <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="box-pagination-button">
                        <div class="swiper-button-prev swiper-button-prev-banner"></div>
                        <div class="swiper-button-next swiper-button-next-banner"></div>
                        <div class="swiper-pagination swiper-pagination-banner"></div>
                    </div> --}}
            </div>
            </div>
        </section>

        <section class="section pt-120 pb-120 bg-our-fleet">
            <div class="container-sub">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12 d-flex align-items-center">
                        <h2 class="heading-44-medium title-fleet wow fadeInUp">Our Fleet</h2>
                    </div>
                </div>
            </div>
            <div class="box-slide-fleet mt-50">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4-fleet pb-0">
                        <div class="swiper-wrapper">
                            @if ($fleets->count() > 0)
                                @foreach ($fleets as $fleet)
                                    <div class="swiper-slide">
                                        <div class="cardFleet wow fadeInUp">
                                            <div class="cardImage mb-30"><a
                                                    href="{{ route('frontend.fleetDetailsFrontend', $fleet->id) }}"><img
                                                        style="height: 300px;"
                                                        src="{{ asset('uploads/fleets/' . $fleet->image) }}"
                                                        alt="Luxride"></a></div>
                                            <div class="cardInfo"><a
                                                    href="{{ route('frontend.fleetDetailsFrontend', $fleet->id) }}">
                                                    <h3 class="text-20-medium color-text mb-10">{{ $fleet->name }}</h3>
                                                </a>
                                                <p class="text-14 color-text mb-30  two-lines">
                                                    {{ $fleet->detail_page_description }}
                                                </p>
                                            </div>

                                            <div class="cardInfoBottom">
                                                <div class="passenger"><span class="icon-circle icon-passenger"></span><span
                                                        class="text-14">Passengers<span>{{ $fleet->max_passengers }}</span></span>
                                                </div>
                                                <div class="luggage"><span class="icon-circle icon-luggage"></span><span
                                                        class="text-14">Luggage<span>{{ $fleet->max_suitecases }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="box-pagination-fleet">
                            <div class="swiper-button-prev swiper-button-prev-fleet">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-next-fleet">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section  pb-20 bg-primary bg-how-it-works" style="padding-top: 30px;">
            <div class="container-sub">
                <h2 class="heading-44-medium color-white mb-60 wow fadeInUp">Reservation Steps </h2>
                <div class="row">
                    <div class="col-lg-6 order-lg-last">
                        <div class="box-main-slider">
                            <div class="detail-gallery wow fadeInUp">
                                <div class="main-image-slider">
                                    <figure><img src="{{ asset('frontend-assets/assets/imgs/page/homepage1/laptop.png') }}"
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
                                <h4 class="text-20-medium mb-20">Get A Quote</h4>
                                <p class="text-16">Select your destination, preferred time, and service type from our
                                    easy-to-use booking system.</p>
                            </li>
                            <li> <span class="line-white"></span>
                                <h4 class="text-20-medium mb-20">Choose Your Vehicle</h4>
                                <p class="text-16">Pick from our luxurious fleet to match your style and travel needs.
                                    Provide your contact details to proceed.</p>
                            </li>
                            <li> <span class="line-white"></span>
                                <h4 class="text-20-medium mb-20">Confirm Your Journey</h4>
                                <p class="text-16">Review your booking summary. Our team will contact you to finalize
                                    payment and confirm your ride. Sit back and enjoy the journey!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mt-110">
            <div class="container-sub">
                <div class="text-center">
                    <h2 class="heading-44-medium color-text wow fadeInUp">Why Choose Apex Executive Cars?</h2>
                </div>
                <div class="row mt-50 cardIconStyleCircle">
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/safe.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Luxury & Comfort</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">Experience first-class travel in our premium fleet of
                                    vehicles, designed for your utmost comfort and style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/price.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Professionalism You Can Trust</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">Our highly trained chauffeurs ensure punctual, safe, and
                                    seamless journeys tailored to your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/vehicle.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Personalized Service</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">From airport transfers to corporate events, we provide
                                    bespoke chauffeur solutions for every occasion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mb-30 mt-80 box-showcase">
            <div class="bg-showcase pt-100 pb-70">
                <div class="container-sub">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-30">
                            <h2 class="heading-44-medium color-white wow fadeInUp">Showcase some impressive numbers.</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row align-items-center">
                                <div class="col-4 mb-30 wow fadeInUp">
                                    <div class="box-number">
                                        <h2 class="heading-44-medium color-white">90</h2>
                                        <p class="text-20 text-center color-white">Vehicles</p>
                                    </div>
                                </div>
                                <div class="col-4 mb-30 wow fadeInUp">
                                    <div class="box-number">
                                        <h2 class="heading-44-medium color-white">97</h2>
                                        <p class="text-20 text-center  color-white">Awards</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12 mb-30 wow fadeInUp">
                                    <div class="box-number">
                                        <h2 class="heading-44-medium color-white">12K</h2>
                                        <p class="text-20 text-center color-white">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-90  bg-our-service">
            <div class="container-sub">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-7">
                        <h2 class="heading-44-medium title-fleet wow fadeInUp">Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="box-slide-fleet mt-50">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4-service pb-0">
                        <div class="swiper-wrapper">

                            @if ($services->count() > 0)
                                @foreach ($services as $service)
                                    <div class="swiper-slide">
                                        <div class="cardService wow fadeInUp">
                                            <div class="cardInfo">
                                                <h3 class="cardTitle text-20-medium color-white mb-10">
                                                    {{ $service->name }}</h3>
                                                <div class="box-inner-info">
                                                    <p class="cardDesc text-14 color-white mb-30 truncate">
                                                        {{ $service->short_description }}</p><a
                                                        class="cardLink btn btn-arrow-up"
                                                        href="{{ route('frontend.carDetails', $service->id) }}">
                                                        <svg class="icon-16" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" viewbox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                            <div class="cardImage"><img style="height: 270px;"
                                                    src="{{ asset('uploads/services/' . $service->image) }}"
                                                    alt="Luxride"></div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="box-pagination-fleet">
                            <div class="swiper-button-prev swiper-button-prev-fleet">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-next-fleet">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section  block-padding-100">
            <div class="box-fleet-padding bg-2 bg-testimonial">
                <div class="container-sub">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-30">
                            <h2 class="heading-44-medium color-text mb-30 wow fadeInUp" style="color: white !important;">
                                Why Our Clients Trust Apex Executive Cars
                            </h2>
                            <p class="text-16 color-text mb-30 wow fadeInUp" style="color: white !important;">At Apex
                                Executive Cars, we pride ourselves on providing exceptional service, luxurious vehicles, and
                                a seamless travel experience. But don't just take our word for it—here’s what some of our
                                satisfied customers have to say:</p>

                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="box-region-right wow fadeInUp">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-group-testimonials-2 pb-50">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="cardTestimonial">
                                                    <div class="cardAuthor mb-30">
                                                        <div class="box-author"> <img
                                                                src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png') }}"
                                                                alt="luxride">
                                                            <div class="author-info">
                                                                <div class="author-name text-18-medium color-text">Sarah M</div>
                                                                <p class="text-14 color-text desc-author">Business Transfers
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-testimonial">
                                                        <p class="color-text text-18-medium-2">I’ve used Apex Executive
                                                        The business transfer service was seamless! The vehicle was comfortable, and the driver was incredibly professional. I was able to prepare for my meeting while on the move, thanks to the stress-free ride. Highly recommend their services for anyone in need of reliable transportation!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cardTestimonial">
                                                    <div class="cardAuthor mb-30">
                                                        <div class="box-author"> <img
                                                                src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png') }}"
                                                                alt="luxride">
                                                            <div class="author-info">
                                                                <div class="author-name text-18-medium color-text">Hamza Tahir</div>
                                                                <p class="text-14 color-text desc-author">Event Transportation
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-testimonial">
                                                        <p class="color-text text-18-medium-2">I hired their service for event transportation, and it was the best decision! The vehicles were clean and spacious, and the drivers were courteous and punctual. Our guests arrived happy and on time!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cardTestimonial">
                                                    <div class="cardAuthor mb-30">
                                                        <div class="box-author"> <img
                                                                src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png') }}"
                                                                alt="luxride">
                                                            <div class="author-info">
                                                                <div class="author-name text-18-medium color-text">Jonathan
                                                                    Miller</div>
                                                                <p class="text-14 color-text desc-author">Airport Transfer
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-testimonial">
                                                        <p class="color-text text-18-medium-2">I’ve used Apex Executive
                                                            Cars for several business trips, and they always provide
                                                            top-notch service. The drivers are punctual, professional, and
                                                            the cars are always spotless. I wouldn’t trust anyone else for
                                                            my transportation needs.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cardTestimonial">
                                                    <div class="cardAuthor mb-30">
                                                        <div class="box-author"> <img
                                                                src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png') }}"
                                                                alt="luxride">
                                                            <div class="author-info">
                                                                <div class="author-name text-18-medium-2 color-text">David
                                                                    M.</div>
                                                                <p class="text-14 color-text desc-author">Private Transfer
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-testimonial">
                                                        <p class="color-text text-18-medium">From the moment I booked my
                                                            ride, everything was smooth and effortless. The chauffeur was
                                                            courteous, and the car was incredibly comfortable. I felt like a
                                                            VIP. I highly recommend Apex Executive Cars for any occasion!.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-pagination-button-testimonials-2">
                                            <div class="swiper-button-prev swiper-button-prev-testimonials-2"></div>
                                            <div class="swiper-button-next swiper-button-next-testimonials-2"></div>
                                            <div class="swiper-pagination swiper-pagination-testimonials-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-120 pb-120 bg-region">
            <div class="container-sub">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30">
                        <div class="box-gallery justify-content-center justify-content-lg-start">
                            <div class="gallery-1 wow fadeInUp"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/img1.png') }}"
                                    alt="luxride"></div>
                            <div class="gallery-2 wow fadeInUp"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/img2.png') }}"
                                    alt="luxride"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/img3.png') }}"
                                    alt="luxride"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="box-region-right wow fadeInUp">
                            <h2 class="heading-44-medium color-text mb-30">Excellence with Apex Executive Cars
                            </h2>
                            <p class="text-16 color-text mb-30">Book your premium chauffeur service today and enjoy luxury,
                                comfort, and reliability at every mile. From business trips to special events, our fleet and
                                expert chauffeurs are ready to elevate your journey.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-40 mb-30 bg-faqs">
            <div class="container-sub">
                <div class="box-faqs">
                    <div class="text-center">
                        <h2 class="color-brand-1 mb-20 wow fadeInUp">Frequently Asked Questions</h2>
                    </div>
                    <div class="mt-60 mb-40">
                        <div class="accordion wow fadeInUp" id="accordionFAQ">

                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-heading-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">What to Expect When Booking a Chauffeur Service with
                                        Apex Executive Cars?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseOne"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Expect punctuality, professionalism, and personalized care. When you book with Apex
                                        Executive Cars, your chauffeur will arrive 10-15 minutes ahead of your scheduled
                                        time. Dressed smartly and with a professional demeanor, your chauffeur will ensure a
                                        smooth and comfortable journey. They will assist with any luggage and open the door
                                        for you. In case of inclement weather, your chauffeur will offer an umbrella while
                                        escorting you to and from the car.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Are Your Chauffeurs Licensed?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yes, all of our chauffeurs are DBS checked and fully licensed by the relevant local
                                        authorities. In addition, each chauffeur’s vehicle is also licensed and compliant
                                        with local regulations, ensuring a safe and reliable service for every journey.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">What Type of Chauffeur Vehicles Do You Have?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                    We offer a premium fleet of Luxurious vehicles, including the Mercedes E-Class, S-Class, BMW 7 Series and Mercedes V-Class. All our chauffeur cars are meticulously maintained and serviced regularly to ensure the highest standards of comfort, safety, and luxury.
                                    </div>
                                </div>
                            </div>


                            <!-- Question 5 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">What Do Your Chauffeurs Wear?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Our chauffeurs are dressed in a professional uniform consisting of a dark suit,
                                        trousers, a white shirt, and a tie, ensuring a polished and sophisticated appearance
                                        for every journey.
                                    </div>
                                </div>
                            </div>



                            <!-- Question 7 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">Do Your Vehicles Have In-Car WiFi?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseSeven"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yes, all of our chauffeur cars are equipped with 4G WiFi. Simply ask your chauffeur
                                        for the details to stay connected during your journey.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 8 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingEight">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">Are There Refreshments in the Vehicle?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseEight"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yes, all our chauffeur cars are stocked with bottled mineral water. If you prefer a
                                        different refreshment, simply let us know, and we will do our best to accommodate
                                        your request.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 9 -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingNine">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">Where Will the Chauffeur Meet Me for My Return Airport
                                        Transfer?
                                    </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseNine" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        For your return airport transfer, your chauffeur will meet you in the arrivals hall,
                                        holding a sign with your name or your client’s name. If preferred, we can provide
                                        custom signboards featuring your company’s logo or name. Simply let us know your
                                        preference when booking.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
