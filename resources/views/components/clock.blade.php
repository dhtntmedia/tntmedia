<style>
    .clock {
        width: 15rem;
        height: 15rem;
        position: relative;
        /*-webkit-box-reflect: below -35px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(white));*/
    }
    @media only screen and (min-width: 48rem) {
        .clock {
            /*-webkit-box-reflect: below -45px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(white));*/
        }
    }
    @media only screen and (min-width: 80rem) {
        .clock {
            /*-webkit-box-reflect: below -55px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(white));*/
        }
    }
    .clock .hour-bg,
    .clock .min-bg,
    .clock .sec-bg {
        border: 0.65rem solid #272726;
        background-color: #272726;
        box-shadow: inset 0 6px 10px rgba(0, 0, 0, 0.5);
    }
    .clock .min-bg,
    .clock .hour-bg {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5), inset 0 6px 10px rgba(0, 0, 0, 0.5);
    }
    .clock .sec-bg {
        box-shadow: 0 5px 10px -5px rgba(0, 0, 0, 0.2), inset 0 6px 10px rgba(0, 0, 0, 0.5);
    }
    .clock .hand {
        border: 0.65rem solid transparent;
        background-color: transparent;
        transition: all 0.5s ease;
    }
    .clock .hand:after {
        display: block;
        content: "";
        width: 0.15rem;
        height: 1.5rem;
        margin: 0;
        position: absolute;
        background-color: #F7C393;
        top: 0;
        left: 50%;
        box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.25);
    }
    .clock:after {
        content: "";
        display: block;
        position: absolute;
        left: 50%;
        bottom: 15px;
        margin-left: -125px;
        border-radius: 150px;
        height: 100px;
        width: 250px;
        transform: scaleY(0.19);
        /*box-shadow: 0px 250px 20px -15px rgba(0, 0, 0, 0.05), 0px 250px 20px -55px rgba(255, 255, 255, 0.05);*/
    }
    .seconds,
    .sec-bg {
        width: 13rem;
        height: 13rem;
        margin: -6.5rem 0 0 -6.5rem;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 13rem;
    }

    .minutes,
    .min-bg {
        width: 9rem;
        height: 9rem;
        margin: -4.5rem 0 0 -4.5rem;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 9rem;
    }

    .hour,
    .hour-bg {
        width: 4.5rem;
        height: 4.5rem;
        margin: -2.25rem 0 0 -2.25rem;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 4.5rem;
    }
</style>
<div class="clock">
    <div class="sec-bg">
        <div class="hand seconds" style="transform: rotate(2718deg);"></div>
    </div>
    <div class="min-bg">
        <div class="hand minutes" style="transform: rotate(144deg);"></div>
    </div>
    <div class="hour-bg">
        <div class="hand hour" style="transform: rotate(342deg);"></div>
    </div>
</div>

<script id="rendered-js">
    (function () {
        'use strict';

        function Clock() {

            this.HOUR_DEG = 30;

            this.MIN_SEC_DEG = 6;

            this.date;

            this.iteration = {
                sec: 0,
                min: 0,
                hour: 0 };

            this.hour = document.querySelector('.hour');

            this.min = document.querySelector('.minutes');

            this.sec = document.querySelector('.seconds');
        }

        Clock.prototype.getHour = function () {

            var hour = this.date.getHours();
            hour = hour > 12 ? hour - 12 : hour;

            var degree = 'rotate(' + (this.HOUR_DEG * (this.date.getMinutes() / 60) + this.HOUR_DEG * hour + this.iteration.hour * 360) + 'deg)';

            if (this.hour) {
                if (hour === 12 && this.date.getMinutes() === 59) {
                    ++this.iteration.hour;
                }

                this.hour.style.webkitTransform = degree;
                this.hour.style.transform = degree;
            }
        };

        Clock.prototype.getMinutes = function () {

            var degree = 'rotate(' + (this.MIN_SEC_DEG * this.date.getMinutes() + this.iteration.min * 360) + 'deg)';

            if (this.min) {
                if (this.date.getMinutes() === 59 &&
                    this.date.getSeconds() === 59) {
                    ++this.iteration.min;
                }

                this.min.style.webkitTransform = degree;
                this.min.style.transform = degree;
            }
        };

        Clock.prototype.getSeconds = function () {

            var degree = 'rotate(' + (this.MIN_SEC_DEG * this.date.getSeconds() + this.iteration.sec * 360) + 'deg)';

            if (this.sec) {
                if (this.date.getSeconds() === 59) {
                    ++this.iteration.sec;
                }

                this.sec.style.webkitTransform = degree;
                this.sec.style.transform = degree;
            }
        };

        Clock.prototype.init = function () {
            /** Fire clock functions once per sec */
            setInterval(function () {
                this.date = new Date();
                this.getHour();
                this.getMinutes();
                this.getSeconds();
            }.bind(this), 1000);
        };

        var clock = new Clock();

        clock.init();
    })();
</script>