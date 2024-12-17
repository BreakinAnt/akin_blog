<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <li>
          <a href="<?= "note?id=".$note['id'] ?>" class="text-blue-500 hover:underline">
              <?= $note['body'] ?>
          </a>
          <p>By <?= $user['name'] ?></p>
      </li>
      <p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/notes">Go Back</a>
      </p>
  </div>
</main>

<?php require("partials/footer.php") ?>