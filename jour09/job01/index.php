<?php

$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT * FROM etudiants");
$resultat = mysqli_fetch_all($request);
var_dump($resultat);

/*while(){
    echo "<tr>";
    echo "<td>";
    echo $resultat;
    echo "</td>";
    echo "</tr>";
}*/
  
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
<tr>
<td><?php echo $resultat[2][0]?></td>
<td><?php echo $resultat[2][1]?></td>
<td><?php echo $resultat[2][2]?></td>
<td><?php echo $resultat[2][3]?></td>
<td><?php echo $resultat[2][4]?></td>
<td><?php echo $resultat[2][5]?></td>
</tr>
<tr>
<td><?php echo $resultat[3][0]?></td>
<td><?php echo $resultat[3][1]?></td>
<td><?php echo $resultat[3][2]?></td>
<td><?php echo $resultat[3][3]?></td>
<td><?php echo $resultat[3][4]?></td>
<td><?php echo $resultat[3][5]?></td>
</tr>
<tr>
<td><?php echo $resultat[4][0]?></td>
<td><?php echo $resultat[4][1]?></td>
<td><?php echo $resultat[4][2]?></td>
<td><?php echo $resultat[4][3]?></td>
<td><?php echo $resultat[4][4]?></td>
<td><?php echo $resultat[4][5]?></td>
</tr>
<tr>
<td><?php echo $resultat[5][0]?></td>
<td><?php echo $resultat[5][1]?></td>
<td><?php echo $resultat[5][2]?></td>
<td><?php echo $resultat[5][3]?></td>
<td><?php echo $resultat[5][4]?></td>
<td><?php echo $resultat[5][5]?></td>
</tr>
<tr>
<td><?php echo $resultat[6][0]?></td>
<td><?php echo $resultat[6][1]?></td>
<td><?php echo $resultat[6][2]?></td>
<td><?php echo $resultat[6][3]?></td>
<td><?php echo $resultat[6][4]?></td>
<td><?php echo $resultat[6][5]?></td>
</tr>
</tbody>
</table>
</body>

