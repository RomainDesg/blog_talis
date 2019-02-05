<nav>
    <a href="index.php">Home</a>
    <?php
    if(isset($_SESSION["pseudo"])){
        echo '<a href="admin.php">Admin</a>';
    }
    ?>
    <?php
    if(isset($_SESSION["pseudo"])){
        echo '<a href="disconnect.php">Disconnect</a>';
    }else if(!isset($_SESSION["pseudo"])){
        echo '<a href="login.php">Login</a>';
    }
    ?> 
</nav>