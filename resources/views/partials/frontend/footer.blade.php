<style>
    .custom_icon_list li{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .custom_icon_list{
        display: flex;
    }
    .widget-newsletter{
        margin-top: 20px;
    }
    .widget-newsletter input{
        height: 60px;
    width: 100%;
    /* border: none; */
    background: transparent;
    font-size: 14px;
    color: #fff;
    outline: none;
    padding: 0 90px 0 20px;
    border: 1px solid #d5b941;
    border-radius: 30px;
    }
    .widget-newsletter button{
        height: 50px;
    width: 50px;
    border: none;
    background: #d5b941;
    font-size: 16px;
    font-weight: 700;
    color: #1b1b1b;
    outline: none;
    padding: 0px 16px;
    cursor: pointer;
    display: inline-block;
    position: absolute;
    top: 5px;
    right: 5px;
    border-radius: 100%;
    line-height: 55px;
    outline: none;
    transform: rotate(0);
    -webkit-transition: all 0.7s linear;
    /* -o-transition: all 0.7s linear; */
    transition: all 0.7s linear;
    }
    .widget-newsletter input::placeholder {
    color: #fff; /* Placeholder color to white */
    opacity: 1; /* Ensure it's fully opaque */
}
.widget-newsletter button i {
    font-size: 16px; /* Adjust size as needed */
    color: #1b1b1b; /* Arrow color */
}
</style>



{{-- <footer class="footer clearfix">
    <div class="container">
        <!-- first footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <a  href="tel:01173322782">   <div class="icon-footer">  <i class="flaticon-phone-call"></i> </div></a>
                                </div>
                                <!-- <h5><a href="tel:01173322782">01173322782</a></h5> -->
                                <div class="footer-contact-link-content">
                                    <h6>Call us</h6>
                                    <p><a href="tel:01173322782"> 0117 332 2782</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <a href="mailto:info@bristolcabwise.com" ><div class="icon-footer"> <i class="omfi-envelope"></i> </div></a>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Write to us</h6>
                                    <p> <a href="mailto:info@bristolcabwise.com" >info@bristolcabwise.com</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="omfi-location"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Address</h6>
                                    <p>Bath, UK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo">
                            <h2>Bristol  <span style="margin-left: 5px;"> Cabwise</span>
                            </h2>
                        </div>

                        <!-- <div class="footer-logo"><h2>CARE<span>X</span></h2></div> -->
                        <div class="widget-text">
                            <p>Book a service with us to ensure smooth and comfortable travel.</p>
                            <div class="social-icons">
                                <ul class="list-inline custom_icon_list">
                                    <li><a href="https://wa.me/447533225970" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul>
                            <li><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About</a></li>
                            <li><a href="{{ route('frontend.services') }}">Services</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li><a class="nav-link"  href="{{ route('frontend.trustVoilet') }}">Reviews</a></li>
                            <li><a href="{{ route('frontend.faqs') }}">FAQs</a></li>
                            <li><a href="{{ route('frontend.termCondition') }}">Term and Condition</a></li>
                            <!-- <li><a href="{{ route('frontend.services') }}" class="booking_online_btn">Book Now</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Subscribe</h3>
                        <p>Want to be notified about our services. Just sign up and we'll send you a notification by email.</p>
                        <div class="widget-newsletter">
                            <form action="#">
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit"><i class="ti-arrow-top-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">&copy;2024 <a href="#">Bristol cabwise</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}

<footer class="footer">
    <div class="footer-1">
      <div class="container-sub">
        <div class="box-footer-top">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 text-md-start text-center mb-15 wow fadeInUp">
              <div class="d-flex align-items-center justify-content-md-start justify-content-center"><a class="mr-30" href="{{ route('frontend.index') }}"><img style="max-height: 70px;max-width:150px;" src="{{ asset('frontend-assets/img/logo-light.png') }}" alt="Luxride"></a><a class="text-14-medium call-phone color-white hover-up" href="tel:01173322782">0117 332 2782</a></div>
            </div>
            <div class="col-lg-6 col-md-6 text-md-end text-center mb-15 wow fadeInUp">
              <div class="d-flex align-items-center justify-content-md-end justify-content-center"><span class="text-18-medium color-white mr-10">Follow Us</span><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
            </div>
          </div>
        </div>
        <div class="row mb-40">
          <div class="col-md-4 ">
            <h3 class=" color-white mb-20 wow fadeInUp">Book Your Premium chauffeur Service Today!            </h3>
            <p style="color: white;">Experience the ultimate in comfort, luxury, and professionalism with Apex Executive Cars. Whether you’re traveling for business, leisure, or a special occasion, our fleet of high-spec vehicles and expert chauffeurs will ensure your journey is seamless and enjoyable. <br><br>Book now and let us take care of the rest. </p>
          </div>
          <div class="col-md-4  mb-30" style="display: flex;flex-direction:column;align-items:center;">
            <h3 class="color-white mb-20 wow fadeInUp">Quick links</h3>
            <ul class="menu-footer wow fadeInUp" style="display: flex;flex-direction:column;align-items:center;">
              <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li><a href="{{ route('frontend.about') }}">About</a></li>
                <li><a href="{{ route('frontend.services') }}">Services</a></li>
                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                <li><a class="nav-link"  href="{{ route('frontend.trustVoilet') }}">Reviews</a></li>
                <li><a href="{{ route('frontend.faqs') }}">FAQs</a></li>
                <li><a href="{{ route('frontend.termCondition') }}">Term and Condition</a></li>

            </ul>
          </div>
          <div class="col-md-4  mb-30">
            <h3 class=" color-white mb-20 wow fadeInUp">Subscribe</h3>
            <p style="color: white;">
                Want to be notified about our services. Just sign up and we'll send you a notification by email.
            </p>
            <div class="widget-newsletter">
                <form action="#">
                    <input type="email" placeholder="Email Address" required>
                   <svg style="position: absolute;color:white;margin-top:15px;right:8.5%;height:32px;cursor: pointer;" class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg>
                </form>
            </div>
          </div>
          
       
        </div>
      </div>
    </div>
    <div class="footer-2">
      <div class="container-sub">
        <div class="footer-bottom">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12 text-center text-lg-start"><span class="text-14 color-white mr-50">© {{ date('Y') }} APEX EXECUTIVE CARS. All rights reserved.</span>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>




