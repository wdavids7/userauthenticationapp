<?php
require '../components/connection.php';
require '../components/navbar.php';
?>

<div class="container mt-5">


    <div class="row g-3">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>View Member Details.
                        <a href="./home.page.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>

                <div class="card-body">

                    <?php
                    if (isset($_GET['role_id'])) {
                        $member_role_id = mysqli_real_escape_string($dbh, $_GET['role_id']);
                        $query = "SELECT * FROM add_members WHERE role_id='$member_role_id' ";

                        $query_run = mysqli_query($dbh, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $member = mysqli_fetch_array($query_run);
                    ?>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">First Name</label>
                                <p class="form-control">
                                    <?= $member['user_fname']; ?>
                                </p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Last Name</label>
                                <p class="form-control">
                                    <?= $member['user_lname']; ?>
                                </p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputPhone" class="form-label">Contact Number</label>
                                <p class="form-control">
                                    <?= $member['user_phone']; ?>
                                </p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <p class="form-control">
                                    <?= $member['user_email']; ?>
                                </p>
                            </div>

                            <div class="col-9 mb-3">
                                <label for="inputAddress" class="form-label">Address</label>
                                <p class="form-control">
                                    <?= $member['user_add1']; ?>
                                </p>
                            </div>

                            <div class="col-9 mb-3">
                                <label for="inputAddress2" class="form-label">Address2</label>
                                <p class="form-control">
                                    <?= $member['user_add2']; ?>
                                </p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputCity" class="form-label">City</label>
                                <p class="form-control">
                                    <?= $member['user_city']; ?>
                                </p>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="inputState" class="form-label">Province</label>
                                <p class="form-control">
                                    <?= $member['user_prov']; ?>
                                </p>
                            </div>

                            <div class="col-md-2 mb-3">
                                <label for="inputZip" class="form-label">Zip</label>
                                <p class="form-control">
                                    <?= $member['user_zip']; ?>
                                </p>
                            </div>

                    <?php

                        } else {
                            echo "<h4>No Such Role Id Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>


</body>

</html>


<?php
include '../components/footer.php';
?>