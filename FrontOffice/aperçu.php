<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/caisse.css">
    <link rel="stylesheet" href="../css/aperçuvente.css">
    <title>Aperçu vente — CaisseShop</title>
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
        <a href="produits.php" class="nav-item">
            <span class="nav-icon"></span>
            <span>Produits</span>
        </a>
        <a href="historique.php" class="nav-item active">
            <span class="nav-icon"></span>
            <span>Historique</span>
        </a>
    </nav>
    <div class="sidebar-user">
        <div class="user-avatar"></div>
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
 
    <div class="apercu-header">
        <a href="historique.php" class="btn-retour">← Retour</a>
        <h1 class="page-title">Aperçu de la vente</h1>
    </div>
 
    <div class="apercu-card">
 
        <!-- Infos vente -->
        <div class="vente-meta">
            <div class="meta-item">
                <span class="meta-icon"></span>
                <div>
                    <span class="meta-label">Date et heure</span>
                    <span class="meta-value">12/03/2026 — 14:32</span>
                </div>
            </div>
            <div class="meta-item">
                <span class="meta-icon"></span>
                <div>
                    <span class="meta-label">Caissier</span>
                    <span class="meta-value">Azaly</span>
                </div>
            </div>
            <div class="meta-item">
                <span class="meta-icon"></span>
                <div>
                    <span class="meta-label">Référence</span>
                    <span class="meta-value">#VTE-00042</span>
                </div>
            </div>
        </div>
 
        <div class="separator"></div>
 
        <!-- Tableau articles -->
        <table class="articles-table">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="article-name">
                        <img src="../Images/pain-complet.jpg" alt="Pain complet" class="art-img">
                        Pain complet
                    </td>
                    <td>1.50 €</td>
                    <td class="qty">2</td>
                    <td class="subtotal">3.00 €</td>
                </tr>
                <tr>
                    <td class="article-name">
                        <img src="../Images/lait-de-vache.jpg" alt="Lait entier" class="art-img">
                        Lait entier 1L
                    </td>
                    <td>1.20 €</td>
                    <td class="qty">1</td>
                    <td class="subtotal">1.20 €</td>
                </tr>
                <tr>
                    <td class="article-name">
                        <img src="../Images/bananes.jpg" alt="Bananes" class="art-img">
                        Bananes (kg)
                    </td>
                    <td>2.20 €</td>
                    <td class="qty">1</td>
                    <td class="subtotal">2.20 €</td>
                </tr>
                <tr>
                    <td class="article-name">
                        <img src="../Images/tomate.webp" alt="Tomates" class="art-img">
                        Tomates (kg)
                    </td>
                    <td>3.50 €</td>
                    <td class="qty">2</td>
                    <td class="subtotal">7.00 €</td>
                </tr>
            </tbody>
        </table>
 
        <div class="separator"></div>
 
        <!-- Total -->
        <div class="total-row">
            <span class="total-label">Total de la vente</span>
            <span class="total-value">13.40 €</span>
        </div>
 
        <!-- Bouton imprimer -->
        <div class="apercu-actions">
            <button class="btn-imprimer" onclick="window.print()"> Imprimer le reçu</button>
        </div>
 
    </div>
 
</main>
 
</body>
</html>