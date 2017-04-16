@extends('layouts.dashboard.index')
@section('title', 'Apply for a Retail Account')
@section('styles')
    <style>
        .placepicker-map {
            min-height: 250px;
        }
    </style>
@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="container">
            @include('control.static.notice')
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <button class="btn btn-primary pull-right" onclick="$('#store_create').submit()" type="submit">Submit <i class="fa fa-check"></i></button>
                        <h2>Apply for a Retail Account</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">

                        {!! Form::open(['id' => 'store_create', 'route' => ['control.store.store', $business->id], 'enctype' => 'multipart/form-data', 'files']) !!}
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Store Details</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="name">Store Name</label>
                                                @if(old('name'))
                                                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                                @else
                                                    <input type="text" id="name" name="name" class="form-control" value="{{$business->name.' Retail Store'}}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_number">Company Number (if different)</label>
                                                @if(old('company_number'))
                                                    <input type="text" id="company_number" name="company_number"
                                                           class="form-control" placeholder="Registered Company Number"
                                                           value="{{old('company_number')}}">
                                                @else
                                                    <input type="text" id="company_number" name="company_number"
                                                           class="form-control" placeholder="Registered Company Number"
                                                           value="{{$business->company_number}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="logo">Store Logo</label>
                                                <input type="file" id="logo" name="logo" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="address">Registered Address</label>
                                                @if(old('address'))
                                                <input type="text" id="address" data-map-container-id="collapseOne"
                                                       name="address" value="{{old('address')}}" class="placepicker form-control">
                                                @else
                                                <input type="text" id="address" data-map-container-id="collapseOne"
                                                       name="address" value="London" class="placepicker form-control">
                                                @endif
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
                                    <h5>Store Contact Details</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Store Email Address</label>
                                                @if(old('email'))
                                                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                                @else
                                                    <input type="email" id="email" name="email" class="form-control" value="{{$business->email}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone_number">Store Phone Number</label>
                                                @if(old('phone_number'))
                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{old('phone_number')}}">
                                                @else
                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{$business->primary_phone_contact}}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Store URLs</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website_url">Store Website</label>
                                                <input type="url" id="website_url" name="website_url" class="form-control" value="{{old('website_url')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="facebook_url">Facebook URL</label>
                                                <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{old('facebook_url')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="twitter_url">Twitter URL</label>
                                                <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="{{old('twitter_url')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="instgram_url">Instgram URL</label>
                                                <input type="url" id="instgram_url" name="instgram_url" class="form-control" value="{{old('instgram_url')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="youtube_url">YouTube URL</label>
                                                <input type="url" id="youtube_url" name="youtube_url" class="form-control" value="{{old('youtube_url')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="linkedin_url">Linkedin URL</label>
                                                <input type="url" id="linkedin_url" name="linkedin_url" class="form-control" value="{{old('linkedin_url')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-check"></i></button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="text-center">
                                <h2>Get the Shield!</h2>
                                <img src="https://d2zx08b2bgj27.cloudfront.net/assets/images/logo-web.png"
                                     alt="Get the Shield" class="img-responsive center-block">
                                <p>
                                    Approval grants you permission to display the shield to buyers, this not only promotes
                                    a compliance to protect the sport but shows that your a trusted retailer.
                                </p>
                            </div>
                            <hr class="hr-line-dashed hidden-sm" style="margin: 20px 0; border-top: 1px dashed #8c8c8c; background-color: #f3f3f4;">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="text-center">
                                <h2>No Worries</h2>
                                <img src="data:image/png;base64,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"
                                     alt="Get the Shield" class="img-responsive center-block">
                                <p>
                                    If you fill this out incorrectly you can edit this after its reviewed. We contact
                                    you if errors are found or if we have questions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function(){
            $(".placepicker").placepicker();
            let glyp = $('span.glyphicon');
            glyp.addClass('fa').addClass('fa-globe').removeClass('glyphicon-globe');
        });
    </script>
    <script src="http://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&sensor=true&libraries=places"></script>
    <script src="{{secure_asset('/components/jquery-placepicker/dist/js/jquery.placepicker.min.js')}}"></script>
@endsection