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
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <button class="btn btn-xs btn-default pull-right">Generate</button>
                        </div>
                        <h5>Generate Request Token</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="alert alert-warning">
                            <i class="fa fa-info-circle"></i> All Keys Generated have a lifetime of 72 hours, you can
                            only have a max of 5 keys. Once claimed the key is locked to that user, be careful who you
                            send keys too as they can see basic information about you such as a name, age, partial
                            address and profile avatar. If users have left a rating on your account this will also be
                            provided.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection