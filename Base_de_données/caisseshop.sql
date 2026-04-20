-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 avr. 2026 à 06:21
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `caisseshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id` int(11) NOT NULL,
  `NomProduit` varchar(25) NOT NULL,
  `Description` text NOT NULL,
  `Prix` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `CodeBarres` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id`, `NomProduit`, `Description`, `Prix`, `Stock`, `CodeBarres`) VALUES
(1, 'Caviar Beluga', 'Caviar rare de très haute qualité', 3500.99, 10, '100001'),
(2, 'Truffe noire', 'Truffe fraîche haut de gamme', 1200, 15, '100002'),
(3, 'Champagne Dom Pérignon', 'Champagne millésimé de prestige', 450, 20, '100003'),
(4, 'Chocolat artisanal luxe', 'Chocolat fin avec cacao rare', 120, 30, '100004'),
(6, 'Vin Château Margaux', 'Grand cru classé exceptionnel', 1500, 12, '100006'),
(7, 'Whisky Macallan 18 ans', 'Whisky écossais haut de gamme', 600, 18, '100007'),
(12, 'Café Kopi Luwak', 'Café parmi les plus chers au monde', 300, 10, '100012'),
(15, 'Boeuf Wagyu', 'Viande japonaise extrêmement tendre', 400, 8, '100015'),
(18, 'Safran pur', 'Épice la plus chère au monde', 200, 15, '100018'),
(20, 'Liqueur premium', 'Liqueur artisanale de luxe', 120, 18, '100020'),
(22, 'Bonbon', '  hdgfdfghjdfjg', 30, 55, '10001420');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id`, `Nom`, `Prenom`, `Mail`, `MotDePasse`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@email.com', 'mdp1234'),
(2, 'Martin', 'Sophie', 'sophie.martin@email.com', 'password1'),
(3, 'Bernard', 'Lucas', 'lucas.bernard@email.com', 'azerty123'),
(4, 'Petit', 'Emma', 'emma.petit@email.com', 'emma2024'),
(5, 'Robert', 'Hugo', 'hugo.robert@email.com', 'hugoPass'),
(6, 'Richard', 'Chloe', 'chloe.richard@email.com', 'chloe123'),
(7, 'Durand', 'Nathan', 'nathan.durand@email.com', 'nathan456'),
(8, 'Moreau', 'Lea', 'lea.moreau@email.com', 'leaPass'),
(9, 'Simon', 'Enzo', 'enzo.simon@email.com', 'enzo789'),
(10, 'Laurent', 'Camille', 'camille.laurent@email.com', 'camille321');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `Id` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Total` float NOT NULL,
  `NbArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`Id`, `IdUtilisateur`, `Date`, `Total`, `NbArticle`) VALUES
(1, 1, '2026-04-11 08:33:32', 600, 2),
(2, 1, '2026-04-11 08:36:00', 30, 2),
(3, 1, '2026-04-11 08:36:25', 1500, 2),
(4, 1, '2026-04-11 08:42:28', 30, 2),
(5, 1, '2026-04-11 08:43:05', 800, 2),
(6, 1, '2026-04-11 08:43:26', 920, 3),
(7, 1, '2026-04-11 08:43:55', 2100, 2),
(8, 1, '2026-04-11 09:03:58', 1650, 3),
(9, 1, '2026-04-11 09:04:24', 1650, 3),
(10, 1, '2026-04-11 09:04:36', 1650, 3),
(11, 1, '2026-04-11 09:04:53', 1650, 3),
(12, 1, '2026-04-11 09:26:36', 12160, 3),
(13, 1, '2026-04-11 09:28:50', 27850, 3),
(14, 1, '2026-04-11 10:39:58', 2000, 3),
(15, 1, '2026-04-11 10:42:09', 2000, 3),
(16, 5, '2026-04-15 06:35:37', 600, 2),
(17, 1, '2026-04-15 06:53:07', 800, 2),
(18, 3, '2026-04-15 07:47:59', 120, 1);

-- --------------------------------------------------------

--
-- Structure de la table `venteproduits`
--

CREATE TABLE `venteproduits` (
  `Id` int(11) NOT NULL,
  `IdVente` int(11) NOT NULL,
  `IdProduits` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `venteproduits`
--

INSERT INTO `venteproduits` (`Id`, `IdVente`, `IdProduits`, `Quantite`) VALUES
(1, 0, 1, 4),
(2, 1, 1, 4),
(3, 1, 1, 1),
(4, 12, 1, 2),
(5, 12, 4, 3),
(6, 12, 2, 4),
(7, 13, 1, 5),
(8, 13, 2, 6),
(9, 13, 3, 7),
(10, 14, 6, 1),
(11, 14, 18, 1),
(12, 14, 12, 1),
(13, 15, 6, 1),
(14, 15, 18, 1),
(15, 15, 12, 1),
(16, 16, 18, 1),
(17, 16, 15, 1),
(18, 17, 18, 1),
(19, 17, 7, 1),
(20, 18, 4, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `venteproduits`
--
ALTER TABLE `venteproduits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
