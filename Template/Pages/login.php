
<?php require_once '../../Template/includes/head.php' ?>
<title> Login Seite </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>

<main role="main" class="flex-shrink-0">

  <div class="container-fluid">

      <div id="row "> 
         <div class="card shadow border-none col-md-6 mt-6 mx-auto" style="margin-top:150px">
            <div class="card-body text-center col-md-12 mt-12">
                <div id=" row ">  
                    <div class="text-primary"> 
                       <h3> LOGIN </h3>
                    </div>
                <form action="loginController.php" Methode="POST">
                   <div class="form-group text-left">
                     <i class="fa fa-user-plus"></i>
                     <label for="user">Username</label>
                     <input type="text" class="form-control" id="user" placeholder="Enter Username" name="username">
                    </div>
               
                   <div class="form-group text-left">
                     <i class="fa fa-envelope"></i>
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                   </div>
                   <div class="form-group text-left">
                     <i class="fa fa-asterisk"></i>
                     <label for="pwd">Password</label>
                     <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                   </div>
                   <div style="margin-bottom: 20px" class="text-center col-md-6 mt-6 text-success mx-auto"> 
                     <button type="submit" class="btn btn-success  col-md-12"> Anmelden </button>
                    </div>
               </form>
           </div>
      <img src="https://img.icons8.com/metro/48/000000/add-user-male.png" alt="Image für Anmeldung "/> 
      <a class ="reg" href="Registrierung.php"> Neu? hier registrieren </a></img>  
  

          </div>   
      </div>   
  </div>    

</main>

<?php require_once '../../Template/includes/header2.php' ?>      
</body>

