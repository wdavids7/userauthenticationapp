<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
include './components/header.php';
?>


<body class="p-5 mb-4 bg-light rounded-3">
    <!-- INTRO PANEL START -->
    <header>
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to LMS</h1>
            <p class="fs-4">Your online Library Management System. Please login or signup below.</p>
        </div>
    </header>
    <!-- INTRO PANEL END -->

    <main>
        <!-- ADMIN LOGIN PANEL START -->
        <div class="row">
            <div class="col p-4">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2 class="text-start pb-4">Admin Login</h2>

                    <form action="./includes/login.inc.php" method="post" class="align-items-center justify-content-center">

                        <!-- USER INPUT -->
                        <div class="row-cols-1">
                            <input type="text" name="uid" placeholder="Username" class="border border-light rounded p-1" required>
                        </div>
                        <br>
                        <!-- PASSWORD INPUT -->
                        <div class="row-cols-1">
                            <input type="password" name="pwd" placeholder="Password" class="border border-light rounded p-1" required>
                        </div>
                        <br>
                        <!-- LOGIN BUTTON -->
                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-primary" disabled>LOGIN</button>
                        <!-- PASSWORD RECOVERY -->
                            <a class="btn btn-primary disabled" role="button" aria-disabled="true">FORGOT PASSWORD?</a>
                            <!-- <button type="submit" name="submit" class="btn btn-primary">FORGOT PASSWORD</button> -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- ADMIN LOGIN PANEL END -->

            <!-- STUDENT LOGIN PANEL START -->
            <div class="col p-4">
                <div class="h-100 p-5 text-white bg-secondary rounded-3">
                    <h2 class="text-start pb-4">Member Login</h2>

                    <form action="./includes/login.inc.php" method="post" class="align-items-center justify-content-center">

                        <!-- USER INPUT -->
                        <div class="row-cols-1">
                            <input type="text" name="uid" placeholder="Username" class="border border-light rounded p-1" required>
                        </div>
                        <br>
                        <!-- PASSWORD INPUT -->
                        <div class="row-cols-1">
                            <input type="password" name="pwd" placeholder="Password" class="border border-light rounded p-1" required>
                        </div>
                        <br>

                        <div class="col">
                            <!-- LOGIN BUTTON -->
                            <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                        <!-- PASSWORD RECOVERY -->
                        <a href="reset-password.php" class="btn btn-primary">FORGOT PASSWORD?</a>
                            <!-- <button type="submit" name="submit" class="btn btn-primary">FORGOT PASSWORD</button> -->
                            <!-- SIGN UP BUTTON -->
                            <a href="./pages/signup.page.php" class="btn btn-danger float-end">SIGN UP HERE!</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- STUDENT LOGIN PANEL END -->
        </div>
    </main>


    <?php
    include './components/footer.php';
    ?>