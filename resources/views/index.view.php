<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="border-end border-start border-secondary p-5">
  <?php foreach($posts as $post): ?>
      <article class="post-list">
        <div class="post-header">
          <img class="post-banner circle" src="<?= getImage($post['banner_path']) ?>">
        </div>
        <div class="post-content">
          <h2><?= $post['title'] ?></h2>
          <div class="post-meta">
            <div class="post-meta-item">
              <span>
                <iconify-icon icon="solar:calendar-linear" width="15" height="15"></iconify-icon> 
                <?= formatDate($post['date']) ?>
              </span>
            </div>
            <div class="post-meta-item">
              <a href="/post/<?= $post['slug'] ?>">
                <iconify-icon icon="solar:folder-linear" width="15" height="15"></iconify-icon> 
                Technology
              </a>
            </div>
          </div>
          <p><?= trimText($post['description'], 255) ?></p>
          <a class="post-read-more" href="/post/<?= $post['slug'] ?>">Read more <iconify-icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"></iconify-icon> </a>
        </div>
      </article>
  <?php endforeach; ?>
</main>

<?php require("resources/views/partials/footer.php") ?>