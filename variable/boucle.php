<?php
// $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
// foreach( $pronouns as $value){
// 	$verbe = ($value == 'He/She') ? 'codes' : 'code';

// 	echo $value.' '.$verbe.'<br>';
// }

// $number = 1;

// while ($number <= 120)
// {
//     echo $number;
//     // shorthand writing for 
//     // $amount_of_lines = $amount_of_lines +1;
//     $number ++; 

// }


for ($number = 1; $number <= 120; $number ++)
{
    echo $number;
}

$startup = array( 'Alice', 'Cassidy', 'Hanen', 'Jeremy', 'Julien');
foreach( $startup as $value){
	echo $value; 
}

$pays = array('BE'=>'Blegique', 'FR' =>'France', 'ES'=>'Espagne', 'AL'=> 'Allemagne', 'IT'=>'Italie', 'CR'=>'Croatie', 'P-B'=>'Pays-bas', 'PRTG'=>'Portugal', 'TRK'=>'Turquie', 'POL'=>'Pologne','SU'=> 'Suède');
foreach( $pays as $value){
	echo $value; 
}

?>

<form>
    <label for="pays">Pays :</label>
    <select name="pays" id="pays">
        <option value="">Sélectionner:</option>
        <?php foreach ($pays as $key => $value): ?>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
</form>

