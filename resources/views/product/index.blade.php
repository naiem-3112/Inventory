@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-12 offset-sm-3">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                        <p class="pull-left">Product List</p>
                        <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('product.create') }}">Add new</a></button>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $product)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->brand->brandName }}</td>
                                <td>{{ $product->category->categoryName }}</td>
                                <td>{{ $product->buyingPrice }}</td>
                                <td>{{ $product->sellingPrice }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('product.edit', $product->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" onclick="alert('Are you sure to delete!')" href="{{ route('product.delete', $product->id) }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
