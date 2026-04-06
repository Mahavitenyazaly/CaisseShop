<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/caisse.css">
    <link rel="stylesheet" href="../css/ModifierProduit.css">
    <title>Modifier un produit — CaisseShop</title>
</head>
<body>
 
<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="../Images/logo-caisse.png" alt="CaisseShop">
    </div>
    <nav class="sidebar-nav">
        <a href="caisse.php" class="nav-item active">
            <span class="nav-icon"></span>
            <span>Caisse</span>
        </a>
        <a href="produits.php" class="nav-item">
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
 
    <h1 class="page-title">Modifier un produit</h1>
 <form action="produits.php" method="POST">
    <div class="form-card">
 
        <div class="form-field">
            <input type="hidden" name="IdProduitUpdated" value="<?php echo $_POST['update_id_produits'] ?>">
            <label for="nom">Nom Produit</label>
            <input type="text" name="NomP_updated" value="<?php echo $_POST['update_NomProduit']?>">
        </div>
 
        <div class="form-field">
            <label for="description">Description</label>
            <textarea id="description" name="Description_Updated" rows="4"> <?php echo $_POST['update_Desc']?></textarea>
        </div>
 
        <div class="inline-fields">
            <div class="form-field">
                <label for="prix">Prix</label>
                <input type="text" name="PrixUpdated" class="input-teal" value="<?php echo $_POST['update_Prix']?>">
            </div>
            <div class="form-field">
                <label for="stock">Stock</label>
                <input type="text" name="StockUpdated" class="input-teal input-center" value="<?php echo $_POST['update_Stock']?>">
            </div>
            <div class="form-field barcode-field">
                <label for="codebarres">Code-barres</label>
                <div class="barcode-input-wrap">
                    <input type="text" name="CodebarresUpdated" value="<?php echo $_POST['update_CodeB']?>">
                </div>
            </div>
        </div>
 
        <div class="form-actions">
            <button type="button" class="btn-annuler">Annuler</button>
            <button type="submit" class="btn-enregistrer">Enregistrez</button>
        </div>
    </form>
</div>
 
</main>
 
</body>
</html>