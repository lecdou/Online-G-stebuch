
<?php session_start();
require_once '../../Template/includes/head.php'?>
  <title> Add Eintrag </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>

<main role="main" >

  <div class="container-fluid">


<div class="row mt-5 justify-content-around">

    <div class="card shadow border-none col-md-3 m-2">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-dark"><i class="fa fa-user fa-2x" id="user"></i></h1 >
        <?php 
          if (!isset($_SESSION['email'])){
                echo " Please Click here to  login <a href='login.php'> go to login </a>" ;
          }else{
                echo $_SESSION['email']; 
                 } ?>  
        <hr>
      </div>
    </div>

    <div class="card shadow border-none col-md-3 m-2">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-success"><i class="fa fa-plus-circle fa-2x"></i></h1 >
      
        <a href="addEintrag.php" class="card-link">Eintrag einfügen</a>
        <hr>
      </div>
    </div>

    <div class="card shadow border-none col-md-3 m-2 ">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-dark"><i class="fa fa-calendar fa-2x"></i></h1 >
        <?php    $DateAndTime = date("m-d H:i:s", time()); echo"© 2020-". $DateAndTime ;?>
         <hr>
      </div>
    </div>

</div> 


<div id="row" class="form-inline row bg-secondary p-2" > 
     <h3>Einträge einfügen</h3>
        
  </div>    

  <div id="row" class="card shadow border-none">
  <form action="addEintragController.php" methode="POST" >
  

  <div class="form-group row m-2 mx-80 ">
    <div class="col-md-6"> 
            <label style="text-shadow: 0 0 black; font-size: 20px;" for="Ersteller">Ersteller</label>
            <input class="form-control col-md-4 text-center" value="<?php 
             if (!isset($_SESSION['email'])){
                echo " Please log in first " ;
          }else{
                echo $_SESSION['email']; 
                 } ?>" type="text" disabled="disabled" id ="Ersteller" placeholder="Ersteller" name="ersteller">
    </div>          
              
    <div class="col-md-6 "> 
              
                  <label style="text-shadow: 0 0 black; font-size: 20px;" class = "Datum" for="Datum">Datum</label>
                  <input class="form-control col-md-4 text-center" readonly="true"  value="<?php $DateAndTime = date("Y-m-d H:i:s", time()); echo $DateAndTime ?>" type="text" id="Datum" placeholder="Datum" name="datum">
            
    </div>

  </div>

  <div class="form-group row mx-80" style="margin-left:10px"> 
    <div class="col-md-12  ">           
            
                <label style="text-shadow: 0 0 black; font-size: 20px;" for="EintragText">Titel</label>
                <input id="EintragText" type="text" class="form-control col-md-8 text-left" placeholder="Titel" name="titel">
          
    </div>
  </div>
  
  <div class="form-group row mx-80" style="margin-left:10px">
    <div class="col-md-12 "> 
            
              <label style="text-shadow: 0 0 black; font-size: 20px;" for="EintragArea">Inhalt</label>
              <textarea class="form-control col-md-8 text-left" name="content" type="text" id="EintragArea"  rows="10">Type hier.....
              </textarea> 
            
      </div>
  </div>
    
  <div class="form-group row m-2">
    <div class="col-md-6"> <button type="submit" class="btn btn-danger  col-md-4"  > Abbrechen</button></div>
    
    <div class="col-md-6"> <input type="hidden" value="true" name="addBook">
    <button type="submit" class="btn btn-success  col-md-4" > Speichern </button></div>
            
  </div>

</form>
</div>
</div>
</main>
    
</body>
<script>
    var btn = document.getElementById('user');
    btn.addEventListener('click', function() {
      document.location.href = 'Dashboard.php'
    });
  </script>
  <?php require_once '../../Template/includes/footer.php'?>