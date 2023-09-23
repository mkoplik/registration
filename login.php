<?php
require("connect.php");

$login = $_POST["login"];
$pass = $_POST["pass"];

if (empty($login) || empty($pass)) 
{
    echo "fill in all the fields";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "welcome " . $row['login'];
        } 
    }else echo "no such user";
}