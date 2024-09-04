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
                <!-- product -->
                <div class="product-content product-wrap clearfix" style="margin: 0;border-radius: 10px !important;">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image text-center" style="background-color: rgba(232,238,243,0) !important;">
                                <img src="{{asset('logo/logo.jpg')}}"
                                     style="width: 50% !important;border-radius: 8px !important;margin-top: 30px">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-deatil row" style="margin: 0 !important;padding-right: 0 !important;padding-left: 0 !important;">
                                <div class="col-xs-9 col-sm-9 col-md-9 col-xl-9" style="padding: 0 !important;margin: 0 !important;">
                                    <h5 class="name">
                                        {{$settings_->name??''}}
                                    </h5>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-xl-3 text-right" style="padding-left: 0 !important;margin: 0 !important;pad">
                                    <button class="btn btn-md btn-primary">Edit</button>
                                </div>
                            </div>
                            <div class="description">
                                <p>{{$settings_->phone??''}}</p>
                                <p>{{$settings_->address??''}}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end product -->
            </div>
        </div>
    </div>
@endsection
