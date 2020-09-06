<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand">Rowa Insurance</a>
            </div>
            <button class="navbar-toggler" data-target="#navbarSupportedContent" type="button" data-toggle="collapse">
                <div class="navbar-toggler-icon"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Personal <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="nav-item"><a href="/personal_motor" class="nav-link">Motor Private Insurance</a></li>
                            <li class="nav-item"><a href="/personal_travel" class="nav-link">Travel Insurance policy</a></li>
                            <li class="nav-item"><a href="/personal_accident" class="nav-link">Personal Accident Insurance Cover</a></li>
                            <li class="nav-item"><a href="/personal_family" class="nav-link">Family health Cover</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Commercial <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="nav-item"><a href="/commercial_motor" class="nav-link">Motor Insurance</a></li>
                            <li class="nav-item"><a href="/commercial_fire" class="nav-link">Fire Insurance</a></li>
                            <li class="nav-item"><a href="/commercial_accident" class="nav-link">Accident Insurance</a></li>
                            <li class="nav-item"><a href="/commercial_flood" class="nav-link">Flood and Buglary</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/contacts" class="nav-link">Contacts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Portal <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="nav-item"><a href="" class="nav-link">
                                <a class="nav-link" href="{{ route('login') }}">Staff Login</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main">
            @yield('content')
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <h3>Head office</h3>
                        <p>Rowa Insurance Agency, Park View Naivasha</p>
                        <p>P.O Box 2365, Naivasha</p>
                        <p>Telephone: 0724 527 020</p>
                        <p>info@rowainsurance.com</p>
                        </div>
                        <div class="col-6 col-md">
                        <h5>Company</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="/about">About</a></li>
                            <li><a class="text-muted" href="/">Leadership</a></li>
                            <li><a class="text-muted" href="/">Governance</a></li>
                        </ul>
                        </div>
                        <div class="col-6 col-md">
                        <h5>Careers</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Applications</a></li>
                            <li><a class="text-muted" href="/contacts">Contacts</a></li>
                        </ul>
                        </div>
                        <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">FAQ's</a></li>
                            <li><a class="text-muted" href="#">Downloads</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                            <li><a class="text-muted" href="#">Policy Documents</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p>Regulated by <span class="text-uppercase">Insurance regulatory Authority</span></p>
                <small class="d-block mb-3 text-muted">&copy; 2020 | All rights reserved | Rowa Insurance ICT</small>
            </div>
        </footer> 
    </div>
</body>
</html>
