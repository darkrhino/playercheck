@extends('layouts.admin.admin')
@section('title', 'Business Creation')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Create a Business</h2>
            {!! Breadcrumbs::render() !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button onclick="$('#createForm').submit();" class="btn btn-primary">Submit <i class="fa fa-check"></i></button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    {!! Form::open(['route' => 'admin.businesses.store', 'id' => 'createForm']) !!}
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <small class="pull-right text-gray">All fields are required</small>
                                    <h5>Business Details</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                       placeholder="Commonly Known Name" value="{{old('name')}}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="address_1">Trading Address Line 1</label>
                                                <input type="text" id="address_1" name="address_1"
                                                       class="form-control" placeholder="123 Pew Street"
                                                       value="{{old('address_1')}}">
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="postcode">Trading Address Postcode</label>
                                                <input type="text" id="postcode" name="postcode"
                                                       class="form-control" placeholder="PE49EW"
                                                       value="{{old('postcode')}}">
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="company_number">Trading Company Number</label>
                                                <input type="text" id="company_number" name="company_number"
                                                       class="form-control" placeholder="Registered Company Number"
                                                       value="{{old('company_number')}}">
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="primary_phone_contact">Primary Contact Number</label>
                                                <input type="text" id="primary_phone_contact" name="primary_phone_contact"
                                                       class="form-control" placeholder="Validation Only"
                                                       value="{{old('primary_phone_contact')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection