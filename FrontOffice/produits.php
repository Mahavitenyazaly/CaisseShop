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
            <span class="user-name">Utilisateur</span>
            <span class="user-email">utilisateur@gmail.com</span>
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
            <p class="produits-count">8 produit(s) au total</p>
        </div>
        <button class="btn-ajouter" onclick="window.location.href='AjouterProduit.php'">+ Ajouter un produit</button>
    </div>
 
    <!-- Barre de recherche -->
    <div class="produits-search">
        <span class="search-icon">🔍</span>
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
 
                <tr>
                    <td><img src="../Images/pain-complet.jpg" alt="Pain complet" class="prod-img"></td>
                    <td>Pain complet</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">1.50 €</td>
                    <td><span class="stock-badge">50</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/camembert.jpg" alt="Fromage camembert" class="prod-img"></td>
                    <td>Fromage camembert</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">4.50 €</td>
                    <td><span class="stock-badge">30</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/bananes.jpg" alt="Bananes" class="prod-img"></td>
                    <td>Bananes (kg)</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">2.20 €</td>
                    <td><span class="stock-badge">40</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/coffee.webp" alt="Café Moulu" class="prod-img"></td>
                    <td>Café Moulu</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">5.90 €</td>
                    <td><span class="stock-badge">45</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/Poulet.webp" alt="Poulet fermier" class="prod-img"></td>
                    <td>Poulet fermier</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">12.90 €</td>
                    <td><span class="stock-badge">15</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/eau.jpg" alt="Eau minérale" class="prod-img"></td>
                    <td>Eau minérale</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">3.80 €</td>
                    <td><span class="stock-badge">60</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/pâtes.jpg" alt="Pâtes" class="prod-img"></td>
                    <td>Pâtes</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">2.30 €</td>
                    <td><span class="stock-badge">80</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
                <tr>
                    <td><img src="../Images/tomate.webp" alt="Tomates" class="prod-img"></td>
                    <td>Tomates</td>
                    <td><span class="desc-dots">................................</span></td>
                    <td><span class="barcode-badge">4155645644445455</span></td>
                    <td class="price">3.50 €</td>
                    <td><span class="stock-badge">25</span></td>
                    <td class="actions">
                        <button class="btn-edit" onclick="window.location.href='Modifier_Produit.php'">✏️</button>
                        <button class="btn-delete">🗑️</button>
                    </td>
                </tr>
 
            </tbody>
        </table>
    </div>
 
</main>
 
</body>
</html>