<?php
require 'header.php'; 

echo $_GET["message"];
?>
    <h1>Admin</h1>

    <a href="add_post.php">Ajouter article</a>

<?php

// select all posts to db
$req = $db->query('SELECT * FROM posts');
$req->execute();

// while show all posts 
while($row = $req->fetch(PDO::FETCH_ASSOC)){
    echo "<h2>{$row["title"]}</h2>";
    echo $_GET["<button aria-label="Close Account Info Modal Box">&times;</button>"];
}

?>

</body>
</html>