<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Pages/DashboardController.php";?>

<?php require_once '../../Template/includes/head.php' ?>
<title> Dashbord Seite </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>;

<main role="main" class="flex-shrink-0">

   <div class="container-fluid">

<div class="row mt-5 justify-content-around">

<div class="card shadow border-none col-md-3 m-2">
      <div class="card-body text-center">
        <h1 class="card-title m-auto text-dark"><i class="fa fa-user fa-2x" id="user"></i></h1 >
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
        <?php    $DateAndTime = date("m-d H:i:s", time()); echo"© 2020-". $DateAndTime ;?>
         <hr>
      </div>
    </div>

</div>  


   <div id="row" class="form-inline row bg-secondary p-2" > 
       
         <h3>Bucheinträge</h3>
              
    </div>    

      
         
      <table  class="table table-striped " id="TableId" >
 <thead>
    <tr> 
        <th>Ersteller</th>
        <th>Emails</th>
        <th>Titel </th>
        <th>Erstelldatum</th>
        <th>Actions</th>
    </tr>
    </thead>
    <?php
          
                foreach ($BOOK_ENTRIES as $value) {
                  
                  echo "<tr>";
                  echo "<td>". $value->getUsername()."</td>";
                  echo "<td>". $value->getUserEmail()."</td>";
                  echo "<td>".$value->getTitel()."</td>";
                  echo "<td>". date("Y-m-d H:i:s", strtotime($value->getDate()))."</td>";
                  echo "<td> <form method='POST' action='eintragdetails.php' >
                  <input type='hidden' class='form-control' name='Bookid'  value=' ". $value->getId()." '>
                   <button type='submit' class='btn btn-primary'>details </button>
                  </form> </td>";
                  echo "</tr>";
                  
               }
               
              
                  ?>


</table>


   </div>

</main>
  
</body>

<script>
    var btn = document.getElementById('user');
    btn.addEventListener('click', function() {
      document.location.href = 'Dashboard.php'
    });
   
    $(document).ready(function(){
          
            $("#TableId").DataTable({
              "columns": [
    { "searchable": false },
    { "searchable": false },
    null,
    null,
    null
  ]
          });
            $("#TableId").css("widht","100%");
    });


  </script>
  <?php require_once '../../Template/includes/footer.php'?>