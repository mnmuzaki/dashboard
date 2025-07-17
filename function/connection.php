<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "crd";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die(mysqli_error($connection));
}