<!DOCTYPE html>
<html>
<head>
    <title>Levi Zitting - Programmer, Creator, and Life Long Learner</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1976D2">
    <meta name="msapplication-navbutton-color" content="#1976D2">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1976D2">
    <meta property="og:title" content="Levi Zitting - Programmer, Creator, and Life Long Learner"/>
    <meta property="og:image" content="http://levizitting.com/images/share.jpg"/>
    <meta property="og:site_name" content="Levi Zitting - Programmer, Creator, and Life Long Learner"/>

</head>
<body>
    <main>
        @include("layouts.nav")

        @yield("main")
    </main>

@include("layouts.footer")

<script type="text/javascript" src="{{ mix('/js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ mix('/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>