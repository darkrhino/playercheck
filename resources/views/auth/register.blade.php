@extends('layouts.app')

@section('content')
    <div role="main">


        <div class="bg-shade-gradient">
            <div class="setup-wrapper">
                <div class="setup-header setup-org">
                    <h1>Join PlayerCheck</h1>
                    <p class="lead">PlayerCheck brings everyone together to sell and buy safely.</p>

                    <!-- Show steps if user is creating an organiation -->
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

                <div class="setup-main ">
                    <div class="setup-form-container">
                        <noscript>
                            &lt;p class="error"&gt;PlayerCheck does not support browsers with JavaScript disabled.&lt;br&gt;
                            We promise we’ll behave.&lt;/p&gt;
                        </noscript>

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
                    </div> <!-- /.setup-form-container -->
                </div> <!-- /.setup-main -->

                {{--<div class="setup-secondary">
                    <div class="setup-info-module">
                        <h2>Reasons to Register</h2>
                        <ul class="features-list">
                            <li>Nothing Yet We are still Building..</li>
                            <li class="list-divider"></li>

                        </ul>
                    </div>
                </div>--}}
            </div>
        </div>

        <div class="modal-backdrop js-touch-events"></div>

    </div>
@endsection
