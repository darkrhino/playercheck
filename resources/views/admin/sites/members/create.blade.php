@extends('layouts.admin.admin')
@section('title', 'Create Site Member')

@section('styles')
    <link rel="stylesheet" href="{{secure_asset('/assets/css/plugins/datapicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <style>
        .placepicker-map {
            min-height: 250px;
        }
    </style>
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>@yield('title')</h2>
            {!! Breadcrumbs::render('admin.sites.members.create', $site) !!}
        </div>
        <div class="col-lg-2">
            <div class="title-action">
                <button onclick="$('#bulkForm').submit()" class="btn btn-primary">Invite</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        {!! Form::open(['id' => 'bulkForm', 'route' => ['admin.sites.members.store', $site->id]]) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Member Details</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" class="form-control" name="first_name" placeholder="John" value="{{old('first_name')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Doe" value="{{old('last_name')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="johndoe@example.com" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    @if(old('dob'))
                                    <input type="date" id="dob" name="dob" class="form-control" placeholder="" value="{{old('dob')}}">
                                    @else
                                    <input type="date" id="dob" name="dob" class="form-control" placeholder="" value="{{\Carbon\Carbon::now()->addYears(-18)->format('d/m/Y')}}">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="home_number">Home Telephone</label>
                                    <input type="text" id="home_number" name="home_number" class="form-control" placeholder="" value="{{old('home_number')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_number">Mobile Telephone</label>
                                    <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="" value="{{old('mobile_number')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Member Address</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="location">Address</label>
                                    <input type="text" id="location" data-map-container-id="collapseOne"
                                           name="location" value="London" class="placepicker form-control">
                                </div>
                                <div id="collapseOne" class="collapse">
                                    <div class="placepicker-map thumbnail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Exciting Player Defence Data</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="ukara_number">UKARA Number</label>
                                            <input type="text" id="ukara_number" name="ukara_number" class="form-control" value="{{old('ukara_number')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ukara_date">Date of UKARA</label>
                                            @if(old('ukara_date'))
                                                <input type="date" id="ukara_date" name="ukara_date" class="form-control" placeholder="" value="{{old('ukara_date')}}">
                                            @else
                                                <input type="date" id="ukara_date" name="ukara_date" class="form-control" placeholder="" value="{{\Carbon\Carbon::now()->addYears(-18)->format('d/m/Y')}}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="bac_number">BAC Number</label>
                                            <input type="text" id="bac_number" name="bac_number" class="form-control" value="{{old('bac_number')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bac_date">Date of BAC</label>
                                            @if(old('bac_date'))
                                                <input type="date" id="bac_date" name="bac_date" class="form-control" placeholder="" value="{{old('bac_date')}}">
                                            @else
                                                <input type="date" id="bac_date" name="bac_date" class="form-control" placeholder="" value="{{\Carbon\Carbon::now()->addYears(-18)->format('d/m/Y')}}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    {{--<script src="{{secure_asset('/components/moment/min/moment.min.js')}}"></script>
    <script src="{{secure_asset('/components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>--}}
    <script src="http://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&sensor=true&libraries=places"></script>
    <script src="{{secure_asset('/components/jquery-placepicker/dist/js/jquery.placepicker.min.js')}}"></script>
    <script>
        $(function(){
            $(".placepicker").placepicker();
            $('.dob').datepicker({
                keyboardNavigation: false,
                format: 'dd/mm/yyyy',
                forceParse: false,
                calendarWeeks: false,
                autoclose: true,
                useCurrent: true,
                minDate:new Date()
            });
        })
    </script>
@endsection