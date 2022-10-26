<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeteng page</title>
</head>

<body>
    <p>
        <!-- POST method -->
        Welcome <?php echo $_POST["name"]; ?><br>
        Registreted email address:<?php echo $_POST["email"]; ?>
        <?php //print_r(($_POST));
        ?>
    </p>
</body>

</html>