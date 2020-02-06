@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                            <p class="pull-left">Edit Category Info</p>
                            <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('category.list') }}">View List</a></button>
                        </div>
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="categoryName" class="form-control" value="{{ $category->categoryName }}">
                                @if($errors->has('categoryName'))
                                    <span class="error" style="color: red">{{ $errors->first('categoryName') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value = "1" {{$category->status== 1?'selected': ''}}>Active</option>
                                    <option value = "0" {{$category->status== 0?'selected': ''}}>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="error" style="color: red">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
