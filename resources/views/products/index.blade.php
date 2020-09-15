@extends('layouts.admin.app')
@section('title', 'Products')
@section('content')
<div class="container-fluid">
    <h4 class="mt-2">Dashboard</h4>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Products</li>
    </ol>
<div class="row">
   <div class="col-md-12">
    @if (session('notice'))
    <div class="row justify-content-center">     
       <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('notice') }}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
           </button>
       </div>
   </div>
   
    @endif  
       <div class="card mb-2"> 
           <div class="card-header text-center text-success"><i class="fa fa-product-hunt fa-lg" aria-hidden="true"></i> Products</div>
           <div class="card-body">
                <a href="{{ url('/admin/dashboard') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
               <a href="{{ url('products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                   <i class="fa fa-plus" aria-hidden="true"></i> Add Product
               </a>
               <br/>
               <div class="table-responsive mt-4">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="dataTable" >
                       <thead>
                           <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Product Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                       @foreach($products as $item)
                           <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->categories[0]['name'] }}</td>
                            @if ($item->status == 0)
                                <td> {{ __('Not active')}} </td>
                            @else
                            <td> {{ __('Active')}} </td>
                            @endif
                            <td>
                                <a href="{{ url('products/' . $item->id ) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                @if(Auth::user()->hasRole('admin'))
                                <form method="POST" action="{{ url('products/'. $item->id) }}" role="form" style="display:inline;">
                                 {{ method_field('DELETE') }} 
                                 @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick= "return confirm('Confirm delete?')">
                                            <i class="fa fa-trash-o" aria-hidden="true"> {{ __('Delete') }} </i>
                                    </button>
                                </form>
                                @endif
                            </td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
@endsection