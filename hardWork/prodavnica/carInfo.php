<?php
require 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cars = array_filter($db, function ($element) {
        global $id;
        return $element['id'] == $id;
    });
    //var_dump($cars);
} elseif ($_GET['search']) {
    $search = $_GET['search'];
    $cars = array_filter($db, function ($element) {
        global $search;
        return $element['brend'] == $search || $element['name'] == $search || $element['price'] == $search;
    });
    if (count($cars) == 0) {
        header('Location: index.php?error');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Info</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <a class="navbar" href="index.php">Cars</a>
    </nav>
    <div class="cont">
        <h2 class="cont1">
            <?php foreach ($cars as $car) : ?>
                <span><?php echo $car['brend']; ?></span>
            <?php endforeach; ?>
        </h2>
    </div>
    <div class="cont cont2">
        <div class="cont3">
            <?php foreach ($cars as $car) : ?>
                <h3><?php echo $car['name']; ?></h3>
                <hr>
                <p><?php echo $car['info']; ?></p>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>