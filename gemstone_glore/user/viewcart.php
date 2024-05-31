<?php
include("header.php");


if(!isset($_SESSION['username'])) {
    header('Location: ../form/login1.php');
    exit(); // Ensure no further code is executed
}



// Initialize the cart session array if not already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add product to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCart'])) {
    $productName = $_POST['Pname'];
    $productPrice = $_POST['Pprice'];
    $productQuantity = $_POST['Pquantity'];

    // Check if the product is already in the cart
    $check_product = array_column($_SESSION['cart'], 'productname');
    if (in_array($productName, $check_product)) {
        echo "<script>
                alert('Product is already in the cart.');
                window.location.href = 'index.php';
              </script>";
    } else {
        // Add new product to the cart
        $_SESSION['cart'][] = array(
            'productname' => $productName,
            'productprice' => $productPrice,
            'productquantity' => $productQuantity
        );
        echo "<script>
                alert('Product added to the cart.');
                window.location.href = 'index.php';
              </script>";
    }
}

// Remove product
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>
                    alert('Product has been removed.');
                    window.location.href = 'viewcart.php';
                  </script>";
        }
    }
}

// Update product
if (isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['item']) {
            $_SESSION['cart'][$key]['productquantity'] = $_POST['Pquantity'];
            echo "<script>
                    alert('Product has been updated successfully.');
                    window.location.href = 'viewcart.php';
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded fs-3 w-100">
                <h1 class="text-dark fw-bold font-monospace py-3">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Serial.No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $grandTotal = 0;
                        
                        if (!empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $productName = $value['productname'];
                                $productPrice = $value['productprice'];
                                $productQuantity = $value['productquantity'];
                                $totalPrice = $productPrice * $productQuantity;
                                $grandTotal += $totalPrice;

                                echo "
                                <tr>
                                    <td>" . ($key + 1) . "</td>
                                    <td>{$productName}</td>
                                    <td>{$productPrice}</td>
                                    <td>
                                        <form action='viewcart.php' method='POST'>
                                            <input type='hidden' name='item' value='{$productName}'>
                                            <input type='number' name='Pquantity' class='form-control text-center' value='{$productQuantity}' min='1'>
                                    </td>
                                    <td>{$totalPrice}</td>
                                    <td>
                                            <button type='submit' name='update' class='btn btn-primary'>Update</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action='viewcart.php' method='POST'>
                                            <input type='hidden' name='item' value='{$productName}'>
                                            <button type='submit' name='remove' class='btn btn-danger'>Delete</button>
                                        </form>
                                    </td>
                                </tr>";
                            }
                            echo "
                            <tr>
                                <td colspan='4' class='text-center text-bg-secondary text-white fw-bold'><strong>Grand Total</strong></td>
                                <td colspan='3' class='text-bg-secondary text-white fw-bold'><strong>{$grandTotal}</strong></td>
                            </tr>";
                        } else {
                            echo "<tr><td colspan='7'>Your cart is empty</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
