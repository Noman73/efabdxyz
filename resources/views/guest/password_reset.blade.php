
@extends('layouts.guest.master')
@section('content')

<section class="section section-lg section-header position-relative min-vh-100 flex-column d-flex justify-content-center" style="background: url({{asset('storage/assets3/img/slider-bg-1.svg')}})no-repeat center bottom / cover">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-7 col-lg-6">
                <div class="hero-content-left text-white">
                    <h1 class="display-2">Welcome Back !</h1>
                    <p class="lead">
                        Keep your face always toward the sunshine - and shadows will fall behind you.
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="card login-signup-card shadow-lg mb-0">
                    <div class="card-body px-md-5 py-5">
                        <div class="mb-5">
                            <h3>Reset Password</h3>
                            <p class="text-muted">Send otp code and reset password</p>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('mobile'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('mobile') }}
                            </div>
                        @endif
                        <!--login form-->
                        <form class="login-signup-form" action="{{route('password.custom.update')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Username</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" required>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Otp Code</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <input type="number" name="otp" class="form-control  @error('otp') is-invalid @enderror" required>
                                    @error('otp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">New Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->
                            <!-- Submit -->
                            <button class="btn btn-block btn-secondary mt-4 mb-3">Send</button>

                        </form>
                    </div>
                    <div class="card-footer bg-soft text-center border-top px-md-5"><small>Not registered?</small>
                        <a href="{{URL::to('/registration')}}" class="small"> Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection