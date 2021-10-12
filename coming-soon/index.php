
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TNT Media - Launch Day</title>
    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:title" content="TTNT Media - Launch Day" />
    <meta property="og:url" content="https://www.tntmedia.co.uk" />
    <meta property="og:image" content="https://www.tntmedia.co.uk/public/assets/images/TNT-media-gallexy.jpg" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209212263-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-209212263-1');
    </script>

    <script type="text/javascript">
        var cpm = {};
        (function(h,u,b){
            var d=h.getElementsByTagName("script")[0],e=h.createElement("script");
            e.async=true;e.src='https://cookiehub.net/c2/f916896c.js';
            e.onload=function(){u.cookiehub.load(b);}
            d.parentNode.insertBefore(e,d);
        })(document,window,cpm);
    </script>

    <!--    <script src="https://cdn.jsdelivr.net/npm/qr-creator/dist/qr-creator.min.js"></script>-->
    <!--    <script type="text/javascript">-->
    <!--        QrCreator.render({-->
    <!--            text: 'some text',-->
    <!--            radius: 0.5, // 0.0 to 0.5-->
    <!--            ecLevel: 'H', // L, M, Q, H-->
    <!--            fill: '#536DFE', // foreground color-->
    <!--            background: null, // color or null for transparent-->
    <!--            size: 128 // in pixels-->
    <!--        }, document.querySelector('#qr-code'));-->
    <!--    </script>-->

    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/parallax.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/css/main-style.css"/>
    <link rel="favicon" type="image/x-icon" href="favicon.ico" />
    <script src="public/assets/js/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            var movementStrength = 210;
            // var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();
            // var width = $(window).width();

            $("body").mousemove(function(e){
                var decreace = ($(window).width() - e.pageX);
                var pageX = ( decreace / ($(window).width() ) * 100);
                var newvalueX = width * pageX * -1 - 25;
                $(".comingsoon-one, .comingsoon-two, .comingsoon-four").css("background-position-x", newvalueX+"%");
            });
        });
    </script>

</head>
<body>

<div id="container" class="wrapper container">
    <ul id="scene" class="scene unselectable"
        data-friction-x="0.1"
        data-friction-y="0.1"
        data-scalar-x="25"
        data-scalar-y="15">
        <li class="layer" data-depth="0.10">
            <div class="bg-layer-one"></div>
        </li>
        <li class="layer" data-depth="0.30">
            <div class="bg-layer-two"></div>
        </li>
        <!--        <li class="layer" data-depth="0.70">-->
        <!--            <div class="bg-layer-two"></div>-->
        <!--        </li>-->
        <li class="layer" data-depth="0.25"><div class="light purple c phase-5"></div></li>
        <li class="layer" data-depth="0.10">
            <div class="light orange d phase-8"></div>
        </li>
        <!--        <li class="layer" data-depth="0.4">-->
        <!--            <li class="layer" data-depth="0.15"><div class="light orange d phase-1"></div></li>-->
        <!--            <li class="layer" data-depth="0.2"><div class="light orange d phase-2"></div></li>-->
        <!--            <li class="layer" data-depth="0.1"><div class="light orange d phase-3"></div></li>-->
        <!--            <li class="layer" data-depth="0.2"><div class="light orange b phase-4"></div></li>-->
        <!--            <li class="layer" data-depth="0.25"><div class="light purple c phase-5"></div></li>-->
        <!--            <li class="layer" data-depth="0.05"><div class="light purple c phase-6"></div></li>-->
        <!--            <li class="layer" data-depth="0.15"><div class="light purple c phase-7"></div></li>-->
        <!--        </li>-->
        <li class="layer" data-depth="0.2">
            <div class="bg-layer-three"></div>
        </li>
        <li class="layer" data-depth="0.3">
            <img id="logo" height="130" src="/public/assets/images/logo-gold.svg"/>
            <p class="comingsoon-one">Coming Soon</p>
            <p class="comingsoon-two d-none d-sm-block">Nov</p>
            <p class="comingsoon-three d-none d-sm-block" style="color: #fff;">11<span style="color: #bea671 !important;">.</span>11</p>
            <a href="https://qrco.de/bcRxRD">
                <p class="comingsoon-four d-none d-sm-block">Save the date</p>
                <img id="qr-code" height="290" src="/public/assets/images/coming-soon-QR.svg"/>
            </a>
        </li>
    </ul>
</div>

<!-- Scripts -->
<script src="/public/assets/js/libraries.js"></script>
<script src="/public/assets/js/jquery.parallax.js"></script>
<script>

    // jQuery Selections
    var $html = $('html'),
        $container = $('#container'),
        $prompt = $('#prompt'),
        $toggle = $('#toggle'),
        $about = $('#about'),
        $scene = $('#scene');

    // Hide browser menu.
    (function() {
        setTimeout(function(){window.scrollTo(0,0);},0);
    })();

    // Setup FastClick.
    FastClick.attach(document.body);

    // Add touch functionality.
    if (Hammer.HAS_TOUCHEVENTS) {
        $container.hammer({drag_lock_to_axis: true});
        _.tap($html, 'a,button,[data-tap]');
    }

    // Add touch or mouse class to html element.
    $html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

    // Resize handler.
    (resize = function() {
        $scene[0].style.width = window.innerWidth + 'px';
        $scene[0].style.height = window.innerHeight + 'px';
        if (!$prompt.hasClass('hide')) {
            if (window.innerWidth < 600) {
                $toggle.addClass('hide');
            } else {
                $toggle.removeClass('hide');
            }
        }
    })();

    // Attach window listeners.
    window.onresize = _.debounce(resize, 200);
    window.onscroll = _.debounce(resize, 200);

    function showDetails() {
        $about.removeClass('hide');
        $toggle.removeClass('i');
    }

    function hideDetails() {
        $about.addClass('hide');
        $toggle.addClass('i');
    }

    // Listen for toggle click event.
    $toggle.on('click', function(event) {
        $toggle.hasClass('i') ? showDetails() : hideDetails();
    });

    // Pretty simple huh?
    $scene.parallax();

    // Check for orientation support.
    setTimeout(function() {
        if ($scene.data('mode') === 'cursor') {
            $prompt.removeClass('hide');
            if (window.innerWidth < 600) $toggle.addClass('hide');
            $prompt.on('click', function(event) {
                $prompt.addClass('hide');
                if (window.innerWidth < 600) {
                    setTimeout(function() {
                        $toggle.removeClass('hide');
                    },1200);
                }
            });
        }
    },1000);

    // Twitter stuff.
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

    // Facebook stuff.
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=709933052350821";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>