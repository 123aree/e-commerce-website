<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        /* CSS for the overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* CSS for the message box */
        .message-box {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Overlay and message box -->
    <div class="overlay">
        <div class="message-box">
            <p>Thanks for logging out. Feel free to login again.</p>
        </div>
    </div>

    <script>
        // Close the window after 3 seconds
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
    </script>
</body>
</html>

