<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p href="<?= "note?id=".$note['id'] ?>">
            <?= $note['content'] ?>
        </p>
        <p>By <?= $user['name'] ?></p>
      <p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/notes">Go Back</a>
      </p>
  </div>
</main>

<?php require("views/partials/footer.php") ?>