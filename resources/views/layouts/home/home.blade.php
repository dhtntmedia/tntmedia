<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

<script type="text/javascript">

// Facebook stuff.
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=709933052350821";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

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