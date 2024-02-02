
<?php
// pour les lettres sans accent
$argument = 'emile';
function function_name($argument){

        return ucfirst($argument); 
    
} 
// <!-- pour les lettres avec accent  -->
// <!-- $argument = 'émile';

// function mb_ucfirst($string, $encoding = 'UTF-8') {
//     return mb_strtoupper(mb_substr($string, 0, 1, $encoding), $encoding) . mb_substr($string, 1, null, $encoding);
// }

// function function_name($argument) {
//     return mb_ucfirst($argument);
// }

// echo function_name($argument);


echo function_name($argument);

date_default_timezone_set('Europe/Brussels');

$date = date('H:i:s,d M Y');

echo date('H:i:s/d M Y');

$numb1 = 6;
$numb2 = 6;

function somme($number1, $number2){
if (is_numeric($number1) && is_numeric($number2)) {
    return $number1 + $number2;
 } else {
    return "Les deux arguments doivent être des nombres.";
 }
}

echo somme($numb1,$numb2);



$phrase = 'In code we trust!';
$words = explode(' ', $phrase);

foreach ($words as $word) {
    echo strtoupper($word[0]);
}
 
?>
<!-- Initialise la variable $phrase.
Divise la phrase en mots avec explode.
Utilise une boucle foreach pour parcourir les mots.
Convertit et affiche la première lettre de chaque mot en majuscule.
Le résultat est l'acronyme formé par les premières lettres des mots de la phrase. -->
<?php
$tableau = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
 function remplacerLettre($tableau){


 }



 function retour($message, $cssClass) {
    $tabClass = array("info", "error", "warning");

    if (!in_array($cssClass, $tabClass)) {
        $cssClass = "info";
    }

    return '<div class="' . $cssClass . '">' . ucfirst($cssClass) . ': ' . $message . '.</div>';
}

echo retour("Incorrect email address", "error");
?>

<?php
function genererMot($min, $max) {
    $longueur = rand($min, $max);
    $lettres = 'abcdefghijklmnopqrstuvwxyz';
    $mot = '';

    for ($i = 0; $i < $longueur; $i++) {
        $mot .= $lettres[rand(0, strlen($lettres) - 1)];
    }

    return $mot;
}

$mot1 = genererMot(1, 5);
$mot2 = genererMot(7, 15);

$resultat = $mot1 . $mot2;

echo $resultat;

$phrase = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$phrase_demajusculee = strtolower($phrase);

echo $phrase_demajusculee;


function calculate_cone_volume($ray, $height) {
    // Vérification
    if (!is_numeric($ray) || !is_numeric($height) || $ray <= 0 || $height <= 0) {
        return 'Invalid input. Please provide positive numeric values for ray and height.';
    }

    // Calcule
    $volume = $ray * $ray * 3.14 * $height * (1/3);

    return $volume;
}


$volume1 = calculate_cone_volume(5, 2);
echo 'The volume of a cone with ray 5 and height 2 = ' . $volume1 . ' cm<sup>3</sup><br />';

$volume2 = calculate_cone_volume(3, 4);
echo 'The volume of a cone with ray 3 and height 4 = ' . $volume2 . ' cm<sup>3</sup><br />';
?>


