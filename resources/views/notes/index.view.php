<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="page-shell notes-page">
  <header class="section-header">
    <span class="eyebrow">
      <iconify-icon icon="solar:notebook-line-duotone"></iconify-icon>
      Working notes
    </span>
    <h1 class="title-lg">Lab notes & quick observations</h1>
    <p>Snapshots from experiments in progress—short riffs, half-baked theories, and prototypes worth archiving.</p>
    <div class="form-actions">
      <a class="button" href="/notes/create">
        <iconify-icon icon="solar:add-circle-line-duotone"></iconify-icon>
        New note
      </a>
    </div>
  </header>

  <?php if (empty($notes)): ?>
    <p>No notes yet. Start a new one to keep the momentum going.</p>
  <?php else: ?>
    <ul class="notes-grid">
      <?php foreach ($notes as $note): ?>
        <li class="note-card">
          <p><?= $note['content'] ?></p>
          <a class="note-link" href="<?= "/note/" . $note['id'] ?>">
            Open note
            <iconify-icon icon="solar:alt-arrow-right-line-duotone"></iconify-icon>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif; ?>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>