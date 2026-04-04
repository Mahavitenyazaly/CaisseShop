<?php
require_once(__DIR__ . '/../BDD/ConnexionBDD.php');

$sqlQuery='SELECT * FROM  produits';
$selectPro=$mysqlClient->prepare($sqlQuery);
$selectPro->execute();

$Produits=$selectPro->fetchAll();
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="getioncaisse.js"></script>
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
    <div class="products-grid">
        <?php for ($i = 0; $i < 9; $i++) {?>
        <div class="product-card">
            <div class="product-img">
            </div>
            <div class="product-info">
                <p class="product-name"> <?php echo $Produits[$i]['NomProduit']?></p>
                <p class="product-price"><?php echo $Produits[$i]['Prix']?> €</p>
                <span class="product-stock">Stock : <?php echo $Produits[$i]['Stock']?></span>
            </div>
            <button class="btn-plus">+</button>
            
        </div>
        <?php }?>
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
        <button class="btn-pay" id="btn-payer" >Payer</button>
    </div>

</aside>



</body>

<script>
    const produits = <?php echo json_encode($Produits); ?>;

    let caisse = [];

    function afficherCaisse() {
        const ticketList = document.getElementById("panier-vide");
        ticketList.innerHTML = '';
        let total = 0;
        for (let index = 0; index < caisse.length; index++) {

            total += (caisse[index].Prix * caisse[index].Quantite);

            ticketList.innerHTML += `
            <div class="">
            <div>
              <strong>${caisse[index].NomProduit}</strong><br>
              <small>${caisse[index].Prix} € / unité</small>
            </div>

            <div class="">
              <button type="button" onclick="diminuerQuantite(${caisse[index].Id})">-</button>
              <span>${caisse[index].Quantite}</span>
              <button type="button" onclick="augmenterQuantite(${caisse[index].Id})">+</button>
              <button type="button" class="btn-remove" onclick="supprimerProduit(${caisse[index].Id})">X</button>


            <input type="hidden" name="produits[${index}][id]" value="${caisse[index].id}">
            <input type="hidden" name="produits[${index}][quantite]" value="${caisse[index].Quantite}">
            </div>
          </div>
        `;
        }

        const totalCaisse = document.getElementById("ticketTotal");
        totalCaisse.innerHTML = Math.trunc(total * 100) / 100 + " €";

    }

</script>
</html>