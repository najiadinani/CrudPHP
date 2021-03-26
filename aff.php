<?php
require 'header.php';
require_once 'insert.php';
?>

<!doctype html>
<html>
    <head>
<link rel="stylesheet" href="style_R.css">
<link rel="stylesheet" href="style.css">


</head>
<body>
<table id="t01">
<tr>
<th>titre</th>
<th>auteur</th>
<th>images</th>
<th>date achat</th>
<th>date de publication</th>
<th>Suppression</th>
<th>Modification</h1>
</tr>

<?php

$db=mysqli_connect("localhost","root","","librairie");
$id='id';
$req="SELECT * from livre where id=$id";

$query=mysqli_query($db,$req);

while($rows=mysqli_fetch_assoc($query)){

    $id=$rows['id'];
    echo"<tr>";
    echo"<td>".$rows['titre']."</td>";
    echo"<td>".$rows['auteur']."</td>";
    echo"<td>".$rows['images']."</td>";
    echo"<td>".$rows['date_achat']."</td>";
    echo"<td>".$rows['date_de_publication']."</td>";
    echo"<td><a name='delete' href='aff.php?delete=$id'>Supprimer</a></li></td>";
    echo"<td><a name='edit' href='index.php?edit=".$id."'>modifier</a></li></td>";
    echo"</tr>";
}

?>
</table>
</body>
</html>