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
     
            echo " <h3> Bucheintrag : ".$BOOK_ENTRY->getUsername(). " / ".date("Y-m-d H:i:s", strtotime($BOOK_ENTRY->getDate()))." </h3>";
             
           
            if($BOOK_ENTRY->getUsername()!= $_SESSION['email']){
              $isSaveDisabled =true;
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

      <div class="row" id="showeEintrag">
    
        <div class="mx-auto card shadow border-none mw-80 col-md-9" style="margin-top:40px">
          
            <div class="card-body text-center">
                <i class="fa fa-book fa-5x" id="book"></i>
               <?php  
            echo " <h6> Subtitel : <span id='bookTitel'>".$BOOK_ENTRY->getTitel()."</span></h6>";
            echo "<hr>";
            echo  "<p id='bookContent'>".$BOOK_ENTRY->getContent()."</p>";
                  ?>

            </div>
          </div>

          <div class="col-md-12 mw-100 text-center"> 
          <input type="hidden" value="<?php echo  $BOOK_ENTRY->getId(); ?>" name="deleteid"/>
          <button  id="deleteEintragBtn" class="btn btn-danger  col-md-4 " style="margin:30px"  <?php if ($isSaveDisabled) { echo 'disabled="disabled"';}?> > <i style="margin-right:13px" class="fa fa-trash"></i>löschen</button>
        
          <button  id="editEintragBtn" class="btn btn-success  col-md-4" style="margin:30px" <?php if ($isSaveDisabled) { echo 'disabled="disabled"';}?> ><i style="margin-right:13px" class="fa fa-pencil"></i>bearbeiten</button>
        </div>
      </div>
      
      <div  class="row" id="updateEintragForm" >

    
                  <div class="form-group row mx-80" style="margin-left:10px"> 
                      <div class="col-md-12  ">           
    
                            <label style="text-shadow: 0 0 black; font-size: 20px;" for="EintragText">Titel</label>
                            <input id="EintragText" type="text" class="form-control col-md-8 text-left" placeholder="Titel" name="titel" value="<?php echo  $BOOK_ENTRY->getTitel(); ?>">
                      </div>
                  </div>
                  <div class="form-group row mx-80" style="margin-left:10px">
                    <div class="col-md-12 "> 
            
                      <label style="text-shadow: 0 0 black; font-size: 20px;" for="EintragArea">Inhalt</label>
                      <textarea class="form-control col-md-8 text-left" name="content" type="text" id="EintragArea"  rows="10"><?php echo  $BOOK_ENTRY->getContent(); ?>
                       </textarea> 
            
                     </div>
                  </div>
                  <input type="hidden" value="<?php echo  $BOOK_ENTRY->getId(); ?>" name="updateid"/>
                  <button  id="saveEintragBtn"class="btn btn-success  col-md-4" style="margin:30px" <?php if ($isSaveDisabled) { echo 'disabled="disabled"';}?> ><i style="margin-right:13px" class="fa fa-pencil"></i>Speichern</button>
    
                  
      </div>

</main>
<script type="text/javascript" >
     function update() {
      document.location.href = 'Dashboard.php';
    }
    $(document).ready(function(){
      $("#updateEintragForm").css("display","none");
      $("#editEintragBtn").click(function(){
        $("#showeEintrag").css("display","none");
        $("#updateEintragForm").css("display","block");
      });

    $("#saveEintragBtn").click(function(){
            $.ajax({
              url: "UpdateController.php",
              type:"post",
              data:{
                updateid:$("input[name='updateid']").val(),
                titel:$("input[name='titel']").val(),
                content:$("textarea[name='content']").val()
              },
              dataType: 'JSON',
              success: function(response){
                console.log(response,response.TITEL);
                $("#bookTitel").text(response.TITEL);
                $("#bookContent").text(response.CONTENT);
              }
       
            }).done(function( res) {
              $("#showeEintrag").css("display","block");
              $("#updateEintragForm").css("display","none");
             
          });

      });


    });
    $("#deleteEintragBtn").click(function(){
      if(confirm('Are you sure you want to delete it ?')){
            $.ajax({
              url: "DeleteController.php",
              type:"post",
              data:{
                deleteid:$("input[name='deleteid']").val()
              },
              dataType: 'JSON',
              success: function(response){
                window.location.href='Dashboard.php';
              }
       
            }).done(function( res) {
            });
       }
      });
    
  </script>
</body>

