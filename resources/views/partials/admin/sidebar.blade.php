<style>
    .dlabnav{
        background: black;
        margin-top: 1px !important;
    }
    .nav-header{
        background: black;
    }
</style>
<div class="dlabnav">
    <div class="dlabnav-scroll">
        @if(Auth::user()->role == 'admin')
            <ul class="metismenu" id="menu">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.services.index') || request()->routeIs('admin.services.create') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.services.index') }}" class="" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Services</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.fleets.index') || request()->routeIs('admin.fleets.create') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.fleets.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-list-ul"></i>
                        <span class="nav-text">Fleets</span>
                    </a>
                </li>
                {{-- <li class="{{ request()->routeIs('admin.drivers.index') || request()->routeIs('admin.drivers.create') ? 'mm-active' : '' }} || request()->routeIs('admin.drivers.edit')">
                    <a href="{{ route('admin.drivers.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-taxi"></i>
                        <span class="nav-text">Drivers</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ request()->routeIs('admin.block-dates.index') || request()->routeIs('admin.block-dates.index') ? 'mm-active' : '' }} || request()->routeIs('admin.block-dates.edit')">
                    <a href="{{ route('admin.block-dates.index') }}" class="" aria-expanded="false">
                    
                        <i class="fa fa-calendar">
                            
                        </i>
                        <span class="nav-text">Block Dates</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ request()->routeIs('admin.coupons.index') || request()->routeIs('admin.coupons.create') ? 'mm-active' : '' }} || request()->routeIs('admin.coupons.edit')">
                    <a href="{{ route('admin.coupons.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-list-ul"></i>
                        <span class="nav-text">Coupon</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ request()->routeIs('admin.booking') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.booking') }}" class="" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span class="nav-text">Booking by Admin</span>
                    </a>
                </li> --}}

                <!-- <li class="{{ request()->routeIs('admin.draft.index') || request()->routeIs('admin.draft.create') ? 'mm-active' : '' }} || request()->routeIs('admin.draft.edit')">
                    <a href="{{ route('admin.draft.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-file-alt"></i>
                        <span class="nav-text">Draft Bookings</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.confirm.index') || request()->routeIs('admin.confirm.create') ? 'mm-active' : '' }} || request()->routeIs('admin.confirm.edit')">
                    <a href="{{ route('admin.confirm.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-clipboard-list"></i>
                        <span class="nav-text">Accepted Bookings</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.confirm.cancel') || request()->routeIs('admin.confirm.cancel') ? 'mm-active' : '' }} ">
                    <a href="{{ route('admin.confirm.cancel') }}" class="" aria-expanded="false">
                        <i class="fa fa-clipboard-list"></i>
                        <span class="nav-text">Cancel Bookings</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.confirm.completebooking') }}">
                    <a href="{{ route('admin.confirm.completebooking') }}" class="" aria-expanded="false">
                        <i class="fa fa-clipboard-list"></i>
                        <span class="nav-text">Completed bookings</span>
                    </a>
                </li> -->
                {{-- <li class="{{ request()->routeIs('admin.refunds.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.refunds.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-undo"></i>
                        <span class="nav-text">Refunds</span>
                    </a>
                </li> --}}
                <li class="{{ request()->routeIs('admin.getquote') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.getquote') }}" class="" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="nav-text">Quotations</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.custom-email.index') || request()->routeIs('admin.email-settings.index') ? 'mm-active' : '' }}">
                    <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="nav-text">Emails</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.custom-email.index') }}">Custom Email</a></li>
                        <!-- <li><a href="{{ route('admin.email-settings.index') }}">Email Settings</a></li> -->
                    </ul>
                </li>
                <li class="{{ request()->routeIs('admin.settings.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.settings.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="nav-text">Settings</span>
                    </a>
                </li>
                @if(request()->has('programmer'))
                    <li class="{{ request()->routeIs('admin.emails.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.emails.index') }}" class="" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="nav-text">Emails</span>
                        </a>
                    </li>
                @endif
            </ul>
        @endif
        @if(Auth::user()->role == 'driver')
            <ul class="metismenu" id="menu">
                <li class="{{ request()->routeIs('driver.dashboard') ? 'mm-active' : '' }}">
                    <a href="{{ route('driver.dashboard') }}" class="" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('driver.bookings.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('driver.bookings.index') }}" class="" aria-expanded="false">
                        <i class="fa fa-clipboard-list"></i>
                        <span class="nav-text">Bookings</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</div>