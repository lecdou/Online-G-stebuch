<?php
require_once  "../../Template/Services/RequestUtil.php";
require_once  "../../Model/DBconnexion/DAOBookEntry.php";

class addEintragService
{
    public function addBook()
    {
        $requestUtil=new RequestUtil();
        $ersteller=$requestUtil->readParameter('ersteller');
        $Datum=$requestUtil->readParameter('datum');
        $titel=$requestUtil->readParameter('titel');
        $inhalt=$requestUtil->readParameter('content');
        
        
        
        if($ersteller==NULL || $Datum==NULL || $titel==NULL||$inhalt==NULL){
            return -1;
        }
        $dbService = new DAOBookEntry();
     
        return $dbService-> insertBookEntry($userid, $titel, $content, $date)
    }
}
