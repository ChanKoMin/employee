<?php require_once("header.php") ?>
<?php
require("connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $sql = "INSERT INTO employee (name, age, address, position) VALUES ('$name', $age, '$address', '$position')";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    }
}
?>
<div class="container my-5">
    <form action="" method="post" class="w-50 mx-auto">
        <div class="">
            <label for="name" class="form-label">Employee Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="my-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control">
        </div>
        <div class="">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="my-3">
            <label for="position" class="form-label">Position</label>
            <select name="position" class="form-select">
                <option value="">Please Select Position</option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Staff">Staff</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </form>
</div>
<?php require_once("footer.php") ?>