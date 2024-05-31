<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start(); // Start the session

if (!isset($_SESSION['admin'])) {
    header("location:form/login.php");
    exit();
}

// Your protected page content goes here
echo "<span style='font-weight: bold; color: dark;display: block; text-align: center;'>Welcome, " . $_SESSION['admin'] . "</span>";
?>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand">Gemstone_glore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    
                  </ul>
            </div>
            <span class="text-white">
                <i class="fas fa-user-tie"></i>
                Admin |
                <i class="fas fa-right-from-bracket"></i>
                <a href="form/logout.php" class="text-white text-decoration-none">Logout</a> |
                <a href="../user/index.php" class="text-white text-decoration-none">Userpanel</a>
            </span>
        </div>
       
    </nav>

    <!-- Dashboard -->
    <div class="container-fluid ">
        <div class="container mt-5">
            <h2 class="text-center ">Dashboard</h2>
            <div class="row">
                <div class="col-md-6 bg-secondary text-center m-auto">
                    <a href="products/index.php" class="btn btn-primary">Add Post</a>
                    <a href="" class="btn btn-primary">Users</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
