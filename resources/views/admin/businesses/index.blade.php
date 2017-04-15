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

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Pending ({{$businesses->where('approved', null)->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                @if($businesses->where('approved', null)->count() > 0)
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($businesses->where('approved', null) as $business)
                                            <tr>
                                                <td><a href="{{route('admin.businesses.show', $business->id)}}">{{$business->name}}</a></td>
                                                <td>{{$business->created_at->diffForHumans()}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @else
                                <p>No Pending Applications</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Approved ({{$businesses->where('approved', '!=', null)->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                @if($businesses->where('approved', '!=', null)->count() > 0)
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($businesses->where('approved', '!=', null) as $business)
                                            <tr>
                                                <td><a href="{{route('admin.businesses.show', $business->id)}}">{{$business->name}}</a></td>
                                                <td>{{$business->created_at->diffForHumans()}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @else
                                    <p>No Approved Applications</p>
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