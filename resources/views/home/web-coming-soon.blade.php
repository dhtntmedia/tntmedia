@extends('layouts.coming-soon')

@section('content')

<div id="container" class="wrapper container">
    <ul id="scene" class="scene unselectable"
        data-friction-x="0.1"
        data-friction-y="0.1"
        data-scalar-x="25"
        data-scalar-y="15">
        <li class="layer" data-depth="0.10">
            <div class="bg-layer-two"></div>
        </li>
        <li class="layer" data-depth="0.25"><div class="light purple c phase-5"></div></li>
        <li class="layer" data-depth="0.10">
            <div class="light orange d phase-8"></div>
        </li>
        <li class="layer" data-depth="0.2" style="position: relative;">
            <div title="3D interactive Moon"  id="new-moon"></div>
        </li>
        <li class="layer" data-depth="0.3">
            <img id="logo" height="130" src="assets/images/logo-gold.svg"/>
            <p class="comingsoon-one">Coming Soon</p>
            <p class="comingsoon-two d-none d-sm-block">Nov</p>
            <p class="comingsoon-three d-none d-sm-block" style="color: #fff;">11<span style="color: #bea671 !important;">.</span>11</p>
            <a href="https://qrco.de/bcRxRD">
                <p class="comingsoon-four d-none d-sm-block">Save the date</p>
                <img id="qr-code" alt="TNT Media Logo"
                     height="290" src="assets/images/coming-soon-QR.svg"/>
            </a>
        </li>
    </ul>
</div>

<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "106582651800693");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


@stop