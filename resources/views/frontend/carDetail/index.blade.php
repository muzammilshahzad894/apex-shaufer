@extends('layouts.frontend.app')
<style>
    .header-details h6{
        color: #d5b941;
        background: black;
        margin-left: 60px;
    }
    .header-details h1{
        color: #fff;
    background: rgb(255 165 0 / 30%);
    clip-path: polygon(15% 0, 100% 0, 85% 100%, 0% 100%);
    /* width: 230px; */
    margin-top: -2px;
    padding: 0 56px;
    font-size: 33px;
    }
</style>
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
.cardService .cardImage{
    max-height: 320px;
}
</style>

@section('content')
    <section class="banner-header section-padding bg-img" data-overlay-dark="6"
        data-background="{{ asset('uploads/services/'.$service->image) }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center header-details">
                        <h6>What We Do</h6>
                        {{-- <h1>Our <span>Services</span></h1> --}}
                        <h1>{{$service->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-subtitle">{{ $service->detail_page_tag }}</div>
                        <div class="section-title">{{ $service->detail_page_first_heading }} <span>{{ $service->detail_page_second_heading }}</span></div>
                        <p class="mb-30">{{$service->detail_page_description}}</p>
                        <ul class="list-unstyled list mb-30">
                            @foreach(explode(',', $service->detail_page_features) as $feature)
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
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <div class="item"> <img src="{{ asset('uploads/services/'.$service->image) }}" alt="about"
                            class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section class="section pt-90 pb-120 bg-our-service">
        <div class="container-sub">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12 col-7">
                    <h2 class="heading-44-medium title-fleet wow fadeInUp" 
                        style="clip-path: polygon(15% 0, 100% 0, 85% 100%, 0% 100%); background: #d5b941;color:white;">
                        Our Services
                    </h2>
                </div>
            </div>
        </div>
        <div class="box-slide-fleet mt-50">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-4-fleet pb-0">
                    <div class="swiper-wrapper">
                        @if($services->count() > 0)
                        @foreach($services as $service)
                                <div class="swiper-slide">
                                    <div class="cardFleet wow fadeInUp">
                                        <div class="cardImage mb-30"><img style="height: 300px;"
                                           src="{{ asset('uploads/services/'.$service->image) }}"
                                            alt="Luxride"></div>
                                        <div class="cardInfo">
                                                <h3 class="text-20-medium color-text mb-10">{{ $service->name }}</h3>
                                            
                                            <p class="text-14 color-text mb-30  two-lines">
                                                {{ $service->short_description }}
                                            </p>
                                        </div>
                                       
                                        <div class="cardInfoBottom" style="justify-content: space-between">
                                            <a class="view_details" href="{{ route('frontend.carDetails', $service->id) }}">View Details</a>
                                            <a class="view_details" href="{{ route('frontend.book-online', ['id' => $service->id, 'name' => str_replace(' ', '-', $service->name)]) }}">Book Now</a>
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


    <style>
        .img-fluid {
            width: 100%;
            height: 390px !important;
        }

        .new_forms {
            max-width: 400px;
            background-color: rgb(255 255 255 / 20%);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

        .cars_details_view {
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 10px;
            background: #222222;
            margin-top: 20px;
        }

        .special_rate {
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0);
            padding: 25px;
            border-radius: 10px;
            background: #222222;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .special_rate h4 {
            color: white;
        }

        .icon_bg i {
            background: #d5b941;
            margin: 5px;
            border-radius: 10px;
            font-size: 25px;
            color: white;
            height: 50px;
            width: 50px;
            padding-top: 10px;
        }

        .truncate {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Number of lines to show */
            -webkit-box-orient: vertical;
            text-overflow: ellipsis;
        }

        .right_border {
            border-right: 1px solid rgb(237, 235, 235);
            height: 40px;
            padding-right: 30px;
        }

        .owl-carousel .owl-item img {
            height: 200px !important;
        }

        @media (max-width: 768px) {
            .header {
                height: 1000px !important;
            }

            .video-fullscreen-wrap {
                height: 1000px !important;
                overflow: hidden;
            }

            .v-middle {
                margin-top: 130px !important;
            }

            .video-fullscreen-video {
                height: 1020px !important;
            }
        }
    </style>
@endsection
