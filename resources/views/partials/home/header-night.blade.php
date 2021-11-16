<link rel="stylesheet" href="{{ asset('css/stars.css') }}?v=4" />

<div id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 stars-container">
                <div id="stars"></div>
                <div class="cotainer-fluid main-content-mobile">
                    <div class="row">
                        <div class="offset-md-1 col-md-9">
                            @include('partials.home.header')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-xs-none">
                <div class="iphone-case sticky-top sticky-offset">
                    <div class="iphone-screen">
                        <div class="iphone-top">
                            <div class="iphone-time"></div>
                            <div class="iphone-notch"></div>
                        </div>
                        <div class="iphone-background">
                            <p class="headingtwo">
                                <script>
                                    var today = new Date();

                                    document.write(today.getHours() + ":" + today.getMinutes());
                                </script>
                            </p>
                            <p class="headingone">
                                <script>
                                    document.write(today.getDay() + " " + today.getMonth() + " " +today.getFullYear());
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script type="text/javascript" src="{{ asset('js/stars.js') }}"></script>
