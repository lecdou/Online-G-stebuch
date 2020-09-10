<?php require_once './header1.php' ?>;
<title> Add Eintrag </title>
<body>
  
 <div class ="containerDe"> 
 <?php require_once './header3.php' ?> 
          <div id="Bar"> 
              <h3>Einträge einfügen</h3>
                <form action="" >
                <label class="searchB" for="search">Suche</label>
                <input id="search" type="text" placeholder="Search.." name="search2">
                <button id="searchButton" type="submit">
                  <i class="fa fa-search" style="font-size: 18px;"></i>
                </button>
                </form>  
            </div> 
              <form action="" >
                <label class="Ersteller" for="Ersteller">Ersteller</label>
                <input class= "Inputtext"  type="text" id ="Ersteller" placeholder="Ersteller" name="Ersteller">
                <label class = "Datum" for="Datum">Datum</label>
                <input  type="datetime-local" id="Datum" placeholder="Datum" name="Datum">

              </form>
           
           <form action="" >
           <label class="EintragInhalt" for="EintragText">Titel</label>
           <input id="EintragText" type="text" placeholder="Titel" name="Titel">
           <form>
           <label class="EintragInhalt1" for="EintragArea">Inhalt</label>
            <textarea name="text area" type="text" id="EintragArea" cols="30" rows="10">Type hier.....
            </textarea> 
            
            <button class="button1 button1"> Abbrechen</button>

            <button class="button2 button2"> Speichern </button>       
</div>
</div> 

</body>
  <?php require_once './header2.php' ?>;