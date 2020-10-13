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
        $password2=$requestUtil->readParameter('pwd2');
        $username=$requestUtil ->readParameter('username');
        if($email==NULL || $password==NULL || $password2==NULL || $username==NULL){
            return -1;
        }
        if($password!=$password2){
            return -2;
        }
        
        $dbService = new DAOUser();
        if($dbService->checkUserExist($username)){
            return 1 ;
        }
        
        return $dbService->insertUser($username,$email, md5($password));

    }
    
    
}
