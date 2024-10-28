@extends('layouts.main')
@section('content')
    <div id="main" role="main">
        <div id="ribbon">
            <span class="ribbon-button-alignment">
                <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                    <i class="fa fa-refresh"></i>
                </span>
            </span>
            <ol class="breadcrumb">
                <li>Dashboard</li><li>Settings</li>
            </ol>
        </div>
        <div class="" style="margin-top:20px !important;width: 100%;display: flex !important;justify-content: center !important;align-items: center !important;">
            <div class="col-sm-8 col-md-8 col-lg-6">

                <!-- form edit -->
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <label for="name" class="mb-2">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter ID Card" required>
                        </div>
                        <div class="col-6">
                            <label for="phone" class="mb-2">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Enter Name" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="address" class="mb-2">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="" placeholder="Enter Name" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="logo" class="mb-2">Faculty</label>
                            <input type="text" class="form-control" id="logo" name="logo" value="" placeholder="Enter Faculty" required>
                        </div>
                    </div>
                    <div class="row text-end mt-4">
                        <div class="col-12">
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </form> 

                <!-- end form edit -->
            </div>
        </div>
    </div>
@endsection
