<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"> <!-- Make sure this path is correct -->
</head>
<body>
    <div class="login-container"> <!-- Use the same container as login for consistency -->
        <form class="login-form" action="register.php" method="post"> <!-- Use the same form class -->
            <h2 class="login-title">Register</h2> <!-- Use the same title class -->

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit" class="btn-register">Register</button>
            <button type="button" class="btn-login" onclick="window.location.href='login.php'">Login</button> <!-- Added login button -->
        </form>
    </div>
</body>
</html>
