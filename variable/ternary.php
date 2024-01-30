<?php 

$gender = isset($_GET['gender'])?$_GET['gender'] : '';
$hello = ($gender == "f")?"Welcome miss" : "Welcome Mister";

echo $hello;
?>




<form method="get" action="">
    <label for="gender">votre sexe</label>
    
	<input type="radio" name="gender" value = "m"> Masculin 
    <input type="radio" name="gender" value = "f"> Féminin


   <input type="submit" name="submit" value="Greet me now">
</form> 



