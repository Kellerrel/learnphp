<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main class="container">
<h1>Hello <?= $name?>! You are <?= $age?> years young!</h1> 
<form action="/answer" method="POST">
    <input name="name" type="text">
    <input name="age" type="numbers">
    <input name="pass" type="password">
    <button>Send</button>
    <input type="submit" value="Send2">
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>