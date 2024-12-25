<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Chaufer Service</title>
	<link rel="shortcut icon" href="{{ asset('frontend-assets/img/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap">
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/plugins.css') }}" />
  @if (Request::is('book-online'))
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/style.css') }}" />
@endif
  <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/stylee209.css') }}" />
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="page-loading">
            <div class="page-loading-inner">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
	<!-- Navbar -->
	@include('partials.frontend.navbar')
   
    <!-- Content -->
	<main>

		@yield('content')
	</main>
	
	<!-- Footer -->
	@include('partials.frontend.footer')






	<script src="{{ asset('frontend-assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/jquery.isotope.v3.0.2.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/popper.min.js') }}"></script>
  @if (Request::is('book-online') || Request::is('get-quote') )
    <script src="{{ asset('frontend-assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/jquery.magnific-popup.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/select2.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@else
<script src="{{ asset('frontend-assets/assets/js/vendors/magnific-popup.js') }}"></script>
<script src="{{ asset('frontend-assets/assets/js/vendors/select2.min.js') }}"></script>
  <script src="{{ asset('frontend-assets/assets/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend-assets/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
@endif

	<script src="{{ asset('frontend-assets/js/scrollIt.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/datepicker.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/YouTubePopUp.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
	<script src="{{ asset('frontend-assets/assets/js/vendors/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/isotope.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/scrollup.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/slider.js') }}"></script>
    <!-- Count down-->
    <script src="{{ asset('frontend-assets/assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/vendors/jquery.countdown.min.js') }}"></script>
    <!-- Count down-->
	<script src="{{ asset('frontend-assets/assets/js/vendors/jquery.elevatezoom.js') }}"></script>
	<script src="{{ asset('frontend-assets/assets/js/vendors/slick.js') }}"></script>
	<script src="{{ asset('frontend-assets/assets/js/vendors/jquery-ui.js') }}"></script>
	<script src="{{ asset('frontend-assets/assets/js/vendors/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/maine209.js?v=1.0.0') }}"></script>
  </body>

</html>