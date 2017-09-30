<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PlayerCheck') :: Admin Control Panel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Toastr style -->
    <link href="{{secure_asset('components/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('components/animate.css/animate.min.css')}}" rel="stylesheet">
    @stack('styles')
    <link href="{{mix('css/admin.css')}}" rel="stylesheet">
    {{-- Fallback FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>

<div id="wrapper">

    @include('layouts.admin.sidebar')

    <div id="page-wrapper" class="gray-bg">

        @include('layouts.admin.header')

        @yield('content')

        <div class="footer">
            <div>
                <strong>Copyright</strong> PlayerCheck &copy; 2017-{{\Carbon\Carbon::now()->format('Y')}}
            </div>
        </div>

    </div>

</div>
<script src="{{secure_asset('components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{secure_asset('components/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>
{{--Toster--}}
<script src="{{secure_asset('components/toastr/toastr.min.js')}}"></script>
{{--Wow.js--}}
<script src="{{secure_asset('components/wow/dist/wow.min.js')}}"></script>
{{--Pace.js--}}
<script src="{{secure_asset('components/PACE/pace.min.js')}}"></script>
@yield('scripts')
@stack('scripts')
@include('static.notifications')
</body>
</html>

