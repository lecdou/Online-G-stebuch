<?php    

require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once "../../Template/Services/RequestUtil.php";
$bookEntryService=new BookEntryService();
$requestUtil = new RequestUtil();
$BOOK_ENTRIES=$bookEntryService->findById();
$bookid=$requestUtil->readParameter('Bookid');
$BOOK_ENTRY=$BOOK_ENTRIES[0];

?>

