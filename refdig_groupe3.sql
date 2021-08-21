-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 août 2021 à 14:23
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `refdig_groupe3`
--

-- --------------------------------------------------------

--
-- Structure de la table `prairie`
--

CREATE TABLE `prairie` (
  `id` int(5) NOT NULL,
  `nom_etudiant` varchar(255) NOT NULL,
  `prenom_etudiant` varchar(255) NOT NULL,
  `numero_aej` varchar(50) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prairie`
--

INSERT INTO `prairie` (`id`, `nom_etudiant`, `prenom_etudiant`, `numero_aej`, `Telephone`, `email`, `fonction`, `date`) VALUES
(1, 'Gatsby', 'Gatsby', '012547864', '0101010101', 'ad@gmail.com', 'dev web', '2021-08-18 12:11:09'),
(9, 'ricahrd', 'Apalo', '1', '06060607', 'hh@gmail.com', 'Data IA', '2021-08-18 12:13:02'),
(10, 'ricahrd', 'Apalo', '1', '07080807', 'hh@gmail.com', 'Data IA', '2021-08-18 12:13:20'),
(48, 'Alain', 'rire', '4', '22225555', 'apa@gmail.com', 'Data IA', '2021-08-20 15:25:27'),
(51, '&lt;h1&gt;bonjoutr&lt;/h1&gt;', 'test', '123545889', '2253352a', 'test@gmail.com', 'Referent digital', '2021-08-20 17:11:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `prairie`
--
ALTER TABLE `prairie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `prairie`
--
ALTER TABLE `prairie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
