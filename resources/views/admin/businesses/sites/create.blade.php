@extends('layouts.admin.admin')
@section('title', $business->name.' Site Creation')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.businesses.sites.create', $business) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button class="btn btn-primary" onclick="$('#siteCreation').submit()">Create Site</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            {!! Form::open(['route' => ['admin.businesses.sites.store', $business->id], 'id' => 'siteCreation']) !!}
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Site Details</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            @if(old('name'))
                                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                            @else
                                                <input type="text" id="name" name="name" class="form-control" value="{{$business->name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            @if(old('email'))
                                                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                            @else
                                                <input type="email" id="email" name="email" class="form-control" value="{{$business->email}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            @if(old('phone_number'))
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{old('phone_number')}}">
                                            @else
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{$business->primary_phone_number}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_number">Company Number</label>
                                            @if(old('company_number'))
                                                <input type="text" id="company_number" name="company_number" class="form-control" value="{{old('company_number')}}">
                                            @else
                                                <input type="text" id="company_number" name="company_number" class="form-control" value="{{$business->company_number}}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Site Social</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website_url">Website URL</label>
                                            @if(old('website_url'))
                                                <input type="url" id="website_url" name="website_url" class="form-control" value="{{old('website_url')}}">
                                            @else
                                                <input type="url" id="website_url" name="website_url" class="form-control" value="{{$business->website_url}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook_url">Facebook URL</label>
                                            @if(old('facebook_url'))
                                                <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{old('facebook_url')}}">
                                            @else
                                                <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{$business->facebook_url}}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="twitter_url">Twitter URL</label>
                                            @if(old('twitter_url'))
                                                <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="{{old('twitter_url')}}">
                                            @else
                                                <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="{{$business->twitter_url}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instagram_url">Instagram URL</label>
                                            @if(old('instagram_url'))
                                                <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{old('instagram_url')}}">
                                            @else
                                                <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{$business->instagram_url}}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="linkedin_url">Linkedin URL</label>
                                            @if(old('linkedin_url'))
                                                <input type="url" id="linkedin_url" name="linkedin_url" class="form-control" value="{{old('linkedin_url')}}">
                                            @else
                                                <input type="url" id="linkedin_url" name="linkedin_url" class="form-control" value="{{$business->linkedin_url}}">
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
        </div>
    </div>

@endsection

@section('scripts')
@endsection