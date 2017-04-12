@extends('layouts.app')
@section('title', 'Settings')

@section('styles')
@endsection

@section('content')
    <div class="pagehead explore-head">
        <div class="container">
            <nav class="underline-nav float-right" role="navigation" data-pjax="">

            </nav>
            <h1>
                <a class="pagehead-heading" href="{{route('settings.index')}}">
                    Settings
                </a>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (count($errors) > 0)
            <div class="col-xs-12">
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="col-md-8">
                {!! Form::open(['route' => 'settings.update', 'method' => 'patch']) !!}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>User Details</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <select name="title" id="title" class="form-control">
                                                <option value="Mr" @if($user->title == 'Mr') selected @endif>Mr</option>
                                                <option value="Mrs" @if($user->title == 'Mrs') selected @endif>Mrs</option>
                                                <option value="Miss" @if($user->title == 'Miss') selected @endif>Miss</option>
                                                <option value="Mx" @if($user->title == 'Mx') selected @endif>Mx</option>
                                                <option value="Dr" @if($user->title == 'Dr') selected @endif>Dr</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            @if(old('first_name'))
                                            <input type="text" id="first_name" class="form-control" name="first_name"
                                                   placeholder="John" value="{{old('first_name')}}">
                                            @else
                                                <input type="text" id="first_name" class="form-control" name="first_name"
                                                       placeholder="John" value="{{$user->first_name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            @if(old('last_name'))
                                                <input type="text" id="last_name" class="form-control" name="last_name"
                                                       placeholder="Doe" value="{{old('last_name')}}">
                                            @else
                                                <input type="text" id="last_name" class="form-control" name="last_name"
                                                       placeholder="Doe" value="{{$user->last_name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" value="{{$user->email}}" disabled class="form-control">
                                            <p class="help-block">Contact Support to update your email address</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Change Password</label>
                                            <input type="password" autocomplete="off" id="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Password Confirmation</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <p>
                                    Keeping your details up to date will allow us to build better services for you,
                                    maintaining your data will also allow service providers to validate your identify
                                    easier.
                                </p>
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