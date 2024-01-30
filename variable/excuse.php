<?php 

if (isset($_GET['name']) && isset($_GET['sexe']) && isset( $_GET['nomprof']) && isset( $_GET['genre']) && isset( $_GET['motif'])) {
    $name = $_GET['name'];
    $sexe =($_GET['sexe'] == "g" )? 'mon fils' : 'ma fille';
    $nomprof = $_GET['nomprof'];
    $genre = ($_GET['sexe'] == "mr" )? 'Mr' : 'Mme';
    $motif = $_GET['motif'];
    $date = $_GET['dateAbsence'];  
    $intro = "Veuillez excusez";

    switch ($motif) {
        case "maladie":
             $motif = "pour cause de maladie ...";
            break;
        case "deces":
             $motif = "pour cause de décès...";
            break; 
        case "activite":
             $motif = "pour cause d'activités extra-scolaires...";
            break;
        case "autre":
             $motif = "";
                break;
    }

   
    echo "<p>".$genre." ".$nomprof.",<br>".$intro." ".$sexe." ". $name." pour son absence en date du ".$date." ".$motif."</p>";

}


?>

<form method="get" action="">
     <label for="name"> Nom de votre enfant:</label> <br>
 	<input type="text" name ="name"><br>
    
     <label for="sexe"> fille ou garçon : </label> <br>
     <input type="radio" name="sexe" value = "f"> fille <br>
     <input type="radio" name="sexe" value = "g"> garçon <br>

    <label for="nomprof"> Nom du professeur :</label> <br>
 	<input type="text" name ="nomprof">
     <label for="genre"> Qu'elle est la raison de l'absence ?  </label> <br>
     <input type="radio" name="genre" value = "mme"> Mme <br> 
     <input type="radio" name="genre" value = "mr"> Mr <br>

     <label for="motif"> Motif d'absence </label> <br>
     <input type="radio" name="motif" value = "maladie"> maladie <br>
     <input type="radio" name="motif" value = "deces"> décès <br>
     <input type="radio" name="motif" value = "activite"> activités extra-scolaires <br>
     <input type="radio" name="motif" value = "autre"> autre <br>
     
     <label for="name"> Mot d'excuse : </label><br>
     <input type="date" name="dateAbsence"> <br>
     <input type="text" name="" >

    <input type="submit" name="submit" value="ok">
 </form> 