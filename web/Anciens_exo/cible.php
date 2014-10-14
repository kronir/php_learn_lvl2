<p>Bonjour !</p>

<p>Donc là on va faire toute les tests de la création
    <?php 
    
   if  (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error']==0){
       echo "Tout c'est bien passé <br>";
    
       if ($_FILES['monfichier']['size']<=1000000){
       echo "Pour la taille check <br>";
   
         // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
   }
    ?> 
<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>