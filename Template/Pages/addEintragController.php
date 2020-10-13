<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";
session_start();
    $BookEntryService=new BookEntryService();
    $bookId = $BookEntryService->addBook();
    echo $bookId;
    if($bookId===-1){
        
       header("Location: login.php ");
    }else{
        header("Location: Dashboard.php");
    }


?>