<?php
use App\Services\Page;
session_start();

if (!$_SESSION["user"]) {
    \App\Services\Router::redirect('/login');
}
?>

<!doctype html>
<html lang="en">
<?php
Page::part("head");
?>
<body>
<?php
Page::part("navbar");
?>
<div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Hello, <?= $_SESSION['user']["full_name"] ?></h1>
        <img height="300px" src="<?= $_SESSION['user']["avatar"] ?>" alt="">
    </div>
</div>
</body>
</html>