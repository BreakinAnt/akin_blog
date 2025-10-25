<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="reading-layout">
  <header class="reading-hero" style="--hero-image: url('<?= getImage($post->banner_path) ?>')">
    <div class="reading-hero__media">
      <img src="<?= getImage($post->banner_path) ?>" alt="<?= $post->title ?> banner" class="reading-hero__image">
    </div>
    <div class="reading-hero__content">
      <span class="meta-chip">
        <iconify-icon icon="solar:calendar-linear"></iconify-icon>
        <?= formatDate($post->date) ?>
      </span>
      <h1><?= $post->title ?></h1>
      <p><?= trimText($post->description ?? '', 180) ?></p>
    </div>
  </header>

  <article class="reading-article">
    <div class="reading-article__meta">
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

    <div class="reading-article__content">
      <?= $post->content ?>
    </div>
  </article>
</main>

<!-- PrismJS for syntax highlighting -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>