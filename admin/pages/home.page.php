<?php

require '../components/member.database.php';

require '../components/navbar.php';
?>

<div class="container">

    <?php include('../includes/message.inc.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Home
                        <a href="./add.member.profile.php" class="btn btn-danger float-end">Add Member</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Role ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Address1</th>
                                <th>Address2</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Zip</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $query = "SELECT * FROM add_members";
                            $query_run = mysqli_query($dbh, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $add_members) {
                            ?>
                                    <tr>
                                        <td><?= $add_members['role_id']; ?></td>
                                        <td><?= $add_members['user_fname']; ?></td>
                                        <td><?= $add_members['user_lname']; ?></td>
                                        <td><?= $add_members['user_phone']; ?></td>
                                        <td><?= $add_members['user_email']; ?></td>
                                        <td><?= $add_members['user_add1']; ?></td>
                                        <td><?= $add_members['user_add2']; ?></td>
                                        <td><?= $add_members['user_city']; ?></td>
                                        <td><?= $add_members['user_prov']; ?></td>
                                        <td><?= $add_members['user_zip']; ?></td>
                                        <td>
                                            <a href="view.member.profile.php?role_id=<?= $add_members['role_id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="edit.member.profile.php?role_id=<?= $add_members['role_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="../components/member.database.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete-mbr" value="<?= $add_members['role_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5>No Record Found</h5>";
                            }
                            ?>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../components/footer.php';
?>