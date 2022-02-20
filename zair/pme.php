<?php
require "connexion.php";
if(isset($_GET['id'])){
    $matricule =$_POST["matricule"];
    $nom =$_POST["nom"];
    $prénom =$_POST["prénom"];
    $date =$_POST["date"];
    $département =$_POST["département"];
    $salaire =$_POST["salaire"];
    $fonction =$_POST["fonction"];
    $image =$_POST["image"];
    $id=$_POST['id'];
    $sql="UPDATE employe1 set matricule='$matricule',nom='$nom',prénom='$prénom',date='$date',département='$département',salaire='$salaire',fonction='$fonction'
    ,image='$image' where id='$id'";
  $q=mysqli_query($conx,$sql);
  if(isset($q)){
    echo("<h1>Modification avec success </h1>");
  }

}else{
$matricule =$_POST["matricule"];
$nom =$_POST["nom"];
$prénom =$_POST["prénom"];
$date =$_POST["date"];
$département =$_POST["département"];
$salaire =$_POST["salaire"];
$fonction =$_POST["fonction"];
$image =$_POST["image"];

// Insert database 

$request = "INSERT INTO employe1( `matricule`, `nom`, `prénom`, `date`, `département`, `salaire`, `fonction`, `image`)
 VALUES('$matricule','$nom', '$prénom', '$date', '$département','$salaire', '$fonction', '$image')";
$query = mysqli_query($conx,$request);
if(isset($query)){
    echo("<h1>you are all set </h1>");
}
else{
    echo("<h1>something is wrong</h1>");
}
}
?>