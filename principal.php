<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<?php
 session_start();
 if($_SESSION['Login'] !== ""){
 $Login = $_SESSION['Login'];
 // afficher un message
 echo "Bonjour $Login, vous êtes connecté";
 }
 ?>
</body>
</html>