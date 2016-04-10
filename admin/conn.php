<?php
if($_SERVER['HTTP_HOST'] == 'www.tenant.local'){

    $servername = "localhost";
    $username = "root";
    $password = "commonrbs";
    $db = "citizenvarification";
}else{
    $servername = "teamemicro.emicroportal.com";
    $username = "teamemicro";
    $password = "teamemicro123";
    $db = "renterverification";
}

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>