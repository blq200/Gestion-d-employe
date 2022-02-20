<!-- Supprimer  -->
<?php
require 'connexion.php';
$id= $_GET['id'];
$sql="DELETE FROM employe1 where id='$id'";
$query =mysqli_query($conx,$sql);
if(isset ($query)){
    header("location:afficher.php");
}
?>