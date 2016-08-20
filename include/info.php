<?php
if(!isset($_SESSION['email'])) {
    ?>
    <form class="navbar-form navbar-right" method="post" action="log.php" role="search">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-success">Login</button>
    </form>
    <?php
}else{
    ?>
    <div class="navbar-right">
        <span class="navbar-brand"><?php echo $_SESSION['name']; ?></span>
        <a href="logout.php"><button class="btn btn-warning navbar-btn ">Logout</button></a>
    </div>
    <?php
}
?>
</div>
</div>
</nav>
