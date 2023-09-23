<?php
require_once("connect.php");
$login = $_POST['login'];
$pass = $_POST['pass'];
$repedpass = $_POST['repedpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repedpass) || empty($email)){
    echo "Fill in all the fields";
} else {
    if ($pass != $repedpass) {          
        echo "Password mismatch";
    } else {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES (?, ?, ?) ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $login, $pass, $email);
        try {
            if ($stmt->execute()) {
                echo "Successful registration";
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() === 1062) {
                echo "Username is already taken. Please choose a different one.";
            } else {
                echo "Error: " . $e->getMessage();
            }
        }
        $stmt->close();
    }
}



