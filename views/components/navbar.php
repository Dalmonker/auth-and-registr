<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">myProject</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="./">Home</a>
        </div>
    </div>
    <div class="d-flex">
        <?php
            if (!$_SESSION["user"]) {
                ?>
                <a href="./login" class="nav-link active">Login</a>
                <a href="./register" class="nav-link active">Register</a>
                <?php
            } else {
                ?>
                 <a href="./profile" class="nav-link active">Profile</a>
                <form action="auth/logout" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            <?php
                }
            ?>
    </div>
</nav>