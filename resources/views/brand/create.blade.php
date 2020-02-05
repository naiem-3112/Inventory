@extends('layouts.backend.master')
@section('master.content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h3>Add Product</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <form>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="productName" class="form-control" placeholder="Enter product name">
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <select name="brand_id" class="form-control">
                                    <option selected disabled>Select Brand</option>
                                    <option value="">brand 1</option>
                                    <option value="">brand 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <option selected disabled>Select Category</option>
                                    <option value="">category 1</option>
                                    <option value="">category 2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Buying Price</label>
                                <input type="number" name="buyingPrice" class="form-control" placeholder="Enter product buying price">
                            </div>
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="number" name="sellingPrice" class="form-control" placeholder="Enter product selling price">
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
