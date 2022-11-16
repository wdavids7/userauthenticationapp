<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
require '../components/connection.php';
require '../components/navbar.php';
?>

<div class="container mt-5">

    <?php include('../includes/message.inc.php'); ?>

    <div class="row g-3">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>To add a member, please complete the form below.
                        <a href="./home.page.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="../components/member.database.php" method="post">

                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputPhone" class="form-label">Contact Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-9 mb-3">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="col-9 mb-3">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="inputCity">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="inputState" class="form-label">Province</label>
                            <select id="inputState" name="province" class="form-select">
                                <option selected>Choose...</option>
                                <option>Eastern Cape</option>
                                <option>Free State</option>
                                <option>Gauteng</option>
                                <option>KwaZulu-Natal</option>
                                <option>Limpopo</option>
                                <option>Mpumalanga</option>
                                <option>Northern Cape</option>
                                <option>North West</option>
                                <option>Western Cape</option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" name="zip" class="form-control" id="inputZip">
                        </div>

                        <div class="col-12 mt-3">
                            <button type="submit" name="save-mbr" class="btn btn-primary">Save</button>
                        </div>

                    </form>
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