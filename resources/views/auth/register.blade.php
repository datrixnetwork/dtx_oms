@extends('layouts.authapp')

@section('content')
<div class="row page">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6" style="padding: 0;">
        <div class="form-column-signup">
    <div class="card">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><img src="{{ URL::asset('images/dtx_logo.jpeg') }}"></a>
        </div>
        <div class="card-body register-card-body">
            {{-- <h1 class="text-left mb-3">Signup</h1> --}}
            <form method="post" action="{{ url('/register') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="firstName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="First name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="lastName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Last name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="" placeholder="Email Address">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="" placeholder="Enter Your age">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-address-card"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="radio">
                      <label class="form-check-label">
                        <input type="radio" name="gender" id="gender" value="male" checked="">Male </label>
                    </div>
                    <div class="radio"><label class="form-check-label" style="padding-left: 20px;"><input type="radio" name="gender" id="gender" value="female">Female</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="socialProfileLink1" class="form-control @error('age') is-invalid @enderror" value="" placeholder="Enter Social Profile Link1">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="socialProfileLink2" class="form-control @error('age') is-invalid @enderror" value="" placeholder="Enter Social Profile Link2">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms" class="form-check-label">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div>
                    <!-- /.col -->
                <div class="row mb-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">Signin Instead</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
</div>
</div>
<!-- /.register-box -->
<script src="{{ mix('js/app.js') }}" defer></script>

</div>
@endsection
