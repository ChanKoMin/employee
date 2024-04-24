<?php
$host = "localhost";
$user = "chankomin";
$password = "prometheus";
$db = "testdb";
$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    echo "Connection error " . mysqli_connect_error();
}
