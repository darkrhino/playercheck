<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Career Penguin') :: Agent Control Panel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Toastr style -->
    <link href="{{secure_asset('components/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('components/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    {{-- Fallback FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>

<body class="top-navigation">

<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <i class="fa fa-reorder"></i>
                    </button>
                    <a href="{{route('agent.index')}}" class="navbar-brand">Career Penguin</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a aria-expanded="false" role="button" href="{{route('dashboard')}}"> Back to main website</a>
                        </li>
                        <li>
                            <a aria-expanded="false" role="button" href="{{route('agent.careers.index')}}"> Careers</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a aria-expanded="false" role="button" href="{{route('agent.agents.index')}}"> Agents</a>
                        </li>
                        <li>
                            <a aria-expanded="false" role="button" href="{{route('agent.settings.index')}}"> Settings</a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')
        <div class="footer">
            <div class="pull-right">
                Agent Dashboard
            </div>
            <div>
                <strong>Copyright</strong> Career Penguin &copy; 2016-{{\Carbon\Carbon::now()->format('Y')}}
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
{{--Wow.js--}}
<script src="{{secure_asset('components/wow/dist/wow.min.js')}}"></script>
{{--Pace.js--}}
<script src="{{secure_asset('components/PACE/pace.min.js')}}"></script>
{{--Vue.js--}}
<script src="{{secure_asset('components/vue/dist/vue.js')}}"></script>
{{--Main.js--}}
{{--<script src="/assets/js/main.js"></script>--}}
@yield('scripts')
@include('static.notifications')
</body>

</html>