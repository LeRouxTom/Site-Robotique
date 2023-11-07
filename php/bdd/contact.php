<?php 

    if (!isset($_POST)) {   //Si aucune valeur en post fait rien
        return;
    }

    try {
        $pdo = New PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root', ''); //connexion a une base de donnée mysql 
    } catch (PDOException $e) { //message d'erreur si non connexion
        echo "Connection failed: " . $e->getMessage();
        return;
    }

    $sql = "INSERT INTO contact (nom, prenom, email, msg)
    VALUES(:nom, :prenom, :email, :msg)";   //requête SQL pour insert les valeurs du formulaire de contact dans la base SQL

    $stmt = $pdo->prepare($sql);  // prépare la requête SQL

    $nom = htmlspecialchars($_POST["lastname"]); //donne les valeurs en post au variable php
    $prenom = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);
    $email = htmlspecialchars($_POST["email"]);

    $stmt ->bindParam(':msg', $message);    // sécurise l'accès à la base de données pour éviter les failles de sécurité (passe les paramètre en blind)
    $stmt ->bindParam(':nom', $nom);
    $stmt ->bindParam(':prenom', $prenom);
    $stmt ->bindParam(':email', $email);

    $result = $stmt->execute(); // execute la requete SQL

    header('location: ../contact.php'); // renvoie à la page contact après requête
?>