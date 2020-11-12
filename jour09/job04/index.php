<?php
$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT * FROM `etudiants` WHERE `prenom` LIKE '%T%'");
$resultat = mysqli_fetch_all($request);
//var_dump($resultat); 
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table {
        border-collapse: collapse;
        }
        th {
            border: 1px solid black;
            padding: 3px
        }
        td {
            border: 1px solid black;
            padding: 3px
        }
    </style>
</head>

<body>
<table>
<thead>
<tr>
<td>id</td>
<td>prénom</td>
<td>nom</td>
<td>naissance</td>
<td>sexe</td>
<td>e-mail</td>
<tbody>
<tr>
<td><?php echo $resultat[0][0]?></td>
<td><?php echo $resultat[0][1]?></td>
<td><?php echo $resultat[0][2]?></td>
<td><?php echo $resultat[0][3]?></td>
<td><?php echo $resultat[0][4]?></td>
<td><?php echo $resultat[0][5]?></td>
</tr>
<tr>
<td><?php echo $resultat[1][0]?></td>
<td><?php echo $resultat[1][1]?></td>
<td><?php echo $resultat[1][2]?></td>
<td><?php echo $resultat[1][3]?></td>
<td><?php echo $resultat[1][4]?></td>
<td><?php echo $resultat[1][5]?></td>
</tr>
</tbody>
</table>
</body>