@extends('layouts.app')
@section('title', 'Pricing')

@section('styles')
@endsection

@section('content')
    <div class="jumbotron text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="alt-h1 lh-condensed mb-3">
                        Pricing.
                    </h1>
                    <p class="alt-lead mx-auto mb-5 text-center">
                        So how much is this going to cost?
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 text-center">
                        <h3 class="alt-h3 lh-condensed mb-3">
                            Absolutely nothing. We provide this system to help better the sport and to help innovate the community.
                            <br>
                            <small>That's a win for everyone.</small>
                        </h3>
                        <div class="d-none d-md-flex flex-items-baseline flex-wrap flex-justify-center flex-md-nowrap mx-auto mt-5 pt-5 mb-4 lh-condensed v-align-bottom">
                            <span class="d-block text-gray-light">We do run adverts to help maintain servers, please consider allowing them in your adblocker.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featurette bg-gray-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="alt-h3 mt-0 mb-1">
                        Protect your Business
                    </h2>
                    <p class="f4 mb-3">
                        Protect both your business and this sport, register your business today.
                    </p>
                    <a class="btn btn-outline-purple f4 py-2 px-3" href="/business">Learn more</a>
                </div>
                <div class="col-md-6">
                    <h2 class="alt-h3 mt-0 mb-1">
                        Protect yourself
                    </h2>
                    <p class="f4 mb-3">
                        PlayerCheck is free, we provide a valid defence system to keep you and the sport safe.
                    </p>
                    <a href="/register" class="btn btn-outline f4 py-2 px-3" rel="nofollow">Sign up for PlayerCheck</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection