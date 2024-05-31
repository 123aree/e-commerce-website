<?php
include("../conn.php");


// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'gemstone_glore');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include("../header.php");

if (isset($_POST['submit'])) {
    $_Input = mysqli_real_escape_string($conn, $_POST['name_or_email']);
    $_Password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if user exists with either username or email and password
    $query = "SELECT * FROM `tbluser` WHERE (`Username` = '$_Input' OR `Email` = '$_Input') AND `Password` = '$_Password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
       
        $_SESSION['username'] = $user['Username'];
        $_SESSION['email'] = $user['Email'];
        $_SESSION['loggedin'] = true; // Set a logged-in status

        // Redirect to the cart page if the user tried to access it before logging in
        if (isset($_SESSION['cart_redirect']) && $_SESSION['cart_redirect'] == true) {
            unset($_SESSION['cart_redirect']); // Unset the session variable
            header("Location: ../viewcart.php");
            exit;
        } else {
            // Redirect to the home page if not accessing the cart directly
            header("Location: ../index.php");
            exit;
        }
    } else {
        echo "<script>
            alert('Invalid username/email or password. Please try again.');
            window.location.href='../index.php';
        </script>";
    }
}
?>
