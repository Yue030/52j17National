<?php
    $dsn = "mysql:host=localhost;charser=utf8;dbname=web52";
    $pdo = new PDO($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>