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
        data-background="{{ asset('uploads/fleets/' . $fleet->image) }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center header-details">
                        <!-- <h6>Our Fleet</h6> -->
                        {{-- <h1>Our <span>Services</span></h1> --}}
                        <h1>{{ $fleet->name }}</h1>
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
                        <!-- <div class="section-subtitle">{{ $fleet->name }}</div> -->
                        <div class="section-title">
                            {{ $fleet->about_car }} <span></span>
                        </div>
                        <p class="mb-30">{{ $fleet->detail_page_description }}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex gap-2 align-items-center" >
                                        <div class="icon"><i class="fas fa-users"></i></div>
                                        <div class="d-flex align-items-center gap-2">
                                            <p>Max Passengers:</p>
                                            <h6>({{ $fleet->max_passengers }})</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="icon"><i class="fas fa-suitcase"></i></div>
                                        <div class="d-flex align-items-center gap-2">
                                            <p>Max Suitcases:</p>
                                            <h6>({{ $fleet->max_suitecases }})</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                                        <div class="d-flex align-items-center gap-2">
                                            <p>Max Hand Luggage:</p>
                                            <h6>({{ $fleet->max_hand_luggage }})</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($fleet->features)
                            <ul class="list-unstyled list mt-30">
                                @foreach(explode(',', $fleet->features) as $feature)
                                    <li>
                                        <div class="list-icon"> <span class="ti-check"></span> </div>
                                        <div class="list-text">
                                            <p>{{ $feature }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <div class="item">
                        <img src="{{ asset('uploads/fleets/'.$fleet->image) }}" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
