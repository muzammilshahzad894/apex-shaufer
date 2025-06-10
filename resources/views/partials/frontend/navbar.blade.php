<style>
    .active {
        color: #ecd991 !important;
    }
</style>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ route('frontend.index') }}"><img alt="luxride"
                            src="{{ asset('frontend-assets/img/logo-light.png') }}"></a></div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}"
                                    href="{{ route('frontend.index') }}">Home</a></li>
                            <li><a class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}"
                                    href="{{ route('frontend.about') }}">About</a></li>
                            <li><a class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}"
                                    href="{{ route('frontend.services') }}">Services</a></li>
                            <li><a class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}"
                                    href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li><a class="{{ request()->routeIs('frontend.faqs') ? 'active' : '' }}"
                                    href="{{ route('frontend.faqs') }}">FAQs</a></li>
                            <li><a class="{{ request()->routeIs('frontend.trustVoilet') ? 'active' : '' }}" 
                                    href="{{ route('frontend.trustVoilet') }}">Reviews</a></li>
                            <li> <a href="{{ route('frontend.getquote') }}" class="btn btn-default hover-up">Book Now</a></li>
                            <li style="display: flex;justify-content:center;"> 
                                <div class="header-right">
                                        <a
                                        class="text-14-medium call-phone color-white hover-up" href="tel:01173322782">0117 332 2782</a>
                                    </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-mid"></span><span
                            class="burger-icon-bottom"></span></div>
                </div>
               
                <div class="burger-icon burger-icon-white d-xxl-none"><span class="burger-icon-mid"></span><span
                        class="burger-icon-bottom"></span></div>

            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}"
                                    href="{{ route('frontend.index') }}">Home</a></li>
                            <li><a class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}"
                                    href="{{ route('frontend.about') }}">About</a></li>
                            <li><a class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}"
                                    href="{{ route('frontend.services') }}">Services</a></li>
                            <li><a class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}"
                                    href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li><a class="{{ request()->routeIs('frontend.faqs') ? 'active' : '' }}"
                                    href="{{ route('frontend.faqs') }}">FAQs</a></li>
                            <li><a class="{{ request()->routeIs('frontend.trustVoilet') ? 'active' : '' }}"
                                    href="{{ route('frontend.trustVoilet') }}">Reviews</a></li>
                            <li><a class="{{ request()->routeIs('frontend.getquote') ? 'active' : '' }}"
                                    href="{{ route('frontend.getquote') }}">Book Now</a></li>
                            <li>
                                <div class="header-right">
                                    <a class="text-14-medium call-phone color-white hover-up"
                                        style="font-size: larger !important;font-weight:700 !important;color:black !important;margin-left:-22px !important;" href="tel:01173322782">0117 332 2782</a>
                                </div>
                            </li> 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
