<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo url_for('@products') ?>">Symfony</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item"><?php echo link_to('Products','@products','class=nav-link') ?></li>
      <li class="nav-item"><?php echo link_to('Categories','@categories','class=nav-link') ?></li>
      <li class="nav-item"><?php echo link_to('Contact','@contact','class=nav-link') ?></li>
      <li class="nav-item"><a href="backend.php" class="nav-link">Admin</a></li>
    </ul>
  </div>
</nav>