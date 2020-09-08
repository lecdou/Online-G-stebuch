<?php

$stmt = new PDO("sqlite:bd_gb.sqlite3");
$table = "USERS";

$sqlTable = "CREATE TABLE IF NOT EXISTS  $table  (
   id NUMERIC,
   titel TEXT,
   content TEXT,
   theDate datetime default current_timestamp,
   Userid NUMERIC,
   CONSTRAINT id PRIMARY KEY (id)
   )";
   
   $stmt->exec($sqlTable);
?>