<?php require_once './header1.php' ?>;
  <body>
 <div class ="containerDe"> 
 <?php require_once './header3.php' ?> 
          <div id="Bar"> 
              <h3>Einträge einfügen</h3>
                <form action="" >
                <input id="search" type="text" placeholder="Search.." name="search2">
                <button id="searchButton" type="submit">
                  <i class="fa fa-search" style="font-size: 18px;"></i>
                </button>
                </form>
            </div> 
              <form action="" >
                <input  type="text" placeholder="Ersteller" name="Ersteller">
                <input  type="datetime-local" placeholder="Datum" name="Datum">
              </form>
           <h3 id="EintragInhalt">Titel</h3>
           <form action="" >
           <input id="EintragText" type="text" placeholder="Titel" name="Titel">
           <form>
           <h3 id="EintragInhalt">Inhalt</h3>
            <textarea name="text area" id="" cols="30" rows="10">Type hier.....
            </textarea> 
            
            <button class="button1 button1"> Abbrechen</button>

            <button class="button2 button2"> Speichern </button>       
</div>
</div> 

          
  </body>
  <?php require_once './header2.php' ?>;