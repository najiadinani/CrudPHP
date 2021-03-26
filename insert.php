<?php

$db=mysqli_connect("localhost","root","","librairie");

    session_start();    

    $id= 0;
    $titre= '';
    $auteur= '';
    $images= '';
    $prix= '';
    $quantite= '';
    $date_achat= '';
    $date_de_publication= '';
    $update = false;

if(isset($_POST['add'])){
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $images=$_POST['images'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $date_achat=$_POST['date_achat'];
    $date_de_publication=$_POST['date_de_publication'];

    $db->query("INSERT INTO livre (titre, auteur, images,date_achat,date_de_publication) 
            VALUES ('$titre','$auteur','$images','$date_achat','$date_de_publication')");

    header("Location: /crudN/aff.php");
}

if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $db->query("DELETE FROM livre WHERE id=$id") or die($db->error);

    header("Location: /crudN/aff.php");
}

if(isset($_GET['edit'])){
    $update = true;
    $id = $_GET['edit'];
    $result = $db->query("SELECT * FROM livre WHERE id=$id") or die($db->error());
    $dataresult = $result->fetch_array();

    $titre = $dataresult['titre'];
    $auteur = $dataresult['auteur'];
    $images = $dataresult['images'];
    $date_achat = $dataresult['date_achat'];
    $date_de_publication = $dataresult['date_de_publication'];
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $images = $_POST['images'];
    $date_achat = $_POST['date_achat'];
    $date_de_publication = $_POST['date_de_publication'];

    $db->query("UPDATE livre SET titre='$titre', auteur='$auteur', images='$images', date_achat='$date_achat', date_de_publication='$date_de_publication'")
    or die($db->error);

    header("Location: /crudN/aff.php");
}
?>
