@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                            <p class="pull-left">Edit Product Info</p>
                            <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('product.list') }}">View List</a></button>
                        </div>
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="productName" value="{{ $product->productName }}" class="form-control">
                                @if($errors->has('productName'))
                                    <span class="error" style="color: red">{{ $errors->first('productName') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Brand</label>
                                <select name="brand_id" class="form-control">
                                    <option selected value="{{ $product->brand_id }}">{{ $product->brand->brandName }}</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brandName }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('brand_id'))
                                    <span class="error" style="color: red">{{ $errors->first('brand_id') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <option selected value="{{ $product->category_id }}">{{ $product->category->categoryName }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                    <span class="error" style="color: red">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Buying Price</label>
                                <input type="number" name="buyingPrice" value="{{ $product->buyingPrice }}" class="form-control">
                                @if($errors->has('buyingPrice'))
                                    <span class="error" style="color: red">{{ $errors->first('buyingPrice') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="number" name="sellingPrice" value="{{ $product->sellingPrice }}" class="form-control">
                                @if($errors->has('sellingPrice'))
                                    <span class="error" style="color: red">{{ $errors->first('sellingPrice') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value = "1" {{$brand->status== 1?'selected': ''}}>Active</option>
                                    <option value = "0" {{$brand->status== 0?'selected': ''}}>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="error" style="color: red">{{ $errors->first('status') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Update Product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
