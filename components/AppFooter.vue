<template>
    <footer class="footer">
        <div class="social">
            <a
                href="https://github.com/glitchedmob"
                target="_blank"
                title="Github"
                rel="noopener"
            >
                <i class="icon-github" aria-hidden="true"></i>
            </a>
            <a
                href="https://dev.to/levi_zitting"
                target="_blank"
                title="Dev.to"
                rel="noopener"
            >
                <i class="icon-dev" aria-hidden="true"></i>
            </a>
            <a
                href="https://twitter.com/levizitting"
                target="_blank"
                title="Twitter"
                rel="noopener"
            >
                <i class="icon-twitter" aria-hidden="true"></i>
            </a>
            <a
                href="https://www.instagram.com/levi_zitting/"
                target="_blank"
                title="Instagram"
                rel="noopener"
            >
                <i class="icon-instagram" aria-hidden="true"></i>
            </a>
            <a
                href="https://www.linkedin.com/in/levi-zitting/"
                target="_blank"
                title="Linkedin"
                rel="noopener"
            >
                <i class="icon-linkedin" aria-hidden="true"></i>
            </a>
            <a href="mailto:me@levizitting.com" title="Email">
                <i class="icon-envelope" aria-hidden="true"></i>
            </a>
        </div>
    </footer>
</template>

<style lang="scss" scoped>
.footer {
    padding: 3rem 0;
}

.social {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    margin-bottom: -2rem;

    a {
        text-decoration: none;
        font-size: 3rem;
        margin: 0 1rem 2rem 1rem;
    }
}
</style>
