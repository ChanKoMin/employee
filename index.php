<?php
require_once("header.php");
require("connection.php");
$sql = "SELECT * FROM employee";
$res = mysqli_query($conn, $sql);
?>
<div class="container">
    <?php if ($res->num_rows > 0) { ?>
        <table class="table table-bordered table-hover mt-5">
            <thead>
                <tr>
                    <th class="text-center align-middle">Name</th>
                    <th class="text-center align-middle">Age</th>
                    <th class="text-center align-middle">Address</th>
                    <th class="text-center align-middle">Positon</th>
                    <th class="text-center align-middle">Created</th>
                    <th class="text-center align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()) {
                    $dateString = $row['created_at'];
                    $date = new DateTime($dateString);
                    $created_at = $date->format('d M Y');
                ?>
                    <tr>
                        <td class="text-center align-middle"><?= $row['name'] ?></td>
                        <td class="text-center align-middle"><?= $row['age'] ?></td>
                        <td class="text-center align-middle"><?= $row['address'] ?></td>
                        <td class="text-center align-middle"><?= $row['position'] ?></td>
                        <td class="text-center align-middle"><?= $created_at ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-3">
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <h3 class="text-center my-5">There is no Employee.</h3>
    <?php } ?>
</div>
<?php require_once("footer.php") ?>