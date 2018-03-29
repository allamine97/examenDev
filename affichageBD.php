<!DOCTYPE html>
<html>
<head>
	<title>Lister Les elements de la base de donnée</title>
	<META charset="utf-8"/>
</head>
<body>
   <?php
   try{

   	require('connexionBD.php');
   	$requete = $con->prepare("SELECT * from personne");
   	?>
   	<table>
   	<tr>
   		<td colspan="6" id="entete"><strong>Nom des users</strong></td>
   	</tr>
   	<p><tr>
   		<th>NOM</th>
   		<th>PRENOM</th>
   		<th>ADRESSE</th>
   		<th>VILLE</th>
   	</tr>
   	</p>


   		<?php

             while($resultat = $requete->fetch()){
        ?>
                
              
              <tr>
                  <p><td><?php echo $resultat['NOM']; ?></td>
                  <td><?php echo $resultat['PRENOM']; ?></td>
                  <td><?php echo $resultat['ADRESSE']; ?></td>
                  <td><?php echo $resultat['VILLE'] ; ?></td>
  
                 </p>
                </tr>

        <?php
             }
         ?>

    </table>
   	<?php
   }catch(PDOException $e){
   	     die('Erreur!!!'.$e->getMessage());
   }
   ?>

</body>
</html>