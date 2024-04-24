<?php
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM employee WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("location:index.php");
    }
}
