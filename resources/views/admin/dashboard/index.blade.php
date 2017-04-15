@extends('layouts.admin.admin')
@section('title', 'PlayerCheck Admin Area')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Dashboard</h2>
            {!! Breadcrumbs::render() !!}
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Users</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{'0/'.$users->count()}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Businesses</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{'0/'.$businesses->count()}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Requests</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{'0/0'}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sites</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{'0/0'}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Stores</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{'0/0'}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection