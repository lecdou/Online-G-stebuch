<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";
session_start();
    $BookEntryService=new BookEntryService();
    $update = $BookEntryService->updateBook();
    $BOOK_ENTRY=$BookEntryService->findByIdParam($update);
    echo json_encode($BOOK_ENTRY[0]);


?>