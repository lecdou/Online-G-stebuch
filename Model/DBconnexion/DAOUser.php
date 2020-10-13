<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBInterface/IDAOUser.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/DBconnection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/DAO.php");

class DAOUser extends DAO implements IDAOUser{


    public function insertUser($username,$email, $password)
    {
        if ($this->checkUserExist($username)) {
            return -1;
        }
        $db = new MyDB();
        $stmt = $db->prepare("INSERT INTO USER (ID, USERNAME, EMAIL, PASSWORD) VALUES (NULL,:username, :email,:password)");
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);

        $result = $stmt->execute();
        $id = $db->lastInsertId();
        $db=NULL;
        return $id;
    }
    public function getHashPassword($email){
        $db = new MyDB();
        $stmt = $db->prepare("SELECT PASSWORD FROM USER WHERE EMAIL=:email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    
    public function checkUserExist($username)
    {
        $db = new MyDB();
        $stmt = $db->prepare("SELECT count(*) as count FROM USER WHERE USERNAME=:username");
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $row = $stmt->fetchColumn();
        $db=NULL;
        return $row;
    }
    public function findUser($username,$email ,$password){

        $db = new MyDB();
        $stmt = $db->prepare("SELECT * FROM USER where EMAIL=:value AND PASSWORD=:password AND USERNAME=:username");
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':value', $email);
        $stmt->bindValue(':password', md5($password));
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "User");
        $db=NULL;
        return $result;

    }
    public function getEntity(): string{
        return "User";
    }
    
}