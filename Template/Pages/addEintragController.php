<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";

    $bookEntryService=new BookEntryService();
    $bookId = $bookEntryService->addBook();
    if($bookId==-1){
       header("Location: addEintrag.php");
    }else{
        header("Location: eintragdetails.php?id=" . $bookId);
    }


?>