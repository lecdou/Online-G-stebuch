<?php
require_once ("../../Template/Services/UserService.php");



            $errorMessage = [];
            $service=new UserService();
            $code=$service->createUser();
            if($code==-1){
                header('Location: Registrierung.php');
            }elseif($code==1){
                $errorMessage=["username already exit!! PLEASE CHANGE IT"];
			}else{
          
                header('Location: login.php');
            }

            if( count( $errorMessage) > 0 ){
                echo "<strong>".$errorMessage[0]."</strong> Click here to <a href='Registrierung.php'> try to again </a>";
            }
 
?>
 