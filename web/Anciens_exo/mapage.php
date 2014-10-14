<?php
session_start(); // On démarre la session AVANT toute chose
setcookie('pays', Chine, time() + 365*24*3600, null, null, false, true);
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
 
    <p>Re-bonjour !</p>
  <?php
 if (isset($_COOKIE['pseudo']))
 {
  ?>
     <p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
     
     </p>
<?php
 }
 else 
 {
     echo "no cookie";
 }
?>
  
    
    </body>
</html>