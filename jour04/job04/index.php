<!DOCTYPE html>
<html lang="fr">

<head>
    <title>salut</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="" method="post">
        <label for="name">Nom: </label>
        <input type="text" id="name" name="user_name" required>
        <button type="submit">Envoyer</button>
    </form>
<table>
<tr>
<td>argument</td>
<td>valeur</td>
</tr>
<?php
foreach($_POST as $key => $value){
    echo "<tr>";
    echo "<td>";
    echo "$key";
    echo "</td>";
    echo "<td>";
    echo "$value";
    echo "</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>
