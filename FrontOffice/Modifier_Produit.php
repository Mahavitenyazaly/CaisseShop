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
            <span class="nav-icon">🛒</span>
            <span>Caisse</span>
        </a>
        <a href="produits.php" class="nav-item">
            <span class="nav-icon">📦</span>
            <span>Produits</span>
        </a>
        <a href="historique.php" class="nav-item">
            <span class="nav-icon">🕐</span>
            <span>Historique</span>
        </a>
    </nav>
    <div class="sidebar-user">
        <div class="user-avatar">👤</div>
        <div class="user-info">
            <span class="user-name">Utilisateur</span>
            <span class="user-email">utilisateur@gmail.com</span>
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
 
    <div class="form-card">
 
        <div class="form-field">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="Bananes">
        </div>
 
        <div class="form-field">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">Bottes de bananes fraîches.....</textarea>
        </div>
 
        <div class="form-field">
            <label>Image</label>
            <div class="image-row">
                <img src="../Images/bananes.jpg" alt="Image produit" class="prod-preview">
                <button type="button" class="btn-modifier-img">Modifier l'image</button>
            </div>
        </div>
 
        <div class="inline-fields">
            <div class="form-field">
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" value="2.30 €" class="input-teal">
            </div>
            <div class="form-field">
                <label for="stock">Stock</label>
                <input type="text" id="stock" name="stock" value="40" class="input-teal input-center">
            </div>
            <div class="form-field barcode-field">
                <label for="codebarres">Code-barres</label>
                <div class="barcode-input-wrap">
                    <input type="text" id="codebarres" name="codebarres" value="12546473834994404">
                    <button type="button" class="btn-print">🖨️</button>
                </div>
            </div>
        </div>
 
        <div class="form-actions">
            <button type="button" class="btn-annuler">Annuler</button>
            <button type="submit" class="btn-enregistrer">Enregistrez</button>
        </div>
 
    </div>
 
</main>
 
</body>
</html>