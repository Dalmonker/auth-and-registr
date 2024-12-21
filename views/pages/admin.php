<?php
use App\Services\Page;

if ($_SESSION["user"] && $_SESSION["user"]["group"] != 2) {
    \App\Services\Router::redirect('profile');
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
        <h1 class="display-4">Dashboard</h1>
    </div>
</div>
</body>
</html>