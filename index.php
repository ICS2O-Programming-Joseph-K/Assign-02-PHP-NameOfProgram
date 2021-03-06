<!DOCTYPE html>
<html>
  <head>

    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Ender Dragon Health Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css" /> 

    <!-- receives and gives data -->
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Minecraft Ender Dragon Health Remainder Calculator</title>
    
  </head>
  <body>

      <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

     <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
			<!-- Web page header -->
      <header class = "mdl-layout__header">
        <div class = "mdl-layout__header-row">      
          <span class = "mdl-layout-title">Calculate Remaining Health of an Ender Dragon</span>          
        </div>       
      </header>


    <!-- Title -->
    <style>
      *{margin: 0; padding: 0;}
      body{ font-size:20px;}
      .banner{position: relative; width: 90%; margin: 0 auto;}
      .banner img{width: 100;}
      .heading{color: white; position: absolute; top: 30%; width: 100%; text-align: center; font-size:3rem;text-shadow: 5px 5px 10px #000000; }
      
    </style>

    <div class="container"> 
      <div class="row">
        <div class="banner">
          <center>
          <img src="./images/voidgif.gif" alt="Void" height="500" width="1000"/>
            </center>
          <h1 class="heading">Ender Dragon Health Calculator</h2>
          <p></p>
        </div>
      </div>
    </div>

    <!-- receives and gives data -->
    <script src="./js/script.js"></script>
    

  <?php echo "<p>To begin, what or who is the Ender Dragon? The Ender Dragon is a hostile boss mob that is found in the End Dimension in Minecraft, it is often seen as the final boss of Minecraft. In order to defeat the Ender Dragon you must enter the End dimension which is only possible by creating eyes of ender. Ingredients needed to craft eyes of enders are found in the a nether fortress located inside the nether and end pearls rarely dropped by Endermen. Only after creating 12 eyes of ender you are able to unlock an End dimension portal within a stronghold. Once you enter the End dimension, there is no way for you to escape unless you kill the Ender Dragon.</p>" ?>

       <br>
       <br>
       <br>

        <center>
        <p>For visual understanding, a player is fighting the Ender Dragon with enchanted Diamond Gear.</p>
        </center>
          
       <center>
       <img src="./images/EnderDragon.jpg" alt="EnderDragon">
       </center>
       
       <br>
       <br>
       <br>

          <!-- Text fields for user input, collects data -->
          <?php echo "<h3>Enter Current Ender Dragon's health (Percentage):</h3>" ?>

      <br>

			  		<form action="./calculator.php" method="post" target="result">	
						<label for="Percentage">Ender Dragon's Health:</label>
						<input type="number" step=".01" min="0.5" max="100" id="Percentage" placeholder="Health Percentage" name="Percentage"><br><br>
						<input type="submit" value="Calculate Remaining Hits">
					</form>
			
		<!-- Create a space where the user information will be displayed -->
<div id="display-results"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>

       <br>
       <br>
       <br>
       
  </body>
</html>