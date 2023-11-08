<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
    <div class="input">
        <form action="proses_login.php" method="post">

        <h1>LOGIN</h1>
        <div class="box-input">
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="box-input">
            <input type="password" name="password" placeholder="Password">
        </div>

        <a href="home.php">
            <button type="submit" name="login" class="btn-input">Login</button>
        </a>

        <div class="bottom">
            <p>Belum punya akun?</p>
            <a href="register.php"> Register Disini</a>
        </div>
    </form>
    </div>
    
</body>

</html>