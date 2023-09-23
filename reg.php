<?php
require_once("connect.php");
$login = $_POST['login'];
$pass = $_POST['pass'];
$repedpass = $_POST['repedpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repedpass) || empty($email)){
    echo "fill in all the fields";
} else
{
if ($pass != $repedpass) {          
    echo "Password mismatch";
} else {
    $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login','$pass', '$email') ";
    if ( $conn -> query($sql) === true) {
        echo "successful registration";
    } else "error:" . $conn -> error;
    

}
}

