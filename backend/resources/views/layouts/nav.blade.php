<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue darken-2">
            <div class="container"><a class="brand-logo" href="/"><span class="brand-first-name">Levi</span><span class="brand-last-name">Zitting</span></a><a class="button-collapse" href="#" data-activates="mobile-menu"><i class="material-icons">menu</i></a>
                <ul class="right left-align hide-on-med-and-down">
                    <li {{ set_active("/") }}><a class="waves-effect" href="/">Home</a></li>
                    <li {{ set_active("blog") }}><a class="waves-effect" href="/blog">Blog</a></li>
                    <li {{ set_active("projects") }}><a href="/projects">Projects</a></li>
                    <li {{ set_active("about") }}><a class="waves-effect" href="/about">About</a></li>
                    <li {{ set_active("contact") }}><a class="waves-effect" href="/contact">Contact</a></li>
                </ul>
                <ul class="side-nav" id="mobile-menu">
                    <li {{ set_active("/") }}><a class="waves-effect" href="/">Home</a></li>
                    <li {{ set_active("blog") }}><a class="waves-effect" href="/blog">Blog</a></li>
                    <li {{ set_active("projects") }}><a class="waves-effect" href="/projects">Projects</a></li>
                    <li {{ set_active("about") }}><a class="waves-effect" href="/about">About</a></li>
                    <li {{ set_active("contact") }}><a class="waves-effect" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>