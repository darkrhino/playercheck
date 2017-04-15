@extends('layouts.admin.admin')
@section('title', $business->name)

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>
                Edit {{$business->name}} {!! $business->approvalStatusIcon !!}
            </h2>
            {!! Breadcrumbs::render('admin.businesses.edit', $business) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button onclick="$('#edit-form').submit()" class="btn btn-info btn-block">Update</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            {!! Form::open(['id' => 'edit-form', 'route' => ['admin.businesses.update', $business->id], 'method' => 'patch']) !!}
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Business Details</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            @if(old('name'))
                                            <input type="text" id="name" name="name" class="form-control"
                                                   placeholder="Commonly Known Name" value="{{old('name')}}">
                                            @else
                                            <input type="text" id="name" name="name" class="form-control"
                                                   placeholder="Commonly Known Name" value="{{$business->name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_1">Trading Address Line 1</label>
                                            @if(old('address_1'))
                                            <input type="text" id="address_1" name="address_1"
                                                   class="form-control" placeholder="123 Pew Street"
                                                   value="{{old('address_1')}}">
                                            @else
                                            <input type="text" id="address_1" name="address_1"
                                                   class="form-control" placeholder="123 Pew Street"
                                                   value="{{$business->address_1}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_2">Trading Address Line 2</label>
                                            @if(old('address_2'))
                                                <input type="text" id="address_2" name="address_2"
                                                       class="form-control" placeholder="123 Pew Street"
                                                       value="{{old('address_2')}}">
                                            @else
                                                <input type="text" id="address_2" name="address_2"
                                                       class="form-control" placeholder="123 Pew Street"
                                                       value="{{$business->address_2}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_3">Trading Address Line 3</label>
                                            @if(old('address_3'))
                                                <input type="text" id="address_3" name="address_3"
                                                       class="form-control" placeholder="123 Pew Street"
                                                       value="{{old('address_3')}}">
                                            @else
                                                <input type="text" id="address_3" name="address_3"
                                                       class="form-control" placeholder="123 Pew Street"
                                                       value="{{$business->address_3}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="postcode">Trading Address Postcode</label>
                                            @if(old('postcode'))
                                            <input type="text" id="postcode" name="postcode"
                                                   class="form-control" placeholder="PE49EW"
                                                   value="{{old('postcode')}}">
                                            @else
                                            <input type="text" id="postcode" name="postcode"
                                                   class="form-control" placeholder="PE49EW"
                                                   value="{{$business->postcode}}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_number">Trading Company Number</label>
                                            @if(old('company_number'))
                                            <input type="text" id="company_number" name="company_number"
                                                   class="form-control" placeholder="Registered Company Number"
                                                   value="{{old('company_number')}}">
                                            @else
                                            <input type="text" id="company_number" name="company_number"
                                                   class="form-control" placeholder="Registered Company Number"
                                                   value="{{$business->company_number}}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="primary_phone_contact">Primary Contact Number</label>
                                            @if(old('primary_phone_contact'))
                                            <input type="text" id="primary_phone_contact" name="primary_phone_contact"
                                                   class="form-control" placeholder="Validation Only"
                                                   value="{{old('primary_phone_contact')}}">
                                            @else
                                            <input type="text" id="primary_phone_contact" name="primary_phone_contact"
                                                   class="form-control" placeholder="Validation Only"
                                                   value="{{$business->primary_phone_contact}}">
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Business Controls</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    @if(!$business->approved)
                                        <div class="col-xs-12">
                                            {!! Form::open(['route' => ['admin.businesses.approve', $business->id], 'method' => 'patch']) !!}
                                            <button type="submit" class="btn btn-block btn-success">Approve</button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-xs-12" style="margin-top: 10px;">
                                            {!! Form::open(['route' => ['admin.businesses.reject', $business->id]]) !!}
                                            <button type="submit" class="btn btn-block btn-danger">Reject</button>
                                            {!! Form::close() !!}
                                        </div>
                                    @else
                                        <div class="col-xs-12">
                                            {!! Form::open(['route' => ['admin.businesses.suspend', $business->id], 'method' => 'patch']) !!}
                                            <button type="submit" class="btn btn-block btn-warning">Suspend</button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-xs-12" style="margin-top: 10px;">
                                            {!! Form::open(['route' => ['admin.businesses.suspend', $business->id], 'method' => 'patch']) !!}
                                            <button type="submit" class="btn btn-block btn-info">Suspend</button>
                                            {!! Form::close() !!}
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection