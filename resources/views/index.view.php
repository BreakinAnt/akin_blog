<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="bg-primary">
  <div>
    <p><?= $heading ?></p>
  </div>
  <ul>
    <?php foreach($posts as $post): ?>
      <li>
        <article>
          <h2><?= $post['title'] ?></h2>
          <p><?= formatDate($post['date']) ?></p>
          <p><?= trimText($post['content']) ?></p>
        </article>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php require("resources/views/partials/footer.php") ?>