@extends('layouts.app')
@section('title', 'Help Centre')

@section('styles')
@endsection

@section('content')
    <div role="main">
        <div class="pagehead explore-head">
            <div class="container">
                <nav class="underline-nav float-right" role="navigation" data-pjax="">

                </nav>
                <h1>
                    <a class="pagehead-heading" href="{{route('help.index')}}">
                        Help Centre
                    </a>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-info">
                        <p>This should be updated shortly with questions from the community response forums..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="ibox">
                                <div class="ibox-content">

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