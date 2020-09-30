<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/loginService.php";
require_once "../../Template/Services/RequestUtil.php";

            $service = new loginService();
            $code = $service->checkUser();
            $code3 = $service->getId();
            
               if($code){
                setcookie('email',$code2["email"],time()+60*60*7);
                session_start();
                $_SESSION['email']=$code['email'];
                $_SESSION['pwd']= $code['pwd'];
                $_SESSION['id']= $code['id'];
                header('Location: Dashboard.php?code'.$_SESSION['id']);    
            }else{
            // Falls du dich anmeldet, und dass du dich nicht zuvor registriert hast, dann landest du zuerst auf die Registrierrung seite.
            // die Benachrichtigung kommt, dass du dich zuerst anmelden sollst, kommt später
           
            header('Location: Registrierung.php');
            }
 
?>