<style>
    :root {
        --text: #2B3044;
        --line: #BBC1E1;
        --line-active: #275EFE;
    }

    .bg-light .tnt-media-link, .bg-light .tnt-media-link-stroke {
        color: #333;
        stroke: #333;
    }
    .bg-dark .tnt-media-link, .bg-dark .tnt-media-link-stroke {
        color: #fff;
        stroke: #fff;
    }


    .tnt-media-link {
        font-size: 18px;
        margin: 0;
        color: var(--text);
        vertical-align: middle;
        margin: auto;
    }
    .tnt-media-link a {
        display: inline-block;
        position: relative;
        text-decoration: none;
        color: inherit;
        margin: 0 var(--spacing, 0px);
        transition: margin 0.25s;
    }
    .tnt-media-link a svg {
        width: 76px;
        height: 40px;
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 7px) translateZ(0);
        fill: none;
        stroke: var(--stroke, var(--line));
        stroke-linecap: round;
        stroke-width: 2px;
        stroke-dasharray: var(--offset, 69px) 278px;
        stroke-dashoffset: 361px;
        transition: stroke 0.25s ease var(--stroke-delay, 0s), stroke-dasharray 0.35s;
    }
    .tnt-media-link a:hover {
        --stroke: var(--line-active);
        --stroke-delay: .1s;
        --offset: 180px;
    }
</style>

<div class="tnt-media-link">
    Need a
    <a href="#">
        website
        <svg class="tnt-media-link-stroke" viewBox="0 0 70 36">
            <path d="M6.9739 30.8153H63.0244C65.5269 30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598 11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153 54.5169 -6.68469 23.489 9.31527"></path>
        </svg>
    </a>
</div>