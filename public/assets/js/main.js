$(document).ready(function() {
    var movementStrength = 210;
    // var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    // var width = $(window).width();

    $("body").mousemove(function(e){
        var decreace = ($(window).width() - e.pageX);
        var pageX = ( decreace / ($(window).width() ) * 100);
        var newvalueX = width * pageX * -1 - 25;
        $(".headingtwo").css("background-position-x", newvalueX+"%");
    });

    $('#blind-image-con').mousemove(function (e) {
        var dataDiv = $('#blind-image-con').offset();
        var clickX = e.pageX - dataDiv.left;
        var clickY = e.pageY - dataDiv.top;

        var percentXImg = clickX * 100 / $('#blind-image-con').width();
        var percentYImg = clickY * 100 / $('#blind-image-con').height();

        if(percentXImg >= 0 && percentXImg <= 100) {
            $('#blind-image').css('width', percentXImg + '%');
        }

    });

    var navHeight = $('#navigation').height();

    var heightHeader = ( $('.particles-js-canvas-el').height() - navHeight );

    $(window).scroll(function() {
        if(!$('#tnt-menu-burger').hasClass('open')) {
            if ($(window).scrollTop() > 700){
                $('.navbar').removeClass('navbar-light');
                $('.navbar').addClass('navbar-dark');
                $('#navigation-stars').addClass('show');
                $('#tnt-logo').attr('src', '/assets/images/logo-silver.svg');
                $('#tnt-menu-burger span').css('background', '#fff');
            } else {
                $('.navbar').removeClass('navbar-dark');
                $('.navbar').addClass('navbar-light');
                $('#navigation-stars').removeClass('show');
                $('#tnt-logo').attr('src', '/assets/images/logo-gold.svg');
                $('#tnt-menu-burger span').css('background', '#333');
            };
        }
    });

    $('#tnt-menu-burger').click(function() {
        var openClose = $('#tnt-menu-burger[data-navigation]').val();
        if ($(this).hasClass('open')){
            $('.navbar').removeClass('navbar-dark');
            $('.navbar').addClass('navbar-light');
            $('#navigation-stars').removeClass('show');
            $('#tnt-logo').attr('src', '/assets/images/logo-gold.svg');
            $('#tnt-menu-burger span').css('background', '#333');
            $('#tnt-menu').hide();
        } else {
            $('.navbar').removeClass('navbar-light');
            $('.navbar').addClass('navbar-dark');
            $('#navigation-stars').addClass('show');
            $('#tnt-menu').show();
            $('#tnt-menu-burger span').css('background', '#fff');
            $('#tnt-logo').attr('src', '/assets/images/logo-silver.svg');
        };
    });
});