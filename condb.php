<?php 
$host = "localhost";
$username = "root";
$password = "!Home4301";
$dbname = "benjamatest";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}
?>