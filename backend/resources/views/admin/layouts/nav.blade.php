<ul class="side-nav fixed blue darken-2" id="slide-out">
    <li>
        <h3 class="brand-logo"><a href="/admin/dashboard"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></a></h3>
    </li>
    <li {{ set_active("admin/dashboard") }}><a class="waves-effect" href="/admin/dashboard"><i class="material-icons white-text">dashboard</i>Dashboard</a></li>
    <li {{ set_active("admin/posts") }}><a class="waves-effect" href="/admin/posts"><i class="material-icons white-text">description</i>Manage Posts</a></li>
    <li {{ set_active("admin/projects") }}><a class="waves-effect" href="/admin/projects"><i class="material-icons white-text">assignment</i>Manage Projects</a></li>
    <li {{ set_active("admin/contacts") }}><a class="waves-effect" href="/admin/contacts"><i class="material-icons white-text">email</i>Contact Submissions</a></li>
    <li><a class="waves-effect" href="/admin/logout"><i class="material-icons white-text">launch</i>Logout</a></li>
</ul>
<nav class="hide-on-large-only blue darken-2">
    <div class="nav-wrapper"><a class="button-collapse" href="#" data-activates="slide-out"><i class="material-icons">menu</i></a><a class="brand-logo" href="index.html"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></a></div>
</nav>