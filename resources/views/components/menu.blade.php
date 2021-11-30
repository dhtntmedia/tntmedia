<style>
    .tnt-media-menu {
        --color: #fff;
        margin-right: -10px;
        padding: 0;
        outline: none;
        border: none;
        background: none;
        cursor: pointer;
        -webkit-appearence: none;
        -webkit-tap-highlight-color: transparent;
    }
    .tnt-media-menu svg {
        width: 64px;
        height: 48px;
        top: -6px;
        left: -14px;
        stroke: var(--color);
        stroke-width: 2.5px;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
        display: block;
    }
    .bg-dark .tnt-media-menu svg {
        stroke: var(--color);
    }
    .bg-light .tnt-media-menu svg {
        stroke: #333;
    }
    .tnt-media-menu svg path {
        transition: stroke-dasharray var(--duration, 0.85s) var(--easing, ease) var(--delay, 0s), stroke-dashoffset var(--duration, 0.85s) var(--easing, ease) var(--delay, 0s);
        stroke-dasharray: var(--array-1, 26px) var(--array-2, 100px);
        stroke-dashoffset: var(--offset, 126px);
        transform: translateZ(0);
    }
    .tnt-media-menu svg path:nth-child(2) {
        --duration: .7s;
        --easing: ease-in;
        --offset: 100px;
        --array-2: 74px;
    }
    .tnt-media-menu svg path:nth-child(3) {
        --offset: 133px;
        --array-2: 107px;
    }
    .tnt-media-menu.active svg path {
        --offset: 57px;
    }
    .tnt-media-menu.active svg path:nth-child(1), .tnt-media-menu.active svg path:nth-child(3) {
        --delay: .15s;
        --easing: cubic-bezier(.2, .4, .2, 1.1);
    }
    .tnt-media-menu.active svg path:nth-child(2) {
        --duration: .4s;
        --offset: 2px;
        --array-1: 1px;
    }
    .tnt-media-menu.active svg path:nth-child(3) {
        --offset: 58px;
    }

    html {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
    }

    * {
        box-sizing: inherit;
    }
    *:before, *:after {
        box-sizing: inherit;
    }

</style>
    <button class="tnt-media-menu">
        <svg viewBox="0 0 64 48">
            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
        </svg>
    </button>
{{--    @include('components.day-night')--}}
<script id="rendered-js">
    document.querySelectorAll('.tnt-media-menu').forEach(btn => {
        btn.addEventListener('click', e => {
            btn.classList.toggle('active');
        });
    });
    //# sourceURL=pen.js
</script>