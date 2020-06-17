-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour breizh
CREATE DATABASE IF NOT EXISTS `alban56_breizh` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `alban56_breizh`;

-- Listage de la structure de la table breizh. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table breizh.admin : ~2 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `pseudo`, `password`) VALUES
	(1, 'Alban', '$2y$10$i16ERmeJ8jNfgaVUx47L8Oliu8lC/g.jIzQjHZrbIjR3YDV2c17My'),
	(2, 'Kévin', '$2y$10$gr61xFSfpx5YQkRXwus4ReCZqrm0VrVspRY52R4j4D9ipDlNMMVBm');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table breizh. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extract` text,
  `admin_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Listage des données de la table breizh.articles : ~10 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `content`, `image`, `created_at`, `extract`, `admin_id`) VALUES
	(35, 'La Tour Solidor &agrave; Saint-Malo', ' La tour Solidor est situ&eacute;e &agrave; l&rsquo;embouchure de la Rance, dans le quartier de Saint-Servan et fut construite en 1382 dans le but de contr&ocirc;ler la ville de Saint-Malo. Elle est compos&eacute;e de trois &eacute;tages et comporte trois tours rondes de 18 m&egrave;tres de hauteur et un escalier de 104 marches.', 'app/public/Images/solidor.jpg', '2020-06-10 16:51:40', NULL, 1),
	(36, 'Le Vieux Vannes, Morbihan', 'Enferm&eacute;e dans ses remparts et group&eacute;e autour de la cath&eacute;drale St-Pierre, la vieille ville a &eacute;t&eacute; am&eacute;nag&eacute;e en zone pi&eacute;tonne. Choisie comme capitale par le duc de Bretagne Jean IV, elle se d&eacute;veloppa consid&eacute;rablement &agrave; la fin du 14e s. Remarquablement conserv&eacute;e, elle abrite un bel ensemble de maisons &agrave; pans de bois. Prenez le temps d\'observer les fa&ccedil;ades : d&eacute;cors sculpt&eacute;s, encorbellements, couleurs, chacune affiche sa singularit&eacute;.', 'app/public/Images/vannes1.jpg', '2020-06-10 16:58:44', NULL, 1),
	(37, 'Fort la Latte, C&ocirc;te d\'Armor', 'Le fort la Latte est &eacute;galement appel&eacute; ch&acirc;teau de la Roche Goyon et a &eacute;t&eacute; initialement construit en 937 et &eacute;difi&eacute; au XIVe si&egrave;cle par le seigneur de Matignon. Il se situe sur la pointe de la Latte, pr&egrave;s du cap Fr&eacute;hel et franchement, c&rsquo;est probablement l&rsquo;un des plus beaux ch&acirc;teaux que j&rsquo;ai pu voir jusqu&rsquo;&agrave; pr&eacute;sent. D&egrave;s l&rsquo;instant o&ugrave; je l&rsquo;ai aper&ccedil;u, j&rsquo;ai su qu&rsquo;il serait un v&eacute;ritable coup de coeur ! Au d&eacute;but j&rsquo;ai du faire abstraction du monde, qui venait le visiter (oui, c&rsquo;est tout de m&ecirc;me l&rsquo;un des plus c&eacute;l&egrave;bres ch&acirc;teaux forts de Bretagne!), puis au fur et &agrave; mesure, je me suis laiss&eacute;e aller &agrave; la d&eacute;couverte et surtout &agrave; l&rsquo;&eacute;merveillement ! Sa stature est impressionnante, tout comme son architecture : le ch&acirc;teau fort a &eacute;t&eacute; construit en long, pour &eacute;pouser la forme de la pointe la Latte.', 'app/public/Images/fortlalatte.jpg', '2020-06-10 17:02:11', NULL, 1),
	(38, 'Le Cap Sizun', 'Le cap Sizun s\'avance dans l\'Iroise, bord&eacute; au nord par la baie de Douarnenez et au sud par celle d\'Audierne. Ses sites naturels les plus connus sont la pointe du Raz et celle du Van ainsi qu\'entre celles-ci, la baie des Tr&eacute;pass&eacute;s. Son prolongement maritime est la chauss&eacute;e de Sein, dont la plus importante partie &eacute;merg&eacute;e est l\'&icirc;le de Sein de laquelle il est s&eacute;par&eacute; par le Raz de Sein.', 'app/public/Images/capsizun.jpg', '2020-06-10 17:04:06', NULL, 1),
	(39, 'Le Golfe du Morbihan', 'Avec ses nombreuses &icirc;les et &icirc;lots, son microclimat qui r&eacute;chauffe la mer et sa douceur de vivre, le Golfe du Morbihan est l&rsquo;un des plus beaux paysages de Bretagne &agrave; d&eacute;couvrir toute l&rsquo;ann&eacute;e. Le Parc Naturel R&eacute;gional du Golfe du Morbihan, o&ugrave; l&rsquo;oc&eacute;an s&rsquo;aventure si loin au c&oelig;ur des terres, est un espace ouvert aux influences multiples qui revendique avec fiert&eacute; ses racines et sa culture', 'app/public/Images/golfe.jpg', '2020-06-10 17:05:48', NULL, 1),
	(40, 'La Pointe du Raz, Finist&egrave;re', ' Class&eacute;e &laquo; Grand site de France &raquo;, la Pointe du Raz s&rsquo;&eacute;l&egrave;ve &agrave; quelque 70 m&egrave;tres de hauteur. Sculpt&eacute;e par l&rsquo;oc&eacute;an et les vents, elle vaut &agrave; elle seule le voyage dans la r&eacute;gion. Face &agrave; elle, le phare carr&eacute; de l&rsquo;&icirc;lot de la Vieille, allum&eacute; en 1887, fut automatis&eacute; en 1995. Au-del&agrave; des roches indompt&eacute;es et de la mer &eacute;meraude, le panorama sur le large permet d&rsquo;admirer l&rsquo; &icirc;le de Sein et par temps clair le phare d&rsquo;Ar Men.', 'app/public/Images/pointeraz.jpg', '2020-06-11 10:17:49', NULL, 2),
	(41, 'Ville Close de Concarneau', 'La Ville Close est le centre historique de Concarneau. Le beffroi qui domine l&rsquo;entr&eacute;e a &eacute;t&eacute; construit en 1906. Il est devenu l&rsquo;embl&egrave;me de la ville.\r\nA l&rsquo;abri des fortifications, la maison du Gouverneur est l&rsquo;une des deux derni&egrave;res maisons en pan-de-bois. Elle accueille depuis 2005 l&rsquo;atelier et la salle d&rsquo;exposition temporaire de la Maison du Patrimoine.\r\n\r\n', 'app/public/Images/concarneau.jpg', '2020-06-11 10:20:12', NULL, 2),
	(42, 'La C&ocirc;te de Granite Rose', ' Accueillante, authentique et superbe, la C&ocirc;te de Granit Rose poss&egrave;de les plages et les paysages c&ocirc;tiers les plus beaux de Bretagne. Pleine de charme, elle s&eacute;duit ses h&ocirc;tes au fil des saisons en proposant un large panel d\'activit&eacute;s. Durant votre s&eacute;jour, vous pourrez visiter les sites remarquables parmi lesquels : Perros-Guirec (Ploumanac\'h), Tr&eacute;gastel (presqu\'&icirc;le Renote, Gr&egrave;ve Blanche), Pleumeur-Bodou (Landrellec, l\'&icirc;le-Grande) et Tr&eacute;beurden (&icirc;le Milliau, marais de Quellen).', 'app/public/Images/perros.jpg', '2020-06-11 10:24:52', NULL, 1),
	(43, 'Les Rochers de Plougrescant', ' Tout prend une dimension extraordinaire ! Des poussi&egrave;res d&rsquo;&icirc;lots, de minuscules ports, des maisons de poup&eacute;e se marient &agrave; des g&eacute;ants de granit, de vastes horizons c&eacute;lestes, des archipels s&rsquo;&eacute;tendant &agrave; perte de vue&hellip; Un labyrinthe de sentiers vous entra&icirc;ne au c&oelig;ur de ces unions tr&egrave;s nature.', 'app/public/Images/plougrescant1.jpg', '2020-06-11 10:28:58', NULL, 2),
	(44, 'Ch&acirc;teau de Brest, Finist&egrave;re', 'Le ch&acirc;teau de Brest a la particularit&eacute; d&rsquo;&ecirc;tre un des rares vestiges de l&rsquo;histoire de la ville, qui fut d&eacute;truite par la seconde guerre mondiale. Abritant aujourd&rsquo;hui le Mus&eacute;e national de la Marine, cette forteresse m&eacute;di&eacute;vale est le t&eacute;moin du pass&eacute; maritime et militaire de Brest. Gr&acirc;ce &agrave; sa situation strat&eacute;gique au c&oelig;ur de la ville, sur un &eacute;peron rocheux, le ch&acirc;teau domine la Penfeld, la rade et le goulet. Un lieu incontournable &agrave; d&eacute;couvrir !', 'app/public/Images/brest.jpg', '2020-06-11 10:30:38', NULL, 2);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Listage de la structure de la table breizh. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Listage des données de la table breizh.contact : ~2 rows (environ)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `objet`, `message`) VALUES
	(2, 'Alban Husar', 'albanhusar@gmail.com', 'ZDZQ', 'DZQRz'),
	(3, 'Duval', 'duval@gmail.com', 'salut', 'Hello');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage de la structure de la table breizh. register
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- Listage des données de la table breizh.register : ~3 rows (environ)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`id`, `pseudo`, `email`, `password`, `adress`) VALUES
	(1, 'balou', 'albanhusar@gmail.com', '$2y$10$SEFQwG.a.ZE1SgrTZ1bxZul9twcqcVywp6DzwKAm/MK09NDv0krwO', ''),
	(2, 'Manu', 'albanhusar@gmail.com', '$2y$10$gm6/qMt284zplbRS8TtQZuUFnZupa.rmKTFHqhJlTj/5LFiRpY49C', ''),
	(37, 'wallace', 'albanhusar@gmail.com', '$2y$10$szEApPvMg5VYpyxBgu6HDezbjpCpFJ/STXoLgP44dRIudTk1H9HBC', '29 Rue du March&eacute; 78110 Le V&eacute;sinet');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Listage de la structure de la table breizh. sharemap
CREATE TABLE IF NOT EXISTS `sharemap` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table breizh.sharemap : ~0 rows (environ)
/*!40000 ALTER TABLE `sharemap` DISABLE KEYS */;
/*!40000 ALTER TABLE `sharemap` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
