<?php
require("connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $sql = "UPDATE employee SET name = '$name', age = $age, address = '$address', position = '$position' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("location:index.php");
    }
}
