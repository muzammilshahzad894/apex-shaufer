@extends('layouts.frontend.app')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> --}}

<style>
  @media (max-width: 767px) {
    .button-1{
      padding : 14px 30px !important;
    }
    .button-2{
      padding : 14px 30px !important;
    }
  }
  .booking-process-icon {
    height: 90px;
    width: 90px;
    border: 1px solid black;
    border-radius: 50%;
  }
  .booking-process-icon:hover {
    background-color: #d5b941;
    border: 1px solid #d5b941;
  }
</style>
@section('content')
<!-- Header Banner -->
<section class="banner-header middle-height section-padding bg-img contact" data-overlay-dark="5" data-background="{{ asset('frontend-assets/img/slider/contact.jpg') }}">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="background:rgb(0 0 0 / 25%);padding:10px 40px;">
                    <!-- <h6 style="color:#d5b941;">Get in touch</h6> -->
                    <h1 style="color:white">Contact <span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Box -->
<main class="main">
    
    <div class="section pt-60 pb-60">
      <div class="container-sub">
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-30">
            <div class="cardContact wow fadeInUp">
              <div class="mb-3 d-flex justify-content-center booking-process-step">
                <i class="fa fa-envelope fa-2x booking-process-icon d-flex justify-content-center align-items-center"></i>
              </div>
              <div class="cardInfo text-center">
                <h6 class="heading-20-medium mb-10">
                  Write email
                </h6>
                <p class="text-16 mb-20">
                  info@apexcabbie.com
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-30">
            <div class="cardContact wow fadeInUp">
              <div class="mb-3 d-flex justify-content-center booking-process-step">
                <i class="fa fa-map-marker-alt fa-2x booking-process-icon d-flex justify-content-center align-items-center"></i>
              </div>
              <div class="cardInfo text-center">
                <h6 class="heading-20-medium mb-10">
                  Our address
                </h6>
                <p class="text-16 mb-20">
                  Bath, UK
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-30">
            <div class="cardContact wow fadeInUp">
              <div class="mb-3 d-flex justify-content-center booking-process-step">
                <i class="fa fa-phone fa-2x booking-process-icon d-flex justify-content-center align-items-center"></i>
              </div>
              <div class="cardInfo text-center">
                <h6 class="heading-20-medium mb-10">
                  Call us
                </h6>
                <p class="text-16 mb-20">
                  <a href="tel:01173322782" class="text-decoration-none text-dark">0117 332 2782</a><br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-30">
            <div class="cardContact wow fadeInUp">
              <div class="mb-3 d-flex justify-content-center booking-process-step">
                <i class="fa fa-phone fa-2x booking-process-icon d-flex justify-content-center align-items-center"></i>
              </div>
              <div class="cardInfo text-center">
                <h6 class="heading-20-medium mb-10">
                  WhatsApp us
                </h6>
                <p class="text-16 mb-20">
                  +44 7533 225970
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section wow fadeInUp">
      <iframe
        class="map-contact"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24312.81061564066!2d-2.602046251494366!3d51.45451429765481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48719c0a15db7f05%3A0x3d1d0c49b5b7e08d!2sBristol%2C%20UK!5e0!3m2!1sen!2suk!4v1646760525018!5m2!1sen!2suk" 
        style="border: 0px"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <section class="section mt-120 mb-120">
      <div class="container-sub">
        <div class="mw-770">
          <h2 class="heading-44-medium mb-60 text-center wow fadeInUp">
          Get In Touch
          </h2>
          <div class="row">
              <div class="col-12">
                  @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @endif
              </div>
          </div>
          <div class="form-contact form-comment wow fadeInUp">
            <form action="{{ route('frontend.contactPost') }}" method="post" onsubmit="document.getElementById('submit-btn').innerHTML = 'Please wait...'; document.getElementById('submit-btn').disabled = true;">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="fullname">Full Name *</label
                    ><input
                      name="name"
                      class="form-control"
                      id="fullname"
                      type="text"
                      value=""
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="email">Email *</label
                    ><input
                      name="email"
                      class="form-control"
                      id="email"
                      type="email"
                      placeholder=""
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="phone">Phone *</label
                    ><input
                      name="phone"
                      class="form-control"
                      id="phone"
                      type="text"
                      placeholder=""
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="subject">Subject *</label
                    ><input
                      name="subject"
                      class="form-control"
                      id="subject"
                      type="text"
                      placeholder=""
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label" for="message">Message *</label
                    ><textarea name="message" class="form-control" id="message" required></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button class="btn btn-primary" type="submit" id="submit-btn">
                  Submit<svg
                      class="icon-16 ml-5"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection