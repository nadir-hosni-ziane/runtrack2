<!DOCTYPE html>
<html lang="fr">

<head>
    <title>salut</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="" method="get">
        <label for="number">nombre: </label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

    if($_GET["number"]%2 == 0){
        echo "nombre pair";}
        else{
        echo "nombre impair";}
   
?>