<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
	</head>
	<body>
		
		<h1 align=center>INSCRIRE DEMANDE</h1>
		<form method="POST" action="">

			<center>
			
			<label>Description</label>
			<p><input type="text" id="Description" name="Description" placeholder="le soucis que vous avez" /></p>
			<label>Nom</label>
			<p><input type="text" id="NomDem" name="NomDem" /></p>
			<label>Prénom</label>
			<p><input type="text" id="PrenDem" name="PrenDem" /></p>
			<label>Matricule</label>
			<p><input type="text" id="MatDem" name="MatDem" /></p>
			<label>Fonction</label>
			<p><input type="text" id="FonctDem" name="FonctDem" /></p>
			<label>Date de la demande</label>
			<p><input type="date" id="DateDem" name="DateDem" /></p>
			<label>Téléphone</label>
			<p><input type="text" id="TelDem" name="TelDem" placeholder="0787367679"/></p>
			<label>Poste</label>
			<p><input type="text" id="PostDem" name="PostDem" /></p>
			<br>
			<button type="submit" name="Enregistrer"><b>ENREGISTRER</b> </button>
			<br><br>
			<button> <a href="login.php" title="Connexion">Se connecter</a></button>
			
			</center>
		</form>
		
		<?php
			include("connexion1.php");
			if(isset($_POST['Enregistrer']))
	   			{
		   			$Description = $_POST['Description'];
		   			$NomDem = $_POST['NomDem'];
		   			$PrenDem = $_POST['PrenDem'];
		   			$MatDem = $_POST['MatDem'];
		   			$FonctDem = $_POST['FonctDem'];
		   			$DateDem = $_POST['DateDem'];
		   			$TelDem = $_POST['TelDem'];
		   			$PostDem = $_POST['PostDem'];
	   
		   			$sql = "INSERT INTO demande (Description, NomDem, PrenDem, MatDem, FonctDem, DateDem, TelDem, PostDem) VALUES (:Description, :NomDem, :PrenDem, :MatDem, :FonctDem, :DateDem, :TelDem, :PostDem)" or die(mysql_error());
		   
		   			$stmt = $conn->prepare($sql) ;

		   			$stmt->bindParam(':Description', $Description);
		   			$stmt->bindParam(':NomDem', $NomDem);
		   			$stmt->bindParam(':PrenDem', $PrenDem);
		   			$stmt->bindParam(':MatDem', $MatDem);
		   			$stmt->bindParam(':FonctDem', $FonctDem);
		   			$stmt->bindParam(':DateDem', $DateDem);
		   			$stmt->bindParam(':TelDem', $TelDem);
		   			$stmt->bindParam(':PostDem', $PostDem);
		   
			   			$stmt->execute();
					//echo "ok";
	   		}
		?>
	</body>
</html>
