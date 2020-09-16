<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/IDAOUser.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Dbservice.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/DAO.php");

class DAOUser extends DAO implements IDAOUser{


    public function insertUser($email, $password)
    {
        if ($this->checkUserExist($email)) {
            return -1;
        }
        $db = new MyDB();
        $stmt = $db->prepare("INSERT INTO USER (ID, EMAIL,PASSWORD) VALUES (NULL, :email,:password)");
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);

        $result = $stmt->execute();
        $id = $db->lastInsertId();
        $db=NULL;
        return $id;
    }
    
    public function checkUserExist($email)
    {
        $db = new MyDB();
        $stmt = $db->prepare("SELECT count(*)  as count FROM USER WHERE EMAIL=:email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row = $stmt->fetchColumn();
        $db=NULL;
        echo "NUMROWS = ".$row;
        return $row > 0;
    }
    public function getEntity(): string{
        return "User";
    }
    
}