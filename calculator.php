<?php

	// get health percentage from textfield
  $health = $_POST['Percentage'];

	//Calculate remaining hits
  $result = 200 * ($health / 100);

  //Round the answer to the next integer
  $roundresult = ceil($result);

  //Calculate number of hits for a netherite sword 
  $result2 = $result / 8;

  //Round the netherite sword result to the next integer
  $roundresult2 = ceil($result2);



 




 	// if guess user input is lower than 95
  if ($health < 95) {

    echo "You will have to hit the dragon ".$result." more times with your bare fists. With a Netherite sword, you would need to hit the dragon ".$roundresult2." more times.";
    	// otherwise, if user input is 95 or higher
      } else {
  echo "You tried killing the Ender Dragon with bare hands and died. Lol. However in an altenative universe you killed the dragon with a Netherite sword hitting the dragon ".$roundresult2." times.";
}
    
?>



  