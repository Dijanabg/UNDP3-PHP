<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <a class="navbar" href="index.php">Cars</a>
    </nav>
    <form action="carInfo.php" method="get">

        <input class="search" type="text" name="search" id="search" placeholder="<?php if (isset($_GET['error'])) {
                                                                                        echo "No match found." . " Try again!";
                                                                                    } else {
                                                                                        echo "search";
                                                                                    } ?>">
        <button type="submit" name="submit" id="btn-submit">Search</button>
    </form>
    <?php foreach ($db as $car) : ?>

        <a class="info" href="carInfo.php?id=<?php echo $car["id"]; ?>">
            <div class="container">
                <div class="cards">
                    <div class="card card1"><?php echo $car['brend']; ?></div>
                    <div class="card card2"><?php echo $car["name"]; ?></div>
                    <button class="card btn btn1"><a href=""><?php echo $car["price"] . "$"; ?></a></button>
                    <button class="card <?php if ($car["used"]) {
                                            echo "warning";
                                        } else {
                                            echo "success";
                                        } ?>btn btn2"><a href=""><?php if ($car["used"]) {
                                                                        echo "Used";
                                                                    } else {
                                                                        echo "New";
                                                                    } ?></a></button>
                </div>
            </div>
        </a>

    <?php endforeach ?>


</body>

</html>