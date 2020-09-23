<?php

interface IDAOUser{
    public function checkUserExist($email, $password );
    public function insertUser($email , $password);
    
}
?>