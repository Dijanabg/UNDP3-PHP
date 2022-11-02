<?php
//logika
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        * {
            text-align: center;
            background-color: beige;
        }
    </style>
</head>

<body>
    <h3>FIRST REAL LOGIN</h3>
    <form action="loginValidation.php" method="POST">
        <!-- Dodat input za username -->
        <label for="username">Username:</label>
        <div>
            <input type="text" id="username" name="username" placeholder="Unesi username...">
        </div>
        <label for="email">Email:</label>
        <div>
            <input type="text" id="email" name="email" placeholder="Unesi email...">
        </div>
        <label for="password">Sifra:</label>
        <div>
            <input type="password" name="password" id="password" placeholder="Unesi sifru..">
        </div>
        <br>
        <input type="checkbox" name="remember" id="remember"> Zapamti me
        <br> <br>
        <input type="submit" value="Login" name="submit">
    </form>

</body>

</html>