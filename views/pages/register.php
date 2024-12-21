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
    <h2 class="mt-4">Sign Up</h2>
    <form class="mt-4" action="./auth/register" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="full_name">
        </div>
        <div class="form-group">
            <label for="avatar">User Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirm">Password Confirmation</label>
            <input type="password" name="password_confirm" class="form-control" id="password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>