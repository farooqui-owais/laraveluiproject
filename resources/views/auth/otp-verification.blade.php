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
                    <form method="POST" action="{{ route('otpgetlogin') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}" />
                        <div class="row mb-3">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-end">{{ __('OTP') }}</label>

                            <div class="col-md-6">
                                <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus placeholder="Enter OTP">

                                @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
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
