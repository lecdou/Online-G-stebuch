<?php require_once '../../Template/includes/header1.php' ?>;
<title> Dashbord Seite </title>
<body>
 <div class ="containerD"> 
 <?php require_once '../../Template/includes/header3.php' ?>;
 <div id="Bar"> 
              <h3>Bucheinträge</h3>
                <form ction="" >
                <label class="searchB" for="search">Suche</label>
                <input id="search" type="text" placeholder="Search.." name="search2">
                <button id="searchButton" type="submit">
                  <i class="fa fa-search" style="font-size: 18px;"></i>
                </button>
                </form>
            </div>          
            <div>
              <table>
                <tr> 
                   <th>Ersteller</th>
                   <th>Titel</th>
                   <th>Erstelldatum</th>
                   <th>Actions</th>
                </tr>
                <tr>
                   <td>max@mustermannn.de</td>
                   <td>entry1</td>
                   <td>01.01.2010 10h00</td>
                   <td> <a href="eintragdetails.php">details</a></td>
                </tr>
                <tr>
                   <td>max@mustermannn.de</td>
                   <td>entry2</td>
                   <td>01.01.2010 09h00</td>
                   <td> <a href="eintragdetails.php">details</a></td>
                </tr>
                <tr>
                   <td>max@mustermannn.de</td>
                   <td>entry3</td>
                   <td>01.01.2010 08h00</td>
                   <td> <a href="eintragdetails.php">details</a></td>
                </tr><tr>
                   <td>max@mustermannn.de</td>
                   <td>entry2</td>
                   <td>01.01.2010 07h00</td>
                   <td> <a href="eintragdetails.php">details</a></td>
                </tr>
                <tr>
                   <td>max@mustermannn.de</td>
                   <td>entry3</td>
                   <td>01.01.2010 06h00</td>
                   <td> <a href="eintragdetails.php">details</a></td>
                </tr>
                
      
            </table>
            </div>
           
</div>
          
  </body>
  <?php require_once '../../Template/includes/header2.php' ?>;