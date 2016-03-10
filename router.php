<?php

$username = $_POST['username'];
$password = $_POST['password'];


if($username == 'superadmin' && $password == 'p@secret'){
    header('Location:/dashbaord.php');
    exit;
}
elseif($username == 'renter' && $password == 'p@secret'){
    header('Location:/renter-dashboard.php');
    exit;
}
elseif($username == 'circle' && $password == 'p@secret'){
    header('Location:/circle-dashboard.php');
    exit;
}
elseif($username == 'operator' && $password == 'p@secret'){
    header('Location:/entry-operator-dashboard.php');
    exit;
}
else{
    header('Location:/index.html');
    exit;
}
