<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>Gestion d'employes</h1>
<button type="submit" name="ajouter" class="btn btn-primary mt-3"><a href="index.php">Ajouter</a></button>
<!-- Tableau -->
<table border =1 width="60%">
<thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Département</th>
                <th>Salaire</th>
                <th>Fonction</th>
                <th>Photo</th>
            </tr>
        </thead>
<?php
    // Select information from table
 require 'connexion.php';
 $request ="SELECT * from employe1 ";
 $query =mysqli_query($conx,$request);
 while($rows=mysqli_fetch_assoc($query)){
     $id= $rows['id'];
        echo "<tr>";
        echo    "<td>".$rows['matricule']."</td>";
        echo        "<td>".$rows['nom']."</td>";
        echo        "<td>".$rows['prénom']."</td>";
        echo        "<td>".$rows['date']."</td>";
        echo        "<td>".$rows['département']."</td>";
        echo        "<td>".$rows['salaire']."</td>";
        echo        "<td>".$rows['fonction']."</td>";
        echo        "<td>".$rows['image']."</td>";
    // Supprimation
        echo         "<td><a href='delete.php?id=".$id."'>Supprimer</a></td>";
    // Modification
        echo         "<td><a href='index.php?id=".$id."'>Modifier</a></td>";
        echo "</tr>";
 }

?>
</table>
</body>
</html>