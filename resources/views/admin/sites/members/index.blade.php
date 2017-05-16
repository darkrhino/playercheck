@extends('layouts.admin.admin')
@section('title', $site->name.' Members')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <!-- Split button -->
                <div class="btn-group">
                    <a href="{{route('admin.sites.members.create', $site->id)}}" class="btn btn-primary">Add Member</a>
                    <a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.sites.members.bulk', $site->id)}}">Bulk Import</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Members List</h5>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Defences</th>
                                        <th>Approved</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($site->members as $member)
                                    <tr>
                                        <td>{{$member->id}}</td>
                                        <td>{{$member->fullName}}</td>
                                        <td>Expired</td>
                                        <td>Approved</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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