
<?php require_once '../../Template/includes/head.php' ?>
  <title> Add Eintrag </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>

<main role="main" >

  <div class="container-fluid">

  <?php require_once '../../Template/includes/header3.php' ?>

  <div id="row "> 
        <h3>Einträge einfügen</h3>
        <form class="form-inline row bg-secondary p-2">


        <div class="form-group col-md-9">
          <label  style="text-shadow: 0 0 black; font-size: 20px;"for="search" class="form-control-plaintext col-md-4" >Suche</label>
          <input type="text" class="form-control col-md-8" id="search" placeholder="Search...">
        </div>

        <button type="submit" class="btn btn-primary  col-md-2"><i class="fa fa-search"></i></button>
        </form>
  </div>    

  <div id="row" class="card shadow border-none">
  <form action="addEintragController.php" methode="POST" >
  

  <div class="form-group row m-2 mx-80 ">
    <div class="col-md-6"> 
            <label style="text-shadow: 0 0 black; font-size: 20px;" for="Ersteller">Ersteller</label>
            <input class="form-control col-md-4 text-center"  type="number" id ="Ersteller" placeholder="Ersteller" name="ersteller">
    </div>          
              
    <div class="col-md-6 "> 
              
                  <label style="text-shadow: 0 0 black; font-size: 20px;" class = "Datum" for="Datum">Datum</label>
                  <input class="form-control col-md-4 text-center" type="datetime-local" id="Datum" placeholder="Datum" name="datum">
            
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
