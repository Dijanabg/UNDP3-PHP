<?php
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$godina = $_POST['godina'];
$placanje = $_POST['placanje'];
$kolicina = $_POST['kolicina'];

define('ETHCENA', 180);
?>
<html>

<head>
    <title>Potvrda o transakciji</title>
</head>

<body>
    <?php
    $iznos = (int)$kolicina * ETHCENA;
    echo "<h1> Potvrda o izvrsenoj transakciji</h1>";
    if ($kolicina > 0) {
        echo "Ime: " . $ime . "<br>";
        echo "Prezime: " . $prezime . "<br>";
        echo "Nacin placanja: " . $placanje . "<br>";
        echo "Crypto kolicina: " . $kolicina . "<br>";
        echo "Trenutna cena: " . ETHCENA . "<br>";
        echo "Vrednost transakcije: " . $iznos . "<br>";
        echo "Vreme transakcije: " . date('H:i,  JS F') . "<br>";
    } else {
        echo "Niste kupili nista, nema transakcije!!!";
    }
    ?>
</body>

</html>