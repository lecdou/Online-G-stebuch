<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";
session_start();

    $BookEntryService=new BookEntryService();
    $delete = $BookEntryService->deleteById();
    echo json_encode($delete);
?>