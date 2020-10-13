<?php

interface IDAOUser{
    public function checkUserExist($username );
    public function insertUser($username,$email , $password);
    
}
?>