<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    @include('navigation')
    <div class="tnt-media-main-content">
        @yield('content')
    </div>
    @include('footer')
</body>

<script type="text/javascript" src="{{ asset('js/main.js') }}?v=4"></script>

</html>