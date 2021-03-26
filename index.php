<?php
require 'insert.php';
require 'header.php';
?>
<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="style_index.css">
    <meta name="viewport" contennt="width=device-width" initial-scale="1.0">
    <meta charset="UTF-8">
    </head>
<body>
<form method="POST" action="insert.php">
    <input type="hidden" name='id' value="<?php echo $id;?>">
    <input type="text" name="titre" value="<?php echo $titre;?>"><br><br>
    <input type="text" name="auteur" value="<?php echo $auteur;?>"><br><br>
    <input type="file" name="images" vlaue="<?php echo $images;?>"><br><br>
    <input type="date" name="date_achat" value="<?php echo $date_achat;?>"><br><br>
    <input type="date" name="date_de_publication" value="<?php echo $date_de_publication;?>"><br><br>
<?php if($update == true): ?>
    <button type="submit" name='update' >Modifier</button>
<?php else: ?>
    <button type="submit" name='add'>Ajouter</button>
<?php endif ?>



</form>
</body>
</html>