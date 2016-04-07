<?php

$servername = "teamemicro.emicroportal.com";
$username = "teamemicro";
$password = "teamemicro123";
$db = "renterverification";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>