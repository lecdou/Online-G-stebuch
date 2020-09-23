<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/Dbconnection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBInterface/IDAO.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Template/Pages/User.php");
abstract class DAO implements IDAO{

    public function findById($id){
        $db = new MyDB();
        $stmt = $db->prepare("SELECT * FROM ".$this->getEntity()." e where e.ID=:id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
       
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, $this->getEntity());
        $db=NULL;
        return $result;
    }
    public function getAll(){

        $db = new MyDB();
        $stmt = $db->prepare("SELECT * FROM ".$this->getEntity());
        $stmt->execute();
       
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, $this->getEntity());
        $db=NULL;
        return $result;

    }
    public function delete($id){

        $db = new MyDB();
        $db->beginTransaction();
        $stmt = $db->prepare("DELETE FROM ".$this->getEntity()." where ID=:id");
        $stmt->bindValue(':id', $id);
        $result = $stmt->execute();
        $db->commit();
        $stmt->closeCursor();
        $db=NULL;
        return $id;

    }
    abstract public function getEntity();

}
?>