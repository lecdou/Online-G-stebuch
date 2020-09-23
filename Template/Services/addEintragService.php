<?php
require_once  "../../Template/Services/RequestUtil.php";
require_once  "../../Model/DBconnexion/DAOBookEntry.php";

class addEintragService
{
    public function addBook()
    {
        $requestUtil=new RequestUtil();
        $ersteller=$requestUtil->readParameter('ersteller');
        $titel=$requestUtil->readParameter('titel');
        $inhalt=$requestUtil->readParameter('content');
        $Datum=$requestUtil->readParameter('datum');
        
        
        
        if($ersteller==NULL || $titel==NULL||$inhalt==NULL || $Datum==NULL){
            return -1;
        }
        $dbService = new DAOBookEntry();
     
        return $dbService-> insertBookEntry($ersteller, $titel, $inhalt, $Datum);
    }
}
