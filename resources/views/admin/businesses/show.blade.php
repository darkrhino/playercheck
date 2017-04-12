@extends('layouts.admin.admin')
@section('title', $business->name)

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{$business->name}} {{$business->approvalStatusIcon}}</h2>
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
        </div>
    </div>

@endsection

@section('scripts')
@endsection