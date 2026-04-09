<?php
require_once(__DIR__ . '/../BDD/ConnexionBDD.php');

$sqlQuery='SELECT * FROM  produits';
$params = [];

if(!empty($_GET['Search'])) {
    $sqlQuery .= " WHERE NomProduit LIKE :search 
    OR Description LIKE :search
    OR CodeBarres LIke :search";
    
    $params['search'] = "%" . $_GET['Search'] . "%";
}
$selectPro=$mysqlClient->prepare($sqlQuery);
$selectPro->execute($params);
$Produits=$selectPro->fetchAll();
?>





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
            <span class="user-name">Azaly MAHAVITENY</span>
            <span class="user-email">azalymahaviteny@gmail.com</span>
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
            <span class="search-icon"></span>
            <input type="text" placeholder="Recherche par nom ou code-barre...">
            <button class="btn-filter">Filtrer</button>
            <input type="text" class="barcode-input" placeholder="Scannez ou saisissez le code-barre...">
            <button class="btn-add">Ajouter</button>
        </div>
    </div>

    <!-- Grille produits -->
    <div class="products-grid" id="productGrid">
   
    </div>
</main>

<!-- PANIER -->
 <form action="caisse.php" method="POST"></form>
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
        <button class="btn-pay" id="btn-payer" >Payer</button>
    </div>
</aside>
</form>



</body>

<script>

    const produits = <?php echo json_encode($Produits); ?>;

    let caisse = [];

    function afficherCaisse() {
    const ticketList = document.getElementById("panier-articles");
    const panierVide = document.getElementById("panier-vide");
    const panierCount = document.getElementById("panier-count");
    const totalCaisse = document.getElementById("panier-total");

    ticketList.innerHTML = '';
    let total = 0;

    // Affiche ou cache le message "panier vide"
    if (caisse.length === 0) {
        panierVide.style.display = 'flex';
        ticketList.style.display = 'none';
    } else {
        panierVide.style.display = 'none';
        ticketList.style.display = 'block';
    }

    for (let i = 0; i < caisse.length; i++) {
        total += (caisse[i].Prix * caisse[i].Quantite);

        ticketList.innerHTML += `
            <div class="panier-ligne">
                <div class="panier-ligne-info">
                    <span class="panier-ligne-nom">${caisse[i].NomProduit}</span>
                    <span class="panier-ligne-prix">${caisse[i].Prix} € / unité</span>
                </div>
                <div class="panier-ligne-droite">
                    <div class="panier-ligne-btns">
                        <button type="button" class="panier-btn-qte" onclick="diminuerQuantite(${caisse[i].Id})">−</button>
                        <span class="panier-qte">${caisse[i].Quantite}</span>
                        <button type="button" class="panier-btn-qte" onclick="augmenterQuantite(${caisse[i].Id})">+</button>
                    </div>
                    <span class="panier-ligne-sous-total">${Math.trunc(caisse[i].Prix * caisse[i].Quantite * 100) / 100} €</span>
                    <button type="button" class="panier-btn-suppr" onclick="supprimerProduit(${caisse[i].Id})">✕</button>
                </div>
                <input type="hidden" name="produits[${i}][id]" value="${caisse[i].Id}">
                <input type="hidden" name="produits[${i}][quantite]" value="${caisse[i].Quantite}">
            </div>
        `;
    }

    // Met à jour le total et le compteur d'articles
    totalCaisse.innerHTML = Math.trunc(total * 100) / 100 + " €";
    panierCount.innerHTML = caisse.length + " article(s)";
}

    function ajouterProduitDansCaisse(id) {
        let newProduct = produits.find(p => p.Id == id);
        let productExist = caisse.find(p => p.Id == id);

        if (productExist == null)
            caisse.push({
                Id: newProduct.Id,
                NomProduit: newProduct.NomProduit,
                Prix: newProduct.Prix,
                Quantite: 1
            })
        else {
            productExist.Quantite++;
        }
        afficherCaisse();
    }

    function augmenterQuantite(id) {
        let produitDansCaisse = caisse.find(p => p.Id == id);

        produitDansCaisse.Quantite = produitDansCaisse.Quantite + 1;


        afficherCaisse();

    }


    function supprimerProduit(id) {
        caisse = caisse.filter(p => p.Id != id);
        afficherCaisse();

    }


    function diminuerQuantite(id) {
        let produitDansCaisse = caisse.find(p => p.Id == id);

        produitDansCaisse.Quantite = produitDansCaisse.Quantite - 1;
        if (produitDansCaisse.Quantite <= 0) {
            caisse = caisse.filter(p => p.Id != id);
        }

        afficherCaisse();
    }

    function afficherProduits() {
        let productList = document.getElementById("productGrid");
        productList.innerHTML = "";

        for (let i = 0; i < produits.length; i++) {
            productList.innerHTML = productList.innerHTML + `
          <div class="product-card">
                <div class="product-info">
                    <p class="product-name">${produits[i].NomProduit}</p>
                    <p class="product-price">${Number(produits[i].Prix)} €</p>
                    <span class="product-stock">Stock : ${produits[i].Stock}</span>
                </div>
                <button class="btn-plus" type="button" onclick="ajouterProduitDansCaisse(${produits[i].Id})">+</button>
            </div>
        `;
    }
}

    afficherProduits();


    function convertirScan(code){
        return code.replaceAll("Shift", "") 
        .replaceAll("à", "0")
        .replaceAll("&", "1")
        .replaceAll("é", "2")
        .replaceAll("\"", "3")
        .replaceAll("'", "4")
        .replaceAll("(", "5")
        .replaceAll("-", "6")
        .replaceAll("è", "7")
        .replaceAll("_", "8")
        .replaceAll("ç", "9");
    }


</script>
</html>