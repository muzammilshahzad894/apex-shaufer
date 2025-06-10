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
                            {{-- <li class="has-children"><a class="active" href="index-2.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-2.html">Homepage 1</a></li>
                                    <li><a href="index-3.html">Homepage 2</a></li>
                                    <li><a href="index-4.html">Homepage 3</a></li>
                                    <li><a href="index-5.html">Homepage 4</a></li>
                                    <li><a href="index-6.html">Homepage 5</a></li>
                                    <li><a href="index-7.html">Homepage 6</a></li>
                                    <li><a href="index-8.html">Homepage 7</a></li>
                                    <li><a href="index-9.html">Homepage 8</a></li>
                                    <li><a href="index-10.html">Homepage 9</a></li>
                                    <li><a href="index-11.html">Homepage 10</a></li>
                                </ul>
                            </li> --}}

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
                                   
                            <!-- @guest
                                <li class=""><a
                                        class="nav-link {{ request()->routeIs('frontend.login') || request()->routeIs('frontend.signup') ? 'active' : '' }}"
                                        href="/login">Login</a></li>
                            @endguest

                            @auth
                                <li class="has-children">
                                    <a id="" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ \Illuminate\Support\Str::limit(Auth::user()->name, 6, '...') }}
                                    </a>
                                    
                                    <ul class="sub-menu">
                                        <li> <a class="dropdown-item" href="{{ route('frontend.userHistory') }}">
                                                {{ __('My Bookings') }}
                                            </a></li>
                                      
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endauth -->


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
                                    <li > 
                                        <div class="header-right">
                                                <a
                                                class="text-14-medium call-phone color-white hover-up"
                                                style="font-size: larger !important;font-weight:700 !important;color:black !important;margin-left:-22px !important;" href="tel:01173322782">0117 332 2782</a>
                                            </div>
                                    </li>
                                    @guest
                                        <li class=""><a
                                                class=" {{ request()->routeIs('frontend.login') || request()->routeIs('frontend.signup') ? 'active' : '' }}"
                                                href="/login">Login</a></li>
                                    @endguest
        
                                    @auth
                                        <li class="has-children">
                                            <a id="" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ \Illuminate\Support\Str::limit(Auth::user()->name, 6, '...') }}
                                            </a>
                                            
                                            <ul class="sub-menu">
                                                <li> <a class="dropdown-item" href="{{ route('frontend.userHistory') }}">
                                                        {{ __('My Bookings') }}
                                                    </a></li>
                                              
                                                <li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Logout</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endauth
                                  
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
