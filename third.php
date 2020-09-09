<?php
require_once 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$error="";

$stmt = $pdo->query("SELECT `id` FROM `register` WHERE `email` = '$email'");
$rows = $stmt->fetch(PDO::FETCH_LAZY);
if(empty($rows)){
    $error="<h1>Email ненайден</h1>";
    header("Location: auto.php? error='$error'");
}
else{
    $stmt = $pdo->query("select id from register where email = '$email' and pass='$pass'");
    $rows = $stmt->fetch(PDO::FETCH_LAZY);
    if(empty($rows)){
        $error="<h1>Email или пароль введены неверно</h1>";
        header("Location: auto.php? error='$error'");
    }
    else{
        $error="<h1>ВЫ вошли</h1>";
        header("Location: user.php? error='$error'");
    }
}
