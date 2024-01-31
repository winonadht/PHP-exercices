<?php
$me = array (
    'firstname' => 'Winona',
    'age' => 28,
    'favoriteSeason' => 'spring',
    'foot' => 'false',
    'favoriteFilm' => array( 'harry-potter', 'pirates des caraîbes', 'seigeur des anneaux' ),
    
   
);
$me['hobby'] = ['shopping', 'sport', 'arts' ];

$mother = array( 'firstname' => 'Sonia',
'age' => 50,
'favoriteSeason' => 'spring',
'foot' => 'false',
'favoriteFilm' => array( 'film horreur' ),
'hobby' => array('shopping', 'sport', 'lecture'),
);

$soulmate = array ( 
    'firstname' => 'mySoulmate',
    'age' => 28,
    'favoriteSeason' => 'spring',
    'foot' => 'false',
    'favoriteFilm' => array( 'harry-potter', 'pirates des caraîbes', 'seigeur des anneaux' ),
    'hobby' => array('sport', 'lecture', 'cuisiner'),
);

// Then, add a line underneath that pushes 'xhtml' in the right array.
// Then, add a line underneath that pushes 'Ruby on Rails' in the right array.
// Then, add a line underneath that pushes 'CSS' in the right array.
// Then, add a line underneath that pushes 'Flash' in the right array.
// Then, add a line underneath that pushes 'JavaScript' in the right array.
// Then, add a line underneath that replace 'xhtml' by 'html'.
// Then, add a line underneath that removes 'Flash' from the array.
// Giphy
$webdevelopement = array(
    'frontend' => array(),
    'backend'  => array(), 
);

$webdevelopement['frontend'][0]='css';
$webdevelopement['frontend'][1]='javascript';
$webdevelopement['backend'][0]='xhtml';
$webdevelopement['backend'][1]='ruby';
$webdevelopement['backend'][2]='flash';

$me['mother']= $mother;
$me['hobby'][]='taxiedermie';

$intersection_array = array_intersect($me['hobby'] , $soulmate['hobby']);
$merge_array = array_merge($me['hobby'], $soulmate['hobby']);


echo '<pre>';
print_r($me);
print_r($intersection_array);
print_r($webdevelopement);
echo '</pre>';

echo count($me['mother']['hobby']);
echo count($me['hobby']);
echo count($me['mother']['hobby']) + count($me['hobby']);


?>