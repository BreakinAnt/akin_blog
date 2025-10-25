<nav class="sidebar no-select">
  <div class="brand">
    <div class="brand-logo">K</div>
    <p class="brand-tagline">Building ideas in public.<br>One experiment at a time.</p>
  </div>

  <ul class="nav-links">
    <li>
      <a href="/" class="nav-link <?php echo urlIs("/", 'is-active', '') ?>">
        <iconify-icon icon="solar:home-2-line-duotone"></iconify-icon>
        <span>Home</span>
      </a>
    </li>
    <li>
      <a href="/about" class="nav-link <?php echo urlIs("/about", 'is-active', '') ?>">
        <iconify-icon icon="solar:user-circle-line-duotone"></iconify-icon>
        <span>About</span>
      </a>
    </li>
    <li>
      <a href="/notes" class="nav-link <?php echo urlIs("/notes", 'is-active', '') ?>">
        <iconify-icon icon="solar:notes-minimalistic-line-duotone"></iconify-icon>
        <span>Notes</span>
      </a>
    </li>
  </ul>

  <div class="sidebar-footer">
    <a href="https://github.com/BreakinAnt/akin_blog" class="pill-link" target="_blank" rel="noreferrer">
      <iconify-icon icon="solar:github-line-duotone"></iconify-icon>
      <span>GitHub</span>
    </a>
    <a href="https://www.linkedin.com/in/felipesan08/" class="primary-button" target="_blank" rel="noreferrer">
      <iconify-icon icon="solar:linkedin-outline"></iconify-icon>
      <span>LinkedIn</span>
    </a>
  </div>
</nav>