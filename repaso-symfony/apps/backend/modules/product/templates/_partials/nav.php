<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Symfony</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      
      <?php if ($sf_user->isAuthenticated()): ?>
        <li class="nav-item"><?php echo link_to('Home', '/','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('products','@products_product','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('categories','@categories_category','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('Users', '@sf_guard_user','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('Home', '/','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('Logout', '@sf_guard_signout','class=nav-link') ?></li>
        <?php else: ?>
        <li class="nav-item"><?php echo link_to('Login', '@sf_guard_signin','class=nav-link') ?></li>
        <li class="nav-item"><?php echo link_to('Home', '/','class=nav-link') ?></li>
      <?php endif; ?>

    </ul>
  </div>
</nav>