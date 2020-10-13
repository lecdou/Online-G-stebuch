<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Pages/eintragdetailsController.php";?>
<?php session_start();
require_once '../../Template/includes/head.php' ?>;
<title> Eintrag Details Seite  </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>;    

<main role="main" class="flex-shrink-0">

    <div class="container-fluid">

<div class="row mt-5 justify-content-around">

    <div class="card shadow border-none col-md-3 m-2">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-dark"><i class="fa fa-user fa-2x " onclick="update()"></i></h1 >
        <?php 
          if (!isset($_SESSION['email'])){
                echo " Please Click here to  log in <a href='login.php'> go to login </a>" ;
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
      
        <a href="#" class="card-link">01.01.2010 entry1</a>
         <hr>
      </div>
    </div>

</div> 

      <div id="row "> 
      <?php $isSaveDisabled = false;
       foreach ($BOOK_ENTRIES as $value) {  
            echo " <h3> Bucheintrag : ".$value->getUsername(). " / ".date("Y-m-d H:i:s", strtotime($value->getDate()))." </h3>";
             
           
            if($value->getUsername()!= $_SESSION['email']){
              $isSaveDisabled =true;
             }
            
             }
      ?>
            <form class="form-inline row bg-secondary p-2">

            <div class="form-group col-md-9">
              <label  style="text-shadow: 0 0 black; font-size: 20px;"for="search" class="form-control-plaintext col-md-4" >Suche</label>
              <input type="text" class="form-control col-md-8" id="search" placeholder="Search...">
            </div>

            <button type="submit" class="btn btn-primary  col-md-2"><i class="fa fa-search"></i></button>
            </form>
      </div>    

      <div id="row">
        <form >      
        <div class="mx-auto card shadow border-none mw-80 col-md-9" style="margin-top:40px">
          
            <div class="card-body text-center">
                <i class="fa fa-book fa-5x" id="book"></i>
               <?php  foreach ($BOOK_ENTRIES as $value) {  
            echo " <h6> Subtitel : ".$value->getTitel()."</h6>";
            echo "<hr>";
            echo  $value->getContent();
                        
               }
                  ?>

            </div>
          </div>

          <div class="col-md-4 mw-100 text-center"> 
          <input type='hidden' formaction="eintragdetailsController.php" formmethode="POST" name='deleteid' value='<?php foreach ($BOOK_ENTRIES as $value) {echo  $value->getId();}?>'>
              <button type="submit" class="btn btn-danger  col-md-4 " style="margin:30px"  <?php if ($isSaveDisabled) { echo 'disabled="disabled"';}?>  onclick="javascript: return confirm('Are you sure you want to delete it ?')"> <i style="margin-right:13px" class="fa fa-trash"></i>löschen</button>
          
          <input id="updateB" type='text' formaction="eintragdetailsController.php" formmethode="POST" name='updateid' value='Update'>
          <button value='<?php foreach ($BOOK_ENTRIES as $value) {echo  $value->getId();}?>' type="text" class="btn btn-success  col-md-4" style="margin:30px" <?php if ($isSaveDisabled) { echo 'disabled="disabled"';}?> ><i style="margin-right:13px" class="fa fa-pencil"></i>bearbeiten</button>
        </div>
        </form> 
      </div>
                
    </div>

</main>
   
</body>
<script>
     function update() {
      document.location.href = 'Dashboard.php';
    }
    function updateBook(){
     var form = document.getElementById("updateB");
     form.action = "eintragdetailsController.php";
     form.submit;
    }
  </script>