@extends('layouts.admin.admin')
@section('title', 'Game Sites')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.sites.index') !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">

            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Sites</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($sites as $site)
                                            <tr>
                                                <td><a href="{{route('admin.sites.show', $site->id)}}">{{$site->name}}</a></td>
                                                <td>{{$site->created_at->diffForHumans()}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
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