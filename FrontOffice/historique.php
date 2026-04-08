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
                    <th>Date</th>
                    <th>Total</th>
                    <th>Articles</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Azaly</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Oumaïr</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Alane</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Abdou-Rahamane</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Djanfar</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Amine</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Arham</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Nassur</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Azaly</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
                <tr>
                    <td>12/03/2026</td>
                    <td class="histo-total">5€</td>
                    <td class="histo-articles">4</td>
                    <td>Azaly</td>
                    <td><button class="btn-apercu">👁 Aperçu</button></td>
                </tr>
 
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