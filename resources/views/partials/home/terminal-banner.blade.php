<style>
    .content {
        padding: 25px 0 0;
        background: #000;
    }
    .text {
        background: #000;
    }
    @media (min-width: 640px) {
        .content {
            color: #fff;
            font-family: "Lucida Console", Monaco, monospace;
            line-height: 1.5;
            width: 500px;
            height: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            /*padding: 45px 20px 20px;*/
            box-sizing: border-box;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
            border-radius: 5px 5px 0 0;
        }

        .browser-bar {
            background: #f9f9f3;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 5px;
            overflow: hidden;
            border-radius: 5px 5px 0 0;
        }

        .button {
            display: inline-block;
            float: left;
            border-radius: 50%;
            width: 15px;
            height: 15px;
            margin-right: 5px;
        }

        .close {
            background: #fc635d;
        }

        .min {
            background: #fdbc40;
        }

        .max {
            background: #34c84a;
        }
    }
</style>
<div class="content">
    <div class="browser-bar">
        <span class="close button"></span>
        <span class="min button"></span>
        <span class="max button"></span>
    </div>
    <div class="text">
        <link rel="stylesheet" href="https://unpkg.com/prismjs/themes/prism-coy.css">
        <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.css">
        <style>
            :root {
                --color: #99CBB2;
                --size: 1.4;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/jcubic/static/js/wcwidth.js"></script>
        <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
        <script src="https://unpkg.com/js-polyfills/keyboard.js"></script>
        <script>
            let animation;

            const delay = time => new Promise(r => setTimeout(r, time));

            const animate = async () => {
                animation = true;
                // prompt animation will ensure that cursor is in same line as entered text
                term.clear().set_prompt('');
                await term.set_prompt('Welcome to TNT Media our Digital Agency...', { typing: true });
                await delay(5000);
                term.set_prompt('');
                await term.set_prompt('Wake up, Neo...', { typing: true });
                await delay(5000);
                term.set_prompt('');
                await term.set_prompt('The Matrix has you...', { typing: true });
                await delay(5000);
                term.set_prompt('');
                await term.set_prompt('Follow the white rabbit.', { typing: true });
                await delay(5000);
                term.set_prompt('Knock, knock, Neo.');
                await delay(5000);
                term.set_prompt('');
                animation = false;
            };

            const unasync = function (fn) {
                return () => {
                    fn();
                };
            };

            const term = $('.text').terminal(unasync(animate), {
                prompt: '',
                greetings: false,
                keydown: () => animation ? false : undefined });

            animate();
        </script>
        <div class="term" style="--char-width:10.0781; --terminal-height:584; --terminal-x:10; --terminal-y:30.5938; --terminal-scroll:0;">
            <div class="terminal-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" style="display: none;">
                    <title id="title2">rounded</title>
                    <path id="terminal-broken-image" d="m 14,10 h 2 v 1 a 3,3 0 0 1 -3,3 H 3 A 3,3 0 0 1 0,11 H 4.5 A 1.00012,1.00012 0 0 0 5.207,10.707 L 6.5,9.414 7.793,10.707 a 0.99963,0.99963 0 0 0 1.41406,0 l 2.36719,-2.36719 1.80127,1.44092 A 0.99807,0.99807 0 0 0 14,10 Z M 16,3 V 8 H 14.35059 L 12.12451,6.21924 A 0.99846,0.99846 0 0 0 10.793,6.293 L 8.5,8.586 7.207,7.293 a 0.99962,0.99962 0 0 0 -1.41406,0 L 4.08594,9 H 0 V 3 A 3,3 0 0 1 3,0 h 10 a 3,3 0 0 1 3,3 z M 6,4.5 A 1.5,1.5 0 1 0 4.5,6 1.5,1.5 0 0 0 6,4.5 Z"></path>
                </svg>
                <div class="terminal-output" role="log">

                </div>
                <div class="cmd" style="width: 100%; --cursor-line:0; top: 0px;">
                    <div class="cmd-wrapper">
                <span class="cmd-prompt" style="margin-left: 0px; visibility: visible;">
                    <span data-text="&ZeroWidthSpace;">
                        <span style="width: 1px;">&ZeroWidthSpace;</span>
                    </span>
                </span>
                        <div class="cmd-cursor-line" role="presentation" aria-hidden="true">
                    <span class="cmd-cursor">
                        <span data-text="" class="end"></span>
                    </span>
                        </div>
                    </div>
                    <textarea autocapitalize="off" spellcheck="false" tabindex="1" class="cmd-clipboard" data-cmd-prompt="&ZeroWidthSpace;"></textarea>
                </div>
            </div>
            <div class="terminal-font">&nbsp;</div>
            <div class="terminal-fill"></div>
            <div class="terminal-scroll-marker">
                <div style="height: 20px;"></div>
            </div>
        </div>
    </div>
</div>