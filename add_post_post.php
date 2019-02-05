<?php
require "database.php";



$title = $_POST["title"];
$content = $_POST["content"];

// Prepare REQ
$req = $db->prepare("INSERT INTO posts (title, content) VALUE (:title, :content)");
$req->execute(array(
    "title" => $title,
    "content" => $content
));

// Redirect to admin + message 
header("Location: admin.php?message=success to insert !");