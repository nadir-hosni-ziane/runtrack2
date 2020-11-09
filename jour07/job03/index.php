<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">
<?php 
session_start();
if (isset($_POST['reset'])){
       $_SESSION['prenom'] + ["prenom"];

}
if(!isset($_SESSION['prenom'])){
    $_SESSION['prenom'];
}
else{
    $_SESSION['prenom'];
}

echo var_dump($_SESSION['prenom']);
?>

<label for="prenom">prénom: </label>
<input type="text" id="prenom" name="prenom">
<input type="submit" name="submit" value="submit">
<input type="submit" name="reset" value="Reset">
</form>
</body>
</html>