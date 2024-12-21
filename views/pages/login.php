<?php
    use App\Services\Page;

    if ($_SESSION["user"]) {
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
    <h2 class="mt-4">Sign In</h2>
    <form class="mt-4" action="auth/login" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>