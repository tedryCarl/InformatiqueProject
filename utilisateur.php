<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<h1 align=center>INSCRIPTION</h1>
		<form method="POST" action="">
			<br>
			<br>
			<br>
			<br>
			<center>
			<ol>
			<label>Nom d'utilisateur</label>
			<input type="text" id="Login" name="Login" />
			<label>Mot de passe</label>
			<input type="password" id="Motdepasse" name="Motdepasse" />
			<br>
			<br>
			<br>
			<center><button type="submit" name="INSCRIPTION"><b>OK</b></button></center>
			<br>
			<br>
			<button> <a href="login.php" title="Connexion">Retour</a></button>


			</ol>
			</center>

        <?php
            include("connexion1.php");
			if(isset($_POST['CONNEXION']))
	   			{
		   			$Login = $_POST['Login'];
		   			$Motdepasse = $_POST['Motdepasse'];

	   
		   			$sql = "INSERT INTO utilisateur (Login, Motdepasse) VALUES (:Login, :Motdepasse)" or die(mysql_error());
		   
		   			$stmt = $conn->prepare($sql);

		   			$stmt->bindParam(':Login', $Login);
		   			$stmt->bindParam(':Motdepasse', $Motdepasse);
		   			$stmt->execute();
					//echo "Bonjour $Login, vous êtes bien enregistré dans la base de données";
	   			}

        ?>
</body>
</html>

