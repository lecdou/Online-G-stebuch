<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary shadow">
      <?php if (isset($_SESSION['email'])){
       $result= '<i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> <a href= /Online-G-stebuch/Template/Pages/logout.php> LOGOUT <a/>';
       echo $result; 
       } ?>
    <a class="navbar-brand m-auto" id= "navbar" href="#">GÄSTE-BUCH</a>
  </nav>