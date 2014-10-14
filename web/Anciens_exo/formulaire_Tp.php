<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
        
    Veuillez tapper votre mdp<br />
 
        </p>
<?php 
       if (isset($_POST['passWord']) AND $_POST['passWord']=="kangourou")
       {
       echo "bon mots de passe";    
       }
       else 
       {
       ?>    
       
        <form action="formulaire_Tp.php" method="post">
            <p>
                 <input type="text" name="passWord" />
                 <input type="submit" value="Valider" />
            </p>

        </form>
<?php 
       }
       ?>
        
    </body>
</html>
