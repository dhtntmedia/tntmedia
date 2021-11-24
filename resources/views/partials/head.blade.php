<meta charset="utf-8" />
<title>{{ $data['title'] }} | Tautological News and Technology</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=3">
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v=3">
<meta name="title" content="{{ $data['title'] }} | Tautological News and Technology">
<meta name="description" content="{{ $data['description'] }}">
<meta name="keywords" content="{{ $data['keyword'] }}">
<meta name="robots" content="index, follow">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="{{ $data['title'] }}">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

{{--Twitter Meta--}}
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@weareTNTMedia" />
<meta name="twitter:creator" content="@dannychatham" />
<meta property="og:url" content="https://www.tntmedia.co.uk" />
<meta property="og:title" content="{{ $data['title'] }}" />
<meta property="og:description" content="{{ $data['description'] }}" />
<meta property="og:image" content="{{ asset('images/banner.jpg') }}" />
<meta property="og:type" content="desktop" />
{{--Twitter Meta--}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script data-require="jquery" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://tympanus.net/Development/LineHoverStyles/css/base.css" />
<link rel="stylesheet" href="{{ asset('css/main.css') }}?v=5" />
<link rel="stylesheet" href="{{ asset('css/navigation.css') }}?v=4" />
<link rel="stylesheet" href="{{ asset('css/button.css') }}?v=6" />
@stack('styles')
<link rel="stylesheet" href="{{ asset('css/header.css') }}?v=4" />
<link rel="stylesheet" href="{{ asset('css/footer.css') }}?v=4" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-209212263-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-209212263-1');
</script>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '4497869476922952');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=4497869476922952&ev=PageView&noscript=1"
    /></noscript>
