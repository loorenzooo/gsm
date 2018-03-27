# phpMyAdmin SQL Dump
# version 2.5.3
# http://www.phpmyadmin.net
#
# Serveur: localhost
# G�n�r� le : Samedi 03 Septembre 2005 � 09:37
# Version du serveur: 4.1.7
# Version de PHP: 5.0.2
# 
# Base de donn�es: `gallerie_saint_martin`
# 

# --------------------------------------------------------

#
# Structure de la table `artiste`
#

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE `artiste` (
  `id_artiste` int(11) NOT NULL auto_increment,
  `nom_artiste` varchar(255) default NULL,
  `prenom_artiste` varchar(255) default NULL,
  `periode_artiste` text,
  `nationalite_artiste` text,
  `categorie_artiste` text,
  `vie_artiste` text,
  `musee_artiste` text,
  `ref_artiste` text,
  `img_artiste` varchar(255) default NULL,
  PRIMARY KEY  (`id_artiste`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

#
# Contenu de la table `artiste`
#

INSERT INTO `artiste` (`id_artiste`, `nom_artiste`, `prenom_artiste`, `periode_artiste`, `nationalite_artiste`, `categorie_artiste`, `vie_artiste`, `musee_artiste`, `ref_artiste`, `img_artiste`) VALUES (1, 'ROSIER', 'Am�d�e', 'N� le 26 ao�t 1831 � Meaux (Seine et Marne) � Mort en 1898. XIX�me si�cle.', 'Fran�ais', 'Peintre de paysages anim�s, paysages, paysages urbains, marines.', '"El�ve de L. Coigniet et de Durand, il d�buta au Salon de Paris en 1857  il re�u une m�daille de troisi�me classe en 1876 et une de bronze en 1889 (Exposition Universelle). Il s�journa en Italie et travailla notamment � Venise . Il visita �galement l�Egypte ."', 'BERNAY : Saint-Georges-Majeur, � Venise, effet de lune - COMPIEGNE : N-D de Paris au soleil couchant - MULHOUSE  : Le Soir � Venise - NIORT : Les Bords du Nil - SAINT-ETIENNE : Plage .', '"E. B�n�zit, ""Dictionnaire des peintres, sculpteurs, dessinateurs et graveurs"", Paris 1999, vol. 11, p.916."', ''),
(2, 'JEANNIN', 'Georges', 'N� en 1841 � Paris . Mort le 10 d�cembre 1925 . XIX�-XX�mes si�cles .', 'Fran�ais', ' Peintre de natures-mortes, fleurs et fruits ', 'Il participa r�guli�rement au Salon de Paris � partir  de 1868 . Soci�taire des Artistes Fran�ais depuis 1878, il obtint une m�daille de troisi�me classe en 1878, une de deuxi�me classe en 1888 . M�daille de bronze � l�Exposition Universelle de 1889 � Paris . Il �tait pr�sident de la Soci�t� des peintres de fleurs. Chevalier de la L�gion d�honneur  en 1903 .Ses bouquets sont trait�s � larges coups de pinceau, dans une p�te g�n�reuse .', 'BEZIERS : Raisins et pavots - Reliefs du festin de Samson et Dalila - EPINAL : Corbeille de fleurs - LA HAYE ( Mus. Mesdag ) : Panier de raisins - MULHOUSE : Bouquet de roses rouges - NANCY : Les pommes - PARIS ( Mus. des Beaux-Arts de la Ville de Paris ) : Fleurs - ROCHEFORT : Panier de fleurs - ROUEN : Fleurs - VALENCIENNES : Pommes et poire .', '"E. B�n�zit, ""Dictionnaire des peintres, sculpteurs, dessinateurs et graveurs"", Paris 1999, vol. 7, p.506."', '\r\n'),
(3, ' SCHOUTEN', 'Henri', 'N� en 1864 en Indon�sie . Mort en 1927 � Gand . XIX�-XX�me si�cles', 'Belge', 'Peintre d�animaux, paysages', '', '', '"E. B�n�zit, ""Dictionnaire des peintres, sculpteurs, dessinateurs et graveurs"", Paris 1999, vol. 12, p.521."', ''),
(4, 'GU�RIN', 'Marie-Victorine', 'N�e au xixe si�cle � Paris.  XIX� si�cle', 'Fran�aise', 'Miniaturiste', ' �l�ve de Jules Machard. Soci�taire des Artistes Fran�ais depuis 1890. M�daill� � Versailles, Boulogne, Chicago, Tours.', '', '"E. B�n�zit, ""Dictionnaire des peintres, sculpteurs, dessinateurs et graveurs"", Paris 1999, vol.6, p.538."', '\r\n'),
(5, ' Viennet', 'Christine', '', '', '', '', '', '', 'dscn0742v.jpg'),
(6, 'Van Hoylandt', 'Werner', '', '', '', '', '', '', 'dscn8583v.jpg'),
(12, 'Inconnu', '', '', '', '', '', '', '', '');

# --------------------------------------------------------

#
# Structure de la table `exposition`
#

DROP TABLE IF EXISTS `exposition`;
CREATE TABLE `exposition` (
  `id_expo` int(11) NOT NULL auto_increment,
  `artiste_expo` int(11) default NULL,
  `img_expo` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id_expo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

#
# Contenu de la table `exposition`
#

INSERT INTO `exposition` (`id_expo`, `artiste_expo`, `img_expo`) VALUES (4, 6, 'dscn8583v.jpg'),
(3, 5, 'dscn0742v.jpg');

# --------------------------------------------------------

#
# Structure de la table `faire_partie`
#

DROP TABLE IF EXISTS `faire_partie`;
CREATE TABLE `faire_partie` (
  `id_faire_partie` int(11) NOT NULL auto_increment,
  `oeuvre_faire_partie` int(11) default NULL,
  `expo_faire_partie` int(11) default NULL,
  PRIMARY KEY  (`id_faire_partie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

#
# Contenu de la table `faire_partie`
#

INSERT INTO `faire_partie` (`id_faire_partie`, `oeuvre_faire_partie`, `expo_faire_partie`) VALUES (6, 36, 2),
(5, 35, 2),
(18, 48, 4),
(17, 47, 3);

# --------------------------------------------------------

#
# Structure de la table `genre`
#

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL auto_increment,
  `nom_genre` varchar(255) default NULL,
  `en_nom_genre` varchar(255) default NULL,
  `img_genre` varchar(255) default NULL,
  `type_genre` int(11) default NULL,
  PRIMARY KEY  (`id_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

#
# Contenu de la table `genre`
#

INSERT INTO `genre` (`id_genre`, `nom_genre`, `en_nom_genre`, `img_genre`, `type_genre`) VALUES (1, 'Natures mortes', 'Still life', 'dscn8505v.jpg', 1),
(2, 'Sc�nes de genre', 'Character scene', 'dscn8524v.jpg', 1),
(3, 'Sc�nes d\'int�rieur', 'Interior scene', 'dscn8501v.jpg', 1),
(4, 'Paysages', 'Landscapes', 'dscn8580v.jpg', 1),
(5, 'Animalier', 'Animals', 'dscn7759v.jpg', 1),
(6, 'Deux corps', 'Deux corps', 'dscn8287v.jpg', 2),
(7, 'Commodes', 'Commodes', 'dscn8566v.jpg', 2),
(8, 'Buffets', 'Buffets', 'img_0370v.jpg', 2),
(9, 'Tables', 'Tables', 'dscn8337v.jpg', 2),
(10, 'Petits meubles', 'Petits meubles', 'dscn8537v.jpg', 2),
(11, 'Si�ges', 'Si�ges', 'dscn8338v.jpg', 2),
(12, 'Armoires', 'Armoires', 'dscn8519v.jpg', 2),
(13, 'Vaisselier', 'Vaisselier', NULL, 2),
(14, 'Console', 'Console', NULL, 2),
(15, 'XVII�me si�cle', 'XVIIth century', 'dscn8539v.jpg', 3),
(16, 'XVIII�me si�cle', 'XVIIIth century', 'dscn8513v.jpg', 3),
(17, 'XIX�me si�cle', 'XIXth century', 'dscn8530v.jpg', 3),
(18, 'XX�me si�cle', 'XXth century', '', 3),
(24, 'Curiosit�', 'Wonders', NULL, 5),
(23, 'Expositions', 'Exhibitions', NULL, 4),
(25, 'az', 'az', 'dscn8501v.jpg', NULL),
(26, 's', 's', 'dscn8501v.jpg', NULL);

# --------------------------------------------------------

#
# Structure de la table `oeuvre`
#

DROP TABLE IF EXISTS `oeuvre`;
CREATE TABLE `oeuvre` (
  `id_oeuvre` int(11) NOT NULL auto_increment,
  `nom_oeuvre` varchar(255) NOT NULL default '',
  `en_nom_oeuvre` varchar(255) default NULL,
  `legende_oeuvre` text,
  `legende2_oeuvre` text,
  `en_legende_oeuvre` text,
  `en_legende2_oeuvre` text,
  `desc_oeuvre` text,
  `en_desc_oeuvre` text,
  `prix_oeuvre` float(11,2) default NULL,
  `img_oeuvre` varchar(255) default NULL,
  `img2_oeuvre` varchar(255) default NULL,
  `type_oeuvre` int(11) NOT NULL default '0',
  `genre_oeuvre` int(11) NOT NULL default '0',
  `artiste_oeuvre` int(11) default NULL,
  PRIMARY KEY  (`id_oeuvre`),
  KEY `id_type_oeuvre` (`type_oeuvre`,`genre_oeuvre`,`artiste_oeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

#
# Contenu de la table `oeuvre`
#

INSERT INTO `oeuvre` (`id_oeuvre`, `nom_oeuvre`, `en_nom_oeuvre`, `legende_oeuvre`, `legende2_oeuvre`, `en_legende_oeuvre`, `en_legende2_oeuvre`, `desc_oeuvre`, `en_desc_oeuvre`, `prix_oeuvre`, `img_oeuvre`, `img2_oeuvre`, `type_oeuvre`, `genre_oeuvre`, `artiste_oeuvre`) VALUES (2, 'Bouquet de fleurs', 'Bouquet de fleurs', '"huile sur toile 46 x 38 cm"\r\n', '', '', '', 'Huile sur toile 46x38 cm', 'Oil on canvas 46x38 cm', NULL, 'dscn7808.jpg', '', 0, 1, 2),
(4, 'Femme � sa toilette', 'Femme � sa toilette', '', '', '', '', 'Huile sur toile 50,5x41 cm', 'Oil on cavas 50,5x41 cm', NULL, 'dscn7696.jpg', '', 0, 3, 4),
(1, 'Vue de Venise', 'View of Venice', '', '', '', '', 'Huile sur bois   25 x 36 cm   \r\nXIX�me si�cle.  \r\nDimensions encadr�: 39.8 x 50 cm\r\nCadre d�origine en stuc dor� � la feuille', 'Oil on wooden panel.  \r\n10 x 14.4 in.  XIXth century.\r\nFramed size�:  15.9 x 20 in. \r\nOriginal stucco gold leaf frame', NULL, 'dscn7810.jpg', '', 0, 4, 5),
(50, 'Vue de Paris', 'View of Paris', '', '', '', '', 'Huile sur toile   55 x 38 cm   \r\nfin XIX�me d�but XX�me si�cles.   \r\nVue de Paris, technique impressionniste, � partir de la Rive Gauche. \r\nDimensions encadr�: 55.5 x 72.5 cm. Cadre d��poque.\r\n', 'Oil on canvas.�\r\nLate XIXth century, early XXst century. \r\nView of Paris from the Left Bank, impressionistic technique. \r\nOriginal frame. \r\nFramed size : 22.2 x 29 in\r\n', NULL, 'dscn7846.jpg', '', 0, 4, 12),
(49, 'Basse-cour', 'Basse-cour', '', '', '', '', 'Huile sur toile 100x81 cm', 'Oil on canvas 100x81 cm', NULL, 'dscn7759.jpg', 'dscn7760.jpg', 0, 2, 3),
(17, '', '', '', '', '', '', '', '', NULL, '', '', 0, 0, 0),
(18, '', '', '', '', '', '', '', '', NULL, '', '', 0, 0, 0),
(13, 'zaaaa', 'z', 'z', 'z', 'z', 'z', 'z', 'z', NULL, '', '', 0, 0, 0),
(19, '', '', 'a', '', 'a', '', 'd', 'a', NULL, 'dscn8501v.jpg', '', 0, 0, 3),
(20, '', '', 'z', '', 'z', '', 'a', 'z', NULL, '', '', 0, 0, 3),
(54, 'Buffets', '', '', '', '', '', '', '', NULL, 'img_0370v.jpg', '', 0, 8, 0),
(55, 'Commodes', '', '', '', '', '', '', '', NULL, 'dscn8566v.jpg', '', 0, 7, 0),
(23, '', '', 'wxcw', '', 'xwc', '', 'wxc', 'wxc', NULL, '', '', 0, 0, 3),
(24, '', '', 'sss', '', 'sss', '', 's', 'ss', NULL, '', '', 0, 0, 3),
(25, '', '', 'za', '', 'za', '', 'zae', 'z', NULL, '', '', 0, 20, 3),
(27, '', '', 's', '', 's', '', 's', 's', NULL, '', '', 0, 23, 3),
(29, '', NULL, 'e', NULL, 'e', NULL, NULL, NULL, NULL, 'dscn8475sc.jpg', NULL, 0, 0, 0),
(30, '', NULL, 'e', NULL, 'e', NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0),
(36, '', NULL, 'test2', NULL, 'test2', NULL, NULL, NULL, NULL, 'dscn8475ac.jpg', NULL, 0, 0, 2),
(35, '', NULL, 'test', NULL, 'test', NULL, NULL, NULL, NULL, 'dscn7696.jpg', NULL, 0, 0, 2),
(53, 'Deux corps', '', '', '', '', '', '', '', NULL, 'dscn8287v.jpg', '', 0, 6, 0),
(51, 'Armoire 1', '', '', '', '', '', '', '', NULL, 'dscn8287v.jpg', '', 0, 12, 0),
(48, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, 'dscn8583v.jpg', NULL, 0, 0, 6),
(47, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, 'dscn0742v.jpg', NULL, 0, 0, 5),
(57, 'Petits Meubles', '', '', '', '', '', '', '', NULL, 'dscn8537v.jpg', '', 0, 10, 0),
(58, 'Tables', '', '', '', '', '', '', '', NULL, 'dscn8337v.jpg', '', 0, 9, 0),
(59, 'Si�ges', '', '', '', '', '', '', '', NULL, 'dscn8338v.jpg', '', 0, 11, 0);

# --------------------------------------------------------

#
# Structure de la table `type_oeuvre`
#

DROP TABLE IF EXISTS `type_oeuvre`;
CREATE TABLE `type_oeuvre` (
  `id_type_oeuvre` int(11) NOT NULL auto_increment,
  `libelle_type_oeuvre` varchar(255) default NULL,
  `en_libelle_type_oeuvre` varchar(255) default NULL,
  PRIMARY KEY  (`id_type_oeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

#
# Contenu de la table `type_oeuvre`
#

INSERT INTO `type_oeuvre` (`id_type_oeuvre`, `libelle_type_oeuvre`, `en_libelle_type_oeuvre`) VALUES (1, 'Tableaux', 'Paintings'),
(2, 'Meubles', 'Furnitures'),
(3, 'Objets d\'Arts', 'Art Objects'),
(4, 'Expositions', 'Exhibitions'),
(5, 'Curiosit�s', 'Wonders');

# --------------------------------------------------------

#
# Structure de la table `users`
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(255) NOT NULL default '',
  `pwd` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

#
# Contenu de la table `users`
#

INSERT INTO `users` (`id`, `login`, `pwd`) VALUES (1, 'admin', 'gallerie');
