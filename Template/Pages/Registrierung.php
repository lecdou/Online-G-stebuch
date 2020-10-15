<?php 
require_once '../../Template/includes/head.php' ?>
<title> Registrierung Seite </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>

<main role="main" class="flex-shrink-0">

  <div class="container-fluid">

      <div id="row "> 
         <div class="card shadow border-none col-md-6 mt-6 mx-auto" style="margin-top:150px">
            <div class="card-body text-center col-md-12 mt-12">
                <div id=" row ">  
                    <div class="text-primary"> 
                       <h3> Registrieren </h3>
                    </div>
                <form action="RequestController.php" Methode="POST">
                   <div class="form-group text-left">
                     <i class="fa fa-user-plus"></i>
                     <label for="user">Username</label>
                     <input id="eingabeUsername" type="text" class="form-control" id="user" placeholder="Enter Username" name="username">
                     <span id="username"></span>
                   </div>

                   <div class="form-group text-left">
                     <i class="fa fa-envelope"></i>
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                   </div>
                
                    <div class="form-group text-left">
                     <i class="fa fa-asterisk"></i>
                     <label for="pwd">Password</label>
                     <input id="eingabe" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                     <span id="Registrierung"></span>
                    </div>
                
                     <div class="form-group text-left">
                     <i class="fa fa-asterisk"></i>
                     <label for="pwd2">repeat Password</label>
                     <input id="eingabe2" onkeyup="check();" type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd2">
                     <span id="Registrierung2"></span>
                     </div>
                
                     <div style="margin-bottom: 20px" class="text-center col-md-6 mt-6 text-success mx-auto"> 
                     <button type="submit" class="btn btn-success  col-md-12"> registrieren </button>
                     </div>

                </form>
           </div>
           <img src="https://img.icons8.com/ios/40/000000/lock.png"  alt=" Image für Registrierung "/>
           <a class ="reg" href="login.php">Schon registriert? hier anmelden </a></img> 
  

          </div>   
      </div>   
  </div>    

</main>

<?php require_once '../../Template/includes/header2.php' ?>      
</body>
<SCript>

function check(){
 var val = document.getElementById('eingabe').value;
 var call = document.getElementById('Registrierung');
 var call2 = document.getElementById('Registrierung2');
 var val2= document.getElementById('eingabe2').value;
            
    
 if(val!=val2){
    call2.style.color="#ff352c"; 
    call2.innerHTML = "<strong> does not match! Please verify</strong>";
  }else{
    call2.style.color="#56a40c"; 
    call2.innerHTML = "<strong>Richtig!</strong>"
  }
  if (val.length > 5)  
   {    
      if (val.match(/\d{1,}/) && val.match(/[a-zA-ZäöüÄÖÜ]{1,}/) || val.match(/\W/) && val.match(/[a-zA-ZäöüÄÖÜ]{1,}/)) 
        {   
    call.style.color="#56a40c"; 
    call.innerHTML = "<strong>sicher!</strong>";
        }
        else 
        {   
         
    call.style.color="#ff9410"; 
    call.innerHTML = "<strong>unsicher!</strong>";}
    } 
    else 
    {
    call.style.color="#ff352c"; 
    call.innerHTML = "<strong>zu kurz!</strong>";
  }    
   

    };    
</SCript>