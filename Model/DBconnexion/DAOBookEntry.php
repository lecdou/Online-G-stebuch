<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBInterface/IDAOBookEntry.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/Dbconnection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Template/Pages/BookEntry.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/DAO.php");

class DAOBookEntry extends DAO implements IDAOBookEntry{

    public function insertBookEntry($userid, $titel, $content, $date)
    {
        if($userid<=0){
           return -1;
        }
        $db = new MyDB();
        $stmt = $db->prepare("INSERT INTO BOOKENTRY (ID, TITEL,CONTENT,DATE,USERID) VALUES (NULL, :titel,:content,:date,:userid)");
        $stmt->bindValue(':titel', $titel);
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':date', $date);
        $stmt->bindValue(':userid', $userid);
        $result = $stmt->execute();
        $id = $db->lastInsertId();

    }

    public function updateBookEntry($bookid, $titel, $content)
    {
        if($bookid<=0){
           return -1;
        }
        $db = new MyDB();
        $stmt = $db->prepare("UPDATE BOOKENTRY SET TITEL=:titel, CONTENT=:content where ID=:bookid");
        $stmt->bindValue(':titel', $titel);
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':bookid', $bookid);
        $result = $stmt->execute();
        $db=NULL;
        return $bookid;
    }
    public function deleteBookEntry($bookid)
    {
        if($bookid<=0){
           return -1;
        }
        return $this->delete($bookid);
    }

    public function getAll()
    {

        $db = new MyDB();
        $stmt = $db->prepare("SELECT b.id, b.titel,b.content,b.date,b.userid,u.email,u.username FROM BOOKENTRY b join USER u on u.id=b.userid");
        $stmt->execute();
       
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "BookEntry");
        $db=NULL;
        return $result;
    }

    public function findByIdCustom($bookid)
    {

        $db = new MyDB();
        $stmt = $db->prepare("SELECT b.id, b.titel,b.content,b.date,b.userid,u.email,u.username FROM BOOKENTRY b join USER u on u.id=b.userid where b.ID=:bookid");
        $stmt->bindValue(':bookid', $bookid);
        $stmt->execute();
       
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "BookEntry");
        $db=NULL;
        return $result;
    }
    public function getEntity(){
        return "BookEntry";
    }
}