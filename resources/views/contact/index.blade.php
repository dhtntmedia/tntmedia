@extends('layouts.main')

@section('content')

    <style>
        #navigation-stars {
            background: radial-gradient(ellipse at top, #1b2735 0%, #090a0f 100%);
            opacity: 1.0 !important;
        }
        #navigation .navbar-light a {
            color: #fff !important;
        }
        #tnt-menu-burger span {
            background: #fff !important;
        }
    </style>

    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: grid;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            overflow: hidden;
        }
        * {
            box-sizing: border-box;
        }
        #tnt-contact-form .inp {
            position: relative;
            margin: auto;
            width: 100%;
            max-width: 280px;
            height: 53px;
        }
        #tnt-contact-form .inp .border {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 18px;
            fill: none;
        }
        #tnt-contact-form .inp .border path {
            stroke: #c8ccd4;
            stroke-width: 2;
        }
        #tnt-contact-form .inp .border path d {
            transition: all 0.2s ease;
        }
        #tnt-contact-form .inp .check {
            position: absolute;
            top: 20px;
            right: 20px;
            fill: none;
            transform: translate(0, 9px) scale(0);
            transition: all 0.3s cubic-bezier(0.5, 0.9, 0.25, 1.3);
            transition-delay: 0.15s;
        }
        #tnt-contact-form .inp .check path {
            stroke: #07f;
            stroke-width: 2;
        }
        #tnt-contact-form .inp input {
            font-family: 'Aveny T' !important;
            -webkit-appearance: none;
            width: 100%;
            border: 0;
            font-family: inherit;
            padding: 0;
            height: 48px;
            font-size: 16px;
            font-weight: 500;
            background: none;
            border-radius: 0;
            color: #223254;
            transition: all 0.15s ease;
        }
        #tnt-contact-form .border {
            border: none !important;
        }
        #tnt-contact-form .inp input:focus {
            outline: none;
        }
        #tnt-contact-form .inp input:focus + .border path {
            stroke: #07f;
        }
        #tnt-contact-form .inp input:valid + .border path {
            animation: elasticInput 0.8s ease forwards;
        }
        #tnt-contact-form .inp input:valid + .border + .check {
            transform: translate(0, 0) scale(1);
        }
        ::placeholder {
            text-transform: uppercase !important;
            color: #9098a9;
        }
        @-moz-keyframes elasticInput {
            33% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,1 253,1 C261,1 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
            66% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,17 253,17 C261,17 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
        }
        @-webkit-keyframes elasticInput {
            33% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,1 253,1 C261,1 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
            66% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,17 253,17 C261,17 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
        }
        @-o-keyframes elasticInput {
            33% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,1 253,1 C261,1 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
            66% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,17 253,17 C261,17 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
        }
        @keyframes elasticInput {
            33% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,1 253,1 C261,1 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
            66% {
                d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,17 253,17 C261,17 268,12 278,12 C284.666667,12 285.333333,12 280,12");
            }
        }
    </style>



    <div id="tnt-contact-form" class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 mt-5">
                <div class="container mt-5">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h1 class="headingone mt-5">Here to help</h1>
                            <h2 class="headingtwo">Contact us</h2>
                            <p class="body">For new business, agency partnerships or general enquiries, send us a message and we&#x27;ll get right back to you. Or, if you prefer, <a href="mailto:sales@tntmedia.co.uk?subject=Website%20enquiry">send us an email</a>. <br /></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inp" class="inp">
                                <input type="text" placeholder="Full name" pattern="[A-Za-z ]{3,}" required>
                                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                                    <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                                </svg>
                                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                    <path d="M1 7 5.5 11 L13 1"></path>
                                </svg>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="inp" class="inp">
                                <input type="text" placeholder="Company" pattern="[A-Za-z ]{3,}" required>
                                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                                    <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                                </svg>
                                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                    <path d="M1 7 5.5 11 L13 1"></path>
                                </svg>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inp" class="inp">
                                <input type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                                    <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                                </svg>
                                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                    <path d="M1 7 5.5 11 L13 1"></path>
                                </svg>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="inp" class="inp">
                                <input type="text" placeholder="Mobile" pattern="[+0-9 ]{11,}" required>
                                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                                    <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                                </svg>
                                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                    <path d="M1 7 5.5 11 L13 1"></path>
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop