-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 03 Mars 2014 à 16:09
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bonbons`
--
create database bonbons ;
use bonbons ;

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=23 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '1.48', 'Images/bananes.jpg'),
(2, 'chamallow', '2.58', 'Images/chamallow.jpg'),
(3, 'coca', '1.38', 'Images/coca.jpg'),
(4, 'colorado', '2.18', 'Images/colorado.jpg'),
(5, 'fruikipik', '3.55', 'Images/fruikipik.jpg'),
(6, 'dragolo', '2.48', 'Images/dragolo.jpg'),
(7, 'world', '2.45', 'Images/world.jpg'),
(8, 'happy', '3.48', 'Images/happy.jpg'),
(9, 'melange', '2.48', 'Images/melange.jpg'),
(10, 'miami', '3.48', 'Images/miami.jpg'),
(11, 'nounours', '4.18', 'Images/nounours.jpg'),
(12, 'oeufs', '2.20', 'Images/oeufs.jpg'),
(13, 'rainbow', '2.52', 'Images/rainbow.jpg'),
(14, 'shtroumpf', '2.16', 'Images/shtroumpf.jpg'),
(15, 'frites', '2.55', 'Images/frites.jpg'),
(16, 'reglisses', '5.13', 'Images/reglisse.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
