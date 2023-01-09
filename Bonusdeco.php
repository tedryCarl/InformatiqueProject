<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Deconnexion</title>
</head>
<body>
<a href="principal.php?deconnexion=true"><span>Déconnexion</span></a>
 
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 }
 }
 else if($_SESSION['Login'] !== ""){
 $Login = $_SESSION['Login'];
 // afficher un message
 echo "<br>Bonjour $Login, vous êtes connectés";
 }
 ?>

</body>
</html>