@extends('layouts.app')
@section('content')
    <div class="container-fluid-row mb-2">
        <div class="pb-2"></div>
        <h1 class="text-black-50 mb-5"> User Details</h1>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="input-group mb-3">
                <label>First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="First Name">
            </div>

            <div class="input-group mb-3">
                <label>Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Last Name">
            </div>

            <div class="input-group mb-3">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Email">
            </div>

            <div class="input-group mb-3">
                <label>Phone</label>
                <input type="text" name="phone" id="phone" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Phone ">
            </div>
                <!-- /.col -->
            <div class="row mb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-right">Update User</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
@endsection
<link href="{{ URL::asset('css/sellers.css') }}" rel="stylesheet">