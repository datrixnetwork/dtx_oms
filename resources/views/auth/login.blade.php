@extends('layouts.authapp')

@section('content')
        <div class="row page">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6" style="padding: 0;">
                <div class="form-column">

    <!-- /.login-logo -->

    <!-- /.login-box-body -->

    <div class="card">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><img src="{{ URL::asset('images/dtx_logo.jpeg') }}"></a>
        </div>
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>

                </div>
            </form>

            <p class="mb-1">
                <a href="{{ route('password.request') }}">Forget Password?</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Create an account</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>


<!-- /.login-box -->
</div>
</div>
</div>
<script src="{{ mix('js/app.js') }}" defer></script>

@endsection
