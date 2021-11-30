<style>
    .heart-switch {
        --duration: .45s;
        --stroke: #D1D6EE;
        --stroke-active: #ec4472;
        --fill: #fff;
        --fill-active: #ec638e;
        --shadow: rgba(0, 9, 61, 0.25);
        cursor: pointer;
        position: relative;
        transform: scale(var(--s, 1)) translateZ(0);
        transition: transform 0.2s;
        -webkit-tap-highlight-color: transparent;
    }
    .heart-switch:active {
        --s: .95;
    }
    .heart-switch input {
        -webkit-appearance: none;
        -moz-appearance: none;
        position: absolute;
        outline: none;
        border: none;
        pointer-events: none;
        z-index: 1;
        margin: 0;
        padding: 0;
        left: 1px;
        top: 1px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 1px 3px 0 var(--shadow);
    }
    .heart-switch input + svg {
        width: 36px;
        height: 25px;
        fill: var(--fill);
        stroke: var(--stroke);
        stroke-width: 1px;
        stroke-linejoin: round;
        display: block;
        transition: stroke var(--duration), fill var(--duration);
    }
    .heart-switch input:not(:checked) {
        -webkit-animation: uncheck var(--duration) linear forwards;
        animation: uncheck var(--duration) linear forwards;
    }
    .heart-switch input:checked {
        -webkit-animation: check var(--duration) linear forwards;
        animation: check var(--duration) linear forwards;
    }
    .heart-switch input:checked + svg {
        --fill: var(--fill-active);
        --stroke: var(--stroke-active);
    }

    @-webkit-keyframes uncheck {
        0% {
            transform: rotate(-30deg) translateX(13.5px) translateY(8px);
        }
        50% {
            transform: rotate(30deg) translateX(9px);
        }
        75% {
            transform: rotate(30deg) translateX(4.5px) scaleX(1.1);
        }
        100% {
            transform: rotate(30deg);
        }
    }

    @keyframes uncheck {
        0% {
            transform: rotate(-30deg) translateX(13.5px) translateY(8px);
        }
        50% {
            transform: rotate(30deg) translateX(9px);
        }
        75% {
            transform: rotate(30deg) translateX(4.5px) scaleX(1.1);
        }
        100% {
            transform: rotate(30deg);
        }
    }
    @-webkit-keyframes check {
        0% {
            transform: rotate(30deg);
        }
        25% {
            transform: rotate(30deg) translateX(4.5px) scaleX(1.1);
        }
        50% {
            transform: rotate(30deg) translateX(9px);
        }
        100% {
            transform: rotate(-30deg) translateX(13.5px) translateY(8px);
        }
    }
    @keyframes check {
        0% {
            transform: rotate(30deg);
        }
        25% {
            transform: rotate(30deg) translateX(4.5px) scaleX(1.1);
        }
        50% {
            transform: rotate(30deg) translateX(9px);
        }
        100% {
            transform: rotate(-30deg) translateX(13.5px) translateY(8px);
        }
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

    body {
        min-height: 100vh;
        display: flex;
        font-family: "Roboto", Arial;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #F6F8FF;
    }
    body .heart-switch {
        margin: 12px 0;
    }
    body .dribbble {
        position: fixed;
        display: block;
        right: 20px;
        bottom: 20px;
    }
    body .dribbble img {
        display: block;
        height: 28px;
    }
    body .twitter {
        position: fixed;
        display: block;
        right: 64px;
        bottom: 14px;
    }
    body .twitter svg {
        width: 32px;
        height: 32px;
        fill: #1da1f2;
    }
</style>

<label class="heart-switch">
    <input type="checkbox">
    <svg viewBox="0 0 33 23" fill="white">
        <path d="M23.5,0.5 C28.4705627,0.5 32.5,4.52943725 32.5,9.5 C32.5,16.9484448 21.46672,22.5 16.5,22.5 C11.53328,22.5 0.5,16.9484448 0.5,9.5 C0.5,4.52952206 4.52943725,0.5 9.5,0.5 C12.3277083,0.5 14.8508336,1.80407476 16.5007741,3.84362242 C18.1491664,1.80407476 20.6722917,0.5 23.5,0.5 Z"></path>
    </svg>
</label>