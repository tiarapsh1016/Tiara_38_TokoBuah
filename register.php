<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
    <div class="input">
        <form action="proses_register.php" method="post">

        <h1>REGISTER</h1>
        <div class="box-input">
            <input type="text" name="nama" placeholder="Nama">
        </div>

        <div class="box-input">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="box-input">
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="box-input">
            <input type="password" name="password" placeholder="Password">
        </div>

        <a href="login.php">
            <button type="submit" name="register" class="btn-input">Register</button>
        </a>

        <div class="bottom">
            <p>Sudah punya akun?</p>
            <a href="login.php"> Login Disini</a>
        </div>
    </form>
    </div>
    
</body>

</html>