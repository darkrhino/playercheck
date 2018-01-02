@extends('layouts.admin.admin')
@section('title', 'Store: '.$store->name)

@push('styles')
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.stores.show', $store) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Edit Store</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.businesses.show', $store->business->id)}}">Business Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        @if(!$store->approved_by)
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-content text-center p-md">
                        <h2>
                            <span class="text-navy">Approve this store?</span>
                        </h2>
                        <p>
                            Please review the details below then take action here.
                        </p>
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('admin.stores.approve', $store->id)}}" class="btn btn-primary"><i class="fa fa-check"></i> Approve</a>
                            <a href="{{route('admin.stores.reject', $store->id)}}" class="btn btn-danger"><i class="fa fa-times"></i> Reject</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                Store Details
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <address>
                                            <strong>Name</strong><br>
                                            {{$store->name}} @if($store->company_name)({{$store->company_name}})@endif<br>
                                        @if($store->address)
                                            <strong>Address</strong><br>
                                            {{$store->address}}<br>
                                        @endif
                                        @if($store->email)
                                            <strong>Email</strong><br>
                                            <a href="mailto:{{$store->email}}">{{$store->email}}</a><br>
                                        @endif
                                        </address>
                                    </div>
                                    <div class="col-md-4">
                                        <address>
                                            @if($store->phone_number)
                                            <strong>Phone Number</strong><br>
                                            <a href="tel:{{$store->phone_number}}">{{$store->phone_number}}</a><br>
                                            @endif
                                            @if($store->website_url)
                                            <strong>Website</strong><br>
                                            <a target="new"  href="{{$store->website_url}}">{{$store->website_url}}</a><br>
                                            @endif
                                            <strong>Primary Business</strong><br>
                                            <a href="{{$store->business->name}}">{{$store->business->name}}</a>
                                        </address>
                                    </div>
                                    <div class="col-md-4">
                                        <address>
                                            @if($store->facebook_url)
                                                <strong>Facebook Page</strong><br>
                                                <a target="new"href="{{$store->facebook_url}}">{{$store->facebook_url}}</a><br>
                                            @endif
                                            @if($store->twitter_url)
                                                <strong>Twitter Page</strong><br>
                                                <a target="new" href="{{$store->twitter_url}}">{{$store->twitter_url}}</a><br>
                                            @endif
                                            @if($store->instagram_url)
                                                <strong>Instagram Page</strong><br>
                                                <a target="new" href="{{$store->instagram_url}}">{{$store->instagram_url}}</a><br>
                                            @endif
                                            @if($store->linkedin_url)
                                                <strong>LinkedIn Page</strong><br>
                                                <a target="new" href="{{$store->linkedin_url}}">{{$store->linkedin_url}}</a><br>
                                            @endif
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                Store Requests
                            </div>
                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                Store Map
                            </div>
                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush