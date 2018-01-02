@extends('layouts.admin.admin')
@section('title', '')

@push('styles')
    <link rel="stylesheet" href="{{secure_asset('components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Requests</h2>
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
                                <h5>Requests Codes</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Code</th>
                                            <th>User</th>
                                            <th>Claimed</th>
                                            <th>Claimed At</th>
                                            <th>Expired</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($requests as $request)
                                            <tr>
                                                <td>{{$request->id}}</td>
                                                <td>{{$request->code}}</td>
                                                <td>{{$request->user->fullName}}</td>
                                                <td>{{$request->claimed->fullName or 'Unclaimed'}}</td>
                                                <td>{{$request->claimed_at or 'Unclaimed'}}</td>
                                                <td>{{$request->expired}}</td>
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
            <div class="col-md-12">

            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{secure_asset('components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{secure_asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [[ 0, "desc" ]]
            });
        } );
    </script>
@endpush