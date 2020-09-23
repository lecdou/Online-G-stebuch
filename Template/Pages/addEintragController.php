<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";

    $BookEntryService=new BookEntryService();
    $bookId = $BookEntryService->addBook();
    if($bookId===-1){
       header("Location: login.php");
    }else{
        header("Location: eintragdetails.php");
    }


?>