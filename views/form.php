<?php include __DIR__ . '/partials/header.php'; ?>
<?php include __DIR__ . '/partials/theme-select.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>

<main class="container">
<h1>Hello <?= $name?>!</h1> 
<form>
    <input name="name" type="text">
    <input name="age" type="numbers">
    <button>Send</button>
    <input type="submit" value="Send2">
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>