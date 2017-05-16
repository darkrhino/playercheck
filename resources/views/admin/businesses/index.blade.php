@extends('layouts.admin.admin')
@section('title', 'Businesses')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Businesses</h2>
            {!! Breadcrumbs::render() !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <a class="btn btn-primary" href="{{route('admin.businesses.create')}}">Add Business</a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Pending ({{$businesses->where('approved_at', null)->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                @if($businesses->where('approved_at', null)->count() > 0)
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Creator</th>
                                        <th>Staff Members</th>
                                        <th>Game Sites</th>
                                        <th>Retail Stores</th>
                                        <th>Created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($businesses->where('approved_at', null) as $business)
                                    <tr>
                                        <td><a href="{{route('admin.businesses.show', $business->id)}}">{{$business->name}}</a></td>
                                        <td><a href="{{route('admin.members.show', $business->members->first()->id)}}">{{$business->members->first()->fullName}}</a></td>
                                        <td>{{$business->members->count()}}</td>
                                        <td>{{$business->sites->count()}}</td>
                                        <td>{{$business->stores->count()}}</td>
                                        <td>{{$business->created_at->diffForHumans()}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <p>No Pending Applications</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Approved ({{$businesses->where('approved_at', '!=', null)->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                @if($businesses->where('approved_at', '!=', null)->count() > 0)
                                <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Creator</th>
                                            <th>Staff Members</th>
                                            <th>Game Sites</th>
                                            <th>Retail Stores</th>
                                            <th>Created</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($businesses->where('approved_at', '!=', null) as $business)
                                            <tr>
                                                <td><a href="{{route('admin.businesses.show', $business->id)}}">{{$business->name}}</a></td>
                                                <td><a href="{{route('admin.members.show', $business->members->first()->id)}}">{{$business->members->first()->fullName}}</a></td>
                                                <td>{{$business->members->count()}}</td>
                                                <td>{{$business->sites->count()}}</td>
                                                <td>{{$business->stores->count()}}</td>
                                                <td>{{$business->created_at->diffForHumans()}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No Pending Applications</p>
                                @endif
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