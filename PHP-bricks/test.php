
<?php

var_dump($_SERVER);

$prenom = "Dimitri";

// date_default_timezone_set("Europe/Zurich");
$timestamp = time();

$heure_actuelle = date("H" , $timestamp);
$heure_actuelle_complete = date("H:i" , $timestamp);

if($heure_actuelle < 18)
    $salutations = "Bonjour";
else
    $salutations = "Bonsoir";
?>
<div>
    <p style="font-size: 22px"><b><?php echo $salutations," ", $prenom;?> </b>!</p>
    <p>il est :<b> <?php echo $heure_actuelle_complete;?></p>
</div>