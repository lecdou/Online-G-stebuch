<?php require_once '../../Template/includes/header1.php' ?>;
<title> Login Seite</title>
  <body>
  <div class ="container"> 
           <div id="header"> 
              <h3> GÄSTE-BUCH </h3>
            </div>
            <div id="innercontainer">  
                <div id="header2"> 
                 <h3> LOGIN </h3>
                </div>
                <form action="">
     <div class="form-group">
      <i class="glyphicon glyphicon-envelope"></i>
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <i class="glyphicon glyphicon-asterisk"></i>
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
                </form>
                <div id="footer"> 
                  <h3 id="h3"> Anmelden </h3>
                </div>
           </div>

    <div id="innercontainer2" >

    <img src="https://img.icons8.com/metro/48/000000/add-user-male.png" alt=" Image für Anmeldung "/> 
      <a class ="reg" href="Registrierung.php">hier registrieren </a></img>  
    </div>
  </div>
  </body>
  <?php require_once '../../Template/includes/header2.php' ?>;