@extends('layouts.admin.admin')
@section('title', $business->name)

@push('styles')
    <link rel="stylesheet" href="{{secure_asset('components/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{secure_asset('components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{$business->name}} {!! $business->approvalStatusIcon !!}</h2>
            {!! Breadcrumbs::render('admin.businesses.show', $business) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <div class="btn-group">
                    <a href="{{route('admin.businesses.edit', $business->id)}}" class="btn btn-primary">Edit Business</a>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#destroyBusiness"><i class="fa fa-trash"></i> Delete Business</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Business Members</h5>
                                <div class="ibox-tools">
                                    <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#staffMemberModal"><i class="fa fa-user-plus"></i></button>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table id="members" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Addeded</th>
                                            <th>Tools</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($business->members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->pivot->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Latest Site Members</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table">
                                    <table id="siteMembers" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Addeded</th>
                                            <th>Tools</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($business->members as $member)
                                            <tr>
                                                <td><a href="{{route('admin.members.show', $member->id)}}">{{$member->fullName}}</a></td>
                                                <td>{{$member->pivot->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group" aria-label="Tools">
                                                        <button title="Remove User" @if($business->members->count() < 2) disabled @endif onclick="window.location.href = {{route('admin.businesses.members.destroy', [$business->id, $member->id])}}" class="btn btn-danger"><i class="fa fa-ban"></i></button>
                                                    </div>
                                                </td>
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
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>{{$business->name}} Play Sites</h5>
                            </div>
                            @if($business->sites->count() < 1)
                            <div class="ibox-content text-center">
                                <a href="{{route('admin.sites.create', ['business_id' => $business->id])}}" class="btn btn-primary">Create Site</a>
                            </div>
                            @else
                            <div class="ibox-content">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Members</th>
                                        <th>Attached Store</th>
                                        <th>Created</th>
                                        <th>Approved</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($business->sites as $site)
                                        <tr>
                                            <td><a href="{{route('admin.sites.show', $site->id)}}">{{$site->name}}</a></td>
                                            <td>{{$site->members->count()}} ({{$site->applications->count()}})</td>
                                            <td>{{$site->store->name or 'No Store'}}</td>
                                            <td>{{$site->created_at->diffForHumans()}}</td>
                                            <td>{{$site->approved_at or 'Not Approved'}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>{{$business->name}} Retail Stores</h5>
                            </div>
                            @if($business->stores->count() < 1)
                            <div class="ibox-content text-center">
                                <a href="{{route('admin.stores.create', $business->id)}}" class="btn btn-primary">Create Store</a>
                            </div>
                            @else
                            <div class="ibox-content">
                                <div class="table">
                                    <table id="stores" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Created</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($business->stores as $store)
                                            <tr>
                                                <td><a href="{{route('admin.stores.show', $store->id)}}">{{$store->name}}</a></td>
                                                <td>{{$store->created_at->format('d/m/Y H:i:s')}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal inmodal" id="staffMemberModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                {!! Form::open(['route' => ['admin.businesses.members.store', $business->id]]) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Add Staff Member to {{$business->name}}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="user_id">User</label>
                                <select name="user_id" class="chosen-select form-control" id="user_id">
                                    @foreach($users as $user)
                                        @if(!$business->members->contains($user->id))
                                            <option value="{{$user->id}}">{{$user->id}} - {{$user->fullName}} ( {{$user->name}}, <!--email_off-->{{$user->email}}<!--/email_off--> )</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Staff Member</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="modal inmodal" id="destroyBusiness" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                {!! Form::open(['route' => ['admin.businesses.destroy', $business->id]]) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-trash modal-icon"></i>
                    <h4 class="modal-title">Delete?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{secure_asset('components/chosen/chosen.jquery.js')}}"></script>
    <script src="{{secure_asset('components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{secure_asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#members').DataTable();
            $('#siteMembers').DataTable();
            $('#sites').DataTable();
            $('#stores').DataTable();
        } );
        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!", width: "100%"});
    </script>
@endpush