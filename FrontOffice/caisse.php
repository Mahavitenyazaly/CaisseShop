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
            <span class="user-name">Utilisateur</span>
            <span class="user-email">utilisateur@gmail.com</span>
        </div>
        <a href="../FrontOffice/login.php" class="btn-logout">
            <span class="logout-dot"></span>
            Déconnexion
        </a>
    </div>
</aside>
 
<!-- MAIN CONTENT -->
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
            <button class="btn-plus" onclick="ajouterAuPanier(1, 'Pain complet', 1.50)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(2, 'Lait entier 1L', 1.20)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(3, 'Tomates (kg)', 3.50)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(4, 'Pâtes 500g', 2.30)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(5, 'Poulet fermier', 12.90)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(6, 'Eau minérale 6x1.5L', 3.80)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(7, 'Fromage camembert', 4.50)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(8, 'Bananes (kg)', 2.20)">+</button>
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
            <button class="btn-plus" onclick="ajouterAuPanier(9, 'Café Moulu 250g', 5.90)">+</button>
        </div>
 
    </div>
</main>
 
<!-- PANIER -->
<aside class="cart">
 
    <div class="cart-header">
        <h2>Panier</h2>
        <p class="cart-count" id="panier-count">0 article(s)</p>
    </div>
 
    <div class="cart-empty" id="panier-vide">
        <div class="cart-icon">🛒</div>
        <p>Panier vide</p>
    </div>
 
    <div id="panier-articles" style="display:none; flex:1; overflow-y:auto; padding: 0 .5rem;"></div>
 
    <div class="cart-footer">
        <div class="cart-total">
            <span>Total</span>
            <span class="total-amount" id="panier-total">0.00 €</span>
        </div>
        <button class="btn-pay" id="btn-payer" disabled>Payer</button>
    </div>
 
</aside>
 
<script>
// -------------------------------------------------------
// Le tableau panier : stocke les produits ajoutés
// Chaque produit = { id, nom, prix, quantite }
// -------------------------------------------------------
let panier = [];
 
// -------------------------------------------------------
// ajouterAuPanier(id, nom, prix)
// Appelée par le bouton + de chaque carte produit
// Si le produit est déjà dans le panier → quantite + 1
// Sinon → on l'ajoute avec quantite = 1
// -------------------------------------------------------
function ajouterAuPanier(id, nom, prix) {
    let produitExistant = panier.find(function(item) {
        return item.id === id;
    });
 
    if (produitExistant) {
        produitExistant.quantite = produitExistant.quantite + 1;
    } else {
        panier.push({ id: id, nom: nom, prix: prix, quantite: 1 });
    }
 
    afficherPanier();
}
 
// -------------------------------------------------------
// afficherPanier()
// Reconstruit l'affichage du panier à chaque modification
// -------------------------------------------------------
function afficherPanier() {
    let zoneArticles = document.getElementById('panier-articles');
    let zoneTotal    = document.getElementById('panier-total');
    let zoneCount    = document.getElementById('panier-count');
    let btnPayer     = document.getElementById('btn-payer');
    let zoneVide     = document.getElementById('panier-vide');
 
    if (panier.length === 0) {
        zoneVide.style.display     = 'flex';
        zoneArticles.style.display = 'none';
        btnPayer.disabled          = true;
        zoneCount.textContent      = '0 article(s)';
        zoneTotal.textContent      = '0.00 €';
        return;
    }
 
    zoneVide.style.display     = 'none';
    zoneArticles.style.display = 'block';
    btnPayer.disabled          = false;
 
    // Calcul du total et nombre d'articles
    let total = panier.reduce(function(somme, item) {
        return somme + (item.prix * item.quantite);
    }, 0);
 
    let nbArticles = panier.reduce(function(somme, item) {
        return somme + item.quantite;
    }, 0);
 
    // Construction du HTML de chaque ligne du panier
    let html = '';
    panier.forEach(function(item) {
        let sousTotal = item.prix * item.quantite;
        html += '<div class="panier-ligne">';
        html +=   '<div class="panier-ligne-info">';
        html +=     '<span class="panier-ligne-nom">' + item.nom + '</span>';
        html +=     '<span class="panier-ligne-prix">' + item.prix.toFixed(2) + ' €</span>';
        html +=   '</div>';
        html +=   '<div class="panier-ligne-droite">';
        html +=     '<div class="panier-ligne-btns">';
        html +=       '<button class="panier-btn-qte" onclick="modifierQuantite(' + item.id + ', -1)">−</button>';
        html +=       '<span class="panier-qte">' + item.quantite + '</span>';
        html +=       '<button class="panier-btn-qte" onclick="modifierQuantite(' + item.id + ', +1)">+</button>';
        html +=     '</div>';
        html +=     '<span class="panier-ligne-sous-total">' + sousTotal.toFixed(2) + ' €</span>';
        html +=   '</div>';
        html += '</div>';
    });
 
    zoneArticles.innerHTML = html;
    zoneCount.textContent  = nbArticles + ' article(s)';
    zoneTotal.textContent  = total.toFixed(2) + ' €';
}
 
// -------------------------------------------------------
// modifierQuantite(id, changement)
// Appelée par les boutons − et + dans le panier
// changement = +1 ou -1
// Si quantite atteint 0 → supprime le produit du tableau
// -------------------------------------------------------
function modifierQuantite(id, changement) {
    let produit = panier.find(function(item) {
        return item.id === id;
    });
 
    if (produit) {
        produit.quantite = produit.quantite + changement;
        if (produit.quantite <= 0) {
            panier = panier.filter(function(item) {
                return item.id !== id;
            });
        }
    }
 
    afficherPanier();
}
</script>
 
</body>
</html>