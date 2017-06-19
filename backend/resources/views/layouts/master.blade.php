<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1976D2">
</head>
<body>
@include("layouts.nav")

@yield("main")

@include("layouts.footer")

<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>