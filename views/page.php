<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

  <main class="container">
    <?php include 'partials/hero.php'; ?>
    <?php include 'partials/featured.php'; ?>
    
    <div class="row g-5">
      <div class="col-md-8">
        <?php include 'partials/posts.php'; ?>
      </div>
      <div class="col-md-4">
        <?php include 'partials/sidebar.php'; ?>
      </div>
    </div>
  </main>
<?php include 'partials/footer.php'; ?>