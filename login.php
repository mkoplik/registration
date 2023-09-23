<?php
require("connect.php");

$login = $_POST["login"];
$pass = $_POST["pass"];

if (empty($login) || empty($pass)) 
{
    echo "fill in all the fields";
} else {
    $sql = "SELECT * FROM `users` WHERE login = ? AND pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
   

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "welcome " . $row['login'];
        } 
    }else echo "invalid login or password";
}