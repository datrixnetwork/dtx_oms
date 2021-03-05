@extends('layouts.app')
@section('content')
    <div class="container-fluid-row mb-2">
        <div class="pb-2"></div>
        <h1 class="text-black-50 mb-5"> Create Product</h1>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="input-group mb-3">
                <label>Product Code</label>
                <input type="text" name="productCode" id="productCode" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Product Code">
            </div>

            <div class="input-group mb-3">
                <label>Product Name</label>
                <input type="text" name="productName" id="productName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Product Name">
            </div>

            <div class="input-group mb-3">
                <label>Product Description</label>
                <textarea class="form-control" name="productDescription" id="productDescription" rows="3" placeholder="Enter Product Description" spellcheck="false"></textarea>
              </div>

            <div class="input-group mb-3">
                <label>Product Price</label>
                <input type="text" name="productPrice" id="productPrice" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Product Price">
            </div>

            <div class="input-group mb-3">
                <label>Seller Code</label>
                <input type="text" name="sellerCode" id="sellerCode" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Seller Code">
            </div>

            <div class="input-group mb-3">
                <label>Total Commision</label>
                <input type="text" name="totalCommission" id="totalCommission" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Total Commission ">
            </div>

            <div class="input-group mb-3">
                <label>Proxy Code</label>
                <input type="text" name="proxyCommission" id="proxyCommission" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Proxy Commission">
            </div>

            <div class="input-group mb-3">
                <label>Proxy Quantity</label>
                <input type="text" name="productQuantity" id="productQuantity" class="form-control @error('name') is-invalid @enderror" value="" placeholder="ProductQuantity">
            </div>

            <div class="input-group mb-3">
                <label>Proxy Quantity</label>
                <input type="text" name="productQuantity" id="productQuantity" class="form-control @error('name') is-invalid @enderror" value="" placeholder="ProductQuantity">
            </div>

            <div class="input-group mb-3">
                <label>Proxy Link</label>
                <input type="text" name="productLink" id="productLink" class="form-control @error('name') is-invalid @enderror" value="" placeholder="productLink">
            </div>

            <div class="input-group mb-3">
                <label>File upload</label>
                <input type="file" name="productFile" id="productFile" class="form-control @error('name') is-invalid @enderror" value="" placeholder="productFile">
            </div>

            <div class="input-group mb-3">
                <label>Store Name</label>
                <input type="text" name="storeName" id="storeName" class="form-control @error('name') is-invalid @enderror" value="" placeholder="storeName">
            </div>

            <div class="input-group mb-3">
                <label>Product Keywords</label>
                <input type="text" name="productKeywords" id="productKeywords" class="form-control @error('name') is-invalid @enderror" value="" placeholder="productKeywords">
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
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
<link href="{{ URL::asset('css/products.css') }}" rel="stylesheet">