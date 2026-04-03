<?php
require_once(__DIR__ . '/../BDD/ConnexionBDD.php');


$sqlQuery='SELECT * FROM  produits';
$selectPro=$mysqlClient->prepare($sqlQuery);
$selectPro->execute();
$Produits=$selectPro->fetchAll();

$stmt = $mysqlClient->prepare("SELECT COUNT(*) AS total FROM produits");
$stmt->execute();
$resultat = $stmt->fetch();

$totalProduits = $resultat['total'];



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/produits.css">
    <link rel="stylesheet" href="../css/caisse.css">
    <title>Caisse — Produits</title>
</head>
<body>
 
<!-- ── SIDEBAR ── -->
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

<!-- ── MAIN CONTENT ── -->
<main class="main-content">
 
    <div class="produits-header">
        <div>
            <h1 class="page-title">Produits</h1>
            <p class="produits-count"><?php echo $totalProduits; ?> produit(s) au total</p>
        </div>
        <button class="btn-ajouter" onclick="window.location.href='AjouterProduit.php'">+ Ajouter un produit</button>
    </div>
 
    <!-- Barre de recherche -->
    <div class="produits-search">
        <span class="search-icon"></span>
        <input type="text" placeholder="Recherchez">
    </div>
 
    <!-- Tableau -->
    <div class="table-wrapper">
        <table class="produits-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Code-barres</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < 12; $i++) {?>
                <tr>
                    <td><img src="../Images/pain-complet.jpg" alt="Pain complet" class="prod-img"></td>
                    <td><?php echo $Produits[$i]['NomProduit']?></td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge"><?php echo $Produits[$i]['CodeBarres']?></span></td>
                    <td class="price"><?php echo $Produits[$i]['Prix']?> €</td>
                    <td><span class="stock-badge"><?php echo $Produits[$i]['Stock']?></span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
 
</main>
 
</body>
</html>