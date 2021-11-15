@extends('layouts.main')

@section('content')

    @include('partials.header')

    <div id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-5 mobile-remove-padding">
                    <img class="image-full image-topup" src="{{ asset('images/hue-after.jpg') }}" />
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="offset-md-1 col-md-5 text-m-5-desktop">
                    <h1 class="headingone">A little about us.</h1>
                    <h2 class="headingtwo">Tautological News and Technology.</h2>
                    <p class="body">TNT Media is ready to assist you with all of your technology needs, including website development, graphic and logo design, SEO, marketing and app development.</p>
                    <p class="body">We don't just construct and leave you to it; we manage and maintain the products we create to help you achieve the growth you need for your company, with a hotline available 24 hours a day, seven days a week.</p>
                    <p class="body">We collaborate with well-known luxury and fashion brands to develop premium, bespoke solutions that drive engagement and growth.</p>
                    <p class="body">The cost of a website/CMS starts at £799.</p>
                    <p class="body">You wouldn't spend £10 and expect a quality tattoo, so stop doing it for your reputable businesses and expect enterprise results.</p>
                </div>
                <div class="col-md-6 mobile-remove-padding">
                    <div id="blind-image-con">
                        <div id="blind-image"></div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <div class="row" id="star-con">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-12">
                            <div id='stars'></div>
                            <div id='stars2'></div>
                            <div id='stars3'></div>
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
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop