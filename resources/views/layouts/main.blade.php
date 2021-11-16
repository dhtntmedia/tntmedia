<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('partials.navigation')

<div id="tnt-content">
    @include('partials.menu')
    @yield('content')
</div>

@include('partials.footer')


<script type="text/javascript" src="{{ asset('js/main.js') }}?v=4"></script>

@stack('scripts')

</body>
</html>