<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/clouds.css') }}" />

<div id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10"id="birds-js">
                <canvas id="canv"></canvas>
                @include('partials.home.header')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/clouds.js') }}"></script>
