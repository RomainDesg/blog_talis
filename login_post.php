<?php
require "database.php";

$req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
$req->execute(array(
    "pseudo" => $_POST["pseudo"],
    "password" => $_POST["password"]
));
$result = $req->fetch();
if(!$result){
    header("Location: login.php");
}else{
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
    header("Location: admin.php");
}