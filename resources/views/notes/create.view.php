<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main class="page-shell note-editor">
  <div class="form-panel">
    <header>
      <span class="eyebrow">
        <iconify-icon icon="solar:add-circle-line-duotone"></iconify-icon>
        Create note
      </span>
      <h1 class="title-lg">Capture a new idea</h1>
      <p>Drop a quick observation, an experiment log, or a reminder for future you.</p>
    </header>

    <form action="/notes" method="POST" class="note-form">
      <div>
        <label for="body">Body</label>
        <textarea name="body" id="body" placeholder="What are you exploring right now?"><?= htmlspecialchars($_POST['body'] ?? '') ?></textarea>
      </div>

      <div class="form-actions">
        <a href="/notes" class="button-secondary">
          <iconify-icon icon="solar:arrow-left-line-duotone"></iconify-icon>
          Cancel
        </a>
        <button type="submit" class="button">
          <iconify-icon icon="solar:upload-linear"></iconify-icon>
          Save note
        </button>
      </div>
    </form>
  </div>
</main>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>