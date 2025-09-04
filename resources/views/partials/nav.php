<nav class="no-select">
  <div class="nav-button">
    <div class="nav-button-text">
      <a href="/" class="<?php echo urlIs("/") ? 'url-active' : 'url-inactive' ?>">Home</a>
      <div class="nav-button-line"></div>
    </div>
  </div>
  <div class="nav-button">
    <div class="nav-button-text">
      <a href="/about" class="<?php echo urlIs("/about") ? 'url-active' : 'url-inactive' ?>" >About</a>
      <div class="nav-button-line"></div>
    </div>
  </div>
  <div class="nav-button">
    <div class="nav-button-text">
      <a href="/notes" class="<?php echo urlIs("/notes") ? 'url-active' : 'url-inactive' ?>" >Notes</a>
      <div class="nav-button-line"></div>
    </div>
  </div>
  <div class="nav-button">
    <div class="nav-button-text">
      <a href="/contact" class="<?php echo urlIs("/contact") ? 'url-active' : 'url-inactive' ?>" >Contact</a>
      <div class="nav-button-line"></div>
    </div>
  </div>
</nav>