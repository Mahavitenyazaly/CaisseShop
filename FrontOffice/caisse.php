<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/caisse.css">
    <title>Caisse — Pointe de vente</title>
</head>
<body>
 
<!-- ── SIDEBAR ── -->
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
 
    <div class="main-header">
        <h1 class="page-title">Pointe de vente</h1>
 
        <div class="search-bar">
            <span class="search-icon">🔍</span>
            <input type="text" placeholder="Recherche par nom ou code-barre...">
            <button class="btn-filter">Filtrer</button>
            <input type="text" class="barcode-input" placeholder="Scannez ou saisissez le code-barre...">
            <button class="btn-add">Ajouter</button>
        </div>
    </div>
 
    <!-- Grille produits -->
    <div class="products-grid">
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/pain-complet.jpg" alt="Pain complet">
            </div>
            <div class="product-info">
                <p class="product-name">Pain complet</p>
                <p class="product-price">1.50 €</p>
                <span class="product-stock">Stock : 60</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/lait-de-vache.jpg" alt="Lait entier 1L">
            </div>
            <div class="product-info">
                <p class="product-name">Lait entier 1L</p>
                <p class="product-price">1.20 €</p>
                <span class="product-stock">Stock : 100</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/tomate.webp" alt="Tomates (kg)">
            </div>
            <div class="product-info">
                <p class="product-name">Tomates (kg)</p>
                <p class="product-price price-teal">3.50 €</p>
                <span class="product-stock">Stock : 25</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/pâtes.jpg" alt="Pâtes 500g">
            </div>
            <div class="product-info">
                <p class="product-name">Pâtes 500g</p>
                <p class="product-price">2.30 €</p>
                <span class="product-stock">Stock : 80</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/Poulet.webp" alt="Poulet fermier">
            </div>
            <div class="product-info">
                <p class="product-name">Poulet fermier</p>
                <p class="product-price price-teal">12.90 €</p>
                <span class="product-stock">Stock : 15</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/eau.jpg" alt="Eau minérale 6x1.5L">
            </div>
            <div class="product-info">
                <p class="product-name">Eau minérale 6x1.5L</p>
                <p class="product-price">3.80 €</p>
                <span class="product-stock">Stock : 60</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/camembert.jpg" alt="Fromage camembert">
            </div>
            <div class="product-info">
                <p class="product-name">Fromage camembert</p>
                <p class="product-price">4.50 €</p>
                <span class="product-stock">Stock : 40</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/bananes.jpg" alt="Bananes (kg)">
            </div>
            <div class="product-info">
                <p class="product-name">Bananes (kg)</p>
                <p class="product-price price-teal">2.20 €</p>
                <span class="product-stock">Stock : 40</span>
            </div>
        </div>
 
        <div class="product-card">
            <div class="product-img">
                <img src="../Images/coffee.webp" alt="Café Moulu 250g">
            </div>
            <div class="product-info">
                <p class="product-name">Café Moulu 250g</p>
                <p class="product-price">5.90 €</p>
                <span class="product-stock">Stock : 48</span>
            </div>
        </div>
 
    </div>
</main>
 
<!-- ── PANIER ── -->
<aside class="cart">
 
    <div class="cart-header">
        <h2>Panier</h2>
        <p class="cart-count">0 article(s)</p>
    </div>
 
    <div class="cart-empty">
        <div class="cart-icon">🛒</div>
        <p>Panier vide</p>
    </div>
 
    <div class="cart-footer">
        <div class="cart-total">
            <span>Total</span>
            <span class="total-amount">0.00 €</span>
        </div>
        <button class="btn-pay">Payer</button>
    </div>
 
</aside>
 
</body>
</html>