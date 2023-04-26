<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$con = new mysqli("localhost", "root","login");
if($con->connect_error){
    die("failed to connect" .$con->connect_error);
}
else{
    $stmt = $con->prepare("select * ");
}