<?php

$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT `nom`,`capacite` FROM `salles`");
$resultat = mysqli_num_rows($request);
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
<?php   
        while ($row = mysqli_fetch_array($request)) {
            echo "<tr><td>$row[nom]</td>";
            echo "<td>$row[capacite]</td></tr>";
        }
?>
</tbody>
</table>
</body>
