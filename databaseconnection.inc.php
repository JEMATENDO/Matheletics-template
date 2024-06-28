<?php
$dsn="mysql:host=localhost;dbname= matheletics challenge";
$dbusername="root";
$dbpassword= " ";

try {
    $pdo=new PDO($dsn,$dbusername,$dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDO Exception $e) {
    echo"Connection failed: ".$e -> getMessage();
}
