<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("connection filed" . mysqli_connect_error());

}