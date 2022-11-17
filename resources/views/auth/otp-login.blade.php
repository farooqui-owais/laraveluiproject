<!DOCTYPE html>
<html lang="en">
<head>
@include('frontend.head')
</head>
<body id="page-top">
    @include('frontend.header')
    <section class="page-section">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-5">{{ __('OTP Login') }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    <form method="POST" action="{{ route('otpgenerate') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus placeholder="Enter Your Registered Mobile Number">

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate OTP') }}
                                </button>

                                @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Login With Username') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
        </div>
</section>
                    @include('frontend.footer')
</body>
</html>
