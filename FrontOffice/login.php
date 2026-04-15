<?php
try {
session_start();
$mysqlClient = new PDO('mysql:host=localhost;dbname=caisseshop;charset=utf8', 'root', '');

if (
        isset($_POST["Mail"]) && empty($_POST["Mail"]) == false &&
        isset($_POST["MDP"]) && empty($_POST["MDP"]) == false
    ) {
        // On recupère de l'utilisateur à partir de l'email 
        // SELECT `Mail`, `MotDePasse`, ' Nom', ' Prenom' FROM `utilisateurs` WHERE 1

        $sql_requete = 'select Id,Mail,MotDePasse,Nom,Prenom from utilisateurs where Mail = :mail';
        $sql = $mysqlClient->prepare($sql_requete);
        $sql->execute([
            'mail' => $_POST["Mail"],
        ]);

        $resultat = $sql->fetchAll();

        if (count($resultat) <= 0) {
            die('Aucun utilisateur n existe avec cet email');
            }

        if ($_POST["MDP"] == $resultat[0]["MotDePasse"]) {
            echo 'Password is valid!';
        } else {
            die('Votre mot de passe est incorrecte.');
        }
        
        $_SESSION['USER_CONNEXION'] = [
            'id' => $resultat[0]['Id'],
            'email' => $resultat[0]["Mail"],
            'nom' => $resultat[0]["Nom"],
            'prenom' => $resultat[0]["Prenom"],
        ];

        header('Location: caisse.php');
        exit;
    } 
}catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}




?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Connexion</title>
</head>
<body>
<div class="card">
  <div class="logo-wrap">
        <img src="../Images/logo-caisse.png" alt="CaisseShop" class="logo-img">
    </div>

<h1>Connexion</h1>
<form action="login.php" method="POST">
        <div class="form-group">
        <label for="Email">Mail : </label>
        <input type="email" name="Mail">
        </div>

        <div class="form-group">
        <label for="MotDePasse">Mot de passe : </label>
        <input type="password" name="MDP">
        </div>

        <button type="submit" class="btn-connect">Se connecter</button>
</form>
</div>
</body>
</html>