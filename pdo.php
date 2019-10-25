<?php
    $pdo = new PDO('mysql:host = localhost; dbname = products', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> exec("SET CHARACTER SET utf8");
?>