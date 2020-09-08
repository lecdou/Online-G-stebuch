<?php

$stmt = new PDO("sqlite:bd_gb.sqlite3");
$table = "USERS";

$sqlTable = "CREATE TABLE IF NOT EXISTS  $table  (
   id NUMERIC,
   email TEXT,
   pwd TEXT,
   CONSTRAINT id PRIMARY KEY (id)
   )";
   
   $stmt->exec($sqlTable);
?>