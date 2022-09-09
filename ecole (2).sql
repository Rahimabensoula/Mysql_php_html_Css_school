-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 mars 2021 à 19:05
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_cours`
--

CREATE TABLE `tbl_cours` (
  `code_cours` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `duree` varchar(5) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_cours`
--

INSERT INTO `tbl_cours` (`code_cours`, `titre`, `duree`) VALUES
('12345', 'COURS B', '12345'),
('5678', 'cours E', '12345'),
('91011', 'COURS B12345', '12345'),
('aihiahihaihaihaiha', 'Programmaiujaiuaiuaation Internet PHP', '11345'),
('C7RM-MS7J-PG84N', 'Développement Web HTML', 'hrs11'),
('D1B0-SWAB-T75KT', 'Projet Intégration 3 - PP3F', '30hrs'),
('H8NP-3NCP-5QPGG', 'Traitements de données PRIF', '45hrs'),
('V2V3-N5H7-7M55M', 'Programmation Internet PHP', '60hrs'),
('WCHN-CD5Z-3R2NV', 'Projet Intégration 2 PP2F', '50hrs'),
('Z2B4-SWBB-D94JV', 'cours  c', '40hrs');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_etudiant`
--

CREATE TABLE `tbl_etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `no_telephone` varchar(25) NOT NULL,
  `courriel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_etudiant`
--

INSERT INTO `tbl_etudiant` (`id_etudiant`, `username`, `password`, `nom`, `prenom`, `no_telephone`, `courriel`) VALUES
(4, 'rbensoul', 'souchi', 'bensoula', 'rahima', '(514)567-9499', 'rahima@gmail.com'),
(5, 'rrrrrmagister', '1234', 'bensoula', 'fetta', '(514)567-9499', 'mago@gmail.com'),
(6, 'floli', '4568', 'lola', 'flora', '(514)555-5555', 'lola@hotmail.com'),
(7, 'fglipoiu', '5678', 'fred', 'pinou', '(514)555-5555', 'fglipo@outlook.fr'),
(8, 'hgloiu', '65555', 'hugo', 'bernard', '(514)555-5565', 'fglpo@outlook.fr'),
(9, 'ania', 'souchi', 'bensoula', 'rahima', '(514)-567-9129', 'rahimabensoula888888@gmail.com'),
(13, 'lalalalaa', 'signum', 'bensoula', 'rahima', '(514)-567-9129', 'rahimabensoula8@gmail.com'),
(16, 'magisterjgugu', 'signum', '1', 'rahima', '(514)-567-9499', 'rahimabensoula@yyygmail.com'),
(17, 'ania12345', 'souchi', 'bensoula', 'rahima', '(514)-567-9129', 'rahimabettttttnsoula@gmail.com'),
(18, 'ania1234', 'souchi', 'bensoula', 'rahima', '514658788888', 'rahimabensoula@gmail.com56565'),
(19, 's', 's', 'bensoula', 's', 'sssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_inscription`
--

CREATE TABLE `tbl_inscription` (
  `id_inscription` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `code_cours` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_inscription`
--

INSERT INTO `tbl_inscription` (`id_inscription`, `id_etudiant`, `code_cours`) VALUES
(36, 4, 'C7RM-MS7J-PG84N'),
(37, 9, 'H8NP-3NCP-5QPGG'),
(38, 13, 'V2V3-N5H7-7M55M'),
(39, 4, 'WCHN-CD5Z-3R2NV'),
(40, 9, 'D1B0-SWAB-T75KT'),
(41, 13, 'Z2B4-SWBB-D94JV'),
(42, 4, 'aihiahihaihaiha'),
(43, 9, '12345'),
(44, 13, '5678'),
(45, 5, '91011');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_cours`
--
ALTER TABLE `tbl_cours`
  ADD PRIMARY KEY (`code_cours`);

--
-- Index pour la table `tbl_etudiant`
--
ALTER TABLE `tbl_etudiant`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `courri` (`courriel`);

--
-- Index pour la table `tbl_inscription`
--
ALTER TABLE `tbl_inscription`
  ADD PRIMARY KEY (`id_inscription`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_etudiant`
--
ALTER TABLE `tbl_etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tbl_inscription`
--
ALTER TABLE `tbl_inscription`
  MODIFY `id_inscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
