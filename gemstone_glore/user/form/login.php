<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../user/style.css"> <!--  main CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
        <div class="login-form">
            <p class="login-title">User Login</p>
            <form class="login-form" action="login1.php" method="POST">
                <div class="form-group">
                    <label for="name_or_email">Username or Email:</label>
                    <input type="text" name="name_or_email" id="name_or_email" placeholder="Enter Your Username or Email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" id="pass" placeholder="Enter Your Password" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-login">Login</button>
                </div>

                <div class="form-group">
                    <button class="btn btn-register">
                        <a href="register.php" class="text-decoration-none text-white">Register</a>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
