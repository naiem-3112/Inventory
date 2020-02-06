@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                        <p class="pull-left">Category List</p>
                        <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('category.create') }}">Add new</a></button>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $category->categoryName }}</td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('category.edit', $category->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" onclick="alert('Are you sure to delete!')" href="{{ route('category.delete', $category->id) }}"><i class="fa fa-trash"></i></a>
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
