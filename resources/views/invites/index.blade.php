@extends('layouts.app')
@section('title', 'Invite a Friend')
@section('style')

@endsection

@section('content')
    <div role="main">
        <div class="pagehead explore-head">
            <div class="container">
                <nav class="underline-nav float-right" role="navigation" data-pjax="">

                </nav>
                <h1>
                    <a class="pagehead-heading" href="{{route('invite.index')}}">
                        Invites
                    </a>
                </h1>
            </div>
        </div>
        <div class="explore-pjax-container explore-page">
            <div class="explore-section" id="explore-featured">
                <div class="container">
                    <div class="explore-marketing-header">
                        <h2>Invite your Friends</h2>
                        <p class="lead mb-3">Know someone who could do with better protection? Invite them to join.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <div class="row">
                                                {!! Form::open(['route' => 'invite.store']) !!}
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="email">Email Address</label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                               placeholder="Email Address" value="{{old('email')}}">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <button type="submit" class="btn btn-success">Invite</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <div class="ibox-title">
                                            <h5>Why invite?</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <ul class="list-unstyled">
                                                <li>We are in this together, promoting a self-regulating sport allows for greater protection from government action.</li>
                                                <li>We do most of the work for you, the system is designed to take as little of your time as needed.</li>
                                                <li>Getting a approved validation is hard with smaller numbers.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection