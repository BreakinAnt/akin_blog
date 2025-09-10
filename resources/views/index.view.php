<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="border-end border-start border-secondary p-5">
  <?php foreach($posts as $post): ?>
      <article class="post-list">
        <div class="post-header">
          <img class="post-banner" src="<?= getImage($post['banner_path']) ?>">
        </div>
        <div class="post-content">
          <h2><?= $post['title'] ?></h2>
          <span><?= formatDate($post['date']) ?></span>
          <span class="text-black">Technology</span>
          <p><?= trimText($post['content']) ?></p>
          <a href="/post/<?= $post['id'] ?>"><span>Read more</span> <iconify-icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"></iconify-icon> </a>
        </div>
      </article>
  <?php endforeach; ?>
</main>

<?php require("resources/views/partials/footer.php") ?>