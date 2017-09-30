@extends('layouts.admin.admin')
@section('title', 'Members')

@push('styles')
    <link rel="stylesheet" href="{{secure_asset('components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Members</h2>
            {!! Breadcrumbs::render() !!}
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Members List ({{$members->count()}})</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Business</th>
                                            <th>Site</th>
                                            <th>Level</th>
                                            <th>Joined</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->id}}</a></td>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">
                                                        {{$member->fullName}}
                                                        @if($member->hasRole('staff'))
                                                            <span class="label label-info">Staff</span>
                                                        @endif
                                                    </a></td>
                                                <td>{{$member->businesses->first()->name or 'No Association'}}</td>
                                                <td>{{$member->sites->first()->name or 'No Association'}}</td>
                                                <td>{{$member->role}}</td>
                                                <td>{{$member->created_at->diffForHumans()}}</td>
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
    </div>
@endsection

@push('scripts')
    <script src="{{secure_asset('components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{secure_asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush