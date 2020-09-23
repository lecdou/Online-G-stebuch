<?php require_once '../../Template/includes/head.php' ?>;
<title> Eintrag Details Seite  </title>

<body>

<?php require_once '../../Template/includes/header2.php' ?>;    

<main role="main" class="flex-shrink-0">

    <div class="container-fluid">

      <?php require_once '../../Template/includes/header3.php' ?>

      <div id="row "> 
            <h3>Bucheinträge: Entry 1 / 01.01.2010 10:00</h3>
            <form class="form-inline row bg-secondary p-2">

            <div class="form-group col-md-9">
              <label  style="text-shadow: 0 0 black; font-size: 20px;"for="search" class="form-control-plaintext col-md-4" >Suche</label>
              <input type="text" class="form-control col-md-8" id="search" placeholder="Search...">
            </div>

            <button type="submit" class="btn btn-primary  col-md-2"><i class="fa fa-search"></i></button>
            </form>
      </div>    

      <div id="row">
                  
        <div class="mx-auto card shadow border-none mw-80 col-md-9" style="margin-top:40px">
          
            <div class="card-body text-center">
                <i class="fa fa-book fa-4x" id="book"></i>
                <h6> Entry 1 </h6>
                <h6> Subtitel...</h6>
            <hr>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

            </div>
          </div>

          <div class="col-md-4 mw-100 text-center"> 
          <button  type="submit" class="btn btn-danger  col-md-4 " style="margin:30px"> <i style="margin-right:13px" class="fa fa-trash"></i>löschen</button>

          <button  type="submit" class="btn btn-success  col-md-4" style="margin:30px" ><i style="margin-right:13px" class="fa fa-pencil"></i>bearbeiten</button>
        </div>
        
      </div>
                
    </div>

</main>
   
</body>
