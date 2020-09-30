<?php
require_once  "../../Template/Services/RequestUtil.php";
require_once  "../../Model/DBconnexion/DAOuser.php";

class UserService
{
    public function createUser()
    {
        $requestUtil=new RequestUtil();
        $email=$requestUtil->readParameter('email');
        $password=$requestUtil->readParameter('pwd');
        $password2=$requestUtil->readParameter('pwd');
        if($email==NULL || $password==NULL || $password2==NULL){
            return -1;
        }
        $dbService = new DAOUser();
        
        return $dbService->insertUser($email, password_hash($password, PASSWORD_BCRYPT));

    }
    
    
}
