<?php
$servername = "localhost";
$username = "antona";
$password = "%InIkNKC";
$dbname = "antona_rolsa";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>