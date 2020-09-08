<?php

try{
        $pdo = new PDO("sqlite:bd_gb.sqlite3");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
    } catch(Exception $e) {
        echo("Der Zugriff auf dem DB ist unmöglich:").$e->getMessage();
        die();
    }

?>