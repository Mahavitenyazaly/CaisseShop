<?php 
session_start();
// Verifier si la session existe

if (!isset($_SESSION['USER_CONNEXION'])) {
    header('Location: login.php');
    exit;
}
require_once(__DIR__ . '/../BDD/ConnexionBDD.php');

$sqlQuery = 
'SELECT utilisateurs.Nom, 
utilisateurs.Prenom, 
Vente.Date,
Vente.Total,
Vente.NbArticle
FROM utilisateurs
JOIN vente on vente.IdUtilisateur = utilisateurs.Id;';
$Selectuser=$mysqlClient->prepare($sqlQuery);
$Selectuser->execute();
$Vente=$Selectuser->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/caisse.css">
    <link rel="stylesheet" href="../css/historique.css">
    <title>Caisse — Historique</title>
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
 
    <h1 class="page-title">Historiques</h1>
 
    <!-- Filtres -->
<div class="histo-filters">

    <div class="histo-seg">
        <button class="seg-btn active" onclick="setMode('aujourd_hui', this)">Aujourd'hui</button>
        <button class="seg-btn" onclick="setMode('semaine', this)">Cette semaine</button>
        <button class="seg-btn" onclick="setMode('perso', this)">Période personnalisée</button>
    </div>

    <div class="periode-wrap" id="periode-wrap">
        <div class="date-range">
            <span class="date-label">Du</span>
            <input type="date" id="date-debut" name="date_debut">
            <div class="date-sep"></div>
            <span class="date-label">au</span>
            <input type="date" id="date-fin" name="date_fin">
        </div>
    </div>

    <button class="btn-filtrer">Filtrer</button>

</div>
 
    <!-- Tableau -->
    <div class="table-wrapper">
        <table class="histo-table">
            <thead>
                <tr>
                    <th>Vente</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Articles</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
 <?php for ($i = 0; $i < count($Vente); $i++) {?>
                <tr>
                    <td> Vente #<?php echo $i+1?></td>
                    <td><?php echo $Vente[$i]['Date']?></td>
                    <td class="histo-total"><?php echo $Vente[$i]['Total']?></td>
                    <td class="histo-articles"><?php echo $Vente[$i]['NbArticle']?></td>
                    <td><?php echo $Vente[$i]['Prenom'].' '.$Vente[$i]['Nom']?></td>
                    <td><a href="aperçu.php" class="btn-apercu">👁 Aperçu</a></td>
                </tr>
            <?php }?>
 
            </tbody>
        </table>
    </div>
 
</main>
 
</body>
<script>
    function setMode(mode, btn) {
    document.querySelectorAll('.seg-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const pw = document.getElementById('periode-wrap');
    pw.classList.toggle('visible', mode === 'perso');
}
</script>
</html>