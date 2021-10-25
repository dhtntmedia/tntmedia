@extends('layouts.news')

@section('content')

    <main id="main" class="cs-site-primary">
        <div class="cs-site-content cs-sidebar-disabled cs-metabar-disabled section-heading-default-style-3">
            <div class="cs-container">
                <div id="content" class="cs-main-content">
                    <div id="canvas-content" class="canvas-content entry-content">

                        @include('partials.news.home.main-block-one')

                        @include('partials.news.home.content-block-one')

                        @include('partials.news.home.content-block-two')

                        @include('partials.news.home.content-block-three')

                        @include('partials.news.home.content-block-four')

                        @include('partials.news.home.content-block-five')

                        @include('partials.news.home.content-block-six')

                        @include('partials.news.home.main-block-two')

                        @include('partials.news.home.content-block-seven')

                    </div>
                </div>
            </div>
        </div>
    </main>

@stop