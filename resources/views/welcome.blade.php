@extends('auth.auth-layout')
<title>Login</title>
@section('content')

<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-3 w-md-450px px-12 py-12">
    <!--begin::Wrapper-->
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Form-->
        <form class="form w-100" method="POST" novalidate="novalidate" data-kt-redirect-url="{{ route('login') }}" id="kt_sign_in_form" action="{{ route('login') }}">
            @csrf
            <!--begin::Heading-->
            <div class=" mb-11">
                <!--begin::Title-->
                <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
                <!--end::Title-->
                <!--begin::Subtitle-->
                <div class="text-gray-500 fw-semibold fs-6">Please login to continue with your account. </div>
                <!--end::Subtitle=-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group=-->
            <div class="fv-row mb-8">
                <!--begin::Email-->
                <div class="form-group">
                    <label class="lable-control mb-2">Email</label>
                    <input type="email"  placeholder="example009@gmail.com" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror" />
                </div>
                @error('email')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <!--end::Email-->
            </div>
            <!--end::Input group=-->
            <div class="fv-row mb-3">
                <!--begin::Password-->
                <div class="form-group">
                    <label class="lable-control mb-2">Password</label>
                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent @error('password') is-invalid @enderror" />
                </div>
                @error('password')
                <span class="" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!--end::Password-->
            </div>
            <!--end::Input group=-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>
                <!--begin::Link-->
                @if (Route::has('password.request'))
                <a class="link-primary" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Submit button-->
            <div class="d-grid">
                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Sign In</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait... 
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </button>
            </div>
            <!--end::Submit button-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
</div>
@endsection