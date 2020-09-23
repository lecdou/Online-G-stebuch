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
        $dbService = new DAOUser();
        $response = $dbService->checkUserExist($email,$password);

        return $response;

    }
    public function getAll()
    {
        $dbService = new DAOUser();

        return $dbService->getAll();

    }
}