@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                            <p class="pull-left">Edit Brand Info</p>
                            <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('brand.list') }}">View List</a></button>
                        </div>
                        <form action="{{ route('brand.update', $brand->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="brandName" class="form-control" value="{{ $brand->brandName }}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value = "1" {{$brand->status== 1?'selected': ''}}>Active</option>
                                    <option value = "0" {{$brand->status== 0?'selected': ''}}>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Update Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
