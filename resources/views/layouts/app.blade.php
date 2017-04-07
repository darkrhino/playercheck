<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '') :: PlayerCheck</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="site-header-dark">
<div class="position-relative js-header-wrapper ">
    <header class="site-header js-details-container Details" role="banner">
        <div class="container-responsive">
            <div class="site-header-menu">
                <nav class="site-header-nav">
                    <a href="{{route('pages.home')}}" class="js-selected-navigation-item nav-item">
                        PlayerCheck <i class="fa fa-check"></i>
                    </a>
                    @if(!Auth::check())
                    <a href="{{route('pages.features')}}" class="js-selected-navigation-item nav-item">
                        Features
                    </a>{{--
                    <a href="{{route('pages.business')}}" class="js-selected-navigation-item nav-item">
                        Business
                    </a>
                    <a href="{{route('pages.explore')}}" class="js-selected-navigation-item nav-item">
                        Explore
                    </a>--}}
                    <a href="{{route('pages.pricing')}}" class="js-selected-navigation-item nav-item">
                        Pricing?
                    </a>
                    @endif
                </nav>

                @if(!Auth::check())
                <div class="site-header-actions">
                    <a class="text-bold site-header-link" href="/login">Sign in</a>
                    <span class="text-gray">or</span>
                    <a class="text-bold site-header-link" href="/register">Sign up</a>
                </div>
                @else
                <div class="site-header-actions">
                    <a class="text-bold site-header-link" href="/logout">Logout</a>
                </div>
                @endif
            </div>
        </div>
    </header>
</div>
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
