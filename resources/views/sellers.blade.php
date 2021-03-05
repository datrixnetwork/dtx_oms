@extends('layouts.app')
@section('content')
    <div class="container-fluid-row mb-2">
        <div class="pb-2"></div>
        <h1 class="text-black-50 mb-5"> Create Seller</h1>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="input-group mb-3">
                <label>Seller Code</label>
                <input type="text" name="sellerCode" id="sellerCode" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Seller Code">
            </div>

            <div class="input-group mb-3">
                <label>Seller Name</label>
                <input type="text" name="sellerName" id="sellerName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Seller Name">
            </div>

            <div class="input-group mb-3">
                <label>Seller Description</label>
                <textarea class="form-control" name="sellerDescription" id="sellerDescription" rows="3" placeholder="Enter seller Description" spellcheck="false"></textarea>
              </div>

            <div class="input-group mb-3">
                <label>Seller Link</label>
                <input type="text" name="sellerLink" id="sellerLink" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Seller Link">
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
                    <button type="submit" class="btn btn-primary float-right">Create Seller</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
@endsection
<link href="{{ URL::asset('css/sellers.css') }}" rel="stylesheet">