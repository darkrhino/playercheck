@extends('layouts.app')
@section('title', 'UK Stores Maps')
@section('styles')

@endsection

@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="{{route('maps.stores')}}">
                    UK Stores Map
                </a>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-info">
                    <i class="fa fa-picture-o"></i> Coming Shortly
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection