@extends('layouts.app')
@section('title', 'Register your Account')
@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="/register">
                    Register
                </a>
            </h1>
        </div>
    </div>
    <div class="container" style="margin-top: 62px;">
        <div class="row">
            <div class="col-xs-12">
                <h1>Join PlayerCheck</h1>
                <p class="lead">PlayerCheck brings everyone together to sell and buy safely.</p>
            </div>
            @if (count($errors) > 0)
                <div class="col-xs-12">
                    <div class="alert alert-warning">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-xs-12">
                <div class="setup-header setup-org">
                    <ol class="steps">
                        <li class="current">
                            <strong class="step">Step 1:</strong>
                            Create personal account
                        </li>
                        <li>
                            <strong class="step">Step 2:</strong>
                            Apply for Membership
                        </li>
                        <li>
                            <strong class="step">Step 3:</strong>
                            Be Protected
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        {!! Form::open(['class' => 'setup-form js-signup-form', 'role' => 'form', 'route' => 'register']) !!}
                        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="ld5YewLUbAWGg6eNb5MarmPY0cVPCud+OgfQS838f9Tl4i1S9TS+nc/nm8KwDBLp1EFnzksD5cfeMB5vhMJLZA=="></div>

                        <h2 class="setup-form-title mb-3">
                            Create your personal account
                        </h2>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="first_name">First Name</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="first_name" name="first_name" size="30" type="text" value="{{old('first_name')}}">
                            </dd>
                        </dl>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="last_name">Last Name</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="last_name" name="last_name" size="30" type="text" value="{{old('last_name')}}">
                                <p class="note">We need both your first and last name. Only used for validation.</p>
                            </dd>
                        </dl>
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="email">Email Address</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="email" name="email" size="30" type="email" value="{{old('email')}}">
                                <p class="note">You will occasionally receive account related emails.</p>
                            </dd>
                        </dl>

                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="password">Password</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="password" name="password" size="30" type="password">
                            </dd>
                        </dl>

                        <button type="submit" class="btn btn-primary">Create an account</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
