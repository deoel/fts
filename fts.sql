-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 juil. 2020 à 07:53
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `fts`
--
CREATE DATABASE IF NOT EXISTS `fts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fts`;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` varchar(255) NOT NULL,
  `categorie` enum('ALIMENTATION','HABILLEMENT','BIJOUTERIE','QUINCAILLERIE','PHARMACIE') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `description`, `prix`, `categorie`) VALUES
(1, 'Pain au lait', 'Le pain au lait est un produit commercialisé en boulangerie, sous la forme oblongue ou ronde d\'un petit pain, à l\'aspect, à la consistance et à la saveur voisines de celle de la brioche.', '2000FC', 'ALIMENTATION'),
(2, 'Pain viennois', 'Le pain viennois est un pain long à croûte souple et brillante, décoré de profondes incisions, incorporant en faible quantité des ingrédients qui le rapprochent des viennoiseries, d’où son nom : un peu de sucre ; un peu de lait ; un peu de malt ; du beurr', '1500FC', 'ALIMENTATION'),
(3, 'Pebete', 'Traduit de l\'anglais-Un galet est un petit pain ovale doux argentin fait de farine de blé avec une fine croûte brune, un peu comme un rouleau de hot-dog plus gros.', '500FC', 'ALIMENTATION'),
(4, 'Lomito', 'Le lomito ou sándwich de lomo ou simplement \"lomo\" est un sandwich typique de la cuisine argentine, plus spécifiquement de la gastronomie de Cordoba, Mendoza et Santiago del Estero.', '400FC', 'ALIMENTATION'),
(5, 'Chacarero', 'Traduit de l\'anglais-Le Chacarero est un sandwich chilien à base de steak de style churrasco finement tranché ou de porc de style lomito sur un rouleau rond avec des tomates, des haricots verts et du piment.', '600FC', 'ALIMENTATION'),
(6, 'Barros Luco', 'Traduit de l\'anglais-Barros Luco est un sandwich chaud au Chili qui comprend du bœuf et du fromage fondu dans l\'un des nombreux types de pain. Le sandwich est nommé d\'après le président chilien Ramón Barros Luco, et a été inventé dans le restaurant du Con', '700FC', 'ALIMENTATION'),
(7, 'Pichanga', 'La pichanga est un plat composé d\'un mélange de produits alimentaires marinés, de petits morceaux de jambon, de différents types de fromage, d\'olives et de salami. Le tout cuit dans du vinaigre, de l\'huile de canola et plusieurs épices.', '800FC', 'ALIMENTATION'),
(8, 'Salchipapas', 'Les salchipapas est un plat de restauration rapide originaire du Pérou, mais répandu dans beaucoup de cuisines d\'Amérique latine. C\'est un plat composé de saucisses entières ou taillées en rondelles, accompagnées de pommes de terre frites et de diverses s', '500FC', 'ALIMENTATION'),
(9, 'Lomo saltado', 'Le lomo saltado est un mets ancien typique de la cuisine péruvienne. Il est apparu vers le milieu du XIXᵉ siècle à l\'époque du début d\'influence des Chinois cantonais, et mélange la cuisine péruvienne avec la cuisine orientale. La base en est l\'émincé de ', '2000FC', 'ALIMENTATION'),
(10, 'Hamburger', 'Un hamburger ou par aphérèse burger, est un sandwich d\'origine allemande, composé de deux pains de forme ronde généralement garnis de steak haché et de crudités, salade, tomate, oignon, cornichon, et de sauce…', '2000FC', 'ALIMENTATION'),
(11, 'Hot-dog', 'Un hot-dog, hotdog ou hot dog, est un type de sandwich composé d\'un pain allongé fourré d’une saucisse cuite. Il est accompagné de divers ingrédients et condiments très variés comme de la moutarde, du ketchup, de la relish, des oignons, et toutes sortes d', '600FC', 'ALIMENTATION');
COMMIT;
