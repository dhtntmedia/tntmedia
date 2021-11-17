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
<meta property="og:url" content="https://www.tntmedia.co.uk/" />
<meta property="og:image" content="https://www.tntmedia.co.uk/public/assets/images/TNT-media-gallexy.png" />
<meta content="{{ $data['title'] }}" property="twitter:title" />
<meta content="{{ $data['description'] }}"
      property="twitter:description" />
<meta property="og:type" content="desktop" />

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
