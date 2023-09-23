<?php
require("connect.php");

$login = $_POST["login"];
$pass = $_POST["pass"];

if (empty($login) || empty($pass)) 
{
    echo "Fill in all the fields";
} else {
    $sql = "SELECT * FROM `users` WHERE login = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
   

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $hashed_password = $row['pass'];
        if (password_verify($pass, $hashed_password)){
            echo "Welcome " . $row['login'];
        } else {
            echo "Invalid login or password";
        }
    }else {
        echo "Invalid login or password";
    }
}