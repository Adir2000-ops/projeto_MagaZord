<?php
    $username   = 'root';
    $password   = '';
    $banco      = 'megazord';
    $host       = 'localhost';

    try {
        $conn = new PDO("mysql:host={$host};dbname={$banco}", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        var_dump($e);
        echo 'Erro de Conexão my brother: ' . $e->getMessage();
    }