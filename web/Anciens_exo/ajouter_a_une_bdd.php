<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');

echo $nb_modifs;

//Ceci est un ajout
?>