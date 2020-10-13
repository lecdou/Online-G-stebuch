<?php
require_once  "../../Template/Services/RequestUtil.php";
require_once  "../../Model/DBconnexion/DAOuser.php";

class loginService
{
    public function checkUser()
    {
        $requestUtil=new RequestUtil();
        $email=$requestUtil->readParameter('email');
        $password=$requestUtil->readParameter('pwd');
        $username=$requestUtil->readParameter('username');
        $dbService = new DAOUser();
        $response = $dbService->findUser($username,$email ,$password);
        if($response!=null){
            return $response [0];
        }
        return null;

    }
   
}