<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<?php $featuredPost = $posts[0] ?? null; ?>
<?php $remainingPosts = $featuredPost ? array_slice($posts, 1) : $posts; ?>

<main class="page-shell home-page">
  <?php if ($featuredPost): ?>
    <section class="hero">
      <div class="hero-copy">
        <span class="eyebrow">
          <iconify-icon icon="solar:planet-line-duotone"></iconify-icon>
          Weekly dispatch
        </span>
        <h1 class="title-xl">Stories on crafting thoughtful web experiences.</h1>
        <p>Notes from the studio on building PHP-first products, designing humane interfaces, and iterating in public.</p>
        <div class="hero-meta">
          <span class="meta-chip">
            <iconify-icon icon="solar:notes-minimalistic-line-duotone"></iconify-icon>
            <?= count($posts) ?> essays archived
          </span>
          <span class="meta-chip">
            <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            Updated <?= formatDate($featuredPost['date']) ?>
          </span>
        </div>
      </div>

      <a class="hero-feature" href="/post/<?= $featuredPost['slug'] ?>">
        <div class="hero-feature__image">
          <img src="<?= getImage($featuredPost['banner_path']) ?>" alt="<?= $featuredPost['title'] ?> banner">
        </div>
        <div class="meta-row">
          <span class="meta-chip">
            <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            <?= formatDate($featuredPost['date']) ?>
          </span>
          <span class="meta-chip">
            <iconify-icon icon="solar:eye-linear"></iconify-icon>
            <?= $featuredPost['view_count'] ?> reads
          </span>
        </div>
        <h2 class="hero-feature__title"><?= $featuredPost['title'] ?></h2>
        <p><?= trimText($featuredPost['description'], 160) ?></p>
        <span class="hero-feature__link">
          Read the full story
          <iconify-icon icon="solar:alt-arrow-right-line-duotone"></iconify-icon>
        </span>
      </a>
    </section>
  <?php endif; ?>

  <section class="post-collection">
    <header class="section-header">
      <span class="eyebrow">
        <iconify-icon icon="solar:star-fall-minimalistic-line-duotone"></iconify-icon>
        Latest posts
      </span>
      <h2>Recent dispatches from the notebook</h2>
      <p>Field-tested lessons, tiny experiments, and long-form thinking on modern PHP and product craft.</p>
    </header>

    <?php if (empty($remainingPosts)): ?>
      <p>More stories are brewing. Check back soon for fresh notes.</p>
    <?php else: ?>
      <div class="post-grid">
        <?php foreach ($remainingPosts as $post): ?>
          <article class="story-card">
            <a href="/post/<?= $post['slug'] ?>" class="story-card__thumb">
              <img src="<?= getImage($post['banner_path']) ?>" alt="<?= $post['title'] ?> thumbnail">
            </a>
            <div class="story-card__body">
              <div class="meta-row">
                <span class="meta-chip">
                  <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                  <?= formatDate($post['date']) ?>
                </span>
                <span class="meta-chip">
                  <iconify-icon icon="solar:eye-linear"></iconify-icon>
                  <?= $post['view_count'] ?> views
                </span>
              </div>
              <h3 class="story-card__title">
                <a href="/post/<?= $post['slug'] ?>">
                  <?= $post['title'] ?>
                </a>
              </h3>
              <p class="story-card__excerpt"><?= trimText($post['description'], 180) ?></p>
              <a class="story-card__link" href="/post/<?= $post['slug'] ?>">
                Keep reading
                <iconify-icon icon="solar:alt-arrow-right-line-duotone"></iconify-icon>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </section>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>