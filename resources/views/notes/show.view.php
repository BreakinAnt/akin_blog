<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="page-shell note-editor">
  <article class="form-panel">
    <header>
      <span class="eyebrow">
        <iconify-icon icon="solar:notebook-line-duotone"></iconify-icon>
        Note #<?= $note->id ?>
      </span>
      <h1 class="title-lg">Captured by <?= $user->name ?></h1>
      <p>A quick snapshot from the workbench.</p>
    </header>

    <div>
      <p><?= nl2br(htmlspecialchars($note->content)) ?></p>
    </div>

    <div class="form-actions">
      <a class="button-secondary" href="/notes">
        <iconify-icon icon="solar:arrow-left-line-duotone"></iconify-icon>
        Back to notes
      </a>
    </div>
  </article>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>