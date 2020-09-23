<?php

if(!isset($_GET['action']) && !isset($_POST['action']) ){
   // header('Location: login.php');
}
$GB_R_ACTION=NULL;
if(isset($_POST['action']) ){
    $GB_R_ACTION = $_POST["action"];
}
if ($GB_R_ACTION == null || $GB_R_ACTION == "") {
    $GB_R_ACTION = $_GET["action"];
}
if ($GB_R_ACTION == null || $GB_R_ACTION == "") {
   // header('Location: login.php');
}
