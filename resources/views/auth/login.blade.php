@extends('layouts.app')

@section('content')
						<!--begin::Login Sign in form-->
						<div class="container">
							<div class="mb-20">
								<h3>{{ __('Sign In') }}</h3>
								<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
							</div>
							<form class="form" method="POST" action="{{ route('login') }}">
                                @csrf

								<div class="form-group mb-5">
									<input id="email" class="form-control @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
								<div class="form-group mb-5">
									<input id="password" class="form-control @error('password') is-invalid @enderror  h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" required autocomplete="current-password"/>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<div class="checkbox-inline">
										<label class="checkbox m-0 text-muted">
										<input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
										<span></span>{{ __('Remember me') }}</label>
									</div>
                                    @if (Route::has('password.request'))
									<a href="{{ route('password.request') }}" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
                                    @endif
                                </div>
								<button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
							</form>
							<div class="mt-10">
								<span class="opacity-70 mr-4">Don't have an account yet?</span>
								<a href="{{ route('register') }}" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>
							</div>
						</div>
						<!--end::Login Sign in form-->
@endsection
