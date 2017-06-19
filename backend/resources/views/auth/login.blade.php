<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="blue darken-2 valign-wrapper" id="login">
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <h3 class="brand-logo center-align white-text"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></h3>
            </div>
            <form class="col s12 m6 offset-m3 card">
                {{ csrf_field() }}
                <h4 class="center-align">Admin Login</h4>
                <div class="input-field col s12">
                    <input class="validate" id="user-name" type="text">
                    <label for="user-name">Username</label>
                </div>
                <div class="input-field col s12">
                    <input class="validate" id="password" type="password">
                    <label for="password">Password</label>
                </div>
                <input class="btn waves-effect col s12" type="submit" value="Log In">
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>