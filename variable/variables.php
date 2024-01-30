<?php
$name = "winona"; 
$age = 28;
$color = "noirs";
$family = array(
    0 => 'moi',
    1 => 'mon homme',
    2 => 'chtroumpf 1',
    3 => 'chtroupmf 2');

$jai_faim = true; 
?>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <p>salut! mon nom est <?php echo $name;?></p>
    <p>j'ai <?php echo $age;?> ans </p> 
    <p> Mes yeux sont <?php echo $color;?></p> 
    <p> La première personne de ma famille est <?php echo $family[0];?></p>

</body>
</html>
