<?php
//require_once("../../Template/Services/NavigationFilter.php");
require_once("../../Template/Services/UserService.php");
require_once("../../Template/Services/BookEntryService.php");
require_once "../../Template/Services/RequestUtil.php";

            $service=new UserService();
            $code=$service->createUser();
            echo $code;
            if($code==-1){
                header('Location: Registrierung.php');
            }else{
          
                header('Location: login.php');
            }
 
