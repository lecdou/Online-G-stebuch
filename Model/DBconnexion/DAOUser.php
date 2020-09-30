<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBInterface/IDAOUser.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/DBconnection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Model/DBconnexion/DAO.php");

class DAOUser extends DAO implements IDAOUser{


    public function insertUser($email, $password)
    {
        if ($this->checkUserExist($email, $password )) {
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
    public function getHashPassword($email){
        $db = new MyDB();
        $stmt = $db->prepare("SELECT PASSWORD FROM USER WHERE EMAIL=:email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    
    public function checkUserExist($email, $password)
    {
        $db = new MyDB();
        $stmt = $db->prepare("SELECT count(*) as count FROM USER WHERE EMAIL=:email" );
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row = $stmt->fetchColumn();
        $db=NULL;
        if ($row && password_verify($password,$this->getHashPassword($email))) {
            return array(
                'email'  => $email,
                'pwd'=> $password,
                'id'=> $this->getEntity()->ID
                
              );
        }
        return false;
    }
    public function getId($email ,$password){

        $db = new MyDB();
        $stmt = $db->prepare("SELECT ID FROM USER where EMAIL=:value AND PASSWORD=:password");
        $stmt->bindValue(':value', $email);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        $db=NULL;
        return $result;

    }
    public function getEntity(): string{
        return "User";
    }
    
}