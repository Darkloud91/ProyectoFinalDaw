-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Servidor: db629594834.db.1and1.com
-- Tiempo de generación: 18-06-2016 a las 12:17:49
-- Versión del servidor: 5.5.49-0+deb7u1-log
-- Versión de PHP: 5.4.45-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db629594834`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributo_clase`
--

CREATE TABLE IF NOT EXISTS `atributo_clase` (
  `id__atr_clase` int(11) NOT NULL AUTO_INCREMENT,
  `id_clase` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `efecto` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id__atr_clase`),
  KEY `fk_atr_claseCla` (`id_clase`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributo_habilidad`
--

CREATE TABLE IF NOT EXISTS `atributo_habilidad` (
  `id_atr_habilidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_habilidad` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `efecto` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_atr_habilidad`),
  KEY `fk_atr_habilidadHab` (`id_habilidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
  `id_clase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `rango` int(11) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `funcion` int(11) DEFAULT NULL,
  `dificultad` int(11) DEFAULT NULL,
  `descripcion` text COLLATE latin1_spanish_ci,
  `circulo` int(11) NOT NULL,
  `avatar_tabla` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `avatar_m` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `avatar_f` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_clase`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clase`, `nombre`, `nombre_ingles`, `rango`, `tipo`, `funcion`, `dificultad`, `descripcion`, `circulo`, `avatar_tabla`, `avatar_m`, `avatar_f`, `logo`) VALUES
(1, 'Espadachín', 'Swordman', 1, 1, 1, 1, 'Los espadachines son guerreros que tienen fuertes capacidades físicas.\r\nUtilizan diversas armas para hacer frente a los enemigos en el frente de batalla.', 1, 'images/clases/tabla/overview_swordsman_f.png', 'images/clases/avatar/espadachinm.gif', 'images/clases/avatar/espadachinf.gif', 'images/clases/logo/espadachin.png'),
(2, 'Arquero', 'Archer', 1, 2, 1, 3, 'El arquero es una clase básica.\r\n\r\nEl poder de ataque de la flecha variará dependiendo de la distancia del personaje de los enemigos. Si el personaje cambia su postura, entonces no será capaz de moverse, pero entonces el rango de ataque efectivo aumentará.\r\n\r\nSi los monstruos son atacados por un fuerte ataque de las flechas, a veces se conectan entre sí, y como resultado se puede atacar a estos monstruos fácilmente como si se tratara de un sólo monstruo.\r\n\r\nEl arquero se puede mover mientras  está atacando a los monstruos por lo que es útil cuando está en la batalla contra monstruos jefe o los monstruos grandes.', 1, 'images/clases/tabla/overview_archer_f.png', 'images/clases/avatar/arquerom.gif', 'images/clases/avatar/arquerof.gif', 'images/clases/logo/arquero.png'),
(3, 'Clérigo', 'Cleric', 1, 3, 2, 2, 'Los clérigos curan y protegen aliados a través de las bendiciones\r\nde la diosa, mientras que derribar a sus enemigos\r\ncon golpes potentes.', 1, 'images/clases/tabla/overview_cleric_f.png', 'images/clases/avatar/clerigom.gif', 'images/clases/avatar/clerigof.gif', 'images/clases/logo/clerigo.png'),
(4, 'Mago', 'Wizard', 1, 4, 1, 2, 'Los magos usan la magia para bloquear los ataques y protegerse a sí mismos.\r\nPueden lanzar hechizos potentes y concentrados, haciendo daño a un solo enemigo o varios enemigos en un área', 1, 'images/clases/tabla/overview_wizard_f.png', 'images/clases/avatar/magom.gif', 'images/clases/avatar/magof.gif', 'images/clases/logo/mago.png'),
(5, 'Guardabosques', 'Ranger', 2, 2, 1, 3, 'El guardabosques es una clase de tipo de arquero que está especializada para hacer frente a múltiples enemigos.\r\n\r\nPueden utilizar habilidades de ataque de amplio rango en ciertas condiciones que es muy singular para una clase que utiliza un arco. Por ejemplo, la habilidad que penetra todos los enemigos en una fila, la flecha que se refleja en otra ubicación cuando derrota a un enemigo y algunas otras habilidades que representan ataque de amplio rango de Guardabosques que son útiles para hacer frente a múltiples enemigos.', 1, 'images/clases/tabla/Guardabosques avatar.png', 'images/clases/avatar/Guardabosques chico.gif', 'images/clases/avatar/Guardabosques chica.gif', 'images/clases/logo/Guardabosques simbolo.png'),
(6, 'Montaraz', 'Highlander', 2, 1, 1, 1, 'Montaraz es una clase de tipo espadachín y usuarios de espadas de 2 manos.\r\n\r\nTiene estadísticas de ataque más fuertes que las de Peltasta que está en el mismo rango. También posee numerosas habilidades de ataque de área, por lo que es útil cuando se enfrentan a varios enemigos a la vez. Los enemigos que son arrojados por Montaraz reciben los daños de colisión cuando son golpeados en las paredes o barreras de modo que cuando el ambiente alrededor del Montaraz sea bastante complejo demostrará su valía.', 1, 'images/clases/tabla/overview_highlander_f.png', 'images/clases/avatar/montarazm.gif', 'images/clases/avatar/montarazf.gif', 'images/clases/logo/montaraz.png'),
(7, 'Peltasta', 'Peltasta', 2, 1, 3, 2, 'Peltasta es una clase de tipo espadachín que utiliza un escudo y una espada.\r\n\r\nEl Peltasta puede bloquear ataques y atacar a los enemigos utilizando un escudo e incluso puede provocar monstruos golpeando su escudo en sí. Los ataques de escudo ocupan una gran cantidad de daño en los enemigos que se encuentren en estado congelado o aterrorizado por lo que es más eficaz para colaborar con Criomante  o  Elementalista.\r\nEl Peltasta puede incluso lanzar su escudo a sus enemigos, pero si no lo recoge muy pronto, entonces el escudo puede desaparecer.', 1, 'images/clases/tabla/overview_peltasta_f.png', 'images/clases/avatar/peltastam.gif', 'images/clases/avatar/peltastaf.gif', 'images/clases/logo/peltasta.png'),
(8, 'Ballestero', 'Quarrelshooter', 2, 2, 3, 2, 'Ballestero es una clase que se especializa en el uso de ballestas.\r\n\r\nCuando utiliza un arco de una sola mano, puede usar una sub-arma o un escudo en la otra mano para la defensa que es la debilidad fundamental del arquero que se puede mejorar. Cuando utiliza un pavés, que es un escudo que puede implantarse en el suelo, se puede proteger de los ataques de largo alcance de enemigos por lo que las batallas más estratégicas son posibles.', 1, 'images/clases/tabla/Ballestero avatar.png', 'images/clases/avatar/Ballestero chico.gif', 'images/clases/avatar/Ballestero chica.gif', 'images/clases/logo/Ballestero simbolo.png'),
(9, 'Zapador', 'Sapper', 3, 2, 1, 3, 'Zapador es una clase de tipo de arquero que está especializada en la instalación de trampas.\r\n<br/>\r\nDiversos tipos de trampas como Claymore, pueden ser instaladas con antelación y explotar en el momento preferido serán más efectivos en las batallas que se llenan de monstruos.', 1, 'images/clases/tabla/Zapador avatar.png', 'images/clases/avatar/Zapador chico.gif', 'images/clases/avatar/Zapador chica.gif', 'images/clases/logo/Zapador simbolo.png'),
(10, 'Hoplite', 'Hoplita', 3, 1, 1, 1, 'Hoplita es una clase de tipo espadachín que utiliza una lanza.<br /><br />\r\n\r\nSi el Hoplita utiliza Overhand Thrust stance , entonces su tasa crítico aumentará temporalmente a cambio de una reducción de su tasa de evasión. Cuando un enemigo está a punto de atacar, se puede recibir un bonus de contra ataque cuando esto sucede  ataca al enemigo utilizando su escudo y lanza simultáneamente. Las lanzas tienen rangos de ataque más largos que las espadas y algunas habilidades con una lanza tienen bonificación de daño sobre los monstruos gigantes.', 1, 'images/clases/tabla/overview_hoplite_f.png', 'images/clases/avatar/swordsman_m04.gif', 'images/clases/avatar/swordsman_f04.gif', 'images/clases/logo/c_warrior_hoplite.png'),
(11, 'Bárbaro', 'Barbarian', 3, 1, 1, 1, 'Los bárbaros son guerreros imprudentes y agresivos que no están vinculados a cualquier formato en la batalla y haría cualquier cosa para reclamar la victoria en sus manos.', 1, 'images/clases/tabla/overview_barbarian_f.png', 'images/clases/avatar/swordsman_m05.gif', 'images/clases/avatar/swordsman_f05.gif', 'images/clases/logo/c_warrior_barbarian.png'),
(12, 'Cazador', 'Hunter', 3, 2, 2, 3, 'Los Cazadores son entrenadores que cazan a enemigos con compañeros.\r\n<br/><br/>\r\nCompañeros que usan habilidades que requieren la colaboración con sus dueños, tales como morder y aferrarse a enemigos o encontrar objetivos ocultos.', 1, 'images/clases/tabla/Cazador avatar.png', 'images/clases/avatar/Cazador chico.gif', 'images/clases/avatar/Cazador chica.gif', 'images/clases/logo/Cazador simbolo.png'),
(13, 'Rodelero', 'Rodelero', 4, 1, 1, 2, 'Los Rodeleros emboscan y se desintegran enemigos. Sus habilidades defensivas usan escudo y son eficaces para bloquear ataques de largo alcance.', 1, 'images/clases/tabla/overview_rodelero_f.png', 'images/clases/avatar/swordsman_m06.gif', 'images/clases/avatar/swordsman_f06.gif', 'images/clases/logo/c_warrior_rodelero.png'),
(14, 'Arquero de jade', 'Wugushi', 4, 2, 1, 2, 'El arquero de jade es una clase de tipo arquero.\r\n<br/><br/>\r\nEl arquero de jade (???) está inspirado en una tribu que está especializada en la creación y uso de veneno.', 1, 'images/clases/tabla/Arquero de jade avatar.png', 'images/clases/avatar/Arquero de jade chico.gif', 'images/clases/avatar/Arquero de jade chica.gif', 'images/clases/logo/Arquero de jade simbolo.png'),
(15, 'Catafracto', 'Cataphract', 4, 1, 1, 2, 'Catafracto es una clase de caballería, que está especializada en  atravesar grupos de monstruos o barreras.<br /><br />\r\n\r\nSus ataques pueden alcanzar grandes distancias y es útil para hacer frente a varios enemigos. Cuando el catafracto se monta, sus ataques se vuelven más fuertes. Se puede utilizar habilidades mientras está en movimiento, que es muy raro para el tipo clases espadachín.', 1, 'images/clases/tabla/overview_cataphract_f.png', 'images/clases/avatar/swordsman_m07.gif', 'images/clases/avatar/swordsman_f07.gif', 'images/clases/logo/c_warrior_cataphract.png'),
(16, 'Explorador', 'Scout', 4, 2, 2, 2, '\r\nLos Exploradores se especializan en el reconocimiento y la infiltración.\r\n<br/><br/> Ellos usan el sigilo para ocultarse y transmitir la situación del enemigo a los aliados para tener una ventaja en la batalla.', 1, 'images/clases/tabla/Explorador avatar.png', 'images/clases/avatar/Explorador chico.gif', 'images/clases/avatar/Explorador chica.gif', 'images/clases/logo/Explorador simbolo.png'),
(17, 'Escudero', 'Squire', 5, 1, 2, 2, 'Los Escuderos son guerreros que apoyan a sus compañeros soldados. Los apoyan mediante la reparación y mejora de las armas de los demás o la creación de un campamento base para ayudar al equipo.', 1, 'images/clases/tabla/overview_squire_f.png', 'images/clases/avatar/swordsman_m08.gif', 'images/clases/avatar/swordsman_f08.gif', 'images/clases/logo/c_warrior_squire.png'),
(18, 'Corsario', 'Corsair', 5, 1, 1, 2, 'Los Corsarios están especializados en la doble empuñadura y una emboscada a los enemigos desde atrás. Cualquier persona que se une al grupo de los Corsarios se convierte en un pirata.', 1, 'images/clases/tabla/overview_corsair_f.png', 'images/clases/avatar/swordsman_m09.gif', 'images/clases/avatar/swordsman_f09.gif', 'images/clases/logo/c_warrior_corsair.png'),
(19, 'Picaro', 'Rogue', 5, 2, 1, 2, 'Los Pícaros son profesionales combate que harán cualquier cosa para la victoria.\r\n<br/><br/>\r\nSe especializan en emboscar a los enemigos por detrás, usando arcos y dagas.', 1, 'images/clases/tabla/Picaro avatar.png', 'images/clases/avatar/Picaro chico.gif', 'images/clases/avatar/Picaro chica.gif', 'images/clases/logo/Picaro simbolo.png'),
(20, 'Mercenario', 'Doppelsoeldner', 6, 1, 1, 1, 'Doppelsoldners son mercenarios que sufren un alto riesgo de altas recompensas. Que peligrosamente se exponen a los enemigos y reciben gran poder de ataque o una gran experiencia.', 1, 'images/clases/tabla/overview_doppelsoeldner_f.png', 'images/clases/avatar/swordsman_m11.gif', 'images/clases/avatar/swordsman_f11.gif', 'images/clases/logo/c_warrior_doppelsoeldner.png'),
(21, 'Flechero', 'Fletcher', 5, 2, 1, 2, 'Los Flecheros hacen y usan las flechas especiales.\r\n<br/><br/> Varias flechas resultan en ataques de gran alcance dependiendo del tipo de enemigo y la situación de combate.', 1, 'images/clases/tabla/Flechero avatar.png', 'images/clases/avatar/Flechero chico.gif', 'images/clases/avatar/Flechero chica.gif', 'images/clases/logo/Flechero simbolo.png'),
(22, 'Esgrimista', 'Fencer', 6, 1, 1, 1, 'La clase Esgrimista hace uso del arma estoque para golpear rápidamente huelgas sucesivas.', 1, 'images/clases/tabla/overview_fencer_f.png', 'images/clases/avatar/Fencer_M.gif', 'images/clases/avatar/class_fencer_f.gif', 'images/clases/logo/c_warrior_fencer.png'),
(23, 'Halconero', 'Falconer', 6, 2, 2, 3, 'El Halconero controla un halcón.\r\nLos halcones pueden ser exigentes, pero se vuelven compañeros confiables cuando están bien entrenados.', 1, 'images/clases/tabla/Halconero avatar.png', 'images/clases/avatar/Halconero chico.gif', 'images/clases/avatar/Halconero chica.gif', 'images/clases/logo/Halconero simbolo.png'),
(24, 'Dragón', 'Dragoon', 7, 1, 1, 2, 'Los Dragones son soldados de élite que manejan lanzas. Ellos ganan más boninificación de daño si usan lanzas de dos manos en lugar de las de una sola mano.', 1, 'images/clases/tabla/overview_dragoon_f.png', 'images/clases/avatar/class_dragoon_m.gif', 'images/clases/avatar/class_dragoon_f.gif', 'images/clases/logo/c_warrior_dragoon.png'),
(25, 'Schwarzer Reiter', 'Schwarzer Reiter', 6, 2, 1, 2, 'Schwarzer Reiter maniobra rápidamente.\r\n<br/><br/>Se especializan en diversas técnicas de tiro utilizando una pistola.', 1, 'images/clases/tabla/Schwarzer Reiter avatar.png', 'images/clases/avatar/Schwarzer Reiter chico.gif', 'images/clases/avatar/Schwarzer Reiter chica.gif', 'images/clases/logo/Schwarzer Reiter simbolo.png'),
(26, 'Templario', 'Templar', 7, 1, 2, 3, 'Templarios son la clase de comandante que  pueden formar y gestionar clanes.<br /><br />\r\n\r\nSólo las clases Templario pueden ser los maestros de clanes y elegir que a un clan podría tomar.', 1, 'images/clases/tabla/overview_templar_f.png', 'images/clases/avatar/class_templar_m.gif', 'images/clases/avatar/class_templar_f.gif', 'images/clases/logo/c_warrior_templar.png'),
(27, 'Cañonero', 'Cannoneer', 7, 2, 1, 3, 'Los Cañoneros son la clase de tipo de arquero.\r\n<br/><br/>El cañón que utilizan tienen algunas deficiencias como dejar ventanas de vulnerabilidad antes y después de disparar un solo tiro y los cañones podrían ser problemáticos para usar de vez en cuando.. Sin embargo, se puede confiar en su poder de fuego y la gran área que puede cubrir.\r\n<br/><br/>El cañón, al igual que las pistolas, caen en la categoría de sub-arma y puede equiparse junto a objetos de ballesta.', 1, 'images/clases/tabla/Cañonero avatar.png', 'images/clases/avatar/Cañonero chico.gif', 'images/clases/avatar/Cañonero chica.gif', 'images/clases/logo/Cañonero simbolo.png'),
(28, 'Mosquetero', 'Musketeer', 7, 2, 1, 3, 'Los Mosqueteros son la clase de tirador que usa un rifle.\r\nEllos no pueden usar un arco pero el mosquete tienen una velocidad de ataque alta y efectivas habilidades de combate de corto alcance.', 1, 'images/clases/tabla/Mosquetero avatar.png', 'images/clases/avatar/Mosquetero chico.gif', 'images/clases/avatar/Mosquetero chica.gif', 'images/clases/logo/Mosquetero simbolo.png'),
(29, 'Krivis', 'Krivis', 2, 3, 2, 2, 'Los Krivis son sacerdotes que utilizan el fuego divino para ayudar a los aliados con recuperación o para causar mucho daño al enemigo.', 1, 'images/clases/tabla/overview_krivis_f.png', 'images/clases/avatar/cleric_m02.gif', 'images/clases/avatar/cleric_f02.gif', 'images/clases/logo/c_cleric_kriwi.png'),
(30, 'Sacerdote', 'Priest', 2, 3, 2, 3, 'Los sacerdotes son clérigos que dan bendiciones y resucitan a los muertos con sus poderes sagrados.', 1, 'images/clases/tabla/overview_priest_f.png', 'images/clases/avatar/cleric_m03.gif', 'images/clases/avatar/cleric_f03.gif', 'images/clases/logo/c_cleric_priest.png'),
(31, 'Piromante', 'Pyromancer', 2, 4, 1, 2, 'Piromante es una clase que usa magia de fuego.\r\n<br/><br/>\r\nLos ataques de fuego infligen daño continuo en monstruos por lo que es útil utilizar esta clase cuando te enfrentas a varios enemigos. Muro de fuego, que se puede colocar en el suelo, y mediante las teclas direccionales se dibuja el muro en el suelo mientras se lanzan esta habilidad.\r\n<br/><br/>\r\nBola de fuego se puede mover atacando directamente en las zonas de proximidad por lo que será útil en muchos sentidos cuando estás en grupo.\r\n', 1, 'images/clases/tabla/Piromante avatar.png', 'images/clases/avatar/Piromante chico.gif', 'images/clases/avatar/Piromante chica.gif', 'images/clases/logo/Piromante simbolo.png'),
(32, 'Criomante', 'Cryomancer', 2, 4, 1, 2, 'El Criomante utiliza magia de hielo para congelar a enemigos o proteger a sus aliados de enemigos mediante el uso de muros de hielo.', 1, 'images/clases/tabla/Criomante avatar.png', 'images/clases/avatar/Criomante chico.gif', 'images/clases/avatar/Criomante chica.gif', 'images/clases/logo/Criomante simbolo.png'),
(33, 'Bokor', 'Bokor', 3, 3, 1, 3, 'Bokor es una clase que utiliza las habilidades del vudú.<br /><br />\r\n\r\nPuede atacar a los monstruos desde largas distancias o puede maldecir a los monstruos para que puedan convertirse en zombis. Los zombis atacan a los otros monstruos y hacen que también se conviertan en zombis. Los zombis son muy lentos y son difíciles de controlar por lo que mediante la colocación de Veves que invoca Lwas,  puede ayudar a los zombis y  los comandos colectivos de ordenes a los zombies.', 1, 'images/clases/tabla/overview_bokor_f.png', 'images/clases/avatar/cleric_m04.gif', 'images/clases/avatar/cleric_f04.gif', 'images/clases/logo/c_cleric_bokor.png'),
(34, 'Mentalista', 'Psychokino', 3, 4, 2, 2, 'El Mentalista es una clase que utiliza la telequinesis para sus habilidades.\r\n<br/><br/>Pueden atacar a los monstruos usando telequinesis o puede tirar y alinear a los monstruos en una fila. Esta habilidad será muy útil al jugar en grupo. También puede utilizar telequinesis para cambiar de ubicación a los monstruos y puede hacer que los monstruos choquen entre sí para infligir daños en ellos.', 1, 'images/clases/tabla/Mentalista avatar.png', 'images/clases/avatar/Mentalista chico.gif', 'images/clases/avatar/Mentalista chica.gif', 'images/clases/logo/Mentalista simbolo.png'),
(35, 'Escultor Santo', 'Dievdirby', 3, 3, 2, 1, '\r\nEscultor Santo es una clase de tipo Clérigo, que está especializada en la fabricación de diversos tipos de estatuas de madera.<br /><br />\r\n\r\nDependiendo de la estatua de la diosa que el Escultor Santo construya, cambia el resultado de las batallas por desventajas sobre los enemigos cercanos, lo que aumenta los rangos de ataque de otros jugadores y así sucesivamente. Cuando el Escultor Santo construye una estatua Vakarine en el campo,  la estatua actuará como un punto de teletransporte y cada uno puede utilizarlo para teletransportarse a otros lugares.', 1, 'images/clases/tabla/overview_dievdirbys_f.png', 'images/clases/avatar/cleric_m05.gif', 'images/clases/avatar/cleric_f05.gif', 'images/clases/logo/c_cleric_dievdirbys.png'),
(36, 'Vinculador', 'Linker', 3, 4, 2, 3, 'Un Vinculador une personajes entre sí o monstruos.\r\n<br/><br/>Los monstruos están unidos entre sí recibirán daños o de-buffs al mismo tiempo. Estos monstruos pueden ser tirados y reunidos en un solo lugar para ayudar a otros jugadores a atacar más fácil. Cuando un Vinculador enlaza aliados juntos, los efectos de pociones o buffs se pueden compartir mutuamente y los daños recibidos por monstruos pueden reducirse.', 1, 'images/clases/tabla/Vinculador avatar.png', 'images/clases/avatar/Vinculador chico.gif', 'images/clases/avatar/Vinculador chica.gif', 'images/clases/logo/Vinculador simbolo.png'),
(37, 'Sadhu', 'Sadhu', 4, 3, 1, 3, 'Sadhu puede utilizar habilidades fuera del cuerpo.<br /> <br />\r\n\r\nA pesar de que, el espíritu, que consigue alienado de su cuerpo, no puede moverse lejos de su cuerpo, puede moverse lo más rápido posible dentro del radio. El cuerpo sin espíritu se vuelve más vulnerable y recibe mayores daños cuando es atacado de los monstruos. Si descompone el espíritu mismo, entonces fuertes daños serán tratados en muchos monstruos.', 1, 'images/clases/tabla/overview_sadhu_f.png', 'images/clases/avatar/cleric_m06.gif', 'images/clases/avatar/cleric_f06.gif', 'images/clases/logo/c_cleric_sadhu.png'),
(38, 'Paladín', 'Paladin', 4, 3, 3, 1, 'Los Paladines usan su poder sagrado para proteger a los aliados y derrotar a los enemigos a través de las bendiciones de la diosa.', 1, 'images/clases/tabla/overview_paladin_f.png', 'images/clases/avatar/cleric_m07.gif', 'images/clases/avatar/cleric_f07.gif', 'images/clases/logo/c_cleric_paladin.png'),
(39, 'Taumaturgo', 'Thaumaturge', 4, 4, 2, 1, 'Taumaturgo es una clase que puede cambiar atributos.\r\n<br/><br/>Las trampas de monstruos se pueden utilizar como si fueran suyas, y puede encoger o agrandar tamaños enemigos. Algunas de las habilidades de las otras clases se ven influenciadas por los tamaños de los enemigos así que si usan esta habilidad inteligentemente, entonces vas a cambiar el resultado de las batallas.\r\n<br/><br/>También puede ampliar partes específicas del cuerpo de tu personaje. Por ejemplo, si agranda la mano que está equipada con un arma, entonces las estadísticas de ataque aumentará. Si agranda la mano que está equipada con un escudo, se incrementará las estadísticas de la defensa.', 1, 'images/clases/tabla/Taumaturgo avatar.png', 'images/clases/avatar/Taumaturgo chico.gif', 'images/clases/avatar/Taumaturgo chica.gif', 'images/clases/logo/Taumaturgo simbolo.png'),
(40, 'Monje', 'Monk', 5, 3, 1, 2, 'Monk es una clase de tipo Clérigo a base de ataque puro.<br /><br />\r\n\r\nLa mayoría de sus habilidades están influenciados por la fuerza, por lo que puede requerir un poco de paciencia para subir la clase Monje.<br />\r\nIron Shirt refleja los ataques enemigos sin recibir daños por lo que será útil cuando Monje actúa como un tanque en el juego del equipo.\r\nSunrays Hand recibe bonificaciones de las tres estadísticas, por lo que cuando colabora con otros buff u otras clases, su efecto se intensificará.', 1, 'images/clases/tabla/overview_monk_f.png', 'images/clases/avatar/cleric_m08.gif', 'images/clases/avatar/cleric_f08.gif', 'images/clases/logo/c_cleric_monk.png'),
(41, 'Elementalista', 'Elementalist', 4, 4, 1, 2, 'El Elementalista es una clase de mago que utiliza fuertes hechizos de magia elementales.\r\n<br/><br/>Puede utilizar la maldición de petrificación o hechizo de tipo rayo, que no están disponibles en otras clases de mago como Piromante y Criomante. Hechizos de fuego o hielo son de alto rango y tienen un tiempo largo de lanzamiento, pero puesto que son bastante potentes, serán efectivos cuando se lucha contra monstruos de tipo jefe o en los servicios de raid cuando recibe ayuda de los miembros de su grupo.\r\n<br/><br/>Prominencia se mueve alrededor libremente después de que es convocado por lo que será eficaz cuando te enfrentas contra varios enemigos a la vez.', 1, 'images/clases/tabla/Elementalista avatar.png', 'images/clases/avatar/Elementalista chico.gif', 'images/clases/avatar/Elementalista chica.gif', 'images/clases/logo/Elementalista simbolo.png'),
(42, 'Redentor', 'Pardoner', 5, 3, 2, 2, 'Redentor es una clase de tipo clérigoque puede hacer diferentes tipos de pergaminos.<br /><br />\r\n\r\nPuede crear objetos potenciadores que se utilizarán  automáticamente cada vez que atacan o defenden, y también puede convertir sus habilidades en pergaminos y, o bien dar o vender a otro jugador. Si tienes un pergamino con la habilidad de un redentor, no importa la clase con la que lo uses, puedes utilizar la magia de tipo clérigo en cualquier momento que desees.\r\n"Permanecer vendiendo después de desconectarse" es una característica que lo hace interesante en TOS.', 1, 'images/clases/tabla/overview_pardoner_f.png', 'images/clases/avatar/cleric_m09.gif', 'images/clases/avatar/cleric_f09.gif', 'images/clases/logo/c_cleric_pardoner.png'),
(43, 'Oráculo', 'Oracle', 6, 3, 2, 2, 'Oráculo es una clase de tipo Clérigo que utiliza su poder para prever el futuro.\r\n\r\nAconsejan a los otros jugadores con antelación donde los enemigos van a atacar, los objetos que los monstruos dejarán caer, etc., y Oráculo tiene la capacidad de transformar el monstruo al que se enfrenta a otro monstruo que es aproximadamente del mismo nivel que el monstruo anterior, y se puede también convocar a un monstruo que está en algún lugar en el campo frente a el. Si utiliza estas habilidades inteligentemente, más farmeo estratégico sería posible.', 1, 'images/clases/tabla/overview_oracle_f.png', 'images/clases/avatar/cleric_m11.gif', 'images/clases/avatar/cleric_f11.gif', 'images/clases/logo/c_cleric_oracle.png'),
(44, 'Hechicero', 'Sorcerer', 5, 4, 1, 3, 'Hechicero es una clase de tipo de mago que invoca a un demonio.\r\n <br/><br/>Si inserta una carta, que puede obtener de derrotar a los monstruos de tipo jefe-demonio, en el Grimorio, puede invocar el demonio que tiene la apariencia del monstruo jefe que has derrotado. Puede ordenar ataques o pedir al demonio proteger a algún lugar designado. También puede montar en el demonio y controlarlo directamente mediante las teclas de ataque y teclas de movimiento.', 1, 'images/clases/tabla/Hechicero avatar.png', 'images/clases/avatar/Hechicero chico.gif', 'images/clases/avatar/Hechicero chica.gif', 'images/clases/logo/Hechicero simbolo.png'),
(45, 'Druida', 'Druid', 6, 3, 2, 2, 'Druida es una clase de tipo Clérigo que utiliza la fuerza de la naturaleza.\r\n\r\nPuede atacar a cualquiera de los enemigos o protegerse de los ataques enemigos utilizando la hierba de los campos, pero ya que esta habilidad sólo se puede utilizar en los campos con hierba, el Druida mostrará su gran capacidad de ataque en los campos con un montón de hierba. También se puede controlar el tipo vegetal o el tipo animal de monstruos e incluso se transforma en ciertos monstruos para utilizar todas las habilidades de los monstruos.', 1, 'images/clases/tabla/overview_druid_f.png', 'images/clases/avatar/cleric_m10.gif', 'images/clases/avatar/cleric_f10.gif', 'images/clases/logo/c_cleric_druid.png'),
(46, 'Cronomante', 'Chronomancer', 5, 4, 2, 2, 'Cronomante es una clase que controla el tiempo.\r\n<br/><br/>Puede aumentar la velocidad de movimiento, y puede aumentar temporalmente la velocidad de ataque. Puede detener el movimiento de los enemigos e incluso restaura el tiempo a unos pocos segundos para que el ambiente que le rodea sea  como lo que era cuando estaba unos segundos atrás.\r\n', 1, 'images/clases/tabla/Cronomante avatar.png', 'images/clases/avatar/Cronomante chico.gif', 'images/clases/avatar/Cronomante chica.gif', 'images/clases/logo/Cronomante simbolo.png'),
(47, 'Médico de Plagas', 'Plague Doctor', 7, 3, 2, 3, 'Los médicos de la plaga son la clase de tipo clérigo con alta experiencia en la curación de anomalías de los aliados y incinerar a los enemigos.<br /><br />\r\n\r\nLa máscara de pico de pájaro que llevan ha sido tratada con productos químicos especiales que los protegen frente a las principales anomalías.', 1, 'images/clases/tabla/overview_plague_doctor_f.png', 'images/clases/avatar/class_plague_doctor_m.gif', 'images/clases/avatar/class_plague_doctor_f.gif', 'images/clases/logo/c_cleric_plague_doctor.png'),
(48, 'Cabalista', 'Kabbalist', 7, 3, 2, 3, 'Los cabalistas son los clérigos que practican la magia antigua conocida como la Cábala. Apoyan a sus aliados con el poder infinito o analizan los nombres de los enemigos para ayudarlos en el combate.', 1, 'images/clases/tabla/overview_kabbalist_f.png', 'images/clases/avatar/class_kabbalist_m.gif', 'images/clases/avatar/class_kabbalist_f.gif', 'images/clases/logo/c_cleric_kabbalist.png'),
(49, 'Nigromante', 'Necromancer', 6, 4, 1, 2, 'Nigromante es una clase que recoge los cadáveres de los monstruos.\r\n<br/><br/>Los cadáveres se almacenarán en Necronomicon y  se utilizaran para varias habilidades de la nigromancia. Puede formar un escudo protector o atacar a los mostruos utilizando los cuerpos muertos. Entre las diferentes cartas de monstruo jefe, las cartas de jefe tipo Bestia pueden ser insertadas en el Necronomicon y esta carta influyen en la IA, las estadísticas y la apariencia del Shoggoth cuando se obtiene.', 1, 'images/clases/tabla/Nigromante avatar.png', 'images/clases/avatar/Nigromante chico.gif', 'images/clases/avatar/Nigromante chica.gif', 'images/clases/logo/Nigromante simbolo.png'),
(50, 'Alquimista', 'Alchemist', 6, 4, 2, 2, 'Los Alquimistas usan alquimia para mejorar gemas y sintetizar o artículos de artesanía.', 1, 'images/clases/tabla/Alquimista avatar.png', 'images/clases/avatar/Alquimista chico.gif', 'images/clases/avatar/Alquimista chica.gif', 'images/clases/logo/Alquimista simbolo.png'),
(51, 'Brujo', 'Warlock', 7, 4, 1, 3, 'Brujos usan el poder de los espíritus malignos.\r\n<br/><br/>Pueden invocar o controlar a los espíritus malignos para derrotar a los enemigos.', 1, 'images/clases/tabla/Brujo avatar.png', 'images/clases/avatar/Brujo chico.gif', 'images/clases/avatar/Brujo chica.gif', 'images/clases/logo/Brujo simbolo.png'),
(52, 'Centurión', 'Centurion', 8, 1, 3, 3, 'La clase Centurión  puede dar órdenes a otros personajes.<br /><br />\r\n\r\nSi los jugadores participan en Formación, entonces los personajes serán controlados por Centurión hasta que salen de la formación. La formación puede ser cambiado en varios tipos dependiendo de diversas situaciones y cada tipo de formación tiene su propia característica única.<br /><br />\r\n\r\nPor ejemplo, Winged Formation que rodea a los enemigos y se concentran en disparar contra los enemigos, es eficaz cuando se enfrentan contra un gran jefe, y Phalanx que reúne temporalmente todas las estadísticas de bloqueo de los jugadores en la primera fila es efectiva cuando se enfrentan con varios enemigos a la vez.', 1, 'images/clases/tabla/overview_centurion_f.png', 'images/clases/avatar/swordsman_m10.gif', 'images/clases/avatar/class_centurion_f.gif', 'images/clases/logo/c_warrior_centurion.png'),
(53, 'Chamán', 'Featherfoot', 7, 4, 1, 3, 'Los Chamanes son los magos que absorben la fuerza vital de los enemigos o ponen maldiciones sobre los enemigos para hacer el combate más fácil para sus aliados.', 1, 'images/clases/tabla/Chaman avatar.png', 'images/clases/avatar/Chaman chico.gif', 'images/clases/avatar/Chaman chica.gif', 'images/clases/logo/Chaman simbolo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conecta`
--

CREATE TABLE IF NOT EXISTS `conecta` (
  `id_conecta` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapa` int(11) NOT NULL,
  `id_mapaconectado` int(11) NOT NULL,
  PRIMARY KEY (`id_conecta`),
  KEY `fk_conectaM` (`id_mapa`),
  KEY `fk_Mconecta` (`id_mapaconectado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE IF NOT EXISTS `contiene` (
  `id_clase` int(11) NOT NULL,
  `id_simulacion` int(11) NOT NULL,
  PRIMARY KEY (`id_clase`,`id_simulacion`),
  KEY `fk_contieneM` (`id_simulacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deja_caer`
--

CREATE TABLE IF NOT EXISTS `deja_caer` (
  `id_monstruo` int(11) NOT NULL,
  `id_objeto` int(11) NOT NULL,
  PRIMARY KEY (`id_monstruo`,`id_objeto`),
  KEY `fk_deja_caerO` (`id_objeto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esta`
--

CREATE TABLE IF NOT EXISTS `esta` (
  `id_monstruo` int(11) NOT NULL,
  `id_mapa` int(11) NOT NULL,
  PRIMARY KEY (`id_monstruo`,`id_mapa`),
  KEY `fk_estaMa` (`id_mapa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE IF NOT EXISTS `habilidad` (
  `id_habilidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_clase` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `pm` int(11) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `tipo_arma` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `video` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `circulo` int(11) NOT NULL,
  PRIMARY KEY (`id_habilidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE IF NOT EXISTS `mapa` (
  `id_mapa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `area` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `orbe_revivir` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mapa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monstruo`
--

CREATE TABLE IF NOT EXISTS `monstruo` (
  `id_monstruo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `raza` int(11) NOT NULL,
  `elemento` int(11) NOT NULL,
  `armadura` int(11) NOT NULL,
  `tamanio` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `movimiento` int(11) NOT NULL,
  `velocidad` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `ps` int(11) NOT NULL,
  `exp_personaje` int(11) NOT NULL,
  `exp_clase` int(11) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_monstruo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `fk_noticiaUs` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `id_usuario`, `titulo`, `descripcion`, `fecha`, `tipo`, `imagen`, `ref`) VALUES
(1, 2, '[FAN BASE] Se buscan moderadores', 'Estamos escasos de moderadores, y estamos buscando varios moderadores tanto como para el foro como para la web.<br />', '2016-06-17 22:58:27', 1, 'images/noticias/tos_logo.png', 'http://www.tosbase.es/foro/viewtopic.php?f=7&t=51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE IF NOT EXISTS `objeto` (
  `id_objeto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_ingles` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `tipo_danio` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `clases` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacion`
--

CREATE TABLE IF NOT EXISTS `simulacion` (
  `id_simulacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `rango_1` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `rango_2` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rango_3` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rango_4` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rango_5` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rango_6` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rango_7` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FUE` int(11) NOT NULL DEFAULT '7',
  `CON` int(11) NOT NULL DEFAULT '4',
  `INT` int(11) NOT NULL DEFAULT '3',
  `SPR` int(11) NOT NULL DEFAULT '4',
  `DES` int(11) NOT NULL DEFAULT '9',
  PRIMARY KEY (`id_simulacion`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `fk_simulacionUs` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
