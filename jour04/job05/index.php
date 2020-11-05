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
        <label for="password">Nom: </label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Envoyer</button>
    </form>
<?php

    if($_POST ["user_name"] == "john" && $_POST ["password"] == "rambo"){
        echo "c'est pas ma guerre";}
        else{
            echo "Votre pire cauchemar";}

?>
</table>
</body>
</html>
