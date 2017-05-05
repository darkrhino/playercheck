@extends('layouts.admin.admin')
@section('title', $site->name.' Game Site')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.sites.show', $site) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <div class="btn-group">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" href="{{route('admin.sites.edit', $site->id)}}">
                        Edit Site <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.sites.members.bulk', $site->id)}}">Bulk Member Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Site Members</h5>
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

@section('scripts')
@endsection