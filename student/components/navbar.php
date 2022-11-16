<?php

//navbar.php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>User Authentication App</title>
    <!-- BOOTSTAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JQUERY CDN -->
    <script src="jquery-3.6.0.min.js"></script>
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="../css/secondary.css">

</head>

<body>

        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../images/books.png" class="ms-5" width="60px" alt="logo"></a>
                    <h5>Online Library Management System</h5>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/books.page.php">Books</a>
                            </li>
                            <li class="nav-item pe-3">
                                <a class="nav-link" href="#">Member Profile</a>
                            </li>
                        </ul>
                        <form class="d-flex pe-2" role="search" method="post" name="form1">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" required>
                            <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                        </form>
                        <form class="d-flex pe-5">
                        <a href="../includes/logout.inc.php" class="btn btn-dark">Logout</a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>


    </body>
</html>