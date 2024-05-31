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

if (isset($_POST['submit'])) {
    $_Name = mysqli_real_escape_string($conn, $_POST['name']);
    $_Email = mysqli_real_escape_string($conn, $_POST['email']);
    $_Number = mysqli_real_escape_string($conn, $_POST['number']);
    $_Password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Debugging output
    echo "Name: " . $_Name . "<br>";
    echo "Email: " . $_Email . "<br>";
    echo "Number: " . $_Number . "<br>";
    echo "Password: " . $_Password . "<br>";

    // Check if email or username already exists
    $Dup_Email = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE `Email` = '$_Email'");
    $Dup_Username = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE `Username` = '$_Name'");

    if (mysqli_num_rows($Dup_Email) > 0) {
        echo "
        <script>
            alert('This Email is taken. Please try another email.');
            window.location.href='register.php';
        </script>";
        exit; // Stop further execution
    }

    if (mysqli_num_rows($Dup_Username) > 0) {
        echo "
        <script>
            alert('This Username is taken. \nPlease try another username.');
            window.location.href='register.php';
        </script>";
        exit; // Stop further execution
    }else{

    // SQL query to insert user data into database
    $query = "INSERT INTO `tbluser` (`Username`, `Email`, `Number`, `Password`) 
              VALUES ('$_Name', '$_Email', '$_Number', '$_Password')";
               echo "
               <script>
               alert('Register Sucessfully.');
               
               window.location.href='login.php';
              </script>";
              }

    // Debugging output for SQL query
    echo "SQL Query: " . $query . "<br>";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
