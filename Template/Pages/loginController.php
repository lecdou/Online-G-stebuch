<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/loginService.php";
require_once "../../Template/Services/RequestUtil.php";

            $service = new loginService();
            $LOGIN_ENTRIES= $service->getAll();
            $code = $service->checkUser();
            if($code){
                header('Location: Dashboard.php');
            }else{
            
               header('Location: Registrierung.php');
            }
 
