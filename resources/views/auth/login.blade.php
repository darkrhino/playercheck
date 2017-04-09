@extends('layouts.app')
@section('title', 'Login to your Account')
@section('body', 'logged-out env-production session-authentication page-responsive min-width-0')
@section('content')
    <div role="main" style="padding-top: 20px;">
        <div id="js-pjax-container" data-pjax-container="">
            <div class="auth-form px-3" id="login">
                @if (count($errors) > 0)
                <div id="js-flash-container">
                    <div class="flash flash-full flash-error">
                        <div class="container">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                {!! Form::open(['accept-charset' => 'UTF-8', 'role' => 'form', 'route' => 'login']) !!}
                    <div class="auth-form-header p-0">
                        <h1>Sign in to PlayerCheck</h1>
                    </div>
                    <div class="auth-form-body mt-3">
                        <label for="login">
                            Email address
                        </label>
                        <input autocapitalize="off" autocorrect="off" autofocus="autofocus"
                               class="form-control input-block" id="email" name="email" tabindex="1" type="email">
                        <label for="password">
                            Password <a href="{{ route('password.request') }}" class="label-link">Forgot password?</a>
                        </label>
                        <input class="form-control form-control input-block" id="password" name="password" tabindex="2"
                               type="password">
                        <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit"
                               tabindex="3" type="submit" value="Sign in">
                    </div>
                {!! Form::close() !!}
                <p class="create-account-callout mt-3">
                    New to PlayerCheck?
                    <a href="{{route('register')}}">Create an account</a>.
                </p>
            </div>

        </div>
    </div>
@endsection
