<!DOCTYPE html>
<html>
<head>
    <title>Levi Zitting - Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1976D2">
</head>
<body>

@include("admin.layouts.nav")

<div id="main">
    @yield("content")
</div>

<script type="text/javascript" src="/js/admin.js"></script>
</body>
</html>