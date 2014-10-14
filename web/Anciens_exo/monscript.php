<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');


// 2 : on lit la première ligne du fichier
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues++; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
echo $pages_vues; 

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>