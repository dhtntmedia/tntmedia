<!DOCTYPE html>
<html data-wf-page="60c1cc1d37fad3862030b52f">
<head>
    <meta charset="utf-8">
    <title>TNT Media - Launch Day</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:title" content="TNT Media - Launch Day" />
    <meta property="og:url" content="https://www.tntmedia.co.uk" />
    <meta property="og:image" content="https://www.tntmedia.co.uk/public/assets/images/TNT-media-gallexy.png" />
    <meta name="keywords"
          content="tnt, tnt media, #tntmedia1111, 1111, launch,
          tnt digital, tnt.com, tnt.co.uk, tnt media tech ltd, tnt media tech limited" />
    <meta content="TNT Media" property="twitter:title" />
    <meta content="In the Universe everything moves in the vacuums of space, join us and create some great in your space."
          property="twitter:description" />
    <meta property="og:type" content="mobile" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="facebook-domain-verification" content="mwfbfo9q0eo2finvzilcdfqs68secg" />
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

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link href="assets/css/shiba-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/parallax.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css"/>
    <script src="assets/js/jquery.min.js"></script>
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
                $(".comingsoon-one, .comingsoon-two, .comingsoon-four, .titlebar").css("background-position-x", newvalueX+"%");
            });
        });

        $(document).ready(function() {
            var movementStrength = 90;
            // var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();

            $("body").mousemove(function(e){
                var decreace = ($(window).width() - e.pageX);
                var pageX = ( decreace / ($(window).width() ) * 100);
                var newvalueX = width * pageX * -1 - 25;

                newvalueX = newvalueX + 100;
                $("#new-moon").css("background-position-x", newvalueX+"%");
            });
        });
    </script>

    <!--Start of HappyFox Live Chat Script-->
    <script>
        window.HFCHAT_CONFIG = {
            EMBED_TOKEN: 'a1b80c70-2b7e-11ec-9f35-a77ac79b9fa6',
            ASSETS_URL: 'https://widget.happyfoxchat.com/v2/visitor'
        };
        (function () {
            var scriptTag = document.createElement('script')
            scriptTag.type = 'text/javascript'
            scriptTag.async = true
            scriptTag.src = window.HFCHAT_CONFIG.ASSETS_URL + '/js/widget-loader.js'

            var s = document.getElementsByTagName('script')[0]
            s.parentNode.insertBefore(scriptTag, s)
        })()
    </script>
    <!--End of HappyFox Live Chat Script-->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4497869476922952');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=4497869476922952&ev=PageView&noscript=1"
    /></noscript>
</head>
<body id="particles-js">
<script src="assets/js/particles.js"></script>

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

<!-- Scripts -->
<script src="assets/js/libraries.js"></script>
<script src="assets/js/jquery.parallax.js"></script>
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

<script type="text/javascript">
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 404,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 1,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 4,
                    "size_min": 0.3,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 0.2,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 243.62316369040352,
                    "size": 0,
                    "duration": 2.077922077922078,
                    "opacity": 0.0812077212301345,
                    "speed": 3
                },
                "repulse": {
                    "distance": 535.9709601188878,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>

</body>
</html>
