<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script data-require="jquery" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <style>
        @font-face {
            font-family:'Franklin Gothic';
            font-style:normal;
            font-weight:400;
            src:url(https://static.xx.fbcdn.net/rsrc.php/yQ/r/_hhMCEJbkSj.woff2) format('woff2'), url(https://static.xx.fbcdn.net/rsrc.php/yg/r/AVVQlnRSwGC.woff) format('woff'), url(https://static.xx.fbcdn.net/rsrc.php/yX/r/QAc0H7ugYDi.ttf) format('truetype'), url(https://static.xx.fbcdn.net/rsrc.php/ym/r/ywPX7VAnsgy.eot) format('embedded-opentype');
        }
        @font-face {
            font-family:'Franklin Gothic';
            font-style:normal;
            font-weight:500;
            src:url(https://static.xx.fbcdn.net/rsrc.php/yH/r/aI3Q0BRBEjl.woff2) format('woff2'), url(https://static.xx.fbcdn.net/rsrc.php/yd/r/Ofj4wG4bi1A.woff) format('woff'), url(https://static.xx.fbcdn.net/rsrc.php/yK/r/Hzupcp-ljmc.ttf) format('truetype'), url(https://static.xx.fbcdn.net/rsrc.php/y6/r/2zqDM0h6G6n.eot) format('embedded-opentype');
        }
        @font-face {
            font-family:'Aveny T';
            font-style:normal;
            font-weight:500;
            src:url(https://static.xx.fbcdn.net/rsrc.php/yC/r/UkFBufS5STa.woff2) format('woff2'), url(https://static.xx.fbcdn.net/rsrc.php/yt/r/kDZj6dM19uY.woff) format('woff'), url(https://static.xx.fbcdn.net/rsrc.php/yj/r/it0dfJPySq6.eot) format('embedded-opentype'), url(https://static.xx.fbcdn.net/rsrc.php/yQ/r/L-FByFC3jQg.svg) format('svg');
        }
        body {
            font-family:'Franklin Gothic';
            padding: 0px;
            margin: 0px;
        }
        #navigation, #navigation a {
            color: #fff;
        }
        .bg {
            background: none;
        }
        .fa-bars, .ms-auto a {
            color: #000 !important;
            font-size: 20px;
        }
        .show {
            background: #000;
            opacity: 1.0 !important;
        }

        .box-border {
            box-sizing: border-box;
            height: 90px;
        }

        .show .fa-bars, .show .ms-auto a{
            color: #fff !important;
        }
        .transition {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }
        .fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }
        .down {
            top: 150px;
        }
        .up {
            top: 1800px;
        }
        .main-content {
            margin-top: -100px;
            padding: 0;
        }
        canvas {
            display: block;
            vertical-align: bottom;
        } /* ---- particles.js container ---- */
        #particles-js {
            height: 800px;
            background-color: #111111;
            color: #fff;
            position: relative;
        }
        body {
            padding: 0;
            margin: 0;
        }

        .show-text a, .show-text a i {
            color: #fff !important;
        }

        /*iPhone*/

        .iphone-case {
            width: 192px;
            height: 370px;
            margin-top: 110px;
            margin-left: -110px;
            border-radius: 27px;
            border: 7px solid #b2b2b2;
        }
        .iphone-screen {
            width: 178px;
            height: 357px;
            border-radius: 20px;
            border: 7px solid #4c4c4c;
            overflow: hidden;
            position: relative;
        }
        .iphone-top {
            height: 9px;
            width: 100%;
            position: absolute;
            z-index: 303;
        }
        .iphone-notch {
            width: 50%;
            height: 9px;
            background: #4c4c4c;
            float: left;
            border-radius: 0 0 5px 5px;
        }
        .iphone-time {
            width: 25%;
            height: 9px;
            float: left;
        }
        .iphone-video {
            margin-left: -238px;
            background: #000;
            height: 357px;
        }

        .main-ad {
            width: 100%;
            display: table;
            clear: both;
        }

        .top-image {
            width: 100%;
            margin-top: -45px;
        }

        .image-hover {
            opacity: 0.95;
            max-width: none;
            object-fit: cover;
            object-position: center;
            width: 100%;
            }
            .image-hover:hover {
                opacity: 1.0;
            }

            .sticky-offset {
                top: 120px;
                margin-bottom: 40px !important;
            }
            .particle-text {
                position: absolute;
            }

            .dark-h1 {
                color: #000 !important;
            }

        .dark-h2 {
            background: #1c1e21 !important;
            -webkit-background-clip: text !important;
        }
        .dark-body {
            color: #000 !important;
        }

        .h1 {
                color: #ddd;
                align-items: center;
                display: flex;
                font-family: Aveny T, Franklin Gothic, Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 0.8px;
                line-height: 24px;
                margin: 0;
                padding-left: 2px;
                width: 100%;
            text-transform: uppercase;
            }
        .h2 {
                font-family: Franklin Gothic, Helvetica Neue, Helvetica, Arial, sans-serif;
                font-weight: 400;
                margin: 0;
                width: 100%;
                font-size: calc(44px + (16 * ((100vw - 375px) / 1225)));
                letter-spacing: -1px;
                line-height: calc(56px + (8 * ((100vw - 375px) / 1225)));
                margin-top: 16px;
                color: #bea671;
                background: url("/assets/images/text-glow.jpg");
                z-index:0;
                background-position-x: 50%;
                background-position-y: 50%;
                background-size: 250px;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #night-nav {
                height: 100px;
                width: 100%;
                background-color: #111111;
                color: #fff;
                position: absolute;
                z-index: 303;
                opacity: 0.0;
            }
            #main-night-nav {
                position: relative;
                z-index: 1001;
                top: 13px;
            }
            .show-nav {
                top: 0 !important;
            }
            #logo {
                margin-left: 40px;
            }
            .tnt-menu {
                margin-right: 40px;
            }
            .heading-text {
                padding: 70px 0;
            }

        .parallax {
            /* The image used */
            background: url("https://www.w3schools.com/howto/img_parallax.jpg") #000;
            /* Set a specific height */
            min-height: 500px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
</style>

    <script>
        $(window).scroll(function() {
// 130 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 700 ){

                $('.bg').addClass('show');
                $('.navbar-nav').addClass('show-text');
                $('#main-night-nav').addClass('show-nav');
                $('#logo').attr('src', 'assets/images/logo-silver.svg').animate();

            } else {

                $('.bg').removeClass('show');
                $('.navbar-nav').removeClass('show-text');
                $('#main-night-nav').removeClass('show-nav');
                $('#logo').attr('src', 'assets/images/logo-gold.svg');

            };
        });

        $('.scroll').on('click', function(e){
            e.preventDefault()

            $('html, body').animate({
                scrollTop : $(this.hash).offset().top
            }, 1500);
        });
    </script>
</head>
<body>


<nav id="navigation" class="navbar sticky-top navbar-expand-lg" style="position: sticky;">
    <div id="night-nav" class="bg transition"></div>
    <div id="main-night-nav" class="container-fluid transition">
        <a href="#" class="navbar-brand">
            <img id="logo" height="70" src="{{ asset('images/logo-gold.svg') }}" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                {{--                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>--}}
            </div>
            <div class="navbar-nav ms-auto transition tnt-menu">
                <a href="#" class="nav-item nav-link">Start a project</a>
                <a href="#" class="nav-item nav-link">
                    <i class="fa fa-bars" style="font-size: 20px;"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid main-content">
    <div class="row">
        <div id="particles-js" class="col-sm-9">
            <div class="container particle-text mt-5">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <img class="top-image image-hover" src="https://cdn.kenzie.academy/wp-content/uploads/prod/2020/11/02155935/AdobeStock_241083104-1400x934.jpg" />
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="heading-text">
                            <p class="h1">Lets talk web development</p>
                            <h3 class="h2">Tautological News and Technology</h3>
                            <p class="body">Creating a website is the most efficient approach to expand your brand's digital presence and set yourself apart from the competition.</p>
                            <p class="body">We work with clients and agencies all over the world to help them connect with their audiences through all forms of digital media.</p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="clearfix">
                            <img class="main-ad image-hover" src="https://www.logicdesign.co.uk/wp-content/uploads/dlanor-s-703975-unsplash-1500x900.jpg" />
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="iphone-case sticky-top sticky-offset">
                <div class="iphone-screen">
                    <div class="iphone-top">
                        <div class="iphone-time"></div>
                        <div class="iphone-notch"></div>
                    </div>
                    <video class="iphone-video" autoplay playsinline="1">
                        <source src="{{ asset('videos/earth.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-border"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-8">
                        <div class="heading-text">
                            <p class="h1 dark-h1">What we do</p>
                            <h3 class="h2 dark-h2">Our mission</h3>
                            <p class="body dark-body">TNT Media is a company based in the United Kingdom. We work with clients and agencies all over the world to help them connect with their audiences through all forms of digital media.</p>
                            <p class="body dark-body">We use a data-driven strategy, so your customers will have the same brand experience whether they visit your website, mobile app, or check in via a digital or social campaign.</p>
                            <p class="body dark-body">We tackle the difficult technical aspects so you don't have to. We make our clients' lives easier while help them look good in the process.</p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img class="image-hover" src="https://dpbnri2zg3lc2.cloudfront.net/en/wp-content/uploads/old-blog-uploads/what-does-a-web-developer-do-2.jpg" />
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="heading-text">
                                <p class="h1 dark-h1">Lets talk web development</p>
                                <h3 class="h2">Tautological News and Technology</h3>
                                <p class="body dark-body">Creating a website is the most efficient approach to expand your brand's digital presence and set yourself apart from the competition.</p>
                                <p class="body dark-body">We work with clients and agencies all over the world to help them connect with their audiences through all forms of digital media.</p>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-8">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-8">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>
<a href="#top" id="bottom" class="scroll up">SCROLL UP</a>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

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

<script type="text/javascript">
    particlesJS("night-nav", {
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
