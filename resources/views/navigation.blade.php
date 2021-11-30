{{--<div id="navigation" class="">--}}
{{--    <div id="navigation-stars" class="transition"></div>--}}
{{--    <nav class="navbar navbar-light transition">--}}
{{--        <div class="container-fluid">--}}
{{--            <a href="/" class="navbar-brand">--}}
{{--                <img id="tnt-logo" height="70" src="{{ asset('images/logo-gold.svg') }}" />--}}
{{--            </a>--}}
{{--            <div id="tnt-media-social" class="d-flex d-xs-none">--}}
{{--                <section>--}}
{{--                    <ul class="tnt-media-social">--}}
{{--                        <li class="icon-item">--}}
{{--                            <a href="https://instagram.com/wearetntmedia" class="icon-link tnt-instagram" target="_blank" rel="noopener noreferrer">--}}
{{--                                <i class="fa fa-instagram"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="icon-item">--}}
{{--                            <a href="https://twitter.com/weareTNTMedia" class="icon-link tnt-twitter" target="_blank" rel="noopener noreferrer">--}}
{{--                                <i class="fa fa-twitter"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="icon-item">--}}
{{--                            <a href="https://facebook.com/tntmedialtd" class="icon-link tnt-facebook" target="_blank" rel="noopener noreferrer">--}}
{{--                                <i class="fa fa-facebook"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="icon-item">--}}
{{--                            <a href="tel:07444796137" class="icon-link tnt-phone">--}}
{{--                                <i class="fa fa-phone"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </section>--}}
{{--            </div>--}}
{{--            <div class="d-flex">--}}
{{--                <a href="#" class="nav-item nav-link">Need a new website</a>--}}
{{--                @include('components.day-night')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}
{{--<nav class="navbar navbar-light bg-light sticky-top">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="#">--}}
{{--            <img src="{{ asset('images/logo-silver.svg') }}" alt="" height="70">--}}
{{--        </a>--}}
{{--        <div class="collapse navbar-collapse d-flex" id="navbarNavDropdown">--}}
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Features</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Pricing</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown link--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<link rel="stylesheet" href="{{ asset('css/stars.css') }}?v=4" />

<nav id="tnt-media-navigation" class="navbar navbar-dark bg-dark sticky-top">
    @include('components.social')
    <div class="tnt-media-navigation-bar container-fluid">
        <a class="navbar-brand" href="#">
            <img id="tnt-media-logo" src="{{ asset('images/logo-silver.svg') }}" alt="TNT Media | Silver logo" height="60">
        </a>
        <div class="d-flex">
            @include('components.nav-link')
            @include('components.menu')
        </div>
    </div>
</nav>