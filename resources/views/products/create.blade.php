@extends('layouts.admin.app')
@section('title', 'Add Product')
@section('customstyle')
<link href="{{ asset('css/admin-product.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <h4 class="mt-2">Dashboard</h4>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
<div class="row"> 
<div class="col-md-12">
<div class="card mb-4"> 
    <div class="card-header text-center text-success"><i class="fa fa-product-hunt" aria-hidden="true"></i> Create Product</div>
    <div class="card-body">
    <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <br/>
        <br/>
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="flex justify-center mt-20">
            @if (session('notice'))
                <h3 class="alert alert-success text-center" role="alert">
                    {{ session('notice') }}
                </h3>
            @endif
        </div>  
<form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
@csrf
<div class="form-row">
        <div class="form-group col-md-4">
            <label for="name">{{ __('Product Name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="slug">{{ __('Product Slug') }}</label>
            <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required>
            @if ($errors->has('slug'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('slug') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
        <label for="description">{{ __('Description') }}</label>
        <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}">
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4 mt-2">
        <label for="price">{{ __('Price') }}</label>
        <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}">
        @if ($errors->has('price'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
        <span class="text-danger shop-discount-calculate">0%</span>
        <span class="help">discounted for this product</span>
    </div>

        <div class="form-group{{ $errors->has('discount_id') ? ' has-error' : '' }} col-md-4 mt-2">
            <label for="discount_id">{{ __('Discount Price') }}</label>
                <select id="discount_id"  class="form-control" name="discount_id">
                <option selected disabled >Choose Discount</option>
                @if(count($discounts) > 0)
                @foreach($discounts as $discount)
                <option value="{{ $discount->id }}">{{ $discount->discount }}</option>
                @endforeach
                @endif
                </select>
            @if ($errors->has('discount_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('discount_id') }}</strong>
                </span>
            @endif
        </div>    

    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-md-4 mt-2">
            <label for="category_id">{{ __('Product Category') }}</label>
            <select id="category_id" class="form-control" name="category_id" required>
                <option >Choose Category</option>
                @if(count($categories) > 0)
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                @endif
            </select>
            @if ($errors->has('category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
            @endif
    </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4 mt-2">
            <label for="quantity">{{ __('Quantity in Shop') }}</label>
            <input id="quantity" type="text" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}">
            @if ($errors->has('quantity'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
            @endif
        </div>
        

        <div class="form-group col-md-4 mt-2">
            <label for="image">{{ __('Product Image') }}</label>
            <input id="image" type="file" class="form-control-file {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required>
            @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
    </div>
    </div>

<div class="form-group row mb-2 justify-content-center" style="margin-left:20px;">
<div class="form-check mb-2">
  <label class="form-check-label" id="feature-product">
    <input type="checkbox" class="form-check-input" name="feature_product" id="feature-product">
    Feature this product
  </label>
</div>

<div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-style">
        {{ __('Create') }}
    </button>
</div>
</div>
        </form>
    </div>
    </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function(e) { 

$("#discount_id").on('change', function () {
    let shop = $('#price').val();
    let discount = parseFloat($('#discount_id option:selected').text());
    if (discount > 0) {
        if (shop == '' || shop == 0 || shop === "NaN") {
            $('.shop-discount-calculate').html('0%');
            return;
        }
    if (shop < discount ) {
            $('.shop-discount-calculate').html('0%');
            return;
    }
        let p = Math.round((discount / 100) * shop);
        $('.shop-discount-calculate').html('&#8358;' + p);
    }  
});

});
</script>
@endsection