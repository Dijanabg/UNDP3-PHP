<?php
require __DIR__ . '/include/header.php';

$req = strtoupper($_SERVER["REQUEST_METHOD"]);

if ($req == "GET") {
    require __DIR__ . '/include/get.php';
} elseif ($req == "POST") {
    require __DIR__ . '/include/post.php';
    require __DIR__ . '/include/response.php';
}

require __DIR__ . '/include/footer.php';
