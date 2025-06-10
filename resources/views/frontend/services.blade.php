@extends('layouts.frontend.app')

@section('content')
<section class="banner-header section-padding bg-img services" data-overlay-dark="6" data-background="{{ asset('frontend-assets/img/slider/11.png') }}">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="padding: 0 40px; background: rgb(0 0 0 / 25%);">
                    {{-- <h6>What We Do</h6> --}}
                    <h1 style="color: #e19336">Our <span style="color: white">Services</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Services Box 2 -->


<section class="testimonials section-padding mt-15">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle"></div>
                <h1 class="section-title"> <span>Services</span></h1>

            </div>
         
            <div class="row">
                @if($services->count() > 0)
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="cardFleet wow fadeInUp">
                                <div class="cardImage mb-30"><img style="height: 250px;"
                                   src="{{ asset('uploads/services/'.$service->image) }}"
                                    alt="Luxride"></div>
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






            
        </div>
    </div>
</section>
<style>
    .main-div-card p{
        padding: 5px 0px;
    }
    .img-fluid {
        width: 100%;
        height: 390px !important;
    }
    .cars_details_view div img {
    height: 300px !important;
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
        background: #d7b733;
        border: none;
        padding: 10px 10px;
        border-radius: 10px;
        width: 120px;
        text-align: center;
        cursor: pointer;
    }

    .view_details:hover {
        background: #d7b733;
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
    .cars_details_view {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        border: 4px solid #d5b941;
        padding: 10px;
        border-radius: 10px;
        background: rgb(0 0 0 / 77%);
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
        background: #ff8120;
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
    /* .section-padding {
    padding: 70px 0px 0px 0px;
} */

    @media (max-width: 768px) {
        .header {
            height: 1000px !important;
        }

        .video-fullscreen-wrap {
            height: 1000px !important;
            overflow: hidden;
        }
        
        .cars_details_view div img {
                height: 300px !important;
            }

        .v-middle {
            /* margin-top: 130px !important; */
        }

        .video-fullscreen-video {
            height: 1020px !important;
        }
        
    }
</style>
@endsection