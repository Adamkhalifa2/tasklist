<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasklist_db";

// connect to DB
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
