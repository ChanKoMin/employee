<?php require_once("header.php") ?>
<div class="container my-5">
    <?php
    require("connection.php");
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM employee WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="update.php" method="post" class="w-50 mx-auto">
        <div class="">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
        </div>
        <div class="">
            <label for="name" class="form-label">Employee Name</label>
            <input type="text" name="name" value="<?= $row['name'] ?>" id="name" class="form-control">
        </div>
        <div class="my-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" value="<?= $row['age'] ?>" id="age" class="form-control">
        </div>
        <div class="">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" cols="30" rows="5" class="form-control"><?= $row['address'] ?></textarea>
        </div>
        <div class="my-3">
            <label for="position" class="form-label">Position</label>
            <select name="position" class="form-select">
                <option value="">Please Select Position</option>
                <option value="Admin" <?= $row['position'] === 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="Manager" <?= $row['position'] === 'Manager' ? 'selected' : '' ?>>Manager</option>
                <option value="Supervisor" <?= $row['position'] === 'Supervisor' ? 'selected' : '' ?>>Supervisor</option>
                <option value="Staff" <?= $row['position'] === 'Staff' ? 'selected' : '' ?>>Staff</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </form>
</div>
<?php require_once("footer.php") ?>