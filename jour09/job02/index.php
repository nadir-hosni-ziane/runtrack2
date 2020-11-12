<?php

$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT `nom`,`capacite` FROM `salles`");
$resultat = mysqli_fetch_all($request);
var_dump($resultat);
  
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
<td>nom</td>
<td>capacite</td>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $resultat[0][0]?></td>
<td><?php echo $resultat[0][1]?></td>
</tr>
<tr>
<td><?php echo $resultat[1][0]?></td>
<td><?php echo $resultat[1][1]?></td>
</tr>
<tr>
<td><?php echo $resultat[2][0]?></td>
<td><?php echo $resultat[2][1]?></td>
</tr>
<tr>
<td><?php echo $resultat[3][0]?></td>
<td><?php echo $resultat[3][1]?></td>
</tr>
<tr>
<td><?php echo $resultat[4][0]?></td>
<td><?php echo $resultat[4][1]?></td>
</tr>
<tr>
<td><?php echo $resultat[5][0]?></td>
<td><?php echo $resultat[5][1]?></td>
</tr>
</tbody>
</table>
</body>
