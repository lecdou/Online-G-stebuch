<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Pages/DashboardController.php";?>

<?php require_once '../../Template/includes/head.php' ?>
<title> Dashbord Seite </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>;

<main role="main" class="flex-shrink-0">

   <div class="container-fluid">
  <?php   
session_start();
?>

<div class="row mt-5 justify-content-around">

    <div class="card shadow border-none col-md-3 m-2">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-dark"><i class="fa fa-user fa-2x" ></i></h1 >
          <?php echo $_SESSION['email']; ?>
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


   <div id="row"> 
            <h3>Bucheinträge</h3>
            <form class="form-inline row bg-secondary p-2">

            <div class="form-group col-md-9">
               <label  style="text-shadow: 0 0 black; font-size: 20px;"for="search" class="form-control-plaintext col-md-4" >Suche</label>
               <input type="text" class="form-control col-md-8" id="search" placeholder="Search...">
            </div>

            <button type="submit" class="btn btn-primary  col-md-2">
               <i class="fa fa-search"></i>
               </button>
            </form>
      </div>    

      <div class="row mt-3">
         
      <table class="table table-striped">
    <tr> 
        <th>Ersteller</th>
        <th>Titel</th>
        <th>Erstelldatum</th>
        <th>Actions</th>
    </tr>
    <?php
                
                foreach ($BOOK_ENTRIES as $value) {
                  echo "<tr>";
                  echo "<td>". $value->getTitel()."</td>";
                  echo "<td>".$value->getContent()."</td>";
                  echo "<td>". date("Y-m-d H:i:s", strtotime($value->getDate()))."</td>";
                  echo "<td><a href='eintragdetails.php?id=".$value->getId()."'>details</a></td>";
                  echo "</tr>";
               }
                ?>
   
</table>
      </div>

   </div>

</main>
  
</body>
