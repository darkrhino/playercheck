@extends('layouts.admin.admin')
@section('title', 'Retail Stores')

@push('styles')
    <link rel="stylesheet" href="{{secure_asset('components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.stores.index') !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <a class="btn btn-primary" href="{{route('admin.stores.create')}}">Add Store</a>
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
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Business</th>
                                            <th>Approved</th>
                                            <th>Members</th>
                                            <th>Applications</th>
                                            <th>Updated</th>
                                            <th>Created</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($stores as $store)
                                            <tr>
                                                <td><a href="{{route('admin.stores.show', $store->id)}}">{{$store->id}}</a></td>
                                                <td><a href="{{route('admin.stores.show', $store->id)}}">{{$store->name}}</a></td>
                                                <td><a href="{{route('admin.businesses.show', $store->business->id)}}">{{$store->business->name}}</a></td>
                                                @if($store->approved_by)
                                                <td class="text-primary"><i class="fa fa-check"></i></td>
                                                @else
                                                <td class="text-danger"><i class="fa fa-times"></i></td>
                                                @endif
                                                <td>0</td>
                                                <td>{{$store->updated_at->diffForHumans()}}</td>
                                                <td>{{$store->created_at->diffForHumans()}}</td>
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