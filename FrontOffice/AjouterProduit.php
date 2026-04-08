<?php
require_once(__DIR__ . '/../BDD/ConnexionBDD.php');


if(
    isset($_POST['AjoutNom']) &&
    isset($_POST['AjoutDescription']) &&
    isset($_POST['AjoutPrix']) &&
    isset($_POST['AJoutStock']) &&
    isset($_POST['AjoutCodebarres']) &&

    !empty($_POST['AjoutNom']) &&
    !empty($_POST['AjoutDescription']) &&
    !empty($_POST['AjoutPrix']) &&
    !empty($_POST['AJoutStock']) &&
    !empty($_POST['AjoutCodebarres'])) 

      {
        $Nom = $_POST['AjoutNom'];
        $Description = $_POST['AjoutDescription'];
        $Prix = $_POST['AjoutPrix'];
        $Stock = $_POST['AJoutStock'];
        $CodeB = $_POST['AjoutCodebarres'];
        
        // Faire l'insertion

      $insertCl = $mysqlClient-> prepare('INSERT INTO produits (NomProduit, Description, Prix, Stock, CodeBarres) VALUES (:nomP,:description,:prix,:stock,:codebarres)');
      $insertCl->execute([
        'nomP' => $Nom,
        'description' => $Description,
        'prix' => $Prix,
        'stock' => $Stock,
        'codebarres' => $CodeB
      ]);
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/caisse.css">
    <link rel="stylesheet" href="../css/ModifierProduit.css">
    <title>Ajouter un produit — CaisseShop</title>
</head>
<body>
 
<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="../Images/logo-caisse.png" alt="CaisseShop">
    </div>
    <nav class="sidebar-nav">
        <a href="caisse.php" class="nav-item">
            <span class="nav-icon"></span>
            <span>Caisse</span>
        </a>
        <a href="produits.php" class="nav-item active">
            <span class="nav-icon"></span>
            <span>Produits</span>
        </a>
        <a href="historique.php" class="nav-item">
            <span class="nav-icon"></span>
            <span>Historique</span>
        </a>
    </nav>
    <div class="sidebar-user">
        <div class="user-avatar">👤</div>
        <div class="user-info">
            <span class="user-name">Azaly MAHAVITENY</span>
            <span class="user-email">azalymahaviteny@gmail.com</span>
        </div>
        <a href="../FrontOffice/login.php" class="btn-logout">
            <span class="logout-dot"></span>
            Déconnexion
        </a>
    </div>
</aside>
 
<!-- MAIN -->
<main class="main-content">
 
    <h1 class="page-title">Ajouter un produit</h1>

 <form action="AjouterProduit.php" method="POST">
    <div class="form-card">
 
        <div class="form-field">
            <label for="nom">Nom du produit</label>
            <input type="text" id="nom" name="AjoutNom" >
        </div>
 
        <div class="form-field">
            <label for="description">Description</label>
            <textarea id="description" name="AjoutDescription" rows="4"></textarea>
        </div>
 
 
        <div class="inline-fields">
            <div class="form-field">
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="AjoutPrix"  class="input-teal">
            </div>
            <div class="form-field">
                <label for="stock">Stock</label>
                <input type="text" id="stock" name="AJoutStock"  class="input-teal input-center">
            </div>
            <div class="form-field barcode-field">
                <label for="codebarres">Code-barres</label>
                <div class="barcode-input-wrap">
                    <input type="text" id="codebarres" name="AjoutCodebarres">
                </div>
            </div>
        </div>
 
        <div class="form-actions">
            <button type="button" class="btn-annuler">Annuler</button>
            <button type="submit" class="btn-enregistrer">Enregistrez</button>
        </div>
 
    </div>

 </form>

</main>
 
</body>
</html>