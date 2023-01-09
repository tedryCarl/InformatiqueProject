<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1 align=center>CONNEXION</h1>
		<form method="POST" action="connexion2.php">
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
			<center><button type="submit" name="CONNEXION"><b>CONNEXION</b></button></center>
			<br>
			<br>
			<button> <a href="utilisateur.php" title="Inscription">S'inscrire</a></button>

			</ol>
			</center>

        <?php
            if(isset($_GET['erreur']))
                {
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
               
        ?>
		</form>

</body>
</html>