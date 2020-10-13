<?php
 //require_once get_theme_file_path( '../Model/DBconnexion/DAOBookEntry.php' );
 require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Model/DBconnexion/DAOBookEntry.php";

class BookEntryService
{
    public function updateBook()
    {
        $requestUtil=new RequestUtil();
        $bookid=$requestUtil->readParameter('updateid');
        $titel=$requestUtil->readParameter('titel');
        $inhalt=$requestUtil->readParameter('content');

        if ($bookid == null) {
            return null;
        }
        $dbService = new DAOBookEntry();

        return $dbService->updateBookEntry($bookid, $titel, $inhalt);

    }



    public function getAll()
    {
        $dbService = new DAOBookEntry();

        return $dbService->getAll();

    }
    public function findById()
    {
        $requestUtil=new RequestUtil();
        $bookid=$requestUtil->readParameter('Bookid');


        if ($bookid == null) {
            return null;
        }
        $dbService = new DAOBookEntry();

        return $dbService->findByIdCustom($bookid);

    }
    public function deleteById()
    {
        $requestUtil=new RequestUtil();
        $bookid=$requestUtil->readParameter('deleteid');
        
       if ($bookid == null) {
            return null;
        }
        $dbService = new DAOBookEntry();

        return $dbService->deleteBookEntry($bookid);

    }
    public function addBook()
    {
        $requestUtil=new RequestUtil();
        $ersteller=$requestUtil->readParameter('ersteller');
        $titel=$requestUtil->readParameter('titel');
        $inhalt=$requestUtil->readParameter('content');
        $Datum=$requestUtil->readParameter('datum');
        
        echo $_SESSION['id']; 
        echo $titel;
        echo $inhalt;
        echo $Datum;
        if($_SESSION['id']==NULL || $titel==NULL||$inhalt==NULL){
            return -1;
        }
        $dbService = new DAOBookEntry();
     
        return $dbService-> insertBookEntry($_SESSION['id'], $titel, $inhalt, $Datum);
    }
}
