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
</body>
</html>
<?php

$i= 0;

    foreach($_POST as $key){
    $i++;
    }
    echo $i;
    var_dump ($_POST);
?>