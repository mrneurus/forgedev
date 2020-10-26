@extends('layout.headlogin')

{{-- Scripts Section --}}
@section('styles')
<link  rel="stylesheet" href="{{ asset('css/pages/login/classic/login-1.css') }}">


@endsection



<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-color: #47afaf;">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin: Aside header-->
                <a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="assets/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
                </a>
                <!--end: Aside header-->
                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white text-center">Bienvenido a <br> Comerpy Extranet</h3>
                    <p class="font-weight-lighter text-white opacity-80">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, ullam.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, ullam</p>
                </div>
                <!--end: Aside content-->
                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">© 2020 QKStudio</div>
                    <div class="d-flex">
                        <a href="#" class="text-white">Privacy</a>
                        <a href="#" class="text-white ml-10">Legal</a>
                        <a href="#" class="text-white ml-10">Contact</a>
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <!--begin::Content header-->
            
            <!--end::Content header-->
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Login</h3>
                        <p class="text-muted font-weight-bold">Ingrese su mail y contraseña</p>
                    </div>
                    <!--begin::Form-->
                  
                    <form  class="form fv-plugins-bootstrap fv-plugins-framework"  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group fv-plugins-icon-container">
                            <label for="email" class="font-size-h6 font-weight-bolder text-dark">{{ __('EMail') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control form-control-solid h-auto py-5 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group fv-plugins-icon-container">
                            <label for="password" class="font-size-h6 font-weight-bolder text-dark">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control form-control-solid h-auto py-5 px-6 rounded-lg border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group fv-plugins-icon-container">
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">
                                    {{ __('Sign In') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>


                    <!--end::Form-->
                </div>
                <!--end::Signin-->
             
              

                {{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/custom/login/login-general.js') }}" type="text/javascript">
</script>
@endsection