@extends('layouts.frontend.app')

<style>
    .hero-section {
        position: relative;
        background-image: url('{{ asset('frontend-assets/assets/imgs/page/homepage1/banner1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 90vh;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        color: #fff;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        padding: 60px 20px;
        animation: fadeUp 1.5s ease forwards;
        opacity: 0;
    }

    .hero-content h1 {
        font-size: 52px;
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 20px;
        color: #fcd852;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content p {
        font-size: 22px;
        line-height: 1.7;
        margin-bottom: 20px;
        font-weight: 400;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
    }

    .hero-content p:first-of-type {
        font-weight: 600;
        font-style: italic;
        font-size: 24px;
        margin-bottom: 10px;
        color: #ffffffcc;
    }

    .cta-button a {
        display: inline-block;
        background-color: #fcd852;
        color: #000;
        padding: 15px 35px;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        font-size: 16px;
        border-radius: 4px;
        transition: all 0.4s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .cta-button a:hover {
        background-color: #ffe370;
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
    }

    @keyframes fadeUp {
        0% {
            transform: translateY(40px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 36px;
        }

        .hero-content p {
            font-size: 16px;
        }

        .hero-content p:first-of-type {
            font-size: 18px;
        }

        .hero-section {
            height: 80vh;
        }
    }
    
    .img-fluid {
        width: 100%;
        height: 390px !important;
    }

    .cutom_button {
        width: 100%;
    }
    .section-padding {
        padding: 70px 0px 0px 0px;
    }

    label {
        display: block;
        color: white;
        font-family: emoji;
        font-size: 21px;
        /* margin-bottom: 5px; */
        margin-top: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: white;
    }

    .cutom_button {
        background-color: #d5b941;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 40px !important;
        margin-left: 10px;
    }

    .cutom_button:hover {
        background-color: #d5b941;
    }

    .header {
        height: 700px !important;
    }

    .view_details {
        color: white;
        background: #d5b941;
        border: none;
        padding: 5px 10px;
        border-radius: 10px;
        width: 120px;
        text-align: center;
        cursor: pointer;
    }

    .view_details:hover {
        background: #d5b941;
        color: wheat;
        cursor: pointer;
    }
    .service-tag {
        color: #d5b941;
        font-family: 'Outfit', sans-serif;
        font-size: 15px;
        font-weight: 300;
        line-height: 1.95em;
    }
    .swiper-slide {
        height: auto !important;
    }
    .swiper-container,
    .swiper-wrapper {
        height: auto !important;
    }
    .swiper-button-next-fleet, .swiper-button-prev-fleet {
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .booking-process-icon {
        height: 110px;
        width: 110px;
        border: 1px solid black;
        border-radius: 50%;
    }
    .booking-process-icon:hover {
        background-color: #d5b941;
        border: 1px solid #d5b941;
    }
    
    .review-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
    }

    .review-card:hover {
        transform: translateY(-5px);
    }
</style>

@section('content')
<main class="main">
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>APEX EXECUTIVE CARS</h1>
            <p>LUXURY CHAUFFEUR HIRE SERVICES</p>
            <p>Exceptional airport transfer and chauffeur services for corporate clients and private individuals across Bristol and surrounding areas.</p>
            <div class="cta-button">
                <a href="{{ route('frontend.getquote') }}">Get A Quote</a>
            </div>
        </div>
    </section>
    
    <section class="section pt-40">        
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Our Services</h2>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="box-slide-fleet mt-50">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4-fleet pb-0">
                        <div class="swiper-wrapper">
                            @if($services->count() > 0)
                            @foreach($services as $service)
                                    <div class="swiper-slide">
                                        <div class="cardFleet wow fadeInUp">
                                            <div class="cardImage mb-30"><img style="height: 250px;"
                                                src="{{ asset('uploads/services/'.$service->image) }}"
                                                alt="Luxride">
                                            </div>
                                            <div class="cardInfo">
                                                <h3 class="text-20-medium color-text mb-10">{{ $service->name }}</h3>
                                                <p class="service-tag mb-2">{{ $service->tag }}</p>
                                                <p class="text-14 color-text mb-30  two-lines">
                                                    {{ $service->short_description }}
                                                </p>
                                            </div>
                                        
                                            <div class="cardInfoBottom" style="justify-content: space-between">
                                                <a class="view_details" href="{{ route('frontend.carDetails', $service->id) }}">View Details</a>
                                                <a class="view_details" href="{{ route('frontend.getquote', ['id' => $service->id, 'name' => str_replace(' ', '-', $service->name)]) }}">Book Now</a>
                                            </div>
                                        
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="box-pagination-fleet mt-20 d-flex justify-content-start align-items-center">
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
        </div>
    </section>

    <section class="section pt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Our Fleet</h2>
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
                                                        style="height: 250px;"
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
                        <div class="box-pagination-fleet mt-20 d-flex justify-content-start align-items-center">
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
        </div>
    </section>
    
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
    
    <section class="section mt-40">        
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">What Clients Say</h2>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="box-slide-fleet mt-50 mb-60">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4-fleet pb-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/trustvoilet.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by C R</h5>
                                        <p class="text-muted mb-20">"The driver arrived at the airport early to ensure he was there waiting for us. Great communication, very clean and sleek car (with sweets), and very friendly. Safe, efficient driving and helpful throughout. A young company that truly prioritizes customer service — what a gift after a long flight! Will definitely use again."</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/trustvoilet.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by Becky Hawker</h5>
                                        <p class="text-muted mb-20">"Fast, reliable and very friendly service. I’ve used this company on numerous occasions, they have always been on time, with great communication. Would definitely recommend!"</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/trustvoilet.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by Richard Jarvis</h5>
                                        <p class="text-muted mb-20">"A return journey from the airport. Cabwise were on time and in a convenient meeting place. The driver kept me informed of where he was, which meant I could be on my way home quickly."</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/trustvoilet.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by Jamie Cahill</h5>
                                        <p class="text-muted mb-20">"Punctual, professional, and very welcoming! Have used multiple times and won’t use anyone else now."</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/yell.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by MisbahS-6</h5>
                                        <p class="text-muted mb-20">"I had an excellent experience with Apex Cabbie executive fleet. Booking was quick and hassle-free. On the day, a Mercedes E-Class arrived on time, offering a comfortable ride. Special thanks to the driver, Ali, for his professionalism and friendly service. Highly recommend!"</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pt-5">
                                <div class="card h-100 review-card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('frontend-assets/img/clients/google.jpeg') }}" alt="Client" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: contain;">
                                        </div>
                                        <h5 class="card-title font-weight-bold">Review by Sarah</h5>
                                        <p class="text-muted mb-20">"My experience was smooth and surpassed my expectations. The driver was professional and polite throughout the journey, ensuring we arrived at Heathrow with plenty of time to spare. If you’re looking for dependable, punctual, and comfortable transportation, I highly recommend Apex Cabbie."</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-pagination-fleet mt-20 d-flex justify-content-start align-items-center">
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
        </div>
    </section>
</main>
@endsection
