<?php
require_once 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pass = $_POST['pass'];
$cor_pass=$_POST['pass_p'];
if($pass==$cor_pass)
{
    $stmt = $pdo->query('INSERT INTO `register`( 
                                            `name`,
                                            `email`,
                                            `tel`,
                                            `pass`
                                          
                                            )
                                             VALUES (
                                             "' . $name . '",
                                            "' . $email . '",
                                            "' . $tel . '",
                                            "' . $pass . '"
                                          
                                            )');

    header("Location: /index.php");
}
else{
    echo 'Пароли не совпадают';
}
