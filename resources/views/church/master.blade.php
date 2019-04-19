<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | ACTION Christian Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox, and Opera theme color -->
    <meta name="theme-color" content="#0076a2" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#0076a2" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta property="og:url"           content="{{ url('/') }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="@yield('title') | ACTION Christian Center" />
	<meta property="og:image"         content="{{ asset('church/img/church.jpg') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('/church/css/app.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="church">
    @include('church.partials.nav')
    @yield('content')
    @include('church.partials.footer')
    @include('church.partials.plan-a-visit')
</body>
</html>