@extends('layouts.frontend.app')

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
                                <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Your Personal <br
                                        class="d-none d-lg-block">Chauffeur Services</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner2.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Your Personal <br
                                        class="d-none d-lg-block">Chauffeur Services</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner3.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Your Personal <br
                                        class="d-none d-lg-block">Chauffeur Services</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner4.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Your Personal <br
                                        class="d-none d-lg-block">Chauffeur Services</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-cover-image"
                                style="background-image:url({{ asset('frontend-assets/assets/imgs/page/homepage1/banner5.png') }})">
                            </div>
                            <div class="box-banner-info">
                                <p class="text-16 color-white wow fadeInUp">Where Would You Like To Go?</p>
                                <h2 class="heading-52-medium color-white wow fadeInUp">Your Personal <br
                                        class="d-none d-lg-block">Chauffeur Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="box-pagination-button">
                        <div class="swiper-button-prev swiper-button-prev-banner"></div>
                        <div class="swiper-button-next swiper-button-next-banner"></div>
                        <div class="swiper-pagination swiper-pagination-banner"></div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="section pt-120 pb-120 bg-our-fleet">
            <div class="container-sub">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12 d-flex align-items-center">
                        <h2 class="heading-44-medium title-fleet wow fadeInUp">Our Fleet</h2>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-end"><a class="text-16-medium color-primary wow fadeInUp"
                            href="#">More Fleet
                            <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></a></div> --}}
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
                                            <div class="cardImage mb-30"><a href="{{ route('frontend.fleetDetailsFrontend', $fleet->id) }}"><img style="height: 300px;"
                                                src="{{ asset('uploads/fleets/' . $fleet->image) }}"
                                                alt="Luxride"></a></div>
                                            <div class="cardInfo"><a href="{{ route('frontend.fleetDetailsFrontend', $fleet->id) }}">
                                                    <h3 class="text-20-medium color-text mb-10">{{ $fleet->name }}</h3>
                                                </a>
                                                <p class="text-14 color-text mb-30  two-lines">
                                                    {{$fleet->detail_page_description}}
                                                </p>
                                            </div>
                                           
                                            <div class="cardInfoBottom">
                                                <div class="passenger"><span class="icon-circle icon-passenger"></span><span
                                                        class="text-14">Passengers<span>{{ $fleet->max_passengers }}</span></span></div>
                                                <div class="luggage"><span class="icon-circle icon-luggage"></span><span
                                                        class="text-14">Luggage<span>{{ $fleet->max_suitecases }}</span></span></div>
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
        <section class="section pt-120 pb-20 bg-primary bg-how-it-works" style="background-color: #916430 !important;">
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
                                <p class="text-16">Enter your pickup & dropoff locations or the number of hours you wish to
                                    book a car and driver for</p>
                            </li>
                            <li> <span class="line-white"></span>
                                <h4 class="text-20-medium mb-20">Choose Vehicle For You</h4>
                                <p class="text-16">On the day of your ride, you will receive two email and SMS updates -
                                    one informing you that.</p>
                            </li>
                            <li> <span class="line-white"></span>
                                <h4 class="text-20-medium mb-20">Enjoy The Journey</h4>
                                <p class="text-16">After your ride has taken place, we would appreciate it if you could
                                    rate your car and driver.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mt-110">
            <div class="container-sub">
                <div class="text-center">
                    <h2 class="heading-44-medium color-text wow fadeInUp">Make Your Trip Your Way With Us</h2>
                </div>
                <div class="row mt-50 cardIconStyleCircle">
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/safe.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Safety First</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">Both you and your shipments will travel with professional
                                    drivers. Always with the highest quality standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/price.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Prices With No Surprises</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">Both you and your shipments will travel with professional
                                    drivers. Always with the highest quality standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardIconTitleDesc wow fadeInUp">
                            <div class="cardIcon"><img
                                    src="{{ asset('frontend-assets/assets/imgs/page/homepage1/vehicle.svg') }}"
                                    alt="luxride"></div>
                            <div class="cardTitle">
                                <h5 class="text-20-medium color-text">Private Travel Solutions</h5>
                            </div>
                            <div class="cardDesc">
                                <p class="text-16 color-text">Both you and your shipments will travel with professional
                                    drivers. Always with the highest quality standards.</p>
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
        <section class="section pt-90 pb-120 bg-our-service">
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
                                            <h3 class="cardTitle text-20-medium color-white mb-10">{{$service->name}}</h3>
                                            <div class="box-inner-info">
                                                <p class="cardDesc text-14 color-white mb-30 truncate">{{ $service->short_description }}</p><a class="cardLink btn btn-arrow-up"
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
        <section class="section pt-120 block-padding-100">
            <div class="box-fleet-padding bg-2 bg-testimonial">
              <div class="container-sub"> 
                <div class="row align-items-center"> 
                  <div class="col-lg-6 mb-30">
                    <h2 class="heading-44-medium color-text mb-30 wow fadeInUp">Hear what our amazing customers say</h2>
                    <p class="text-16 color-text mb-30 wow fadeInUp">We provide exceptional service to our valued clients, ensuring satisfaction and quality with every interaction.</p>
                   
                  </div>
                  <div class="col-lg-6 mb-30">
                    <div class="box-region-right wow fadeInUp">
                      <div class="box-swiper"> 
                        <div class="swiper-container swiper-group-testimonials-2 pb-50">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide"> 
                              <div class="cardTestimonial">
                                <div class="cardAuthor mb-30"> 
                                  <div class="box-author"> <img src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png')}}" alt="luxride">
                                    <div class="author-info">
                                      <div class="author-name text-18-medium color-text">Jonathan Miller</div>
                                      <p class="text-14 color-text desc-author">Web Developer</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="info-testimonial"> 
                                  <p class="color-text text-18-medium-2">Excellent service! The driver was punctual and very professional. The car was clean and
                                    comfortable. Highly recommend Bristol Cabwise for reliable transportation!.</p>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide"> 
                              <div class="cardTestimonial">
                                <div class="cardAuthor mb-30"> 
                                  <div class="box-author"> <img src="{{ asset('frontend-assets/assets/imgs/page/homepage2/author.png')}}" alt="luxride">
                                    <div class="author-info">
                                      <div class="author-name text-18-medium-2 color-text">Jonathan Miller</div>
                                      <p class="text-14 color-text desc-author">Web Developer</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="info-testimonial"> 
                                  <p class="color-text text-18-medium">I had a wonderful experience with Bristol Cabwise. The booking process was seamless, and
                                    the driver was courteous and helpful. Will definitely use this service again.</p>
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
                            <h2 class="heading-44-medium color-text mb-30">From the region, for the region</h2>
                            <p class="text-16 color-text mb-30">Superide operates in numerous cities across the UK, providing reliable and convenient transportation services nationwide.</p>

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
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-heading-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">How do I create an account?</button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseOne"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Sad ipscing elitrsed diamnonu myeir mod, sadipscing
                                        elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre
                                        ute riyutroui tout.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">How do I earn Easy Ride Rewards points?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Sad ipscing elitrsed diamnonu myeir mod, sadipscing
                                        elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre
                                        ute riyutroui tout.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">How can I add my credit card on the app for
                                        payments?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Sad ipscing elitrsed diamnonu myeir mod, sadipscing
                                        elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre
                                        ute riyutroui tout.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">How do I become a Captain?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Sad ipscing elitrsed diamnonu myeir mod, sadipscing
                                        elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre
                                        ute riyutroui tout.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Where can I get more information, support or make a
                                        claim? </button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Sad ipscing elitrsed diamnonu myeir mod, sadipscing
                                        elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre
                                        ute riyutroui tout.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </main>
@endsection
