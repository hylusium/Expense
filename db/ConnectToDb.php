<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "expenseapp";

$conn = new mysqli($servername,$username,$password,$dbName);

if ($conn -> connect_error) {
    die("connection failed : " . $conn->connect_error);
}

echo("connected succesfully");
?>