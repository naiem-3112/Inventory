@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                        <p class="pull-left">Brand List</p>
                        <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('brand.create') }}">Add new</a></button>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Brand Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $key => $brand)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $brand->brandName }}</td>
                                <td>{{ $brand->status }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('brand.edit', $brand->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('brand.delete', $brand->id) }}"><i class="fa fa-trash"></i></a>
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
