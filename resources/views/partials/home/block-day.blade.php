<div id="clouds-con" class="row">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="clouds">
                    <div class="cloud-1" data-speed="35000"></div>
                    <div class="cloud-2" data-speed="45000" data-delay="15000"></div>
                    <div class="cloud-3" data-speed="40000"></div>
                    <div class="cloud-4" data-speed="38000" data-delay="20000"></div>
                </div>
                <div class="container-fluid mobile-remove-padding">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="heading-text">
                                <h1 class="headingone">Our mission</h1>
                                <h2 class="headingtwo">What we do</h2>
                                <p class="body">TNT Media is a company based in the United Kingdom. We work with clients and agencies all over the world to help them connect with their audiences through all forms of digital media. We use a data-driven strategy, so your customers will have the same brand experience whether they visit your website, mobile app, or check in via a digital or social campaign. We tackle the difficult technical aspects so you don't have to. We make our clients' lives easier while help them look good in the process. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script id="rendered-js">
    function moveClouds(e, s, d) {
        $(e).css('right', '-20%');
        var wait = window.setTimeout(function () {
            $(e).animate({
                    right: '120%' },
                s, 'linear', function () {
                    moveClouds(e, s, d);
                });
        }, d);
    }

    if (!Modernizr.cssanimations) {
        var clouds = [1, 2, 3, 4];

        $.each(clouds, function () {
            var e = $('.cloud-' + this);
            moveClouds(e, e.data('speed'), e.data('delay'));
        });
    }
    //# sourceURL=pen.js
</script>