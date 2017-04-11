<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9849713518721716",
            enable_page_level_ads: true
        });
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'A better way to play together')">
    <meta name="keywords" content="@yield('meta_keywords', 'PlayerCheck, UKARA, VCRA, Validation, Airsoft, Used Sales, Used Airsoft')">
    @yield('meta')

    <title>@yield('title', '') :: PlayerCheck</title>

    <!-- Bootstrap core CSS -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Bitter:400,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic++++++++%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic++++++++%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic++++++++%7CTitillium+Web%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic++++++++%7CRoboto+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&ver=1.0.0" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="site-header-dark @yield('body')">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('pages.home')}}">PlayerCheck <i class="fa fa-check"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            @if(!Auth::check())
            <ul class="nav navbar-nav">
                <li><a href="{{route('pages.features')}}">Features</a></li>
                <li><a href="{{route('pages.pricing')}}">Pricing?</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
            @else
            <ul class="nav navbar-nav">
                <li><a href="{{route('requests.index')}}">Requests</a></li>
                <li><a href="{{route('maps.stores')}}">Store Map</a></li>
                <li><a href="{{route('maps.sites')}}">Sites Map</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @role('staff')
                <li><a href="{{route('admin.dashboard.index')}}">Admin</a></li>
                @endrole
                <li><a href="/logout">Logout</a></li>
            </ul>
            @endif
        </div><!--/.navbar-collapse -->
    </div>
</nav>
@yield('content')
{{--@include('layouts.footer')--}}
@if(env('APP_ENV') == 'production'))
    @include('static.analytics')
@endif

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
        $(document).keydown(function (e) {
            if(e.target.nodeName != 'INPUT' && e.target.nodeName != 'TEXTAREA') {
                if (e.keyCode == 83) {
                    $('#searchModal').modal('toggle');
                }
            }

        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=257693841228231";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @yield('scripts')
</body>
</html>
