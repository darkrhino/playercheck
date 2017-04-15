@extends('layouts.admin.admin')
@section('title', $member->fullName)

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Member: {{$member->titledFullName}}</h2>
            {!! Breadcrumbs::render('admin.members.show', $member) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <a class="btn btn-info btn-block" href="{{route('admin.members.edit', $member->id)}}">Edit Member</a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection