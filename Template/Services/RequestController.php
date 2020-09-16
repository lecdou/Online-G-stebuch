<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Template/Services/NavigationFilter.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Template/Services/UserService.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/Online-G-stebuch/Template/Services/BookEntryService.php");
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/RequestUtil.php";
class RequestController
{
    public function dispatch($action)
    {
        echo $action;
        if($action=="CREATE_USER"){
            $service=new UserService();
            $code=$service->createUser();
            echo $code;
            if($code==-1){
                header('Location: Registrierung.php?action=FEHLER&message=userexist');
            }else{

                header('Location: login.php');
            }
        }
        else if($action=="LIST_ALL_BOOK"){
            $service=new BookEnryService();
            $rq = new RequestUtil();
            $id = $rq->readParameter('id');
            if($id==NULL){
                
            var_dump($service->getAll());
            }else{
                var_dump($service->findById($id));
            }
            
        }
    }
}

$requestController=new RequestController();
$requestController->dispatch($GB_R_ACTION);
