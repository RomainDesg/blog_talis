<?php
require 'header.php'; 

echo $_GET["message"];
?>
    <h1>Admin</h1>

    <a href="add_post.php">Ajouter article</a>

<?php

// select all posts to db
$req = $db->query('SELECT id, title FROM posts');
$req->execute();


while($row = $req->fetch(PDO::FETCH_ASSOC)){
    echo "<h4>{$row["title"]}</h4>";
    echo "<a href='delete_post.php?id={$row["id"]}'>X</a>";
}

?>
</body>
</html>