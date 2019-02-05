<?php
$loginPage = true;
require 'header.php'; 
?>

    <form action="login_post.php" method="post">
        <input type="text" placeholder="pseudo" name="pseudo">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="Connexion">
    </form>
    <?php
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
    ?>
</body>
</html>