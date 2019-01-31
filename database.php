<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=sgp;charset=utf8',"root","");

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
