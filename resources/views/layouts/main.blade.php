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


<script>
    $(document).ready(function(){
        $('#tnt-menu-burger').click(function(){
            $(this).toggleClass('open');
        });
    });
</script>
@stack('scripts')

</body>
</html>