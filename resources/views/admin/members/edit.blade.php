@extends('layouts.admin.admin')
@section('title', 'Edit Member: '.$member->fullName)

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.members.edit', $member) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button onclick="" class="btn btn-block btn-success">Update Information</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            
        </div>
    </div>
@endsection

@section('scripts')
@endsection