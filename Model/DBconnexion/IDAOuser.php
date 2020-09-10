<?php

interface IDAOUser{
    public function checkUserExist($email );
    public function insertUser($email , $password);
    
}
?>