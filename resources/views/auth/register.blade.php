@extends('layouts.app')

@section('content')
						<!--begin::Login Sign up form-->
                        <div class="container">
                            <div class="mb-20">
                                <h3>{{ __('Sign Up') }}</h3>
                                <div class="text-muted font-weight-bold">{{ __('Enter your details to create your account') }}</div>
                            </div>
                            <form class="form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-5">
                                    <input id="name" class="form-control @error('name') is-invalid @enderror h-auto form-control-solid py-4 px-8" type="text" placeholder="Fullname"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <input id="email" class="form-control @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8" type="email" placeholder="Email" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <input id="password" class="form-control @error('password') is-invalid @enderror h-auto form-control-solid py-4 px-8" type="password" placeholder="Password"
                                        name="password" required autocomplete="new-password"/>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>


                                <div class="form-group mb-5">
                                    <input id="password-confirm" class="form-control h-auto form-control-solid py-4 px-8" type="password"
                                        placeholder="Confirm Password" name="password_confirmation"  required autocomplete="new-password"/>
                                </div>



                                <div class="form-group mb-5 text-left">
                                    <div class="checkbox-inline">
                                        <label class="checkbox m-0">
                                            <input type="checkbox" name="agree" />
                                            <span></span>I Agree the
                                            <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
                                    </div>
                                    <div class="form-text text-muted text-center"></div>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center mt-10">
                                    <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">
                                        {{ __('Sign Up') }}</button>
                                    <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2" role="submit">
                                        {{ __('Cancel') }}</a>
                                </div>
                            </form>
                        </div>
                        <!--end::Login Sign up form-->


@endsection
