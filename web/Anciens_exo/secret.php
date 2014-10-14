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
       <?php 
       if (isset($_POST['password']) AND $_POST['password']=="kangourou")
       {
           echo"Bon mots de passe";
       }
       else {
           echo "mauvais mots de passe";
       }
        ?>
    </body>
</html>
