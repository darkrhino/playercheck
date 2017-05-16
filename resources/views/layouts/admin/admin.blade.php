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
    <link href="css/animate.css" rel="stylesheet">
    <link href="{{elixir('css/admin.css')}}" rel="stylesheet">
    @yield('styles')
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
{{-- Data Tables --}}
<script src="{{secure_asset('components/datatables.net-dt/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{secure_asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
{{-- Metis Menu --}}
<script src="{{secure_asset('components/metisMenu/dist/metisMenu.min.js') }}"></script>
{{-- Slimscroll --}}
<script src="{{secure_asset('components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
{{--Toster--}}
<script src="{{secure_asset('components/toastr/toastr.min.js')}}"></script>
{{--ckeitor--}}
<script src="/assets/js/plugins/ckeditor/ckeditor.js"></script>
{{--Other--}}
<script src="/assets/js/bootstrap-tooltip.js"></script>
<script src="/assets/js/bootstrap-confirmation.js"></script>

<script src="/assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="/assets/js/jquery.numberFormatter.min.js"></script>
<script src="/assets/js/imgLiquid-min.js"></script>
{{--Wow.js--}}
<script src="/assets/js/plugins/wow/wow.min.js"></script>
{{--Pace.js--}}
<script src="{{secure_asset('components/PACE/pace.min.js')}}"></script>
{{--Vue.js--}}
<script src="/assets/js/plugins/vue/vue.js"></script>
{{--Main.js--}}
<script src="/assets/js/main.js"></script>
@yield('scripts')
@include('static.notifications')
</body>
</html>
