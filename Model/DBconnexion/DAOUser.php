<?php

require_once("mysqliteconnection.php");
require_once("IDAOUser.php");
require_once("DAO.php");
class DAOUser  extends DAO implements IDAOuser{
    
    private function getPDO(){

        $stmt = new PDO('sqlite:bd_gb.sqlite3');
        // Set errormode to exceptions
        $stmt->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

        $this->stmt =  $stmt;
    
    return    $stmt;
}
    
    public function getEntity(){

    }
    public function checkUserExist($email ){
        $db = $this->getPDO();

        $q = $db->prepare("SELECT * FROM USERS WHERE $email = :value;");
        
        $q->bindParam(':value',$email);

        $q->execute();

        $count = $q->rowCount();

        return $count ? true : false;
    }
    public function insertUser($email , $password){

    }
    
  
}
?>