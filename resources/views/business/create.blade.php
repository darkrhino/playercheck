@extends('layouts.app')
@section('title', 'Create a new Business')

@section('styles')
@endsection

@section('content')

    <div role="main">
        <div class="pagehead explore-head">
            <div class="container">
                <nav class="underline-nav float-right" role="navigation" data-pjax="">

                </nav>
                <h1>
                    <a class="pagehead-heading" href="{{route('business.create')}}">
                        Business Creation
                    </a>
                </h1>
            </div>
        </div>
        <div class="explore-pjax-container explore-page">

            <div class="explore-section" id="explore-featured">
                <div class="container">
                    <div class="explore-marketing-header">
                        <h2>Start Protecting Your Business</h2>
                        <p class="lead mb-3">
                            Adding your Business to PlayerCheck allows you to attach stores to do requests and sites
                            to validate players. You can track requests inside the business dashboard once approved.
                        </p>
                    </div>
                    <div class="row">
                        {!! Form::open() !!}
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
                                                        <label for="primary_contact_number">Primary Contact Number</label>
                                                        <input type="text" id="primary_contact_number" name="primary_contact_number"
                                                               class="form-control" placeholder="Validation Only"
                                                               value="{{old('primary_contact_number')}}">
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