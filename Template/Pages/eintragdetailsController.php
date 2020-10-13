<?php    

require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/BookEntryService.php";
require_once "../../Template/Services/RequestUtil.php";
$bookEntryService=new BookEntryService();
$BOOK_ENTRIES=$bookEntryService->findById();


$delete = $bookEntryService->deleteById();
$update = $bookEntryService->updateBook();

if(isset($delete)){

 header('Location: Dashboard.php');
}




?>

