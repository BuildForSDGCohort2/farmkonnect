@extends('layouts.admin.app')
@section('title', 'Show Product Details')
@section('content')
<div class="container-fluid">
        <h1 class="mt-2">Dashboard</h1>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Products</li>
            <li class="breadcrumb-item active">Show Product</li>
        </ol>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header text-center"> <b> {{ $product->title }} </b>product</div>
                <div class="card-body">
                    <a href="{{ url('products/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('products/' . $product->id . '/edit') }}" title="Edit product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    @if(Auth::user()->hasRole('admin'))
                    <form method="DELETE" action="{{ url('products/'. $product->id) }}" role="form" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete product" onclick= "return confirm('Confirm delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"> {{ __('Delete') }} </i>
                        </button>
                    </form>
                    @endif
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>ID</th><td>{{ $product->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $product->name }} </td></tr>
                            <tr><th> Description </th><td> {{ $product->description }} </td></tr>
                            <tr><th> Quantity </th><td> {{ $product->quantity }} </td></tr>
                            <tr><th>Price </th><td> {{ $product->price }} </td></tr>
                            <tr><th> Product Status </th>
                            @if ($product->status == 0)
                                <td> {{ __('Not active')}} </td>
                            @else
                            <td> {{ __('Active')}} </td>
                            @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
