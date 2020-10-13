<?php
require_once ("../../Template/Services/UserService.php");



            $service=new UserService();
            $code=$service->createUser();
            if($code==-1){
                header('Location: Registrierung.php');
            }elseif($code==1){
                $name_error="username already exit!! PLEASE CHANGE IT";
			}elseif($code==-2){
                header("Location:Registrierung.php?err=" . urlencode(" the 2 passwords do not match ! Please check it once more"));
				exit();
            }else{
          
                header('Location: login.php');
            }
 
 if(isset($name_error)):?>
  <script> 
  document.location.href = 'Registrierung.php';
   document.getElementById('username').style.color='#ff352c';
   document.getElementById('username').innerHTML="username already exit!! PLEASE CHANGE IT"; 
   
   </script>"
<?php endif ?>