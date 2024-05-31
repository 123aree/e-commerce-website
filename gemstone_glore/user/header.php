<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$count = count($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemstone Glore</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div class="container-fluid p-1 font-monospace bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand pb-2" href="#">
                    <img src="logo.png" alt="Logo" style="width: 90px;">
                </a>
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">
                                <i class="fa-solid fa-house-circle-check"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="viewcart.php">
                                <i class="fa-solid fa-cart-shopping"></i> Cart (<?php echo $count; ?>)
                            </a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link text-danger fw-bold">
                                <i class="fa-solid fa-user"></i> Welcome 
                                <?php
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                } else {
                                    echo "Guest";
                                }
                                ?>
                            </span>
                        </li>
                        <?php if (!isset($_SESSION['username'])): ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="form/login.php">
                                    <i class="fa-solid fa-right-to-bracket"></i> Login
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="form/logout.php">
                                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../admin/form/login.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-dark centered-links font-monospace sticky-top">
            <ul class="list-unstyled d-flex justify-content-center m-0 p-2">
                <li class="px-5">
                    <a href="resin products.php" class="text-decoration-none text-white fs-4">Resin Products</a>
                </li>
                <li class="px-5">
                    <a href="canvas painting.php" class="text-decoration-none text-white fs-4">Canvas Paintings</a>
                </li>
                <li class="px-5">
                    <a href="neon lights.php" class="text-decoration-none text-white fs-4">Neon Lights</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
