@extends('layouts.admin.admin')
@section('title', $business->name)

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{$business->name}} {!! $business->approvalStatusIcon !!}</h2>
            {!! Breadcrumbs::render('admin.businesses.show', $business) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <a href="{{route('admin.businesses.edit', $business->id)}}" class="btn btn-info">Edit Business</a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Business Members</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($business->members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->pivot->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Latest Site Members</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($business->members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->pivot->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>{{$business->name}} Play Sites</h5>
                            </div>
                            @if($business->sites->count() < 1)
                            <div class="ibox-content text-center">
                                <a href="{{route('admin.sites.create', $business->id)}}" class="btn btn-primary">Create Site</a>
                            </div>
                            @else
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($business->sites as $site)
                                            <tr>
                                                <td><a href="{{route('admin.sites.show', $site->id)}}">{{$site->name}}</a></td>
                                                <td>{{$site->created_at->diffForHumans()}}</td>
                                                <td>
                                                    {{--<div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>{{$business->name}} Retail Stores</h5>
                            </div>
                            @if($business->stores->count() < 1)
                            <div class="ibox-content text-center">
                                <a href="{{route('admin.stores.create', $business->id)}}" class="btn btn-primary">Create Store</a>
                            </div>
                            @else
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($business->members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->pivot->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection