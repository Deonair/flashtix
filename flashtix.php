<!DOCTYPE html>
<html>
<head>
<title>FlashTix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js">
</script>


<script src="flashtix.js"></script>
<link rel="stylesheet" href="css/flashtix.css" />

    

<!-- <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyCQMe83IkxAstk-SBGeZZAR2eKgRIGj3gs">
</script>
<script src="maplace.min.js" ></script> -->

 <!----------------------------------------------------------------------------- -->   
 
</head>
<body>
<div data-role="page" class="page" id="homepage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#homepage"
           data-role="button" 
           data-icon="home"
           data-iconpos="left">Home</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Welkom </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#lastminutepage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="slidedown">Lastminute</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->
<div class="content" id="homecontent" data-role="content">
  <br><br>
  <h1>FlashTix</h1>
  <canvas id="mycanvas"></canvas> <br>
  <img id="poster" class="poster" src="img/E3.jpg"> 
</div><!-- einde homecontent -->

<div class="footer" data-role="footer" data-theme="b">
  <div class="nav" data-role="controlgroup">
    <div class="ui-grid-a">
      <div class="ui-block-a">                
         <a class="knop" href="#agendapage"
            data-role="button" 
            data-icon="grid" 
            data-iconpos="left">Agenda</a>
      </div>
      <div class="ui-block-b">
                        <form method='post' action="">
                            <button id="logout" onclick="window.location.href='login.php'">Logout</button>
                    </form>
                </div>
    </div><!-- /grid-a -->
  </div> <!-- /nav -->
</div><!-- /footer -->
</div><!-- /homepage -->

<div data-role="page" class="page" id="lastminutepage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#homepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#bestelpage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">Bestel</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->

<div data-role="content" class="content" id="lastminutecontent"><br>
   <ul data-role="listview" > 
     <li id="pop" data-role="list-divider" 
         data-theme="b">Gaming</li> 
     <li id="shakira-concert"> 
         <a href="#shakira-biopage" ransition="flip">
            <img class="poster" src="img/playstation.jpg"/> 
            <h3>Playstation</h3>
            <p>AmsterdamArena</p>
            <p>Vandaag 22:00 uur</p>
         </a>

      </li> 

      <li id="jeniffer-concert">
		<a href="#jennifer-biopage">
            <img class="album" src="img/xbox.jpg" alt="pic" />
            <h3>Xbox</h3>
            <p>Heineken concert hall Amsterdam</p>
            <p>Vandaag 22:30 uur</p>
          </a>

       </li>

       
        <li id="nora-concert">
            <a href="#nora-biopage">
            <img class="album" src="img/nintendo.jpg" alt="pic"  />
            <h3>Nintendo</h3>
            <p>Bimhuis Amsterdam</p>
            <p>Vandaag 22:00 uur</p>
            </a>
 
        </li>
      
        <li id="bruce-concert"><a href="#bruce-biopage">
            <img class="poster" src="img/Valve.jpg" />
            <h3>Valve</h3>
            <p>Melkweg Amsterdam</p>
            <p>Vandaag 22:00 uur</p>
            </a>

       
        </li>
    </ul><!--/listview --> 
</div><!--/content -->
<div class="footer" data-role="footer" data-theme="b">
  <div class="nav" data-role="controlgroup">
    <div class="ui-grid-a">
      <div class="ui-block-a">                
         <a class="knop" href="#agendapage"
            data-role="button" 
            data-icon="grid" 
            data-iconpos="left">Agenda</a>
      </div>
      <div class="ui-block-b">
         <a class="knop" href="#locationpage"
            data-role="button"
            data-icon="search" 
            data-iconpos="left">Location</a>
      </div>
    </div><!-- /grid-a -->
  </div> <!-- /nav -->
</div><!-- /footer -->

</div><!-- einde lastminutepage --> 

<!-- BIOPAGE--------------------------------- -->
    
<div data-role="page" class="page"  id="shakira-biopage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#lastminutepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left"
           data-transition="flip">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#bestelpage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">Bestel</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->

<div data-role="content" class="content" >

    <div data-role="tabs" id="tabs">
        <div data-role="navbar">
            <ul>
            <li><a href="#video" data-ajax="false">Video</a></li>
            <li><a href="#bio" data-ajax="false">Biografie</a></li>
            </ul>
        </div>
        <div id="video" class="ui-body-d ui-content">
            <h1>Video</h1>
            <video controls="controls" width="90%" 
            preload id="video" poster="img/playstation.jpg"> 
                <source src="video/playstation.mp4" type="video/mp4"/> 
                
            </video><!-- einde video --> 

   
    <div id="socialist" data-networks="twitter" data-ids="44409004"></div>
            
          
        </div> <!-- einde video --> 
        <div id="bio">
           <h1>Biografie</h1>
           <p>Aliquameratvolutpat. Mauris vel nequesitamet nunc  
            gravida conguesedsitametpurus. Quisquelacusquam, 
            egestasactincidunt a, lacinia vel velit. Morbiac commodo 
            nulla. </p> 

            <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Zoek term ..." data-inset="true">
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Boeken</a></li>
                <li><a href="#">Albums</a></li>
            </ul>
            <div id="twitter"></div>
        </div> <!-- einde bio --> 
    </div> <!-- einde tabs --> 
</div><!-- einde content --> 
<div class="footer" data-role="footer" data-theme="b">
    <div class="nav" data-role="controlgroup">
        <div class="ui-grid-a">
            <div class="ui-block-a">                
                <a class="knop" href="#agendapage"
                        data-role="button" 
                        data-icon="grid" 
                        data-iconpos="left">Agenda</a>
            </div>

            <div class="ui-block-b">
                <a class="knop" href="#locationpage"
                        data-role="button"
                        data-icon="search" 
                        data-iconpos="left">Location</a>
            </div>
        </div><!-- /grid-a -->
    </div> <!-- nav -->
</div><!-- /footer -->
</div><!-- einde shakira-biopage --> 

<!-- BESTELPAGE-------------------------------------- -->
    
<div data-role="page" class="page" id="bestelpage" >
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#lastminutepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#eticketspage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">E-tickets</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->

<div data-role="content" class="content">
 <form name="form" id="form"  >

   <p>Kies een concert</p>
   <input type="radio" name="concert" value="shakira" required/>
   <label for="shakira">Shakira</label>
   <input type="radio" name="concert" value="jeniffer" required/>
   <label for="jeniffer">Jeniffer Lopez</label>
   <input type="radio" name="concert" value="nora" required/>
   <label for="nora">Nora</label>
   <input type="radio" name="concert" value="bruce" required/>
   <label for="bruce">Bruce Springstien</label>
 

<div data-role="fieldcontain">
<input class="required" type="text" id="naam" 
  name="naam" required placeholder="Typ hier je naam in" />  

 <input type="text" name="plaats" id="plaats" list="steden"   
     placeholder="woonplaats" required/> 
<datalist id="steden"> 
   <option value="Almere"> 
   <option value="Amstelveen"> 
   <option value="Amsterdam"> 
   <option value="Den Haag"> 
   <option value="Hilversum"> 
   <option value="Leeuwarden"> 
   <option value="Maastricht"> 
   <option value="Naarden"> 
   <option value="Utrecht"> 
</datalist> 
 <input class="required" type="text" id="mobiel" 
  name="mobiel" placeholder="Mobiel telefoon" /> 
  <input class="required" type="text" id="email" 
  name="email" placeholder="email" /> 
  <input class="required" type="text" id="aantal" 
  name="aantal" placeholder="aantal" />
</div> <!-- einde fieldcontain -->
 
<input type="submit"  id="submit"  value="Verzend"/> 

</form><!-- einde formulier --> 
<br><br><br>
</div><!--/content --> 


<div class="footer" data-role="footer" data-theme="b">
<div class="nav" data-role="controlgroup">
    <div class="ui-grid-a">
        <div class="ui-block-a">                
            <a class="knop" href="#agendapage"
                    data-role="button" 
                    data-icon="grid" 
                    data-iconpos="left">Agenda</a>
        </div>

        <div class="ui-block-b">
            <a class="knop" href="#locationpage"
                    data-role="button"
                    data-icon="search" 
                    data-iconpos="left">Location</a>
        </div>
    </div><!-- /grid-a -->
</div> <!-- nav -->
</div><!-- /footer -->
</div><!-- eind bestelpage --> 

<!-- ETICKETSPAGE------------------------------ -->

<div data-role="page" class="page"  id="eticketspage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#lastminutepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left"
           data-transition="flip">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#bestelpage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">Bestel</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->

<div data-role="content" id= "eticketscontent" class="content" > 
    <div id="etickets"></div>
    
</div><!-- einde content --> 
<div class="footer" data-role="footer" data-theme="b">
    <div class="nav" data-role="controlgroup">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a class="knop" href="#agendapage"
                        data-role="button" 
                        data-icon="grid" 
                        data-iconpos="left">Agenda</a>
            </div>
            <div class="ui-block-b">
                <a class="knop" href="#locationpage"
                        data-role="button"
                        data-icon="search" 
                        data-iconpos="left">Location</a>
            </div>
        </div><!-- /grid-a -->
    </div> <!-- nav -->
</div><!-- /footer -->
</div><!-- einde eticketspage --> 

<!-- AGENDA PAGE ------------------------------ -->
<div data-role="page" class="page"  id="agendapage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#lastminutepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left"
           data-transition="flip">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#bestelpage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">Bestel</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->
  
<div data-role="content" class="content" > 
    <div data-role="controlgroup" data-type="horizontal"> 

      <a href="#agendapage" data-role="button" 
         data-icon="check" id="sel" 
         data-iconpos="notext">Select</a> 
      <a href="#agendapage" data-role="button" 
         data-icon="plus" id="add" 
         data-iconpos="notext">Add</a> 
      <a href="#agendapage" data-role="button" 
         data-icon="delete" id="del" 
         data-iconpos="notext">Delete</a> 
      <a href="#agendapage" data-role="button" 
         data-icon="refresh" id="sav" 
         data-iconpos="notext">Save</a>     
    </div>
    <div id="agendalijst"></div>
</div><!-- einde content -->



<div class="footer" data-role="footer" data-theme="b">
    <div class="nav" data-role="controlgroup">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a class="knop" href="#agendapage"
                        data-role="button" 
                        data-icon="grid" 
                        data-iconpos="left">Agenda</a>
            </div>
            <div class="ui-block-b">
                <a class="knop" href="#locationpage"
                        data-role="button"
                        data-icon="search" 
                        data-iconpos="left">Location</a>
            </div>
        </div><!-- /grid-a -->
    </div> <!-- nav -->
</div><!-- /footer -->
</div><!-- einde agendapage --> 

<!-- LOCATION PAGE ------------------------------ -->
<div data-role="page" class="page"  id="locationpage">
<div class="header"  data-role="header" data-theme="b">
  <div class="nav" data-role="controlgroup" >
    <div class="ui-grid-b" >
      <div class="ui-block-a" >                
        <a class="knop" href="#lastminutepage"
           data-role="button" 
           data-icon="arrow-l"
           data-iconpos="left"
           data-transition="flip">Vorige</a>
      </div>
      <div class="ui-block-b">                
        <a class="knop" href="#homepage"
           data-role="button" > Home </a>
      </div>
      <div class="ui-block-c">
        <a class="knop" href="#bestelpage"
           data-role="button"
           data-icon="arrow-r" 
           data-iconpos="left"
           data-transition="pop">Bestel</a>
      </div>
    </div>   <!-- /grid-b -->
  </div>  <!-- nav -->
</div><!-- /header -->
<h1 id="loc">Route naar Concert</h1>
<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=nl&q=De%20Passage%20100%2C%201101%20AX%20Amsterdam+(Ziggo%20Dome)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/nl/maak-een-google-map/">Maak een Google Map</a> van <a href="https://www.mapsdirections.info/nl/">Nederland Kaart</a></iframe></div><br />
<div data-role="content" class="content" id="googlemap" >    
<div id="gmap" style="with:100%;height:100%;"></div>
</div><!-- /content --> 

<div class="footer" data-role="footer" data-theme="b">
    <div class="nav" data-role="controlgroup">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a class="knop" href="#agendapage"
                        data-role="button" 
                        data-icon="grid" 
                        data-iconpos="left">Agenda</a>
            </div>
            <div class="ui-block-b">
                <a class="knop" href="#locationpage"
                        data-role="button"
                        data-icon="search" 
                        data-iconpos="left">Location</a>
            </div>
        </div><!-- /grid-a -->
    </div> <!-- nav -->
</div><!-- /footer -->
</div><!-- einde locationpage --> 

    
</body>
</html>
