@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                            <p class="pull-left">Add Product</p>
                            <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('product.list') }}">View List</a></button>
                        </div>
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="productName" value="{{ old('productName') }}" class="form-control" placeholder="Enter product name">
                                @if($errors->has('productName'))
                                    <span class="error" style="color: red">{{ $errors->first('productName') }}</span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <select name="brand_id" class="form-control">
                                        <option selected disabled>Select Brand</option>
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
                                    <option selected disabled>Select Category</option>
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
                                <input type="number" name="buyingPrice" value="{{ old('buyingPrice') }}" class="form-control" placeholder="Enter product buying price">
                                @if($errors->has('buyingPrice'))
                                    <span class="error" style="color: red">{{ $errors->first('buyingPrice') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="number" name="sellingPrice" value="{{ old('sellingPrice') }}" class="form-control" placeholder="Enter product selling price">
                                @if($errors->has('sellingPrice'))
                                    <span class="error" style="color: red">{{ $errors->first('sellingPrice') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected disabled>Select</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="error" style="color: red">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Add Product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
