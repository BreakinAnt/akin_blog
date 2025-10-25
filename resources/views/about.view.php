<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="page-shell about-page">
    <section class="about-layout">
        <div class="about-logo-card">
            <img src="/public/favicon_io/android-chrome-512x512.png" alt="Kinu.blog logomark">
        </div>
        <div class="about-copy">
            <span class="eyebrow">
                <iconify-icon icon="solar:compass-line-duotone"></iconify-icon>
                About the studio
            </span>
            <h1 class="title-lg">Kinu.blog is a personal lab for building in the open.</h1>
            <p>Kinu.blog (Akin Blog) is a lean publishing engine written in pure PHP. No frameworks, no scaffolding—just a hand-built MVC stack with routing, controllers, models, and a MySQL data layer.</p>
            <p>The project doubles as a long-term study diary. It is where I experiment with language features, iterate on architecture ideas, and ship small utilities without the comfort blanket of third-party abstractions.</p>
            <p>Inside you will find type-safe models, relationship helpers, custom routing, and other pragmatic patterns stitched together from scratch. It is equal parts sandbox and portfolio: a place to practice deliberate craftsmanship while sharing the process in public.</p>
        </div>
    </section>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>