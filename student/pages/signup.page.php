<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
//include "../connection.php";
?>

<!-- SIGN UP PANEL START -->
<section class="index-forms">
    <div class="container text-center">
        <div class="signup-form">
            <h2 class="text-center">Sign Up Form</h2>
            <form action="../includes/signup.inc.php" method="post" class="row row-cols-lg-auto g-2 align-items-center justify-content-center">
                <!-- Username Input -->
                <div class="col-12">
                    <input type="text" name="uid" placeholder="Username" class="border border-warning rounded p-1" required>
                </div>
                <br>
                <!-- Email Input -->
                <div class="col-12">
                    <input type="text" name="email" placeholder="E-mail" class="border border-warning rounded p-1" required>
                </div>
                <br>
                <!-- Password Input -->
                <div class="col-12">
                    <input type="password" name="pwd" placeholder="Password" class="border border-warning rounded p-1" required>
                </div>
                <br>
                <!-- Repeat Password Input -->
                <div class="col-12">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="border border-warning rounded p-1" required>
                </div>
                <br>
                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-warning">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- SIGN UP PANEL END -->


