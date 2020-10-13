<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Services/loginService.php";
require_once "../../Template/Services/RequestUtil.php";

            $service = new loginService();
            $user= $service->checkUser();
            
            if($user!=null){
                setcookie('email',$user->getEmail(),time()+60*60*7);
                session_start();
                $_SESSION['email']=$user->getUsername();
                $_SESSION['id'] = $user->getId();
                header('Location: Dashboard.php?code'.$_SESSION['id']);    
            }else{
            
            echo "Email or Password is Invalid. <br>
                  Or you have to Register first. 
                  Click here to <a href='login.php'> try to again </a>";
            
            }
 
?>