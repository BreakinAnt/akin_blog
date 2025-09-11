<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main>
  <div>
        <div class="post-header">
          <img class="post-banner full" src="<?= getImage($post->banner_path) ?>">
        </div>
        <p>
            <?= $post->content ?>
        </p>
      <p>
        <a href="/">Go Back</a>
      </p>
  </div>
</main>

<?php require("resources/views/partials/footer.php") ?>