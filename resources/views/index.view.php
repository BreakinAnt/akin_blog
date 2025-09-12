<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="p-5">
  <?php foreach($posts as $post): ?>
      <article class="post-list">
        <div class="post-header">
          <img class="post-banner circle" src="<?= getImage($post['banner_path']) ?>">
        </div>
        <div class="post-content">
          <h2><?= $post['title'] ?></h2>
          <div class="post-meta">
              <span class="post-meta-item">
                <iconify-icon icon="solar:calendar-linear" width="15" height="15"></iconify-icon> 
                <?= formatDate($post['date']) ?>
              </span>
              <a class="post-meta-item" href="/post/<?= $post['slug'] ?>">
                <iconify-icon icon="solar:folder-linear" width="15" height="15"></iconify-icon> 
                Technology
              </a>
              <span class="post-meta-item">
                <iconify-icon icon="solar:eye-linear" width="15" height="15"></iconify-icon>
                <?= $post['view_count'] ?>
              </span>
          </div>
          <p><?= trimText($post['description'], 255) ?></p>
          <a class="post-read-more" href="/post/<?= $post['slug'] ?>">Read more <iconify-icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"></iconify-icon> </a>
        </div>
      </article>
  <?php endforeach; ?>
</main>

<?php require("resources/views/partials/footer.php") ?>