@extends('layouts.admin.admin')
@section('title', 'Create a Site')
@section('styles')
    <link href="{{secure_asset('/components/chosen/chosen.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title') @if($business)for {{$business->name}}@endif</h2>
            {!! Breadcrumbs::render('admin.sites.create') !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button onclick="$('#siteCreationForm').submit()" class="btn btn-primary">Create Site</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        {!! Form::open(['route' => 'admin.sites.store', 'id' => 'siteCreationForm']) !!}
        <div class="row">
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
                                                @if($business)
                                                <input type="text" id="name" name="name" class="form-control" value="{{$business->name}}">
                                                @else
                                                <input type="text" id="name" name="name" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            @if(old('email'))
                                                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                            @else
                                                @if($business)
                                                <input type="email" id="email" name="email" class="form-control" value="{{$business->email}}">
                                                @else
                                                <input type="email" id="email" name="email" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            @if(old('phone_number'))
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{old('phone_number')}}">
                                            @else
                                                @if($business)
                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{$business->primary_phone_number}}">
                                                @else
                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_number">Company Number</label>
                                            @if(old('company_number'))
                                                <input type="text" id="company_number" name="company_number" class="form-control" value="{{old('company_number')}}">
                                            @else
                                                @if($business)
                                                    <input type="text" id="company_number" name="company_number" class="form-control" value="{{$business->company_number}}">
                                                @else
                                                    <input type="text" id="company_number" name="company_number" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="business_id">Business</label>
                                            <select name="business_id" id="business_id" class="form-control chosen-select" data-placeholder="Available Businesses">
                                                <option value=""></option>
                                                @foreach(\PC\Business\Business::all() as $business_list)
                                                    @if($business && $business_list->id == $business->id)
                                                    <option selected value="{{$business_list->id}}">{{$business_list->name}}</option>
                                                    @else
                                                    <option value="{{$business_list->id}}">{{$business_list->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
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
                                                @if($business)
                                                    <input type="url" id="website_url" name="website_url" class="form-control" value="{{$business->website_url}}">
                                                @else
                                                    <input type="url" id="website_url" name="website_url" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook_url">Facebook URL</label>
                                            @if(old('facebook_url'))
                                                <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{old('facebook_url')}}">
                                            @else
                                                @if($business)
                                                    <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{$business->facebook_url}}">
                                                @else
                                                    <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="">
                                                @endif
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
                                                @if($business)
                                                    <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="{{$business->twitter_url}}">
                                                @else
                                                    <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instagram_url">Instagram URL</label>
                                            @if(old('instagram_url'))
                                                <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{old('instagram_url')}}">
                                            @else
                                                @if($business)
                                                    <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{$business->instagram_url}}">
                                                @else
                                                    <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="">
                                                @endif
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
                                                @if($business)
                                                    <input type="url" id="linkedin_url" name="linkedin_url" class="form-control" value="{{$business->linkedin_url}}">
                                                @else
                                                    <input type="url" id="linkedin_url" name="linkedin_url" class="form-control" value="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{secure_asset('components/chosen/chosen.jquery.js')}}"></script>
    <script>
        $('.chosen-select').chosen({width: "100%", max_selected_options: 1});
    </script>
@endsection