@extends('layouts.app')
@section('content')
    <div class="container-fluid-row mb-2">
        <div class="pb-2"></div>
        <h1 class="text-black-50 mb-5"> Create Orders</h1>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="input-group mb-3">
                <label>Order No</label>
                <input type="text" name="orderNo" id="orderNo" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Order No">
            </div>

            <div class="input-group mb-3">
                <label>Proxy Commision</label>
                <input type="text" name="proxyCommission" id="proxyCommission" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Proxy Commission">
            </div>

            <div class="input-group mb-3">
                <label>Store Name</label>
                <input type="text" name="storeName" id="storeName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Store Name">
            </div>

            <div class="input-group mb-3">
                <label>Buyer Name</label>
                <input type="text" name="buyerName" id="buyerName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Buyer Name">
            </div>

            <div class="input-group mb-3">
                <label>Buyer Source</label>
                <input type="text" name="buyerSource" id="buyerSource" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Buyer Source">
            </div>

            <div class="input-group mb-3">
                <label>Buyer Email</label>
                <input type="text" name="buyerEmail" id="buyerEmail" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Buyer Email">
            </div>

                <!-- /.col -->
            <div class="row mb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-right">Create Product</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
@endsection
<link href="{{ URL::asset('css/orders.css') }}" rel="stylesheet">