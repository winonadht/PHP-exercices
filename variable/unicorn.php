<?php 

$gender = isset($_GET['gender'])?$_GET['gender'] : '';
$gif = ($gender == "H") ? '<iframe src="https://giphy.com/embed/adg7CpC5U575yNPbOK" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/MontreuxComedy-adg7CpC5U575yNPbOK">via GIPHY</a></p>' 
    : (($gender == "C") ? '<iframe src="https://giphy.com/embed/SrAO8XBZ7mPSWzpERP" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/tonrakht-cat-cute-beluga-SrAO8XBZ7mPSWzpERP">via GIPHY</a></p>' 
    : '<iframe src="https://giphy.com/embed/I7splHKcXJ6Yj7qaFL" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/unicorn-licorne-sarupinku-I7splHKcXJ6Yj7qaFL">via GIPHY</a></p>');

echo $gif;
?>

<form method="get" action="">
	

    <label for="gender">Votre genre :</label>
    <select name="gender">
    <option value="L">Licorne</option>
    <option value="C">Chat</option>
    <option value="H">Humain</option>
    </select> 
    
   
<input type="submit" name="submit" value="Greet me now">
</form>