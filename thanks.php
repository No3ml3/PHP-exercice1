<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
  if(isset($_POST['nom'])) :?>
        <div class="messageForUser">
            <p>Merci <?= $_POST['prenom'] ?> <?=$_POST['nom'] ?> de nous avoir contacté à propos de votre mort <?= $_POST['typeDeMort'] ?>.</p> 
            <br>
            <p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['user_email'] ?>  ou par téléphone au <?= $_POST['telephone'] ?>  dans les plus brefs délais pour traiter votre demande : </p> 
            <br>
            <p><?=$_POST['user_message'] ?> </p> 
        </div>
<?php endif; ?>
</body>
</html>



