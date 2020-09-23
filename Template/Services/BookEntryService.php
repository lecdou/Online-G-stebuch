<?php
 //require_once get_theme_file_path( '../Model/DBconnexion/DAOBookEntry.php' );
 require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Model/DBconnexion/DAOBookEntry.php";

class BookEntryService
{
    public function getAll()
    {
        $dbService = new DAOBookEntry();

        return $dbService->getAll();

    }
    public function findById($bookid)
    {

        if ($bookid == null) {
            return null;
        }
        $dbService = new DAOBookEntry();

        return $dbService->findByIdCustom($bookid);

    }
    public function addBook()
    {
        $requestUtil=new RequestUtil();
        $ersteller=$requestUtil->readParameter('ersteller');
        $Datum=$requestUtil->readParameter('Datum');
        $titel=$requestUtil->readParameter('titel');
        $inhalt=$requestUtil->readParameter('content');
        
        echo $ersteller; 
        echo  $Datum;
        echo  $titel;
        echo  $inhalt;
        
        if($ersteller==NULL || $titel==NULL||$Datum==NULL||$inhalt==NULL){
            return -1;
        }
        $dbService = new DAOBookEntry();
        
        return $dbService-> insertBookEntry($ersteller, $titel ,$inhalt, $Datum );
    
    }
}
