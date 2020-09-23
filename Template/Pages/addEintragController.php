<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/addEintragService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";

    $bookEntryService=new addEintragService();
    $bookId = $bookEntryService->addBook();
    if($bookId===-1){
       header("Location: login.php");
    }else{
        header("Location: eintragdetails.php");
    }


?>