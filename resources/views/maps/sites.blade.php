@extends('layouts.app')
@section('title', 'UK Sites Maps')
@section('styles')

@endsection

@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="{{route('maps.sites')}}">
                    UK Site Map
                </a>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>{{$sites->count()}} Airsoft Sites</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    @foreach($counties as $county)
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 style="margin-bottom: 5px;">{{$county->name}}</h2>
                                </div>
                                <div class="col-xs-12">
                                    <div class="panel-group" id="accordion{{$county->id}}" role="tablist" aria-multiselectable="true">
                                        @foreach($county->sites as $site)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{$site->id}}">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$site->id}}" aria-expanded="false" aria-controls="collapse{{$site->id}}">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                    {{--<a href="{{route('sites.show', $site->slug)}}">--}}
                                                        {{$site->name}}
                                                    {{--</a>--}}
                                                </h4>
                                            </div>
                                            <div id="collapse{{$site->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$site->id}}">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{$site->avatar}}" alt="{{$site->name}}'s avatar" class="img-responsive">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <dl class="dl-horizontal">
                                                                <dt>Name</dt>
                                                                <dd>{{$site->name}}</dd>
                                                                <dt>Approved</dt>
                                                                <dd>Not Approved</dd>
                                                                @if($site->address)
                                                                <dt>Location</dt>
                                                                <dd>{{$site->address}}</dd>
                                                                @endif
                                                                @if($site->description)
                                                                <dt>Description</dt>
                                                                <dd>{{str_limit(strip_tags(html_entity_decode($site->description)), $limit = 500, $end = '...')}}</dd>
                                                                @endif
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection