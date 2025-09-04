<nav>
  <a href="/" <?php echo urlIs("/") ? $activeClass : $inactiveClass ?> >Home</a>
  <a href="/about" <?php echo urlIs("/about") ? $activeClass : $inactiveClass ?> >About</a>
  <a href="/notes" <?php echo urlIs("/notes") ? $activeClass : $inactiveClass ?> >Notes</a>
  <a href="/contact" <?php echo urlIs("/contact") ? $activeClass : $inactiveClass ?> >Contact</a>
</nav>