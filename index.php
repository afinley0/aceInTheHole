<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=afinleyw_ace_db', 'afinleyw_ace_user', 'ace_user_db_p');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

include 'events.html.php';

?>