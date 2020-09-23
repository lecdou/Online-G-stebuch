<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/UserService.php";
$bookEntryService=new BookEntryService();
$BOOK_ENTRIES=$bookEntryService->getAll();


