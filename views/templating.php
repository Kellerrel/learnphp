<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

  <main class="container">
    <h1>Hello <?= $name?>! You are <?= $age?> years old!</h1>
    <?php for ($i = 0; $i < 10; $i++): ?>
      <?php if ($i % 2): ?>
        <li class="bg-primary"><?= $i ?></li>
      <?php else: ?>
        <li><?= $i ?></li>
      <?php endif ?>
    <?php endfor ?>
  </main>
<?php include __DIR__ . '/partials/footer.php'; ?>