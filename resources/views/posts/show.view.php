<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="page-shell article-page">
  <header class="article-header">
    <div class="article-header__meta">
      <span class="meta-chip">
        <iconify-icon icon="solar:calendar-linear"></iconify-icon>
        <?= formatDate($post->date) ?>
      </span>
      <span class="meta-chip">
        <iconify-icon icon="solar:notebook-line-duotone"></iconify-icon>
        In-depth note
      </span>
    </div>

    <div class="article-header__media">
      <img src="<?= getImage($post->banner_path) ?>" alt="<?= $post->title ?> banner">
    </div>

    <div class="article-header__body">
      <h1 class="title-lg"><?= $post->title ?></h1>
      <p><?= trimText($post->description ?? '', 220) ?></p>
    </div>

    <div class="article-meta-tray">
      <div class="author">
        <img src="<?= $post->user->photo_path ?>" alt="<?= $post->user->name ?>" class="author-avatar">
        <div>
          <span class="author-name"><?= $post->user->name ?></span>
          <span class="author-tagline"><?= $post->user->bios ?></span>
        </div>
      </div>
      <div class="reading-stats">
        <iconify-icon icon="solar:eye-linear"></iconify-icon>
        <span><?= $post->view_count ?> views</span>
      </div>
    </div>
  </header>

  <article class="article-content">
    <?= $post->content ?>
  </article>
</main>

<!-- PrismJS for syntax highlighting -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>