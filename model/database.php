<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=amw46';
    $username = 'amw46';
    $password = 'FzLRiQH3';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
