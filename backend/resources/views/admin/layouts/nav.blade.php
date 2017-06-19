<ul class="side-nav fixed blue darken-2" id="slide-out">
    <li>
        <h3 class="brand-logo"><a href="/admin/dashboard"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></a></h3>
    </li>
    <li {{ set_active("admin/dashboard") }}><a class="waves-effect" href="/admin/dashboard">Dashboard</a></li>
    <li {{ set_active("admin/posts") }}><a class="waves-effect" href="/admin/posts">Manage Posts</a></li>
    <li {{ set_active("admin/projects") }}><a class="waves-effect" href="/admin/projects">Manage Projects</a></li>
</ul>
<nav class="hide-on-large-only blue darken-2">
    <div class="nav-wrapper"><a class="button-collapse" href="#" data-activates="slide-out"><i class="material-icons">menu</i></a><a class="brand-logo" href="index.html"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></a></div>
</nav>