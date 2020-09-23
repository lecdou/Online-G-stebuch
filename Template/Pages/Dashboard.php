<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/Online-G-stebuch/Template/Pages/DashboardController.php";?>
<?php require_once '../../Template/includes/head.php' ?>
<title> Dashbord Seite </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>;

<main role="main" class="flex-shrink-0">

   <div class="container-fluid">

      <?php require_once '../../Template/includes/header3.php' ?>;

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
         <?php require_once '../../Template/components/_table_includes.php' ?>
      </div>

   </div>

</main>
  
</body>
