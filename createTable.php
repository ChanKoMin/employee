<?php
require_once("connection.php");
$sql = "create table employee(id int not null auto_increment,name varchar(25) not null,age int not null,address varchar(100) not null,position varchar(25) not null,created_at timestamp default current_timestamp,primary key (id))";
$tableName = "employee";
$sqlTable = "SHOW TABLES LIKE 'employee'";
$res = mysqli_query($conn, $sqlTable);
if ($res->num_rows > 0) {
    echo "<script>alert('Table already exists!');</script>";
    // header("location: index.php");
} else {
    $result = mysqli_query($conn, $sql);
    header("location: index.php");
    $connection->close();
}
