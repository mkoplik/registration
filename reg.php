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
    echo "password mismatch";
} else {
    $sql = "INSERT INTO `users` (login, pass, email) VALUES (?, ?, ?) ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $login, $pass, $email);
    if ($stmt->execute()) {
        echo "successful registration";
    } else  echo "error:" . $stmt->error;
    $stmt->close();    

}
}

