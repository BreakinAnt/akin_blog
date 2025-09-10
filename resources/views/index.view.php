<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="border-end border-start border-black">
  <ul>
    <?php foreach($posts as $post): ?>
      <li>
        <article>
          <h2><?= $post['title'] ?></h2>
          <img src="<?= getImage($post['banner_path']) ?>" style="max-width:300px;">
          <p><?= formatDate($post['date']) ?></p>
          <p><?= trimText($post['content']) ?></p>
        </article>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php require("resources/views/partials/footer.php") ?>