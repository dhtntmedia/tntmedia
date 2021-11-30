<style>
    .tnt-media-day-night-container {
        /*position: relative;*/
        float: right;
        margin: auto;
        margin-left: 10px;
        margin-right: 10px;
        z-index: 1002;
        /*right: 114px;*/
        /*top: 34px;*/
    }
    .tnt-media-day-night {
        --sun: #f0c644;
        /*--day-background: #daf8ff;*/
        --day-line: #3bb6c3;
        --moon: #fdd47e;
        --moon-stars: #ddeafb;
        /*--night-background: #121820;*/
        --night-line: #8191DD;
        --sun-lines: 1;
        --sun-lines-r: 0deg;
        --sun-y: 0;
        --moon-y: 60px;
        --new-percent: 0%;
        /*--background: var(--day-background);*/
        --line: var(--day-line);
        /*--new-background: var(--night-background);*/
        display: grid;
        place-items: center;
        /*background: var(--background);*/
    }
    .tnt-media-day-night.night {
        --sun-y: 60px;
        --moon-y: 0px;
        --background: var(--night-background);
        --line: var(--night-line);
        --new-background: var(--day-background);
    }
    .tnt-media-day-night:before {
        content: "";
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: var(--new-background);
        -webkit-clip-path: circle(var(--new-percent) at 50% 50%);
        clip-path: circle(var(--new-percent) at 50% 50%);
    }
    .tnt-media-day-night .toggle {
        -webkit-appearance: none;
        outline: none;
        border: none;
        background: none;
        position: relative;
        cursor: pointer;
        z-index: 1;
        padding: 0;
        margin: 0;
        display: block;
        width: 48px;
        height: 34px;
    }
    .tnt-media-day-night .toggle svg {
        display: block;
        pointer-events: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
        position: absolute;
        left: var(--left, -2px);
        top: var(--top, 14px);
        stroke-width: var(--stroke-width, 2px);
        stroke: var(--stroke, var(--line));
    }
    .tnt-media-day-night .toggle svg.line {
        --stroke-width: 3px;
        width: 52px;
        height: 36px;
        stroke-width: 2.5px;
    }
    .tnt-media-day-night .toggle div {
        width: 28px;
        height: 41px;
        overflow: hidden;
        -webkit-mask-image: -webkit-radial-gradient(white, black);
        position: absolute;
        left: 10px;
        top: -6px;
        border-radius: 0 0 9px 9px;
    }
    .tnt-media-day-night .toggle div svg {
        --left: 2px;
        --top: 6px;
        width: 24px;
        height: 24px;
    }
    .tnt-media-day-night .toggle div svg.sun {
        --stroke: var(--sun);
        transform: translateY(var(--sun-y)) translateZ(0);
    }
    .tnt-media-day-night .toggle div svg.sun .lines {
        transform-origin: 12px 12px;
        -webkit-animation: sun 20s linear infinite;
        animation: sun 20s linear infinite;
    }
    .tnt-media-day-night .toggle div svg.moon {
        --stroke: var(--moon);
        transform: translateY(var(--moon-y)) scale(0.75) translateZ(0);
    }
    .tnt-media-day-night .toggle div svg.moon .star-1,
    .tnt-media-day-night .toggle div svg.moon .star-2 {
        stroke: var(--moon-stars);
    }
    .tnt-media-day-night .toggle div svg.moon .star-1 {
        transform-origin: 15px 3px;
        -webkit-animation: star 5s linear infinite;
        animation: star 5s linear infinite;
    }
    .tnt-media-day-night .toggle div svg.moon .star-2 {
        transform-origin: 21px 9px;
        -webkit-animation: star2 5s linear infinite;
        animation: star2 5s linear infinite;
    }

    @-webkit-keyframes sun {
        to {
            transform: rotate(360deg) translateZ(0);
        }
    }

    @keyframes sun {
        to {
            transform: rotate(360deg) translateZ(0);
        }
    }
    @-webkit-keyframes star {
        5%, 20% {
            opacity: 0;
            transform: scale(0) rotate(90deg) translateZ(0);
        }
        25%, 100% {
            opacity: 1;
            transform: scale(1) rotate(180deg) translateZ(0);
        }
    }
    @keyframes star {
        5%, 20% {
            opacity: 0;
            transform: scale(0) rotate(90deg) translateZ(0);
        }
        25%, 100% {
            opacity: 1;
            transform: scale(1) rotate(180deg) translateZ(0);
        }
    }
    @-webkit-keyframes star2 {
        0%, 60% {
            opacity: 1;
            transform: scale(1) rotate(0) translateZ(0);
        }
        65%, 70% {
            opacity: 0;
            transform: scale(0) rotate(90deg) translateZ(0);
        }
        75%, 100% {
            opacity: 1;
            transform: scale(1) rotate(180deg) translateZ(0);
        }
    }
    @keyframes star2 {
        0%, 60% {
            opacity: 1;
            transform: scale(1) rotate(0) translateZ(0);
        }
        65%, 70% {
            opacity: 0;
            transform: scale(0) rotate(90deg) translateZ(0);
        }
        75%, 100% {
            opacity: 1;
            transform: scale(1) rotate(180deg) translateZ(0);
        }
    }
    * {
        box-sizing: inherit;
    }
    *:before, *:after {
        box-sizing: inherit;
    }
</style>
<div class="tnt-media-day-night-container">
    <div class="tnt-media-day-night day">
        <button class="toggle">
            <div>
                <svg class="sun" viewBox="0 0 24 24">
                    <g class="lines">
                        <line x1="1" y1="12" x2="2" y2="12"></line>
                        <line x1="4.2" y1="4.2" x2="4.9" y2="4.9"></line>
                        <line x1="12" y1="1" x2="12" y2="2"></line>
                        <line x1="19.8" y1="4.2" x2="19.1" y2="4.9"></line>
                        <line x1="23" y1="12" x2="22" y2="12"></line>
                        <line x1="19.8" y1="19.8" x2="19.1" y2="19.1"></line>
                        <line x1="12" y1="23" x2="12" y2="22"></line>
                        <line x1="4.2" y1="19.8" x2="4.9" y2="19.1"></line>
                    </g>
                    <circle cx="12" cy="12" r="6"></circle>
                </svg>
                <svg class="moon" viewBox="0 0 24 24">
                    <path d="M18,16C12.5,16,8,11.5,8,6 c0-0.9,0.1-1.8,0.4-2.6C4.1,4.5,1,8.4,1,13c0,5.5,4.5,10,10,10c4.6,0,8.5-3.1,9.6-7.4C19.8,15.9,18.9,16,18,16z"></path>
                    <g class="star-1">
                        <line x1="15" y1="1" x2="15" y2="5"></line>
                        <line x1="13" y1="3" x2="17" y2="3"></line>
                    </g>
                    <g class="star-2">
                        <line x1="21" y1="7" x2="21" y2="11"></line>
                        <line x1="19" y1="9" x2="23" y2="9"></line>
                    </g>
                </svg>
            </div>
            <svg class="line" viewBox="0 0 52 36"><path d="M 4,18 C 8.235,18 17.53,18 26,18 C 34.47,18 43.765,18 48,18"></path></svg>
        </button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script id="rendered-js">
    const { to, fromTo, set } = gsap;

    document.querySelectorAll('.tnt-media-day-night').forEach(dayNight => {
        let toggle = dayNight.querySelector('.toggle'),
            svgLine = dayNight.querySelector('.line'),
            svgLineProxy = new Proxy({
                    y: null },
                {
                    set(target, key, value) {
                        target[key] = value;
                        if (target.y !== null) {
                            svgLine.innerHTML = getPath(target.y, .1925);
                        }
                        return true;
                    },
                    get(target, key) {
                        return target[key];
                    } });

        svgLineProxy.y = 18;

        toggle.addEventListener('click', e => {
            e.preventDefault();

            if (dayNight.classList.contains('animate')) {
                return;
            }
            dayNight.classList.add('animate');

            let night = dayNight.classList.contains('night');

            to(dayNight, {
                keyframes: [{
                    [night ? '--moon-y' : '--sun-y']: '-4px',
                    duration: .25 },
                    {
                        [night ? '--moon-y' : '--sun-y']: '60px',
                        duration: .2 },
                    {
                        [night ? '--sun-y' : '--moon-y']: '-4px',
                        duration: .25,
                        delay: .275,
                        onStart() {
                            to(dayNight, {
                                '--new-percent': '100%',
                                '--line': night ? 'var(--day-line)' : 'var(--night-line)',
                                duration: .5 });

                        } },
                    {
                        [night ? '--sun-y' : '--moon-y']: '0px',
                        duration: .5,
                        ease: 'elastic.out(1, .5)',
                        clearProps: true,
                        onComplete() {
                            if (night) {
                                dayNight.classList.remove('night');
                            } else {
                                dayNight.classList.add('night');
                            }
                            dayNight.classList.remove('animate');
                        } }] });

            to(svgLineProxy, {
                keyframes: [{
                    y: 24,
                    delay: .25,
                    duration: .2 },
                    {
                        y: 12,
                        duration: .2 },
                    {
                        y: 24,
                        duration: .25 },
                    {
                        y: 18,
                        duration: .5,
                        ease: 'elastic.out(1, .5)' }] });



        });
    });

    function getPoint(point, i, a, smoothing) {
        let cp = (current, previous, next, reverse) => {
                let p = previous || current,
                    n = next || current,
                    o = {
                        length: Math.sqrt(Math.pow(n[0] - p[0], 2) + Math.pow(n[1] - p[1], 2)),
                        angle: Math.atan2(n[1] - p[1], n[0] - p[0]) },

                    angle = o.angle + (reverse ? Math.PI : 0),
                    length = o.length * smoothing;
                return [current[0] + Math.cos(angle) * length, current[1] + Math.sin(angle) * length];
            },
            cps = cp(a[i - 1], a[i - 2], point, false),
            cpe = cp(point, a[i - 1], a[i + 1], true);
        return `C ${cps[0]},${cps[1]} ${cpe[0]},${cpe[1]} ${point[0]},${point[1]}`;
    }

    function getPath(update, smoothing) {
        let points = [
                [4, 18],
                [26, update],
                [48, 18]],

            d = points.reduce((acc, point, i, a) => i === 0 ? `M ${point[0]},${point[1]}` : `${acc} ${getPoint(point, i, a, smoothing)}`, '');
        return `<path d="${d}" />`;
    }
</script>