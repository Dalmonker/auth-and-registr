<?php
use App\Services\Page;
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
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="./login" role="button">Sign In</a>
        </p>
    </div>
</div>
</body>
</html>