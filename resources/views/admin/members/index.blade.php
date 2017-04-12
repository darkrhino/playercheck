@extends('layouts.admin.admin')
@section('title', 'Members')

@section('styles')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Members</h2>
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
                                <h5>Members List ({{$members->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table class="table table-responsive">
                                        @foreach($members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->created_at->diffForHumans()}}</td>
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