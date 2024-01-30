<?php
// // 1.1 Clean your room Exercise 

// $room_is_filthy = true;

// if( $room_is_filthy == true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }
//  // 1.2 Clean your room Exercise, improved


// $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[1]; 

// if(  $room_filthiness = $possible_states[1]){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } else if( $room_filthiness = $possible_states[2] ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// // ...
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }


// // 2. "Different greetings according to time" Exercise

// $now = "07:00"; // How to get the current time in PHP ? Google is your friend ;-)

// // Test the value of $now and display the right message according to the specifications.
// if( $now >= "05:00" AND $now <= "09:00"){
//     echo "Good morning!";
// }else if ( $now >= "09:01" AND $now <= "12:00"){
//     echo "Good day!";
// }else if (  $now >= "12:01" AND $now <= "16:00"){
//     echo "Good afternoon!";
// } else if (  $now >= "16:01" AND $now <= "21:00"){
//     echo "Good evening!";
// } else if ( $now >= "21:01" AND $now <= "04:59"){
//    echo "Good night!";
// }

// echo $now;

// // 3. "Different greetings according to age" Exercise

// if (isset($_GET['age'])){ 
//     if ($_GET['age'] < 12){
//         echo "Bonjour, Gamin !";
//     } else if  ($_GET['age'] > 12 AND $_GET['age'] < 18){
//         echo "Bonjour jeune ado!";
//     } else if ($_GET['age'] > 18 AND $_GET['age'] < 115){
//         echo "Bonjour adulte!";
//      } else if ($_GET['age'] > 115){ 
//                 echo "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";

// }
// }
// // Form (incomplete)
?>

<!-- <form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form> -->

<?php 

//     $age = $_GET['age'];
//     $sexe = $_GET['sexe'];
//     $language = $_GET['language'];

//     if (isset($_GET['age']) && isset($_GET['language'])) {
//     if ($_GET['age'] <= 12){
//         if ($_GET['sexe'] == "femme") {
//             echo "bonjour gamine!";
//         } else {
//         echo "Bonjour, Gamin !";
//         }
//     } else if($_GET['age'] >= 12 AND $_GET['age'] < 18){
//         if ($_GET['sexe'] == "femme"){
//             echo "bonjour jeunette!";
//         } else {
//         echo "Bonjour jeunot!";
//     }
//     } else if ($_GET['age'] >= 18 AND $_GET['age'] < 115){
//         if ($_GET['sexe'] == "femme"){
//             echo " Bonjour Madame!";
//         } else {
//         echo "Bonjour Monsieur!";
//     }
//      } else if ($_GET['age'] >= 115){ 
//        if ($_GET['sexe'] == "femme") {
//             echo "Bonjour mamy!";
//         } else{
//                 echo "Bonjour papy!";
    

// }

// }
// if ($language == "english") {
//     echo " How are you today?";
// } else if ($language == "others") {
//     echo " Hi stranger ! ";
// }
// }

?>
<!-- <form method="get" action="">
	<label for="age"> votre age</label>
	<input type="" name="age">

    <label for="sexe">Votre sexe :</label>
    <select name="sexe">
    <option value="femme">femme</option>
    <option value="homme">homme</option>
    </select> 
    
    <select name="language">
        <option value="english">english</option>
        <option value="others">others</option>
<input type="submit" name="submit" value="Greet me now">
</form> -->

<?php 


// if (isset($_GET['age']) && isset($_GET['gender'])) {
//     $name = $_GET['name'];
//  $age = $_GET['age'];
//  $gender = $_GET['gender'];
//  $message = "désolé tu ne corresponds pas aux critères";
//  if (($age >= 21 && $age <= 40) && ($gender == "féminin")) {
//     echo "Super tu as les critères pour être parmis nous!"; 
//  }
//  echo $message;
// }

 


// ?>
<!-- // <form method="get" action="">
//     <label for="name"> votre nom</label>
// 	<input type="text" name ="name">
    
//     <label for="gender">votre sexe</label>
    
// 	<input type="radio" name="gender" value = "masculin"> Masculin 
//     <input type="radio" name="gender" value = "féminin"> Féminin 
    
//     <label for="age"> votre âge</label>
//     <input type="number" min="0" name ="age">

    
// 	<input type="submit" name="submit" value="Greet me now">
// </form> -->



<?php



if (isset($_GET['note'])){
    $note = $_GET['note'];

if ($note <= 4){
    
    echo "Ce travail est vraiment mauvais. Quel gamin idiot !";
} else if (($note >= 5) && ($note <= 9 )) {
    echo "Ceci n'est pas suffisant. Il faut étudier davantage.";
}else if ($note == 10 ) {
    echo "à peine assez !";
} else if(($note >= 11) && ($note <= 14) ) {
    echo "Pas mal !";
} else if(($note >= 15) && ($note <= 18) ) {
    echo "Bravo, bravissimo !";
}
    else if (($note == 19) OR ($note == 20)) {
    echo "Trop beau pour être vrai : affrontez le tricheur !";
}
}
?>

<form method="get" action="">
   <label for="name"> votre nom</label>
   <input type="text" name ="name">
    
   <label for="note">note</label>
   <input type="number" min="0" max="20" name="note">


   <input type="submit" name="submit" value="Greet me now">
</form> 
