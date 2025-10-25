<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="main-feed">
  <header class="feed-header">
    <span class="feed-kicker">Latest posts</span>
    <h1>Insights, experiments & and lessons learned.</h1>
    <p>Handcrafted notes on building products with PHP, modern tooling, and a curiosity-first mindset.</p>
  </header>

  <section class="post-feed">
    <?php foreach($posts as $post): ?>
      <article class="post-card">
        <a href="/post/<?= $post['slug'] ?>" class="post-card-thumb" style="--thumb-image: url('<?= getImage($post['banner_path']) ?>')">
          <img class="post-card-avatar" src="<?= getImage($post['banner_path']) ?>" alt="<?= $post['title'] ?> thumbnail">
          <span class="post-card-views">
            <iconify-icon icon="solar:eye-linear"></iconify-icon>
            <?= $post['view_count'] ?>
          </span>
        </a>

        <div class="post-card-body">
          <div class="post-card-meta">
            <span class="meta-chip">
              <iconify-icon icon="solar:calendar-linear"></iconify-icon>
              <?= formatDate($post['date']) ?>
            </span>
            <span class="meta-chip">
              <iconify-icon icon="solar:folder-linear"></iconify-icon>
              Technology
            </span>
          </div>

          <h2 class="post-card-title">
            <a href="/post/<?= $post['slug'] ?>">
              <?= $post['title'] ?>
            </a>
          </h2>

          <p class="post-card-excerpt"><?= trimText($post['description'], 220) ?></p>

          <a class="post-card-link" href="/post/<?= $post['slug'] ?>">
            Read more
            <iconify-icon icon="solar:alt-arrow-right-line-duotone"></iconify-icon>
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>