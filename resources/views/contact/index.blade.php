@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

    <?php if($data['sunset'] === 'night') { ?>
        <link rel="stylesheet" href="{{ asset('css/stars.css') }}" />
    <?php } else { ?>
        <link rel="stylesheet" href="{{ asset('css/clouds.css') }}" />
    <?php } ?>
@endpush

@section('content')
    <div id="tnt-contact-form" class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="headingone">Here to help</h1>
                            <h2 class="headingtwo">Contact us</h2>
                            <p class="body">For new business, agency partnerships or general enquiries, send us a message and we&#x27;ll get right back to you. Or, if you prefer, <a class="link link--metis" href="mailto:daniel.harding@tntmedia.co.uk?subject=Website%20enquiry">send us an email</a>. <br /></p>
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
                    <div class="row">
                        <div class="col-md-6">
                            <button class="tnt-media-button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop