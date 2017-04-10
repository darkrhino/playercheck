@extends('layouts.app')
@section('title', 'Requests')
@section('style')

@endsection

@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="{{route('requests.index')}}">
                    Requests
                </a>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-info">
                    <i class="fa fa-info-circle"></i> You have no requests
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection