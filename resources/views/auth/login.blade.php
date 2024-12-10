@extends('layouts.frontend.app')

<style>
    
    .card{
        width: 600px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 20px !important;
    }
    .form-control:focus{
        border-color:#ecd991 !important;
        color: white !important;
        background: black !important;
        box-shadow: none !important;
        border: 1px solid #ecd991 !important;

    }
    .form-control{
        color: white;
    }
    .booking-button:hover{
        background: black !important;
    color: white !important;
    }
    .btn-link{
        color: black !important;
    
    }
  
    .booking-box .box-shadow{
        display: flex;
        justify-content: center;
    }
</style>
@section('content')
<main class="main">
    <section class="section mt-120 mb-100">
      <div class="container-sub">
        <div class="text-center">
          <h2 class="heading-44-medium wow fadeInUp">Sign in</h2>
          <p class="color-text text-14 wow fadeInUp">
            Sign in with this account across the following sites.
          </p>
        </div>
        <div class="box-login mt-70">
          <div class="form-contact form-comment wow fadeInUp">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label class="form-label" for="fullname">Email</label
                    ><input
                      class="form-control filled @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                      id="fullname"
                      type="text"
                      value=""
                    />
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" for="password">Password</label
                    ><input
                      class="form-control"
                      id="password"
                      type="password"
                      value=""
                      name="password"
                    />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-20">
                    <div class="d-flex justify-content-between">
                      <label class="text-14 color-text"
                        ><input
                          class="cb-rememberme"
                          type="checkbox"
                        />Remember me<!-- --> </label
                      >@if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button class="btn btn-primary w-100" type="submit">
                    Sign in<svg
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
            
                <div class="mt-0 text-center">
                  <span class="text-14-medium color-text"
                    >Not signed up?<!-- --> </span
                  ><a class="text-14-medium color-text" href="/register"
                    >Create an account.</a
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection
