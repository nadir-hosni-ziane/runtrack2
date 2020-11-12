<?php

$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT * FROM `etudiants` WHERE `naissance` > '2002-11-10'");
$resultat = mysqli_num_rows($request);
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
</tr>
</thead>
<tbody>
<?php   
    while ($row = mysqli_fetch_array($request)) {
        echo "<tr><td>$row[id]</td>";
        echo "<td>$row[prenom]</td>";
        echo "<td>$row[nom]</td>";
        echo "<td>$row[sexe]</td>";
        echo "<td>$row[naissance]</td>";
        echo "<td>$row[email]</td></tr>";
    }
?>
</tbody>
</table>
</body>
