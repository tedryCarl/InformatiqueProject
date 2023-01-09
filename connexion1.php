<?php
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
?>