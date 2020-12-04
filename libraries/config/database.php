<?php


function getPdo(): PDO
{
    $hostName = 'localhost';
    $dbName = 'wine';
    $user = 'root';
    $psw = '';
    
    try {
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO('mysql:host=' . $hostName . ';dbname=' . $dbName . ';charset=utf8', $user, $psw, $options);
        // print_r($pdo);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
    return $pdo;
}

