<?php
 //require_once get_theme_file_path( '../Model/DBconnexion/DAOBookEntry.php' );
 require_once ( "../../Model/DBconnexion/DAOBookEntry.php");

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
}
