<?php
session_start();
require 'nav-bar.php'; 
require 'database.php'; 

// select all posts to db
$req = $db->query('SELECT * FROM posts');
$req->execute();

// while show all posts 
while($row = $req->fetch(PDO::FETCH_ASSOC)){
    echo "<h2>{$row["title"]}</h2>";
    echo "<p>{$row["content"]}</p>";
}


?>
