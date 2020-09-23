<?php
define('DB_PATH',$_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/bd_gd.sqlite3");
$createStmt = <<<EOF
      CREATE TABLE IF NOT EXISTS USER
      (ID INTEGER PRIMARY KEY    NOT NULL,
      EMAIL           TEXT    NOT NULL,
      PASSWORD        TEXT    NOT NULL);
      CREATE TABLE IF NOT EXISTS BOOKENTRY
      (ID INTEGER PRIMARY KEY    NOT NULL,
      TITEL           TEXT    NOT NULL,
      CONTENT         TEXT    NOT NULL,
      DATE            TEXT   NOT NULL ,
      USERID          INT     NOT NULL);
EOF;
class MyDB extends PDO
{
    public function __construct()
    {
      parent::__construct("sqlite:". DB_PATH);
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }
}
class MydBDriver
{

    public function createDB($createStmt)
    {
       try{
         $db = new MyDB();
         $ret = $db->exec($createStmt);
         $db=NULL;

       }catch(PDOException $e) 	{
            echo $e->getMessage();
            echo $e->getTraceAsString();
        }
    

    }
    

}
//
$dbService = new MyDBDriver();
$dbService->createDB($createStmt);

?>