<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once "../../Template/Services/RequestUtil.php";
session_start();
$bookEntryService=new BookEntryService();
$BOOK_ENTRIES=$bookEntryService->getAll();


?>
