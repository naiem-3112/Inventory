@extends('layouts.backend.master')
@section('master.content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h3>Add Brand</h3>
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
                                <label>Brand Name</label>
                                <input type="text" name="brandName" class="form-control" placeholder="Enter brand name">
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Add Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
