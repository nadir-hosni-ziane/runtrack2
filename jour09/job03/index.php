<?php
$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `sexe`= 'Femme'");
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
<td>prénom</td>
<td>nom</td>
<td>naissance</td>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $resultat[0][0]?></td>
<td><?php echo $resultat[0][1]?></td>
<td><?php echo $resultat[0][2]?></td>
</tr>
</tbody>
</table>
</body>
