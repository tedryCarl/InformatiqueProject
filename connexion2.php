<?php
session_start();
if(isset($_POST['Login']) && isset($_POST['Motdepasse']))
{
 // connexion à la base de données
 $hote="localhost";
 $user="root";
 $mdp="";
 $bd="maepro";
 
 try {
     $conn = new PDO("mysql:host=$hote;dbname=$bd", $user,$mdp);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "la connexion a ete bien etablie";
 } 
 catch (PDOException $e) {
     echo "la connexion a echoue:" . $e->getMessage();
 } 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $Login = mysqli_real_escape_string($db,htmlspecialchars($_POST['Login'])); 
 $Motdepasse = mysqli_real_escape_string($db,htmlspecialchars($_POST['Motdepasse']));
 
 if($Login !== "" && $Motdepasse !== "")
 {
 $requete = "SELECT count(*) FROM utilisateur WHERE Login='".$Login."' and Motdepasse='".$Motdepasse."' ";
 $exec_requete = mysqli_query($db,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
 $_SESSION['Login'] = $Login;
 header('Location: principal.php');
 }
 else
 {
 header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>
