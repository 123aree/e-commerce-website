<?php
$config = mysqli_connect('localhost', 'root', '', 'gemstone_glore');

if (!$config) {
    die("Connection failed: " . mysqli_connect_error());
}

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

// Use prepared statements to prevent SQL injection
$stmt = mysqli_prepare($config, "SELECT * FROM `admin` WHERE username = ? AND userpassword = ?");
mysqli_stmt_bind_param($stmt, "ss", $A_name, $A_password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
                #session
                session_start();

if (mysqli_num_rows($result)) {
    // Set session variables
    $_SESSION['admin'] = $A_name;
    echo "
    <script>
    alert('Login Successfully');
    window.location.href='../gemstone_glore.php';
    </script>
    ";
} 
    else {
        echo "
        <script>
        setTimeout(function(){
            alert('Invalid Username or Password');
            setTimeout(function(){
                alert('Please enter correct username or password');
                window.location.href='../form/login.php';
            }, 2000); // Redirect after displaying the additional message
        }, 2000); // Display the message for 2 seconds
        </script>
        ";
        exit();
    }

mysqli_stmt_close($stmt);
mysqli_close($config);
?>
