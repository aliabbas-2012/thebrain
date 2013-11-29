-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2013 at 12:23 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sfakhar1_thepuzzle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsp_account`
--

DROP TABLE IF EXISTS `bsp_account`;
CREATE TABLE IF NOT EXISTS `bsp_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bsp_account`
--

INSERT INTO `bsp_account` (`id`, `username`, `password`, `fullname`, `phone`, `email`, `gender`, `birthday`, `avatar`, `role`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'Brian', '41a1ed4e67dd563125ac4d270c0c21a4', 'Michael Seyum', '01776654320', 'kontakt@1348.eu', '2', '1975-10-30', '', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 'ThePuzzzle', '269f506ec7ed907115796c3e10de0c6f', 'Puzzzle', '', 'contact@thepuzzzle.com', '1', '1990-11-11', 'no_image', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_account_group`
--

DROP TABLE IF EXISTS `bsp_account_group`;
CREATE TABLE IF NOT EXISTS `bsp_account_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bsp_account_group`
--

INSERT INTO `bsp_account_group` (`id`, `group_name`, `author_id`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'Admin', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'Manager', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'User', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_advertising`
--

DROP TABLE IF EXISTS `bsp_advertising`;
CREATE TABLE IF NOT EXISTS `bsp_advertising` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `adv_name` varchar(255) DEFAULT NULL,
  `adv_img` varchar(255) NOT NULL,
  `adv_url` varchar(255) NOT NULL,
  `adv_position` int(11) DEFAULT NULL,
  `iStatus` tinyint(11) NOT NULL,
  `adv_name_de` varchar(255) NOT NULL,
  `adv_img_de` varchar(255) NOT NULL,
  `adv_url_de` varchar(255) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bsp_advertising`
--

INSERT INTO `bsp_advertising` (`id`, `adv_name`, `adv_img`, `adv_url`, `adv_position`, `iStatus`, `adv_name_de`, `adv_img_de`, `adv_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(2, 'Coca', 'adv808288Koala.jpg', 'http://thepuzzzle.com', 4, 2, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 'Pepsi', 'adv588196avatapro.jpg', 'http://thepuzzzle.com', 3, 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 'ssddsf', 'adv109587chatra.jpg', 'http://aww.com', 1, 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 'tets', 'adv429599chatra.jpg', 'http://www.yahoo.com', 1, 1, '', 'adv86610odeskclientpopu.png', 'http://www.yahoo.com', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 'test', 'adv532825chatra.jpg', 'http://thepuzzzle.com', 1, 1, '', 'adv54823odeskclientpopu.png', 'http://thepuzzzle.com', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 'ee', 'adv60941odeskclientpopu.png', 'http://thepuzzzle.com', 1, 1, 'gg', 'adv215436chatra.jpg', 'http://thepuzzzled.com', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_articla`
--

DROP TABLE IF EXISTS `bsp_articla`;
CREATE TABLE IF NOT EXISTS `bsp_articla` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) NOT NULL,
  `details_en` text NOT NULL,
  `details_de` longtext NOT NULL,
  `custom_url` varchar(255) DEFAULT NULL,
  `iStatus` tinyint(1) NOT NULL DEFAULT '0',
  `article_name_de` varchar(255) NOT NULL,
  `custom_url_de` varchar(255) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `bsp_articla`
--

INSERT INTO `bsp_articla` (`ID`, `article_name`, `details_en`, `details_de`, `custom_url`, `iStatus`, `article_name_de`, `custom_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(8, 'How it works  ', '<p>How it works&nbsp;</p>\n', '<link href="indexinfo.css" media="all" rel="stylesheet" type="text/css" />\n<div class="how-it-works">\n<div class="box1">\n<div class="title_how">Anbieter</div>\n\n<div class="below">1. So bietest Du Deine Mietgegest&auml;nde und Dienstleistugen an</div>\n\n<div class="explain-left">\n<h4>&nbsp;</h4>\n\n<div class="thumb1">&nbsp;</div>\n</div>\n\n<div class="explain-right">\n<h3 class="you-can-hourlie"><a href="">WOW K&auml;ufer mit Deinem Profil und bewerbe Dein Angebot</a></h3>\n\n<ul class="bubble_text_grey">\n	<li>Erstelle Deine Seite, erz&auml;hle Deine Geschichte, lade Deine Fotos und Videos hoch &amp; Enjoy</li>\n	<li>Teile deinen Besuchern Deine Verf&uuml;gbarkeit mit, offeriere unterschiedliche Preismodelle und schalte Sonderaktionen</li>\n</ul>\n\n<ul class="bubble_text_blue">\n	<li>TIP: Sammle positive Bewertungen.&nbsp;So schaffst Du Vertrauen und verdienst mehr Geld</li>\n	<li>TIP: Spar Dir aufwendige Akquise und Suche nach Arbeit. Erstelle Dein Angebot, mach mit und leg los.</li>\n</ul>\n</div>\n</div>\n\n<div class="box2">\n<div class="below">2. Hier kannst Du teilen, kommunizieren, Deine Rechnungen erstellen und verdienen</div>\n\n<div class="explain-left">\n<h4>&nbsp;</h4>\n\n<div class="thumb2">&nbsp;</div>\n</div>\n\n<div class="explain-right">\n<h3 class="you-can-hourlie"><a href="">Hier beh&auml;lst Du und Deine Kunden alles im &Uuml;berblick</a></h3>\n\n<ul class="bubble_text_grey">\n	<li>Erhalte eine &Uuml;bersicht &uuml;ber all Deine Verk&auml;ufe</li>\n	<li>Halte Kontakt mit Deinen Intressenten&nbsp;&uuml;ber unser&nbsp;sicheres Email-System</li>\n</ul>\n\n<ul class="bubble_text_blue">\n	<li>TIP: Sch&uuml;tze Deine Mietgegenst&auml;nde: Setze eine Kaution &uuml;ber den aktuellen Gebrauchswert Deines Gegenstandes fest - Jetzt bist Du bei Verlust oder Zerst&ouml;rung auf der sicheren Seite</li>\n	<li>TIP: Um Dir und Deine Kunden mehr Sicherheit zu geben, sollten alle Gesch&auml;fte und die Kommunikation &uuml;ber die Platform abgewickelt werden</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class="how-it-works">\n<div class="box3">\n<div class="title_how">K&Auml;UFER</div>\n\n<div class="below">1. Hier kannst Du entdecken</div>\n\n<div class="explain-left">\n<h4>&nbsp;</h4>\n\n<div class="thumb3">&nbsp;</div>\n</div>\n\n<div class="explain-right">\n<h3 class="you-can-hourlie"><a href="">Erhalte Dienstleistungen und Mietsachen zum Festpreis</a></h3>\n\n<ul class="bubble_text_grey">\n	<li>Finde passende&nbsp;Angebot</li>\n	<li>Bezahle erst nach erfolgreichem Abschluss gesichert durch unseres Secure Payment System</li>\n</ul>\n\n<ul class="bubble_text_blue">\n	<li>TIP: Entdecke Sonderangebote in Deiner Umgebung</li>\n</ul>\n</div>\n</div>\n\n<div class="box4">\n<div class="below">2. Behalte die &Uuml;bersicht &uuml;ber&nbsp;Kommunikation und deine geleisteten Bezahlungen</div>\n\n<div class="explain-left">\n<h4>&nbsp;</h4>\n\n<div class="thumb4">&nbsp;</div>\n</div>\n\n<div class="explain-right">\n<h3 class="you-can-hourlie"><a href="">So einfach bestellst du ein Angebot</a></h3>\n\n<ul class="bubble_text_grey">\n	<li>Bezahle und richte gegebenenfalls eine Kaution sicher &uuml;ber Paypal</li>\n	<li>Bewerte den Anbieter nach dem abgeschlossenen Gesch&auml;ft</li>\n	<li>Enjoy &amp; bis bald</li>\n</ul>\n\n<ul class="bubble_text_blue">\n	<li>TIP: Bei Mietung ist eine private Haftpflicht Versicherung vom Vorteil</li>\n	<li>TIP: Um Dir und Deinem Anbieter mehr Sicherheit zu gew&auml;hrleisten, sollten alle Gesch&auml;fte und die Kommunikation &uuml;ber ThePuzzzle abgewickelt werden</li>\n</ul>\n</div>\n</div>\n</div>\n', 'how', 1, 'How it works  ', 'how', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `bsp_articla` (`ID`, `article_name`, `details_en`, `details_de`, `custom_url`, `iStatus`, `article_name_de`, `custom_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(9, 'Term & Conditions              ', '<p>sfsd</p>\n', '<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font: normal normal normal 32px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); "><b>AGB&#39;S</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font: normal normal normal 32px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 39px; ">sddsf</p>\n\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 21.0px Arial; color: #444444"><b>Die kurze Zusammenfassung</b></p>\n\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 19.0px Arial; color: #444444; min-height: 22.0px">&nbsp;</p>\n\n<ul>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Jeder hier angebotene Service ist ein <b>Puzzzle</b></li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Die Registrierung ist kostenlos, nur registrierte Benutzer k&ouml;nnen bei <b>The Puzzzle</b> kaufen oder verkaufen</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Alle Anbieter m&uuml;ssen Ihre Bestellungen abschlie&szlig;en, und nicht absichtlich Bestellungen annullieren</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Benutzer bieten und akzeptieren keine anderen Bezahlformen, als &uuml;ber <b>The Puzzzle</b>. <b>Puzzles</b> werden &uuml;ber den &quot;Jetzt Bestellen&quot; Knopf gebucht</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">K&auml;ufern werden alle Rechte f&uuml;r Ihre gelieferte Leistungen &uuml;bertragen, au&szlig;er es wurde in der <b>Puzzzle-Beschreibung </b>explizit spezifiziert</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">F&uuml;r den Anbieter fallen nur nach der Bestellung 1 Euro an Kosten an. F&uuml;r die Zusatzleistung <b>&quot;Spezial&quot;</b>, welche eine Top-Platzierung garantiert, werden einmalig 2,99 Euro berechnet</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">K&auml;ufer bezahlen <b>The Puzzzle</b> im voraus - <b>The Puzzzle</b> akkreditiert den Anbieter nach dem die Bestellung abgeschlossen ist</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Wird eine Bestellung annulliert, erh&auml;lt der K&auml;ufer sein Geld zur&uuml;ck</li>\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 18px/normal Arial; color: rgb(68, 68, 68); ">Anbieter Bewertungen basieren auf den Meinungen der K&auml;ufer, Anzahl der Bestellungen, Annullierungen und Versp&auml;tungen&nbsp;</li>\n	<li style="list-style-type:none; background: url(''../images/bubble2.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 20px/normal Arial; color: #1389ef; "><b>Mach mit und Enjoy!</b></li>\n</ul>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 20px/normal Arial; color: rgb(240, 56, 170); ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">LIES DIR BITTE DIE GESCH&Auml;FTSBEDINGUNGEN GENAU DURCH; SIE ENTHALTEN WICHTIGE INFORMATIONEN BEZ&Uuml;GLICH DEINER RECHTE UND PFLICHTEN. DARIN SIND VERSCHIEDENE AUSNAHMEN UND EINSCHR&Auml;NKUNGEN ENTHALTEN UND EINE REGELUNG DAR&Uuml;BER, WIE STREITIGKEITEN JURISTISCH GEHANDHABT WERDEN.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Letzte Aktualisierung: 04. Oktober 2013</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle inhab. Brian Michael Seyum (im Folgenden &bdquo;<b>ThePuzzzle</b>&ldquo;, &bdquo;<b>wir</b>&ldquo;, &bdquo;<b>uns</b>&ldquo;&nbsp;<b>oder</b>&nbsp;&bdquo;<b>unser</b>&ldquo; genannt) bietet eine Online-Plattform, die Anbieter mit zu vermietenden Objekten und Dienstleistungen mit Kunden in Verbindung bringt, die solche Objekte und Dienstleistungen (zusammen die &bdquo;<b>Dienstleistungen</b>&ldquo;) mieten m&ouml;chten; diese Dienstleistungen sind auf&nbsp;<a href="http://www.thepuzzzle.com/" style="color: rgb(7, 130, 193); "><span style="color: rgb(29, 149, 203); ">http://www.thepuzzzle.com</span></a>, und anderen Websites (zusammen die &bdquo;<b>Website</b>&ldquo;) zug&auml;nglich, &uuml;ber die ThePuzzzle die Dienstleistungen anbietet, ebenso wie als Anwendung f&uuml;r mobile Ger&auml;te (die &bdquo;<b>Anwendung</b>&ldquo;). Mit der Benutzung der Website und Anwendung stimmen Sie zu, die allgemeinen Gesch&auml;ftsbedingungen dieser Dienstleistungsbedingungen (&bdquo;<b>Bedingungen</b>&ldquo;) einzuhalten und an sie gebunden zu sein, unabh&auml;ngig davon, ob Sie ein eingetragener Benutzer der Dienstleistungen werden oder nicht. Diese Bedingungen regeln Ihren Zugang und Ihre Benutzung der Website, Anwendung, Dienstleistungen und allen kollektiven Inhalts (unten definiert), ebenso wie Ihre Teilnahme am Empfehlungsprogramm (unten definiert), und stellt eine bindende rechtsg&uuml;ltige Vereinbarung zwischen Ihnen und ThePuzzzle dar. Lesen Sie diese Bedingungen und unsere Datenschutzrichtlinie aufmerksam durch, die auf&nbsp;<a href="http://www.thepuzzzle.com/loadArtical/9-term-conditions" style="color: rgb(7, 130, 193); "><span style="color: rgb(29, 149, 203); ">http://www.thepuzzzle.com/loadArtical/9-term-conditions</span></a>&nbsp;zu finden sind; auf diese Webseite wird in diesen Bedingungen verwiesen. Wenn Sie diesen Bedingungen nicht zustimmen, haben Sie kein Recht, Informationen von der Website oder Anwendung zu beziehen oder diese anderweitig weiter zu benutzen. Die Benutzung der Website und Anwendung entgegen diesen Bestimmungen kann zivil- und strafrechtliche Folgen nach sich ziehen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">DIE WEBSITE, ANWENDUNG UND DIENSTLEISTUNGEN BILDEN EINE ONLINE-PLATTFORM, &Uuml;BER DIE ANBIETER (UNTEN DEFINIERT) ANGEBOTE (UNTEN DEFINIERT) VON DIENSTLEISTUNGEN (UNTEN DEFINIERT) ERSTELLEN UND KUNDE (UNTEN DEFINIERT) SICH &Uuml;BER ANGEBOTE INFORMIEREN UND DIESE DIREKT BEI DEN ANBIETERN BUCHEN K&Ouml;NNEN. SIE VERSTEHEN UND STIMMEN ZU, DAS THEPUZZZLE KEIN BETEILIGTER AN VEREINBARUNGEN IST, DIE ZWISCHEN ANBIETERN UND KUNDEN GETROFFEN WERDEN, UND DASS THEPUZZZLE KEIN VERMITTLER ODER VERSICHERER IST. THEPUZZZLE HAT KEINE KONTROLLE &Uuml;BER DIE HANDLUNGSWEISE VON ANBIETERN, KUNDEN UND ANDEREN BENUTZERN DER WEBSITE, ODER &Uuml;BER DIE ANWENDUNG UND DIENSTLEISTUNGEN, UND LEHNT JEDE HAFTUNG IN DIESER HINSICHT AB.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; ">Bestimmte Bereiche der Website und Anwendung (sowie Ihr Zugang oder Ihre Benutzung von bestimmten Aspekten der Dienstleistungen oder des kollektiven Inhalts) k&ouml;nnen andere Bedingungen ausgeschrieben haben oder von Ihnen erfordern, dass Sie zus&auml;tzlichen Bedingungen zustimmen und diese akzeptieren. Wenn es einen Widerspruch zwischen diesen Bedingungen und den f&uuml;r einen bestimmten Bereich der Website, Anwendung, Dienstleistungen oder des kollektiven Inhalts ausgeschriebenen Bestimmungen gibt, dann haben die letzteren Bedingungen Vorrang in Bezug auf Ihre Benutzung oder Ihren Zugang zu diesem Bereich der Website, Anwendung, Dienstleistungen oder des kollektiven Inhalts.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">SIE BEST&Auml;TIGEN UND STIMMEN ZU, DASS SIE DURCH DAS ZUGREIFEN UND BENUTZEN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN, ODER DURCH DAS HERUNTERLADEN ODER POSTEN VON INHALTEN VON BZW. AUF DER WEBSITE, &Uuml;BER DIE ANWENDUNG ODER DIE DIENSTLEISTUNGEN, ODER DURCH DAS TEILNEHMEN AM EMPFEHLUNGSPROGRAMM, ANZEIGEN, DASS SIE DIESE BEDINGUNGEN GELESEN HABEN UND VERSTEHEN UND ZUSTIMMEN, DASS SIE AN DIESE BEDINGUNGEN GEBUNDEN SIND, UNABH&Auml;NGIG DAVON, OB SIE SICH F&Uuml;R DIE WEBSITE UND ANWENDUNG EINGETRAGEN HABEN ODER NICHT. WENN SIE DIESEN BEDINGUNGEN NICHT ZUSTIMMEN, HABEN SIE KEIN RECHT, AUF DIESE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER DEN KOLLEKTIVEN INHALT ZUZUGREIFEN ODER DIESE ZU BENUTZEN, ODER AM EMPFEHLUNGSPROGRAMM TEILZUNEHMEN. Wenn Sie diese Bedingungen im Namen einer Firma oder anderen rechtlichen Entit&auml;t akzeptieren oder ihnen zustimmen, best&auml;tigen und gew&auml;hrleisten Sie, dass Sie die Vollmacht haben, diese Firma oder andere rechtliche Entit&auml;t an diese Bedingungen zu binden, und dass in einem solchen Falle &bdquo;Sie&ldquo; und &bdquo;Ihr&ldquo; auf diese Firma oder rechtliche Entit&auml;t verweist und zutrifft.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Modifizierung</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle beh&auml;lt sich das Recht vor, zu jeder Zeit und ohne vorherige Ank&uuml;ndigung die Website, Anwendung oder Dienstleistungen im eigenen Ermessen zu modifizieren, oder diese Bedingungen zu modifizieren, einschlie&szlig;lich der Dienstleistungsgeb&uuml;hren. Wenn wir diese Bedingungen modifizieren, werden wir die Modifizierung auf der Website oder Anwendung verf&uuml;gbar machen oder Ihnen die Modifizierung bekanntgeben. Wir werden auch das &bdquo;Letzte Aktualisierungsdatum&ldquo; am oberen Rand dieser Bedingungen aktualisieren. Mit dem weiteren Zugreifen oder Benutzen der Website, Anwendung oder Dienstleistungen, nachdem wir eine Modifizierung auf der Website oder &uuml;ber die Anwendung gepostet oder Ihnen eine Modifizierung bekanntgegeben haben, zeigen Sie Ihre Zustimmung an, an die modifizierten Bedingungen gebunden zu sein. Wenn die modifizierten Bedingungen f&uuml;r Sie nicht akzeptabel sind, haben Sie rechtlich gesehen nur die M&ouml;glichkeit, die Benutzung der Website, Anwendung und Dienstleistungen einzustellen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Berechtigung&nbsp;</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Die Website, Anwendung und Dienstleistungen sind ausschlie&szlig;lich f&uuml;r Personen im Alter von 18 Jahren oder dar&uuml;ber gedacht. Der Zugang oder die Benutzung der Website, Anwendung und Dienstleistungen durch Personen unter 18 Jahren ist ausdr&uuml;cklich verboten. Mit dem Zugang oder der Benutzung der Website, Anwendung und Dienstleistungen best&auml;tigen und gew&auml;hrleisten Sie, dass Sie 18 Jahre oder &auml;lter sind.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Funktionsweise der Website, Anwendung und Dienstleistungen</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 16px/normal Arial; color: rgb(68, 68, 68); "><span style="font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle</span><span style="font: normal normal normal 11px/normal Arial; ">&nbsp;</span>betreibt eine Online-Plattform, die den Abschluss von Miet- oder Dienstleisungsvertr&auml;gen aller Art zwischen den Nutzern erm&ouml;glicht.&nbsp;<span style="font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle</span>&nbsp;bietet selbst keine Objekte zur Vermietung oder Dienstleistungen an und wird nicht Vertragspartei der abzuschlie&szlig;enden Miet- bzw. Dienstleisungsvertr&auml;ge. Diese kommen ausschlie&szlig;lich zwischen den einzelnen Nutzern zustande.&nbsp;<span style="font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle</span>&nbsp;erm&ouml;glicht es Nachfragern und Anbietern von Dienstleistungen zu vereinbaren. Kunden k&ouml;nnen Service- Anbieter vergleichen, Konto errichten, Angebote verwalten und Service-Anbieter bewerten. Service-Anbieter k&ouml;nnen ein Konto einrichten, sich &uuml;ber ein Profil den Kunden darstellen,&nbsp;<span style="font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Angebote</span>&nbsp;verwalten und Kunden bewerten.&nbsp;<span style="font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle</span>&nbsp;stellt eine entsprechende Plattform f&uuml;r die Nutzer zu Verf&uuml;gung.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Wie oben erkl&auml;rt, stellt ThePuzzzle Kunden und Anbietern eine online Plattform oder einen Marktplatz bereit, um sich online zu treffen und Buchungen von Objekten und Dienstleistungen direkt miteinander zu arrangieren. ThePuzzzle ist weder Besitzer oder Betreiber von Eigentum, u.a. von allen hier eigestellten Angeboten und befindet sich weder im Besitz von ThePuzzzle noch wird dieses von ThePuzzzle verkauft, wiederverkauft, ausgestattet, bereitgestellt, vermietet, wiedervermietet, verwaltet und/oder geleitet. Die Verantwortung von ThePuzzzle ist auf Folgendes begrenzt: (i) die Verf&uuml;gbarkeit der Website, Anwendung und Dienstleistungen zu vereinfachen, und (ii) als eingeschr&auml;nkter zahlungseinziehender Vertreter jedes Anbieters zum Zweck der Annahme von Zahlungen von Kunden im Namen des jeweiligen Anbieters zu fungieren.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">BEACHTEN SIE BITTE, DASS DIE WEBSITE, ANWENDUNG UND DIENSTLEISTUNGEN WIE OBEN ANGEGEBEN DAZU DIENEN SOLLEN, ES ANBIETERN UND KUNDEN ZU ERLEICHTERN, SICH ZU TREFFEN UND SICH HINSICHTLICH DER BUCHUNGEN VON DIENSTLEISTUNGEN ZU EINIGEN. THEPUZZZLE HAT KEINE KONTROLLE &Uuml;BER DIE IN ANGEBOTEN ENTHALTENEN INHALTE ODER &Uuml;BER DEN ZUSTAND, DIE RECHTM&Auml;SSIGKEIT ODER DIE EIGNUNG EINES ANGEBOTS. THEPUZZZLE &Uuml;BERNIMMT KEINE VERANTWORTUNG ODER HAFTUNG, DIE MIT DEN ANGEBOTEN UND DIENSTLEISTUNGEN ZUSAMMENH&Auml;NGT. DEMENTSPRECHEND ERFOLGEN BUCHUNGEN AUF EIGENES RISIKO DES KUNDENS.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Kontoeintragung</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Um auf bestimmte Funktionen der Website und Anwendung zuzugreifen und um eine Dienstleistung zu buchen oder ein Angebot zu erstellen, m&uuml;ssen Sie sich eintragen, um ein Konto (&bdquo;<b>ThePuzzzle-Konto</b>&ldquo;) zu erstellen und Mitglied zu werden. Sie k&ouml;nnen sich eintragen, um den Dienstleistungen direkt &uuml;ber die Website oder Anwendung, oder wie in diesem Abschnitt beschrieben, beizutreten.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sich k&ouml;nnen sich zum Beitreten auch eintragen, indem Sie sich in Ihrem Konto bei bestimmten Drittanbietern von Social Networking Sites (&bdquo;<b>SNS</b>&ldquo;) (u.a. Facebook) anmelden; jedes derartige Konto, ein &bdquo;<b>Drittparteikonto</b>&ldquo;, &uuml;ber unsere Website oder Anwendung, wie unten beschrieben. Als Teil der Funktionalit&auml;t der Website, Anwendung und Dienstleistungen k&ouml;nnen Sie Ihr ThePuzzzle-Konto mit Drittparteikonten verkn&uuml;pfen, indem Sie: (i) ThePuzzzle Ihre Drittparteikonto-Anmeldeinformation &uuml;ber die Website, Anwendung oder Dienstleistungen bereitstellen; oder (ii) ThePuzzzle erlauben, auf Ihr Drittparteikonto zuzugreifen, wie es gem&auml;&szlig; den geltenden Bestimmungen erlaubt ist, die Ihre Benutzung eines Drittparteikontos regeln. Sie best&auml;tigen, dass Sie berechtigt sind, Ihre Drittparteikonto-Anmeldeinformation ThePuzzzle bekanntzugeben und/oder ThePuzzzle Zugang zu Ihrem Drittparteikonto zu gew&auml;hren (u.a. zur Benutzung f&uuml;r die hierin beschriebenen Zwecke), ohne dass Sie dabei die Bedingungen verletzen, die Ihre Benutzung des jeweiligen Drittparteikontos regeln, und ohne ThePuzzzle zu verpflichten, Geb&uuml;hren zu bezahlen oder ThePuzzzle Nutzungsbeschr&auml;nkungen zu unterwerfen, die von solchen Drittpartei-Dienstleistungsanbietern auferlegt werden. Indem Sie ThePuzzzle Zugriff auf Ihr Drittparteikonto gew&auml;hren, geben Sie zu verstehen, dass ThePuzzzle alle Inhalte, die Sie bereitgestellt und in Ihrem Drittparteikonto gespeichert haben (&bdquo;<b>SNS-Inhalt</b>&ldquo;), aufrufen, verf&uuml;gbar machen und (falls zutreffend) speichern wird, damit diese auf und &uuml;ber die Website, Anwendung und Dienstleistungen &uuml;ber Ihr ThePuzzzle-Konto und Ihre ThePuzzzle-Konto-Profilseite verf&uuml;gbar sind. Falls nicht anders in diesen Bedingungen angegeben, sollen alle SNS-Inhalte in jeder Hinsicht als Mitgliedsinhalte betrachtet werden. Je nach den Drittpartei-Konten, die Sie ausw&auml;hlen und den Datenschutzeinstellungen unterwerfen, die Sie in solchen Drittparteikonten festgelegt haben, werden personenbezogene Informationen, die Sie &uuml;ber Ihre Drittparteikonten posten, auf und mittels Ihres ThePuzzzle-Konto auf der Website, Anwendung und Dienstleistungen verf&uuml;gbar sein. Beachten Sie bitte, dass der SNS-Inhalt nicht mehr auf oder mittels der Website, Anwendung und Dienstleistungen verf&uuml;gbar sein wird, wenn ein Drittparteikonto oder dazugeh&ouml;riger Service unverf&uuml;gbar wird oder ThePuzzzles Zugriff auf ein solches Drittparteikonto vom Drittpartei-Dienstleistungsanbieter gek&uuml;ndigt wird. Sie k&ouml;nnen die Verbindung zwischen Ihrem ThePuzzzle-Konto und Ihren Drittparteikonten jederzeit deaktivieren, indem Sie sich zum Abschnitt &bdquo;Einstellungen&ldquo; der Website oder Anwendung begeben. BEACHTEN SIE BITTE, DASS IHRE BEZIEHUNG ZU DEN MIT IHREN DRITTPARTEIKONTEN ZUSAMMENH&Auml;NGENDEN DRITTPARTEI-DIENSTLEISTUNGSANBIETERN AUSSCHLIESSLICH DURCH IHRE VEREINBARUNG(EN) MIT DERARTIGEN DRITTPARTEI-DIENSTLEISTUNGSANBIETERN GEREGELT WIRD. ThePuzzzle bem&uuml;ht sich nicht, SNS-Inhalte zu irgendwelchen Zwecken, z.B. auf Richtigkeit, Rechtm&auml;&szlig;igkeit oder Nichtverletzung, zu &uuml;berpr&uuml;fen, und ThePuzzzle ist nicht verantwortlich f&uuml;r SNS-Inhalte.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Auf Basis der pers&ouml;nlichen Informationen, die Sie uns bereitstellen oder die wir &uuml;ber eine SNS wie oben beschrieben einholen, werden wir Ihr ThePuzzzle-Konto und Ihre ThePuzzzle-Konto-Profilseite zu Ihrer Benutzung der Website und Anwendung erstellen. Sie d&uuml;rfen nicht mehr als ein (1) aktives ThePuzzzle-Konto haben. Sie stimmen zu, richtige, aktuelle und vollst&auml;ndige Informationen w&auml;hrend des Eintragungsprozesses bereitzustellen und diese Informationen zu aktualisieren, damit sie stets richtig, aktuell und vollst&auml;ndig sind. ThePuzzzle beh&auml;lt sich das Recht vor, Ihr ThePuzzzle-Konto und Ihren Zugang zu der Website, Anwendung und den Dienstleistungen zu suspendieren oder zu terminieren, wenn Sie mehr als ein (1) ThePuzzzle-Konto erstellen oder wenn sich Informationen, die w&auml;hrend des Eintragungsprozesses oder danach bereitgestellt wurden, als falsch, nicht aktuell oder unvollst&auml;ndig erweisen. Sie sind f&uuml;r die sichere Aufbewahrung Ihres Passworts verantwortlich. Sie stimmen zu, dass Sie Ihr Passwort keiner Drittpartei mitteilen werden und dass Sie die alleinige Verantwortung f&uuml;r Aktivit&auml;ten oder Handlungen unter Ihrem ThePuzzzle-Konto &uuml;bernehmen, unabh&auml;ngig davon, ob Sie solche Aktivit&auml;ten oder Handlungen genehmigt haben oder nicht. Sie werden ThePuzzzle &uuml;ber jede unerlaubte Benutzung Ihres ThePuzzzle-Kontos informieren.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Angebote von Dienstleistungen und Vermietungen</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Als Mitglied k&ouml;nnen Sie Angebote erstellen. Zu diesem Zweck wird Ihnen eine Reihe von Fragen zu dem Inserat gestellt, die angeboten werden sollen, u.a. zum Ort, zur Verf&uuml;gbarkeit sowie zu den Preisen und den damit verbundenen Bestimmungen und Finanzbedingungen. Um in der Angebotsliste &uuml;ber Website, Anwendung und Dienstleistungen aufgef&uuml;hrt zu werden, muss jedes Angebot eine g&uuml;ltige physische Adresse haben. Angebote werden der &Ouml;ffentlichkeit &uuml;ber Website, Anwendung und Dienstleistungen verf&uuml;gbar gemacht. Andere Mitglieder werden Ihre Dienstleistung auf Basis der in Ihren Angeboten aufgef&uuml;hrten Informationen &uuml;ber Website, Anwendung und Dienstleistungen buchen k&ouml;nnen. Sie verstehen und stimmen zu, dass Sie, wenn ein Kunde die Buchung Ihres Angebots anfordert, den Preis f&uuml;r eine solche Buchung nicht mehr &auml;ndern k&ouml;nnen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sie best&auml;tigen und stimmen zu, dass Sie f&uuml;r alle von Ihnen geposteten Angebote verantwortlich sind. Dementsprechend best&auml;tigen und gew&auml;hrleisten Sie, dass von Ihnen gepostete Angebote und das Buchen oder ein Kundebesuch des Angebots, die Sie ihn Ihrem Angebot f&uuml;hren, (i) keine Vereinbarungen verletzen, die Sie mit Drittparteien geschlossen haben und (ii) (a) allen geltenden Gesetzen, Steueranforderungen, Regeln und Bestimmungen entsprechen, die f&uuml;r das Inserat gelten, die Sie in Ihrem Angebot f&uuml;hren und (b) nicht im Widerspruch mit den Rechten von Dritten stehen. Beachten Sie bitte, dass ThePuzzzle keine Verantwortung daf&uuml;r &uuml;bernimmt, dass ein Kunde alle geltenden Gesetze, Regeln und Bestimmungen einh&auml;lt. ThePuzzzle beh&auml;lt sich das Recht vor, den Zugang zu jedem Angebot aus beliebigem Grund jederzeit und ohne vorherige Ank&uuml;ndigung zu entfernen oder zu deaktivieren, einschlie&szlig;lich zu Angeboten, die ThePuzzzle im eigenen Ermessen aus beliebigem Grund als unzul&auml;ssig, nicht diesen Bedingungen entsprechend oder anderweitig sch&auml;dlich f&uuml;r die Website, Anwendung oder Dienstleistungen erachtet.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sie verstehen und stimmen zu, dass ThePuzzzle f&uuml;r Sie als Anbieter nicht als Versicherer oder Agent f&uuml;r Vertragsabschl&uuml;sse handelt. Falls ein Kunde die Buchung Ihres Inserats anfordert und in Ihr Angebot in Anspruch nimmt, ist jede mit dem Kunden getroffene Vereinbarung eine Vereinbarung zwischen Ihnen und dem jeweiligen Kunde, und ThePuzzzle ist keine Vertragspartei daran. Ungeachtet des Vorstehenden fungiert ThePuzzzle als eingeschr&auml;nkt bevollm&auml;chtigter, zahlungseinziehender Vertreter des Anbieters zum Zweck der Annahme von Zahlungen von Kunden im Namen des Anbieters und ist f&uuml;r die &Uuml;bermittlung derartiger Zahlungen an den Anbieter verantwortlich.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Wenn Sie ein Angebot erstellen, k&ouml;nnen Sie sich entscheiden, bestimmte Anforderungen einzuschlie&szlig;en, die von Mitgliedern erf&uuml;llt werden m&uuml;ssen, die berechtigt sind, eine Buchung Ihres Angebots anzufordern; eine Anforderung k&ouml;nnte beispielsweise sein, dass Mitglieder &uuml;ber ein Profilbild oder eine verifizierte Telefonnummer verf&uuml;gen m&uuml;ssen, um Ihr Angebot zu buchen. Jedes Mitglied, das Angebote bucht m&ouml;chte, die in Angeboten mit derartigen Anforderungen enthalten sind, muss diese Anforderungen erf&uuml;llen. Weitere Informationen &uuml;ber das Festlegen derartiger Anforderungen sind &uuml;ber den &bdquo;Hosting&ldquo;-Abschnitt der Website, Anwendung und Dienstleistungen erh&auml;ltlich.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Wenn Sie ein Anbieter sind, stellt ThePuzzzle Ihnen bestimmte Tools zu Verf&uuml;gung, die Ihnen helfen, informierte Entscheidungen dar&uuml;ber zu treffen, welche Mitglieder Sie zur Best&auml;tigung f&uuml;r Buchungen Ihrs Angebots ausw&auml;hlen. Sie best&auml;tigen und stimmen zu, dass Sie als Anbieter f&uuml;r Ihre eigenen Handlungen und Auslassungen verantwortlich sind, ebenso wie f&uuml;r die Handlungen und Auslassungen von Personen, die auf Ihre Aufforderung oder Einladung hin das Angebot in Anspruch nehmen, ausschlie&szlig;lich des Kundees (und der Personen, die der Kunde ggf. hinzu bezieht).</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle empfiehlt, dass Anbieter eine entsprechende Versicherung f&uuml;r ihre Objekte abschlie&szlig;en. &Uuml;berpr&uuml;fen Sie bitte sorgf&auml;ltig jede Versicherungspolice, die Sie f&uuml;r Ihr Objekt haben, und stellen Sie insbesondere sicher, dass Sie alle Ausschl&uuml;sse und Selbstbeteiligungen kennen und verstehen, die f&uuml;r diese Versicherungspolicen gelten, so z.B., ob Ihre Versicherungspolice die Handlungen oder Nichthandlungen von Kunden (und den Personen, die der Kunde ggf. hinzu bezieht) abdeckt, wenn diese von weiteren genutzt wird.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Keine Empfehlungen</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle empfiehlt keine Mitglieder oder Angebote. Obwohl diese Bedingungen von Mitgliedern verlangen, dass sie richtige Informationen bereitstellen, versuchen wir nicht, die angebliche Identit&auml;t von Mitgliedern zu best&auml;tigen. Sie sind daf&uuml;r verantwortlich, die Identit&auml;t und Eignung von anderen, die Sie &uuml;ber die Website, Anwendung und Dienstleistungen kontaktieren, zu bestimmen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Mit der Benutzung der Website, Anwendung und Dienstleistungen stimmen Sie zu, dass Rechtsmittel und Haftungen, die Sie f&uuml;r Handlungen oder Auslassungen anderer Mitglieder oder anderer Drittparteien geltend machen wollen, auf Anspr&uuml;che gegen&uuml;ber den jeweiligen Mitgliedern oder anderen Drittparteien beschr&auml;nkt sind, die Ihnen Schaden zugef&uuml;gt haben, und Sie stimmen zu, dass Sie nicht versuchen werden, ThePuzzzle bez&uuml;glich solcher Handlungen oder Auslassungen haftbar zu machen oder gegen ThePuzzzle Rechtsmittel zu ergreifen. Dementsprechend bitten wir Sie, direkt mit anderen Mitgliedern &uuml;ber die Website und Dienstleistungen hinsichtlich der von Ihnen gemachten Buchungen oder Angebote zu kommunizieren. Diese Einschr&auml;nkung gilt nicht f&uuml;r Anspr&uuml;che eines Anbieters gegen ThePuzzzle in Bezug auf die &Uuml;berweisung von Zahlungen, die ThePuzzzle im Namen eines Anbieters von Kunden erhalten hat. Diese unterliegen stattdessen den in dem unten folgenden Abschnitt mit der &Uuml;berschrift &bdquo;Haftungsbeschr&auml;nkung&ldquo; beschriebenen Einschr&auml;nkungen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Buchungen und Finanzbedingungen</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">Buchungen und Finanzbedingungen f&uuml;r Anbieter</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Wenn Sie ein Anbieter sind und eine Buchung f&uuml;r Ihr Angebot wird &uuml;ber die Website, Anwendung und Dienstleistungen angefordert, m&uuml;ssen Sie die Buchung innerhalb von 24 Stunden nach Buchungsanforderung (wie von ThePuzzzle im eigenen Ermessen bestimmt) entweder best&auml;tigen oder ablehnen, oder die Buchungsanforderung wird automatisch storniert. Wenn eine Buchung &uuml;ber die Website, Anwendung und Dienstleistungen angefordert wird, &uuml;bermitteln wir Ihnen (i) den Vor- und Nachnamen des Kundens, der die Buchung angefordert hat, (ii) einen Link zur ThePuzzzle-Konto-Profilseite des Kundens, (iii) die Namen aller Mitglieder einer SNS, mit denen Sie &bdquo;befreundet&ldquo; oder mit denen Sie auf der SNS verbunden sind, wenn diese Personen auf der SNS auch mit dem Kunde &bdquo;befreundet&ldquo; oder verbunden sind, und (iv) eine Anzeige, dass der Name, den der Kunde ThePuzzzle mitteilte, als der Kunde Mitglied wurde, mit dem Namen &uuml;bereinstimmt, den der Kunde den SNSs mitteilte, mit denen der Kunde sein oder ihr ThePuzzzle-Konto verkn&uuml;pft hat, damit Sie solche Informationen anzeigen k&ouml;nnen, bevor Sie die Buchung best&auml;tigen oder ablehnen. Wenn Sie nicht imstande sind, sich innerhalb dieser Zeitspanne von 24 Stunden zu entscheiden, eine Buchung zu best&auml;tigen oder abzulehnen, werden alle Betr&auml;ge, die von ThePuzzzle f&uuml;r die angeforderte Buchung eingezogen wurden, auf die Kreditkarte des jeweiligen Kundens zur&uuml;ckerstattet, und eine Vorautorisierung dieser Kreditkarte wird freigegeben. Wenn Sie eine von einem Kunde angeforderte Buchung best&auml;tigen, wird ThePuzzzle Ihnen eine E-Mail, eine Textnachricht oder eine Nachricht &uuml;ber die Anwendung senden und diese Buchung best&auml;tigen, je nach den Optionen, die Sie &uuml;ber die Website, Anwendung und Dienstleistungen ausgew&auml;hlt haben.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Die in jedem Angebot angezeigten Geb&uuml;hren setzen sich aus den Angebotsgeb&uuml;hren (unten definiert) und den Kundegeb&uuml;hren (unten definiert) zusammen. Wo zutreffend k&ouml;nnen zus&auml;tzlich zu den Angebotsgeb&uuml;hren und den Kundengeb&uuml;hren auch Steuern anfallen. Die Angebotsgeb&uuml;hren, Kundengeb&uuml;hren und anfallenden Steuern werden in diesen Bedingungen zusammen als &bdquo;<b>Gesamtgeb&uuml;hren</b>&ldquo; bezeichnet. Die f&auml;lligen und vom Kunde zu zahlenden Betr&auml;ge, die ausschlie&szlig;lich mit der Unterkunft des Kundens verbunden sind, sind die &bdquo;<b>Angebotsgeb&uuml;hren</b>&ldquo;. Beachten Sie bitte, dass der Anbieter und nicht ThePuzzzle die Angebotsgeb&uuml;hren bestimmt. Die Angebotsgeb&uuml;hren kann eine Zusatzgeb&uuml;hr einschlie&szlig;en; dies liegt im Ermessen des Anbieters.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ThePuzzzle stellt Kunden eine Geb&uuml;hr f&uuml;r die Nutzung der online Plattform auf Basis eines Fixsatzes von 1&euro; in Rechnung, die die &bdquo;<b>Kundengeb&uuml;hren</b>&ldquo; darstellen. Die Kundengeb&uuml;hren sind in den Angebotsgeb&uuml;hren inbegriffen. ThePuzzzle wird die Angebotsgeb&uuml;hren zum Zeitpunkt der Buchungsbest&auml;tigung einziehen (d.h. wenn der Anbieter die Buchung innerhalb von 24 Stunden der Buchungsanforderung best&auml;tigt) und wird die Zahlung der Angebotsgeb&uuml;hren (abz&uuml;glich der Anbietergeb&uuml;hren von ThePuzzzle (unten definiert)) an den Anbieter innerhalb von 24 Stunden nach Ankunft des Kundens in der jeweiligen Unterkunft in die Wege leiten (sofern dem Kunde keine R&uuml;ckerstattung zustehen sollte).</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Ernennung von ThePuzzzle als zahlungseinziehender Vertreter f&uuml;r den Kunden</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Der Anbieter ernennt ThePuzzzle hiermit zum eingeschr&auml;nkten zahlungseinziehenden Vertreter ausschlie&szlig;lich zum Zweck des Einzugs der seitens der Kunde geleisteten Zahlungen im Namen des Anbieters. Der Anbieter stimmt zu, dass eine von einem Kunde durch ThePuzzzle geleistete Zahlung genauso angesehen wird, als wenn die Zahlung direkt an den Anbieter erfolgt w&auml;re, und der Anbieter wird dem Kunde die Unterkunft in der vereinbarten Weise zur Verf&uuml;gung stellen, als ob der Anbieter die Unterkunftgeb&uuml;hren erhalten h&auml;tte. Der Anbieter stimmt zu, dass ThePuzzzle gem&auml;&szlig; der vom Anbieter ausgew&auml;hlten Widerrufsbelehrung und wie im entsprechenden Angebot widergespiegelt (i) dem Kunde die Stornierung der Buchung gestatten kann und (ii) dem Kunde jenen Teil der Unterkunftgeb&uuml;hren zur&uuml;ckerstatten kann, die in der geltenden Widerrufsbelehrung angegeben sind. Mit der Annahme der Ernennung als eingeschr&auml;nkt bevollm&auml;chtigter Vertreter des Anbieters &uuml;bernimmt ThePuzzzle keine Haftung f&uuml;r Handlungen oder Unterlassungen des Anbieters.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Beachten Sie bitte, dass ThePuzzzle gegenw&auml;rtig keine Geb&uuml;hren f&uuml;r die Erstellung von Angeboten erhebt. Sie best&auml;tigen jedoch und stimmen zu, dass ThePuzzzle sich das Recht vorbeh&auml;lt, Ihnen f&uuml;r das Erstellen von Angeboten im eigenen Ermessen Geb&uuml;hren in Rechnung zu stellen und einzuziehen. Beachten Sie bitte, dass ThePuzzzle die Einziehung einer Angebotsgeb&uuml;hr &uuml;ber die Website, Anwendung und Dienstleistungen vor der Implementierung einer solchen Angebotsgeb&uuml;hr-Funktion bekanntgeben wird.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Buchungen und Finanzbedingungen f&uuml;r Kunden</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Der Anbieter und nicht ThePuzzzle sind ausschlie&szlig;lich daf&uuml;r verantwortlich, best&auml;tigte Buchungen zu respektieren und Angebote, die &uuml;ber die Website, Anwendung und Dienstleistungen reserviert wurden, verf&uuml;gbar zu machen. Wenn Sie sich als Kunde entschlie&szlig;en, mit einem Anbieter eine Transaktion f&uuml;r die Buchung eines Angebots durchzuf&uuml;hren, stimmen Sie zu und verstehen, dass Sie eine Vereinbarung mit dem Anbieter schlie&szlig;en m&uuml;ssen, und Sie stimmen zu, alle mit einer solchen Dienstleistung zusammenh&auml;ngenden und vom Anbieter auferlegten Bedingungen, Regeln und Einschr&auml;nkungen zu akzeptieren. Sie best&auml;tigen und stimmen zu, dass Sie und nicht ThePuzzzle f&uuml;r die Ausf&uuml;hrung der Pflichten solcher Vereinbarungen verantwortlich sein werden, und dass ThePuzzzle keine Vertragspartei solcher Vereinbarungen ist und dass ThePuzzzle, mit Ausnahme seiner Zahlungsverpflichtungen hierunter, jegliche Haftung ablehnt, die aus oder in Verbindung mit solchen Vereinbarungen entsteht. Sie erkennen an und stimmen zu, dass, ungeachtet der Tatsache, dass ThePuzzzle keine Vertragspartei der Vereinbarung zwischen Ihnen und dem Anbieter ist, ThePuzzzle als zahlungseinziehender Vertreter f&uuml;r den Anbieter handelt, zu dem eingeschr&auml;nkten Zweck der Annahme von Zahlungen von Ihnen im Namen des Anbieters. Nach Ihrer Zahlung der dem Anbieter geschuldeten Betr&auml;ge an ThePuzzzle ist Ihre Zahlungsverpflichtung gegen&uuml;ber dem Anbieter f&uuml;r derartige Betr&auml;ge erloschen, und ThePuzzzle ist f&uuml;r die &Uuml;berweisung derartiger Betr&auml;ge, abz&uuml;glich der Anbietergeb&uuml;hren von ThePuzzzle, an den Anbieter verantwortlich. Falls ThePuzzzle dem Anbieter derartige Betr&auml;ge nicht &uuml;berweist, hat der Anbieter ausschlie&szlig;lich R&uuml;ckgriff auf ThePuzzzle.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Die Angebote werden die Gesamtgeb&uuml;hren spezifizieren. Wie oben angegeben, muss der Anbieter die Buchung innerhalb von 24 Stunden nach Buchungsanforderung (wie von ThePuzzzle im eigenen Ermessen bestimmt) entweder best&auml;tigen oder ablehnen, oder die Buchungsanforderung wird automatisch storniert. Wenn eine angeforderte Buchung storniert (d.h. nicht vom jeweiligen Anbieter best&auml;tigt) wird, werden dem Kunde alle von ThePuzzzle eingezogene Betr&auml;ge zur&uuml;ckerstattet, je nach den Optionen, die der Kunde &uuml;ber die Website und Anwendung ausw&auml;hlt, und eine Vorautorisierung der Kreditkarte dieses Kundees wird ggf. freigegeben.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sie stimmen zu, ThePuzzzle f&uuml;r die Gesamtgeb&uuml;hren f&uuml;r alle Buchungen, die in Verbindung mit Ihrem ThePuzzzle-Konto angefordert wurden, zu bezahlen, wenn diese Buchungen vom jeweiligen Anbieter best&auml;tigt werden. Um eine Buchung einzurichten, die auf die Best&auml;tigung Ihrer angeforderten Buchung wartet, verstehen Sie und stimmen zu, dass sich ThePuzzzle, im Namen des Anbieters, das Recht vorbeh&auml;lt, im eigenen Ermessen (i) eine Vorautorisierung f&uuml;r die Gesamtgeb&uuml;hren &uuml;ber Ihre Kreditkarte einzuholen oder (ii) Ihre Kreditkarte mit einem nominalen Betrag anzurechnen, der einen Dollar ($1) oder eine &auml;hnliche Summe in der W&auml;hrung nicht &uuml;berschreitet, in der Sie die Transaktion durchf&uuml;hren (z.B. einen Euro oder ein Britisches Pfund), um Ihre Kreditkarte zu verifizieren. Sobald ThePuzzzle die Best&auml;tigung Ihrer Buchung vom jeweiligen Anbieter erh&auml;lt, zieht ThePuzzzle die Gesamtgeb&uuml;hren gem&auml;&szlig; der allgemeinen Gesch&auml;ftsbedingungen dieser Bedingungen und der im jeweiligen Angebot aufgef&uuml;hrten Preisbedingungen ein. Beachten Sie bitte, dass ThePuzzzle die Geb&uuml;hren, die einem Kunde eventuell von seiner oder ihrer Bank bez&uuml;glich ThePuzzzles Einziehung der Gesamtgeb&uuml;hren in Rechnung stellt, nicht beeinflussen kann, und dass ThePuzzzle jegliche Haftung diesbez&uuml;glich ablehnt.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sie werden in Verbindung mit Ihrer angeforderten Buchung gebeten, ThePuzzzle oder seinem Drittpartei-Zahlungsabwickler die &uuml;blichen Fakturierungsinformationen mitzuteilen, wie z.B. Name, Rechnungsadresse und Kreditkarteninformationen. Sie stimmen zu, ThePuzzzle f&uuml;r jede best&auml;tigte Buchung zu bezahlen, die in Verbindung mit Ihrem ThePuzzzle-Konto gem&auml;&szlig; dieser Bedingungen mittels einer der auf der Website oder Anwendung beschriebenen Methoden, z.B. &uuml;ber PayPal oder Kreditkarte, gemacht wurde. Sie genehmigen hiermit die Einziehung solcher Betr&auml;ge, indem Sie die Kreditkarte als Teil der Buchungsanforderung belasten, entweder direkt &uuml;ber ThePuzzzle, oder indirekt &uuml;ber einen Drittpartei-Online-Zahlungsabwickler oder mittels einer der auf der Website und Anwendung beschriebenen Zahlungsmethoden. Sie autorisieren ThePuzzzle au&szlig;erdem, Ihre Kreditkarte zu belasten, falls Sch&auml;den an dem Objekt verursacht werden, wie unter &bdquo;Sch&auml;den an Objekten&ldquo; erw&auml;gt wird, und gegebenenfalls f&uuml;r Kautionen. Wenn Sie an ThePuzzzles Drittpartei-Zahlungsabwickler weitergeleitet werden, k&ouml;nnen Sie den allgemeinen Gesch&auml;ftsbedingungen unterliegen, die die Benutzung der Dienstleistung dieser Drittpartei und die Ermittlungsmethoden f&uuml;r pers&ouml;nliche Informationen dieser Drittpartei regeln. Bitte &uuml;berpr&uuml;fen Sie solche allgemeinen Gesch&auml;ftsbedingungen und Datenschutzrichtlinien, bevor Sie die Dienstleistungen benutzen. Wenn Ihre best&auml;tigte Buchungstransaktion abgeschlossen ist, erhalten Sie eine E-Mail mit einer Zusammenfassung Ihrer best&auml;tigten Buchung.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Kautionen</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Anbieter k&ouml;nnen sich entscheiden, Kautionen in ihren Angeboten einzuschlie&szlig;en (&bdquo;<b>Kautionen</b>&ldquo;). Jedes Angebot wird beschreiben, ob eine Kaution f&uuml;r die jeweilige Unterkunft erforderlich ist. Wenn eine Kaution in einem Angebot f&uuml;r eine best&auml;tigte Buchung eingeschlossen ist, wird sich ThePuzzzle, in seiner Eigenschaft als zahlungseinziehender Vertreter des Anbieters, im gewerblich vern&uuml;nftigen Rahmen bem&uuml;hen, eine Vorautorisierung der Kreditkarte des Kundees f&uuml;r den Betrag einzuholen, den der Anbieter f&uuml;r die Kaution innerhalb einer vern&uuml;nftigen Zeit vor dem Check-in des Kundees in der jeweiligen Anbieterunterkunft festlegt. Zudem wird ThePuzzzle sich im gewerblich vern&uuml;nftigen Rahmen bem&uuml;hen, sich um die Forderungen und Anspr&uuml;che bez&uuml;glich Kautionen zu k&uuml;mmern, aber ThePuzzzle ist nicht verantwortlich f&uuml;r die Verwaltung oder Annahme von Anspr&uuml;chen seitens des Anbieters bez&uuml;glich Kautionen, und lehnt jegliche Haftung diesbez&uuml;glich ab.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Dienstleistungsgeb&uuml;hren</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Als Gegenleistung f&uuml;r die Nutzung von ThePuzzzle&rsquo;s online Marktplatz und Plattform zieht ThePuzzzle von Anbietern und Kunden Dienstleistungsgeb&uuml;hren ein (&bdquo;<b>Dienstleistungsgeb&uuml;hren</b>&ldquo;). Die Dienstleistungsgeb&uuml;hren setzen sich aus zwei (2) Bestandteilen zusammen: (i) den Kundegeb&uuml;hren und (ii) einer Fixgeb&uuml;hr von 1&euro; in Rechnung gestellt wird (&bdquo;<b>Anbietergeb&uuml;hren</b>&ldquo;). Wo zutreffend k&ouml;nnen zus&auml;tzlich zu den Anbietergeb&uuml;hren auch Steuern angerechnet werden. Die Anbietergeb&uuml;hren werden von den Angebotsgeb&uuml;hren abgezogen, bevor die Angebotsgeb&uuml;hren an den Anbieter innerhalb von 24 Stunden nach der Bereitstellung des Kundens &uuml;berwiesen werden. Wie oben angegeben, sind die Kundengeb&uuml;hren in den Gesamtgeb&uuml;hren eingeschlossen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Guthaben werden dem Anbieter von ThePuzzzle per PayPal oder andere, auf der Website oder in der Anwendung vorgeschriebene Zahlungsmethoden in der vom Anbieter gew&uuml;nschten W&auml;hrung und unter Ber&uuml;cksichtigung der vom Anbieter bez&uuml;glich der Website, der Anwendung und der Dienstleistungen getroffenen Wahl &uuml;berwiesen. Bitte beachten Sie, dass ThePuzzzle f&uuml;r s&auml;mtliche von ThePuzzzle get&auml;tigten Zahlungen in einer anderen W&auml;hrung als US-Dollar eine Bearbeitungsgeb&uuml;hr von den Zahlungen abziehen kann. Weitere Informationen zu Kostenabz&uuml;gen f&uuml;r die Bearbeitung von Fremdw&auml;hrungen stehen auf der Website und in der Anwendung zur Verf&uuml;gung. Falls hier nicht anders angegeben, k&ouml;nnen Dienstgeb&uuml;hren nicht erstattet werden.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 18px; "><b>Allgemeine Buchungen und finanzielle Begriffe</b></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Stornierung und R&uuml;ckerstattung</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Falls Sie als Kunde Ihre Buchung stornieren m&ouml;chten, bevor diese vom Anbieter best&auml;tigt worden ist, wird ThePuzzzle alle Vorautorisierungen f&uuml;r Ihre Kreditkarte stornieren und/oder die wegen der angefragten Buchung angefallenen Nominalbetr&auml;ge, mit denen Ihre Kreditkarte belastet wurde, innerhalb eines wirtschaftlich angemessenen Zeitraums zur&uuml;ckerstatten. Falls Sie als Kunde eine &uuml;ber die Website, &uuml;ber Anwendungen oder Dienstleistungen get&auml;tigte Buchung vor oder nach Ihrerm Zusammentreffen stornieren m&ouml;chten, finden die im jeweiligen Eintrag aufgef&uuml;hrten Gesch&auml;ftsbedingungen des Anbieters auf die jeweilige Stornierung Anwendung. Unsere F&auml;higkeit zur Erstattung der Angebotsgeb&uuml;hren und anderer Ihnen in Rechnung gestellter Betr&auml;ge ist von der geltenden Widerrufsbelehrung abh&auml;ngig. Einzelheiten in Bezug auf R&uuml;ckerstattungen und Widerrufsbelehrungen stehen &uuml;ber die Website bzw. die Anwendung zur Verf&uuml;gung.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Falls ein Anbieter eine &uuml;ber die Website, die Dienstleistungen oder die Anwendung get&auml;tigte Buchung stornieren m&ouml;chte, (i) erstattet ThePuzzzle dem Kunde die gesamten f&uuml;r die Buchung angefallenen Kosten innerhalb eines wirtschaftlich angemessenen Zeitraums nach der Stornierung zur&uuml;ck, und (ii) der Kunde erh&auml;lt eine E-Mail oder eine anderweitige Mitteilung von ThePuzzzle, in der alternative Eintr&auml;ge und sonstige relevanten Informationen aufgef&uuml;hrt sind. Falls ein Kunde eine Buchung eines der alternativen Eintr&auml;ge vornimmt und der mit dem jeweiligen Eintrag assoziierte Anbieter die Buchung des Kundees best&auml;tigt, erkl&auml;rt sich der Kunde einverstanden, gem&auml;&szlig; der hier enthaltenen Bestimmungen die Gesamtheit der f&uuml;r die best&auml;tigte Buchung des Angebots im Alternativeintrag anfallenden Geb&uuml;hren an ThePuzzzle zu entrichten. Falls eine best&auml;tigte Buchung von einem Anbieter storniert wurde und Sie als Kunde diesbez&uuml;glich keine E-Mail oder sonstige Mitteilung von ThePuzzzle erhalten haben, kontaktieren Sie ThePuzzzle bitte unter&nbsp;<a href="mailto:info@thepuzzzle.com" style="color: rgb(7, 130, 193); "><span style="color: rgb(29, 149, 203); ">info@thepuzzzle.com</span></a></p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Wiederkehrende Zahlungen</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">In manchen F&auml;llen muss ein Kunde den f&uuml;r eine Buchung f&auml;lligen Gesamtbetrag vor Beginn m&ouml;glicherweise in inkrementellen Betr&auml;gen und wiederholten Zahlungen bezahlen (nachfolgend insgesamt als &bdquo;<b>wiederkehrende Zahlungen</b>&ldquo; bezeichnet). Weitere Informationen zu wiederkehrenden Zahlungen ist gegebenenfalls auf der Website, &uuml;ber die Anwendung und die Dienstleistungen erh&auml;ltlich. Falls Sie den von Ihnen geschuldeten Gesamtbetrag f&uuml;r eine best&auml;tigte Buchung in wiederkehrenden Zahlungen verrichten m&uuml;ssen, gestatten Sie ThePuzzzle, im Namen des Anbieters die gesamte Geb&uuml;hr in den auf der Website, in der Anwendung und den Dienstleistungen f&uuml;r wiederkehrende Zahlungen angegebenen Inkrementen und Intervallen zu kassieren.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Spenden&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Einige Anbieter &auml;u&szlig;ern m&ouml;glicherweise den Wunsch, einen Teil der &uuml;ber die Website, die Anwendung oder die Dienstleistungen get&auml;tigten Buchungen f&uuml;r einen bestimmten Zweck oder eine gemeinn&uuml;tzige Organisation zu spenden. Wir haben keine Kontrolle dar&uuml;ber, ob der Anbieter die von ihm beabsichtigte Spende tats&auml;chlich erbringt, und lehnen diesbez&uuml;glich jedwede Verantwortung oder Haftung ab.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Steuern&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Die Richtlinien der US-amerikanischen Bundessteuerbeh&ouml;rde IRS bez&uuml;glich der Steueranzeigepflicht erfordern, dass ThePuzzzle von allen in den USA ans&auml;ssigen Eigent&uuml;mern das IRS-Formular W-9 einfordert. Sie erkennen hiermit an und erkl&auml;ren, dass Sie allein unter der Beratung Ihrer Steuerberater f&uuml;r die Bestimmung verantwortlich sind, welche Steuern anfallen. ThePuzzzle bietet den Mitgliedern der Website und den Nutzern der Anwendung und der Dienstleistungen keine steuerliche Beratung an. Beachten Sie bitte ferner, dass jeder Anbieter allein f&uuml;r die Bestimmung lokaler indirekter Steuern und die Abf&uuml;hrung jedweder anfallender Steuern oder mit den Eintr&auml;gen verbundenen Obligationen verantwortlich ist. ThePuzzzle stellt gegebenenfalls auf Anfrage eines Anbieters eine g&uuml;ltige Rechnung unter Angabe der MwSt. an den Anbieter aus.<br />\nFremdw&auml;hrung<br />\nTeil der von ThePuzzzle angebotenen Leistungen ist eine Funktion, &uuml;ber die Mitglieder den Gesamtbetrag verschiedener Eintr&auml;ge in fremden W&auml;hrungen anzeigen k&ouml;nnen. Sie sind sich bewusst und erkl&auml;ren sich damit einverstanden, dass diese Anzeige der Gesamtbetr&auml;ge ausschlie&szlig;lich zu Informationszwecken dient und nicht den offiziellen Gesamtbetrag f&uuml;r die Angebote darstellt. Falls Sie (als Kunde) eine Buchung anfordern, werden Sie von der zu verwendenden W&auml;hrung sowie vom f&auml;lligen Gesamtbetrag benachrichtigt, falls Ihre Buchung von einem Anbieter best&auml;tigt wird. Die W&auml;hrung, die f&uuml;r Ihre Rechnung verwendet wird, wird von ThePuzzzle auf der Grundlage der von Ihnen gew&auml;hlten Zahlungsmodalit&auml;t und dem Ort der Dienstleistung des von Ihnen gebuchten Angebots bestimmt. Weicht die Rechnungsw&auml;hrung von der vom Anbieter f&uuml;r die Bezahlung gew&auml;hlten W&auml;hrung ab, ist ThePuzzzle f&uuml;r die Bearbeitung der erforderlichen W&auml;hrungsumrechnung sowie f&uuml;r die im Zusammenhang damit anfallenden Kosten verantwortlich, die auf der Grundlage des jeweiligen neuesten Wechselkurses vorgenommen wird, den ThePuzzzle mit Wirkung vom Datum und der Uhrzeit auf die Website eingestellt hat und zu dem/der Ihre Buchung best&auml;tigt wird (&bdquo;<b>geltender Wechselkurs</b>&ldquo;). Sie best&auml;tigen, dass der geltende Wechselkurs, der f&uuml;r die W&auml;hrungsumrechnung zum Einsatz kommt, u. U. nicht dem jeweiligen zum spezifischen Bearbeitungszeitpunkt geltenden Marktkurs entspricht. Dies ist auf Folgendes zur&uuml;ckzuf&uuml;hren: (i) obgleich ThePuzzzle die geltenden Wechselkurse regelm&auml;&szlig;ig aktualisiert, erfolgt die Aktualisierung nicht in Echtzeit und (ii) die geltenden Wechselkurse beinhalten u. U. Mehrkosten oder eine Marge, die nicht im jeweiligen Marktkurs beinhaltet sind. Vorsorglich sei darauf hingewiesen, dass ThePuzzzle etwaige Gewinne einbeh&auml;lt (und etwaige Verluste tr&auml;gt), die sich aufgrund von Schwankungen im jeweiligen Wechselkurs zwischen dem Datum der Buchungsbest&auml;tigung und der Vornahme der Zahlung von ThePuzzzle an den Anbieter aus einer solchen W&auml;hrungsumrechnung ergeben.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); min-height: 17px; ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sch&auml;den an dem Objekt</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Als Kunde sind Sie verpflichtet, das Objekt so zu hinterlassen, wie Sie sie bei Ihrer Ankunft vorgefunden haben. Sie erkennen an und erkl&auml;ren sich einverstanden, als Kunde f&uuml;r Ihre eigenen Handlungen und Unterlassungen und des Weiteren f&uuml;r die Handlungen und Unterlassungen der Personen, die Sie in die Unterkunft einladen oder anderweitig Zugang zur Unterkunft verschaffen, zu haften. Im Fall, dass ein Anbieter diesbez&uuml;glich Anspr&uuml;che stellt und Nachweise f&uuml;r den entstandenen Schaden, einschlie&szlig;lich, aber nicht beschr&auml;nkt auf Fotografien, erbringen kann, sind Sie verpflichtet, die Kosten f&uuml;r den Austausch der besch&auml;digten Objekte gegen neue, gleichwertige Objekte zu tragen. Nachdem Sie von einem Anspruch benachrichtigt worden sind, und nach einer Frist von achtundvierzig (48) Stunden, um Einspruch gegen den Anspruch zu erheben, wird die in Ihrem ThePuzzzle-Konto angegebene Kreditkarte mit der f&auml;lligen Zahlung belastet. ThePuzzzle beh&auml;lt sich ferner das Recht vor, die in Ihrem ThePuzzzle-Konto registrierte Kreditkarte zu belasten oder anderweitig Zahlungen von Ihnen einzufordern und von jeglichen ihm zu Verf&uuml;gung stehenden Mitteln, einschlie&szlig;lich des Sicherheitseinbehalts, in Situationen Gebrauch zu machen, in denen Sie nach ThePuzzzles Ermessen eine Unterkunft besch&auml;digt haben, einschlie&szlig;lich, aber nicht beschr&auml;nkt auf von Anbietern im Rahmen der ThePuzzzle-Anbietergarantie geltend gemachten Zahlungsaufforderungen und in Bezug auf von ThePuzzzle an Anbieter get&auml;tigten Zahlungen. Falls es uns nicht m&ouml;glich ist, Ihre Kreditkarte zu belasten oder anderweitig Zahlungen zu beziehen, erkl&auml;ren Sie sich einverstanden, die f&uuml;r den Schaden an der Unterkunft f&auml;llige Zahlung an den jeweiligen Anbieter oder (gegebenenfalls) an ThePuzzzle zu entrichten.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Sowohl Kunde als auch Anbieter erkl&auml;ren sich einverstanden, nach Treu und Glauben mit ThePuzzzle zu kooperieren und ThePuzzzle bez&uuml;glich von Mitgliedern in Bezug auf Angebote ge&auml;u&szlig;erten Anspr&uuml;chen oder Beschwerden oder pers&ouml;nlichem Eigentum oder auf von ThePuzzzle oder einem von ihm beauftragten Vertreter angestellte Untersuchungen eines m&ouml;glichen Missbrauchs der Website, der Anwendung oder der Dienstleistungen die von ihm angeforderten Informationen zukommen zu lassen und die Ma&szlig;nahmen zu ergreifen, die ThePuzzzle angemessenerma&szlig;en verlangt. Als Kunde erkl&auml;ren Sie sich auf angemessene Anforderung von ThePuzzzle hin und in dem Ausma&szlig;, in dem es Ihnen m&ouml;glich ist, einverstanden, bei einem von ThePuzzzle oder einem Dritten gef&uuml;hrten Schlichtungs- oder &auml;hnlichen Verfahren mit einem Anbieter bez&uuml;glich Verlusten, f&uuml;r die der Anbieter im Rahmen der ThePuzzzle-Anbietergarantie eine Entsch&auml;digungszahlung verlangt, ohne Kostenfolge f&uuml;r Sie teilzunehmen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Als Kunde erkennen Sie an und erkl&auml;ren sich einverstanden, dass sich ThePuzzzle das Recht vorbeh&auml;lt, nach eigenem Ermessen Anspr&uuml;che auf Versicherungsleistungen im Rahmen Ihrer Hausratversicherung, Miethaftpflichtversicherung oder sonstigen Versicherungsdeckung in Hinsicht auf von Ihnen an einem Objekt oder sonstigem Eigentum verursachte Sch&auml;den oder Verluste zu stellen. Sie erkl&auml;ren sich einverstanden, nach Treu und Glauben mit ThePuzzzle zu kooperieren und ThePuzzzle die erforderlichen Informationen zukommen zu lassen, um Anspr&uuml;che auf Leistungen im Rahmen Ihrer Miethaftpflichtversicherung oder sonstigen Versicherungsdeckung stellen zu k&ouml;nnen, einschlie&szlig;lich, aber nicht beschr&auml;nkt auf die Unterzeichnung von Unterlagen und die von ThePuzzzle angemessenerweise erforderten Ma&szlig;nahmen, um ThePuzzzle bei dem oben Genannten zu unterst&uuml;tzen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">dfssssssssssssssssssssssssss</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">sdffdssdfsdf</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">&nbsp;</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">dfsfsdsdf</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 9px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); "><a href="http://thepuzzzle.com/loadArtical/13" style="color: rgb(7, 130, 193); ">more...</a></p>\n', 'sds', 1, 'dfssdf', 'sddsf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `bsp_articla` (`ID`, `article_name`, `details_en`, `details_de`, `custom_url`, `iStatus`, `article_name_de`, `custom_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(10, 'Privacy Policy                      ', '', '<p style="margin: 0.0px 0.0px 3.0px 0.0px; font: 32.0px ''Helvetica Neue''; color: #393c3e"><b>Datenschutzregeln</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Zuletzt aktualisiert am: 04. Oktober 2013</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>1 Gegenstand dieser Datenschutzrichtlinie</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle inhab. Brian Michael Seyum (&bdquo;ThePuzzzle&ldquo;, &bdquo;wir&ldquo; oder &bdquo;uns&ldquo;) stellt diese Datenschutzrichtlinie bereit, um Sie &uuml;ber unsere Richtlinien und Verfahren hinsichtlich der Erhebung, Nutzung und Weitergabe von pers&ouml;nlichen Informationen zu informieren, die wir von Benutzern von [entsprechende URL einf&uuml;gen] (zusammen die &bdquo;Seite&ldquo;) und unserer Anwendung f&uuml;r mobile Ger&auml;te (die &bdquo;Anwendung&ldquo;) erhalten. Diese Datenschutzrichtlinie gilt nur f&uuml;r Informationen, die Sie uns &uuml;ber die Seite und die Anwendung bereitstellen. Diese Datenschutzrichtlinie kann von Zeit zu Zeit aktualisiert werden. Wir k&ouml;nnen diese Datenschutzricht-linie aktualisieren, um &Auml;nderungen unserer Informationspraktiken widerzuspiegeln. Wenn wir wesentliche &Auml;nderungen an der Richtlinie vornehmen, unterrichten wir Sie per E-Mail (an die in Ihrem ThePuzzzle-Konto angegebene E-Mail-Adresse) oder &uuml;ber eine Mitteilung auf der Seite und der Anwendung &uuml;ber diese &Auml;nderungen, bevor sie in Kraft treten. Wir fordern Sie auf, diese Seite regelm&auml;&szlig;ig zu besuchen, um die neuesten Informationen zu unseren Datenschutzpraktiken zu erhalten. Wenn nicht anderweitig in dieser Datenschutzrichtlinie definiert, haben die hierin verwendeten Begriffe die gleiche Bedeutung wie in unseren Nutzungsbedingungen (<a href="http://www.thepuzzzle.com/loadArtical/9-term-conditions"><span style="color: #1d95cb">http://www.thepuzzzle.com/loadArtical/9-term-conditions</span></a>).</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Begriffe &bdquo;Nutzung&ldquo; und &bdquo;Verarbeitung&ldquo; von Informationen umfassen in dieser Richtlinie die Verwendung von Cookies auf einem Computer, statistische oder andere Analysen der Informationen und die Nutzung oder den Umgang mit Informationen auf beliebige Art, unter anderem Erhebung, Speicherung, Auswertung, &Auml;nderung, L&ouml;schen, Nutzung, Kombination, Weitergabe und &Uuml;bertragung von Informationen innerhalb unseres Unternehmen oder unter unseren verbundenen Unternehmen in Europa oder anderen L&auml;ndern au&szlig;erhalb von Europa.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>2 Verantwortliches Unternehmen f&uuml;r die Verarbeitung pers&ouml;nlicher Informationen / Datenbeauftragter</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Maistr. 26</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">80337 M&uuml;nchen</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">DE I Germany</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>3 Datenverarbeitung in L&auml;ndern au&szlig;erhalb von Europa</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Ihre Informationen k&ouml;nnen auf Computern verarbeitet und gepflegt werden, die sich au&szlig;erhalb des Europ&auml;ischen Wirtschaftsraums befinden und in denen die Datenschutzgesetze m&ouml;glicherweise nicht so streng sind, wie in Ihrem Rechtsraum. Insbesondere &uuml;bertr&auml;gt ThePuzzzle pers&ouml;nliche Informationen in die USA und verarbeitet sie dort. Wir bem&uuml;hen uns jedoch, jederzeit und &uuml;berall den Schutz Ihrer pers&ouml;nlichen Informationen sicherzustellen, der mit dem Schutzniveau, das Ihnen gem&auml;&szlig; den Be-dingungen dieser Datenschutzrichtlinie gew&auml;hrt wird, vergleichbar ist.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>4 Erhebung und Nutzung von Informationen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Unsere Hauptziele bei der Erhebung von Informationen sind die Bereitstellung und die Verbesserung unserer Seite, unserer Anwendung, unserer Leistungen, unserer Funktionen und unseres Inhalts, die Verwaltung Ihrer Nutzung der Seite und der Anwendung (zusammen die &bdquo;Leistung&ldquo;) sowie Benutzern die leichte Anwendung von und Navigation der Seite und der Anwendung zu erm&ouml;glichen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.1 Pers&ouml;nlich identifizierbare Informationen</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie sich &uuml;ber die Seite oder die Anwendung bei uns registrieren und Mitglied werden und wenn Sie einen Eintrag einstellen oder eine Dienstleistung buchen oder wenn Sie ein anderes Mitglied kontaktieren m&ouml;chten, bitten wir Sie um die Angabe pers&ouml;nlich identifizierbarer Informationen. Dabei handelt es sich um Informationen &uuml;ber Sie, die verwendet werden k&ouml;nnen, um Sie zu kontaktieren oder zu identifizieren (&bdquo;Identit&auml;tsinformationen&ldquo;). Identit&auml;tsinformationen umfassen unter anderem Ihren Namen, Ihre Telefonnummer, Ihre E-Mail-Adresse und Ihre private Postanschrift, umfassen jedoch nicht Ihre Kreditkartennummer oder Rechnungsinformationen. Gegebenenfalls bitten wir Sie f&uuml;r die Durchf&uuml;hrung einiger Ihrer Transaktionen &uuml;ber die Seite und die Anwendung auch um Ihre Kreditkartennummer und andere Rechnungsinformationen (&bdquo;Rechnungsinformationen&ldquo;) (Identit&auml;tsinformationen und Rechnungsinformationen zusammen &bdquo;pers&ouml;nliche Informationen&ldquo;). Wenn die Adresse eines Eintrags, den Sie einstellen, der Rechnungsanschrift f&uuml;r Ihre Kreditkarte entspricht, gilt diese Adresse als Identit&auml;tsinformation. Einige pers&ouml;nliche Informationen, wie Ihr Name und Ihre E-Mail-Adresse, sind erforderlich, w&auml;hrend andere pers&ouml;nliche Informationen freiwillig angegeben werden k&ouml;nnen, zum Beispiel Ihr Geburtstag. Wir behalten uns das Recht vor, eine Adressbest&auml;tigung f&uuml;r Objekte, f&uuml;r die ein Eintrag erstellt wird, anzufordern. Wenn wir solch eine Best&auml;tigung ben&ouml;tigen, schicken wir per Post einen Code an die in dem Eintrag angegebene Adresse und bitten Sie, diesen Code &uuml;ber die Seite, die Anwendung und die Leistung einzugeben, um die Adresse der in dem entsprechenden Eintrag genannten Objekte zu best&auml;tigen. Wir nutzen Ihre pers&ouml;nlichen Informationen, um die Leistung bereitzu-stellen und Ihre Anfragen zu verwalten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir erheben bei Ihrer Anmeldung f&uuml;r die Leistung pers&ouml;nliche Informationen. Sie k&ouml;nnen sich durch das Ausf&uuml;llen der erforderlichen Formulare auf der Seite oder der Anwendung registrieren. Sie k&ouml;nnen sich auch registrieren, indem Sie sich &uuml;ber unsere Seite oder unsere Anwendung wie unten beschrieben bei Online-Konten anmelden, die Sie bei Drittanbietern (&bdquo;SNS&ldquo;) haben (z. B. Facebook) - jedes solche Konto wird nachfolgend als &bdquo;Drittanbieterkonto&ldquo; bezeichnet. Als Teil der Funktionalit&auml;t der Seite, der Leistung und der Anwendung k&ouml;nnen Sie Ihr ThePuzzzle-Konto mit Drittanbieterkonten verbinden, indem Sie entweder: (i) ThePuzzzle &uuml;ber die Seite, die Leistung oder die Anwendung Ihre Anmeldeinformationen f&uuml;r entsprechendes Drittanbieterkonto bereitstellen oder (ii) ThePuzzzle gestatten, auf Ihr Drittanbieterkonto zuzugreifen, wie gem&auml;&szlig; den entsprechenden Bedingungen, denen Ihre Nutzung des jeweiligen Drittan-bieterkontos unterliegt, gestattet. Sie erkl&auml;ren, dass Sie berechtigt sind, Ihre Anmeldeinfor-mationen f&uuml;r Drittanbieterkonten an ThePuzzzle weiterzugeben und/oder ThePuzzzle Zugriff auf Ihr Drittanbieterkonto zu gew&auml;hren (f&uuml;r die hierin beschriebenen Zwecke), ohne dass Sie gegen Bestimmungen und Bedingungen, denen Ihre Nutzung des entsprechenden Drittanbieter-kontos unterliegt, versto&szlig;en und ohne dass dies ThePuzzzle verpflichtet, Geb&uuml;hren zu zahlen oder sich Nutzungsbeschr&auml;nkungen des entsprechenden SNS zu unterwerfen. Wenn Sie sich durch Anmeldung bei einem Drittanbieterkonto &uuml;ber unsere Seite oder Anwendung registrieren, erhalten wir von Ihrem Drittanbieterkonto die pers&ouml;nlichen Informationen, die Sie dem entsprechenden SNS bereitgestellt haben (zum Beispiel Ihr &bdquo;richtiger&ldquo; Name, Ihre E-Mail-Adresse, Ihr Profilbild, die Namen von SNS-Freunden, die Namen von SNS-Gruppen, denen Sie angeh&ouml;ren, andere Informationen, die Sie &uuml;ber den entsprechenden SNS &ouml;ffentlich bereitstellen und/oder andere Informationen, auf die Sie ThePuzzzle gestatten, zuzugreifen, indem Sie dem SNS die Befugnis erteilen, solche Informationen bereitzustellen) und nutzen solche Informationen f&uuml;r die Erstellung Ihres ThePuzzzle-Kontos und der Profilseite Ihres ThePuzzzle-Kontos, und Sie werden Mitglied von ThePuzzzle. In Abh&auml;ngigkeit von den Drittanbieterkonten, die Sie ausw&auml;hlen und gem&auml;&szlig; Ihren Datenschutzeinstellungen in solchen Drittanbieterkonten ver-stehen Sie, dass wir, indem Sie uns den Zugriff auf die Drittanbieterkonten gew&auml;hren, auf die Informationen in Ihrem Drittanbieterkonto zugreifen, diese bereitstellen und speichern (wenn zutreffend und wie gem&auml;&szlig; dem SNS gestattet und von Ihnen erlaubt), sodass diese Informationen auf Ihrem und &uuml;ber Ihr ThePuzzzle-Konto auf der Seite, der Leistung und der Anwendung bereitstehen. Wir holen nur Informationen &uuml;ber Ihre &bdquo;Freunde&ldquo; oder &uuml;ber Personen ein, mit denen Sie in Ihren Drittanbieterkonten verbunden sind, wenn die Datenschutzeinstellungen dieser Personen bei dem entsprechenden SNS uns den Zugriff auf solche Daten gestatten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir erheben au&szlig;erdem die anderen Informationen, die Sie im Rahmen Ihrer Registrierung und der Verwaltung und pers&ouml;nlichen Einrichtung Ihres ThePuzzzle-Konto-Profils bereitstellen (zum Beispiel uneingeschr&auml;nkt, Postleitzahl (allein) und individuelle Einstellungen oder demographische Angaben) (&bdquo;nicht-identifizierende Informationen&ldquo;). Wir nutzen Ihre pers&ouml;nlichen Informationen (in einigen F&auml;llen in Verbindung mit Ihren nicht-identifizierenden Informationen) ausschlie&szlig;lich f&uuml;r die in dieser Datenschutzrichtlinie beschriebenen Zwecke und insbeson-dere f&uuml;r die Bereitstellung der Leistung, den Abschluss Ihrer Transaktionen und die Verwaltung Ihrer Anfragen. Bestimmte nicht-identifizierende Informationen w&uuml;rden als Teil Ihrer pers&ouml;nlichen Informationen gelten, wenn diese mit anderen identifizierenden Angaben auf eine Art verbunden w&uuml;rden, die Ihre Identifizierung erm&ouml;glicht (zum Beispiel die Verbindung Ihrer Postleitzahl mit Ihrer Stra&szlig;e). Dieselben Informationen gelten jedoch als nicht-identifizierende Informationen, wenn sie allein stehen oder nur mit anderen nicht-identifizierenden Informationen verbunden werden (zum Beispiel Ihren demographischen Angaben). Wir k&ouml;nnen Ihre pers&ouml;nlichen Informationen ausschlie&szlig;lich f&uuml;r interne Zwecke f&uuml;r die Bereitstellung einer verbesserten Erfahrung, f&uuml;r die Verbesserung der Qualit&auml;t und des Werts der Leistung und f&uuml;r die Analyse und das Verst&auml;ndnis, wie unsere Seite, unsere Anwendung und unsere Leistung genutzt werden, mit nicht-identifizierbaren Informationen verbinden und mit Informationen zusammenfassen, die wir von anderen ThePuzzzle-Benutzern (unten definiert) erfasst haben. Wir k&ouml;nnen die verbundenen Informationen auch nutzen, ohne sie zusammenzufassen, um Ihnen konkrete Leistungen anzubieten, zum Beispiel, um Ihnen ein Produkt vorzustellen, das zu Ihren Einstellungen und Einschr&auml;nkungen passt.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.2 Newsletter, Marketing und Werbematerialien</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir nutzen Ihre pers&ouml;nlichen Informationen au&szlig;erdem, um Ihnen Newsletter von ThePuzzzle sowie Marketing- oder Werbematerialien und andere Informationen zu senden, die m&ouml;glicherweise von Interesse f&uuml;r Sie sind. Wenn Sie keine weiteren Kommunikationen dieser Art von uns erhalten m&ouml;chten, befolgen Sie bitte die in solchen Kommunikationen enthaltenen Abmeldeanleitungen oder aktualisieren Sie Ihre Angaben im Abschnitt &bdquo;Mitteilungen&ldquo;. (Siehe &bdquo;Angaben &auml;ndern oder l&ouml;schen&ldquo; unten) Bitte beachten Sie, dass wir pers&ouml;nliche Informa-tionen m&ouml;glicherweise auch nutzen, um Sie mit Informationen in Verbindung mit Ihrer Nutzung der Leistung kontaktieren; diese Mitteilungen k&ouml;nnen Sie nicht abbestellen, wenn Sie unsere Leistungen weiter in Anspruch nehmen m&ouml;chten</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.3 Systemkennung</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie die Seite und die Anwendung als Mitglied oder als nicht registrierter Benutzer besuchen, der die Seite oder die Anwendung einfach nur durchsucht (alle jeweils ein &bdquo;ThePuzzzle-Benutzer&ldquo;), zeichnen unsere Server automatisch Informationen auf, die Ihr Browser sendet, wenn Sie eine Website besuchen (&bdquo;Systemkennung&ldquo;). Diese Systemkennung kann Informationen wie die Internetprotokolladresse (&bdquo;IP-Adresse&ldquo;) Ihres Computers, die Art Ihres Browsers und andere aufgezeichnete Daten oder die Internetseite, die Sie besucht haben, bevor Sie zu unserer Seite und unserer Anwendung gelangt sind, umfassen, sowie Informationen zu den Seiten unserer Seite und unserer Anwendung, die Sie besuchen, die Zeit, die Sie auf diesen Seiten verbringen, die Informationen, nach denen Sie auf unserer Seite und in unserer Anwendung suchen, die Zugriffszeiten und -daten und andere statistische Informationen. Wir nutzen diese Informationen, um die Nutzung der Seite, der Anwendung und der Leistung zu &uuml;berwachen und zu analysieren sowie f&uuml;r die technische Verwaltung der Seite und der Anwendung, f&uuml;r die Erh&ouml;hung der Funktionalit&auml;t und Benutzerfreundlichkeit unserer Seite und unserer Anwendung und um unsere Seite und unsere Anwendung besser an die Bed&uuml;rfnisse unserer Besucher anzupassen. Wir nutzen diese Informationen auch, um sicherzustellen, dass unsere Besucher der Seite die Kriterien erf&uuml;llen, die zur Bearbeitung ihrer Anfragen erforderlich sind. Wir behandeln die Systemkennung nicht als pers&ouml;nliche Informationen. Mit Ausnahme des unten Dargelegten nutzen wir die Systemkennung nicht in Verbindung mit pers&ouml;nlichen Informationen, obwohl wir solche Informationen f&uuml;r die gleichen Zwecke, wie oben hinsichtlich nicht-identifizierender Informationen angegeben, zusammenfassen, analysieren und auswerten k&ouml;nnen. Wenn Sie ThePuzzzle-Mitglied sind, k&ouml;nnen wir unter bestimmten Umst&auml;nden Ihre Systemkennung mit Ihren pers&ouml;nlichen Informationen in Verbindung bringen: (i) Wir nutzen die Kombination Ihrer IP-Adresse und Ihrer pers&ouml;nlichen Informationen, um Ihnen eine lokale Sprachversion der Seite und der Leistungen bereitzustellen. (ii) ThePuzzzle nimmt die Leistungen bestimmter Drittanbieter in Anspruch, die f&uuml;r die Nutzung der Seite und der Leistungen (a) Dienstleistungen zur Erkennung und Vermeidung von Betrug und (b) Dienstleistungen f&uuml;r die Zahlungsabwicklung bereitstellen. Wie im untenstehenden Abschnitt &bdquo;Weitergabe und Offenlegung von Informationen&ldquo; angegeben, haben solche Drittanbieter m&ouml;glicherweise Zugang zu pers&ouml;nlichen Informationen von ThePuzzzle-Mitgliedern und der ent-sprechenden Systemkennung, einschlie&szlig;lich IP-Adressen, um die entsprechenden Dienst-leistungen zur Erkennung und Vermeidung von Betrug sowie zur Zahlungsabwicklung bereitzustellen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.4 Cookies</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wie viele andere Websites nutzen wir &bdquo;Cookies&ldquo;, um Informationen zu erheben. Ein Cookie ist eine kleine Datendatei, die wir f&uuml;r Aufzeichnungszwecke auf die Festplatte Ihres Computers &uuml;bertragen. Wir nutzen Cookies f&uuml;r zwei Zwecke. Erstens nutzen wir permanente Cookies, um Ihre Anmeldeinformationen f&uuml;r zuk&uuml;nftige Anmeldungen auf der Seite und der Anwendung zu speichern. Zweitens nutzen wir Session-ID-Cookies, um bestimmte Funktionen der Seite und der Anwendung zu aktivieren, um besser zu verstehen, wie Sie mit der Seite und der Anwendung interagieren und um die Gesamtnutzung der Seite und der Anwendung von ThePuzzzle-Benutzern sowie den Datenverkehr zu &uuml;berwachen. Session-Cookies werden im Gegensatz zu permanenten Cookies von Ihrem Computer gel&ouml;scht, wenn Sie sich von der Seite, der Anwendung und der Leistung abmelden und dann Ihren Browser schlie&szlig;en. Dritte Werbepartner auf der Seite und der Anwendung k&ouml;nnen m&ouml;glicherweise auch Cookies auf Ihrem Browser platzieren oder lesen. Sie k&ouml;nnen Ihren Browser durch &Auml;nderung der Optionen so einstellen, dass er keine Cookies akzeptiert oder dass er Sie zur Annahme von Cookies von den Webseiten, die Sie besuchen, auffordert. Wenn Sie Cookies nicht akzeptieren, k&ouml;nnen Sie jedoch m&ouml;glicherweise nicht alle Teile der Seite oder der Anwendung oder nicht alle Funktionen der Leistung nutzen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.5 Web Beacons</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Unsere Seite und unsere Anwendung k&ouml;nnen m&ouml;glicherweise elektronische Bilder, sogenannte Web Beacons (manchmal auch Pixel Tags genannt) enthalten, die zusammen mit Cookies verwendet werden, um zusammenfassende Statistiken zur Analyse der Nutzung unserer Seite und unserer Anwendung zu erstellen, und die m&ouml;glicherweise in einigen unserer E-Mails genutzt werden, um uns zu informieren, welche E-Mails und Links von den Em-pf&auml;ngern ge&ouml;ffnet wurden. So k&ouml;nnen wir die Effizienz unsere Kundenkommunikationen und Marketingkampagnen einsch&auml;tzen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.6 E-Mails &uuml;ber ein ThePuzzzle-Konto</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Als Teil der Leistung k&ouml;nnen ThePuzzzle-Benutzer mithilfe der Funktion &bdquo;Kundegeber kontaktieren&ldquo; auf der Seite und in der Anwendung mit ThePuzzzle-Mitgliedern kommunizieren. Wenn ThePuzzzle-Benutzer eine oder mehrere E-Mail-Adressen in ein Online-Formular hinzuzuf&uuml;gen, wird die E-Mail, die Sie in der entsprechenden Vorlage schreiben, von ThePuzzzle in ihrem Namen an die jeweiligen E-Mail-Adressen gesendet. Diese E-Mail-Adressen werden ausschlie&szlig;lich genutzt, um die einmalige E-Mail-Kommunikation an den Empf&auml;nger zu senden. &Uuml;ber die Funktion &bdquo;Kundegeber kontaktieren&ldquo; der Seite und der Anwendung k&ouml;nnen Sie au&szlig;erdem mit ThePuzzzle-Mitgliedern telefonieren. In diesen F&auml;llen teilt ThePuzzzle Ihre Telefonnummer nicht dem anderen ThePuzzzle-Mitglied mit, sondern nutzt Ihre Telefonnummer, um Sie per Telefon zu kontaktieren und Sie mit dem anderen ThePuzzzle-Mitglied zu verbinden.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie mithilfe unseres Empfehlungsservice einen Freund um eine Empfehlung bitten, bitten wir Sie um die E-Mail-Adresse Ihres Freundes. Wir senden Ihrem Freund daraufhin eine einmalige E-Mail, in der wir ihn einladen, die Seite zu besuchen. ThePuzzzle nutzt solche E-Mail-Adressen ausschlie&szlig;lich, um diese einmaligen E-Mails zu senden. Ihr Freund kann uns unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a> kontaktieren, um uns aufzufordern, diese Information aus unserer Datenbank zu entfernen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie k&ouml;nnen Kontakte aus dem Adressbuch Ihrer E-Mail-Adresse importieren, um Ihre Kontakte einzuladen, Ihnen eine Empfehlung zu senden. Wir erheben den Benutzernamen und das Passwort des E-Mail-Kontos, von dem Sie Ihre Kontakte importieren m&ouml;chten. Wir speichern diese Informationen jedoch nicht und nutzen sie ausschlie&szlig;lich f&uuml;r diesen Zweck.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">4.7 Phishing</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle nimmt Identit&auml;tsdiebstahl und Angriffe, die allgemein als &bdquo;Phishing&ldquo; bekannt sind, sehr ernst. Der Schutz von Informationen, um Sie vor Identit&auml;tsdiebstahl zu sch&uuml;tzen, hat f&uuml;r uns h&ouml;chste Priorit&auml;t. Wir bitten Sie in ungesicherten oder unaufgeforderten E-Mails oder Telefongespr&auml;chen niemals um Ihre Kreditkarteninformationen, Ihre Anmelde-ID f&uuml;r Ihr ThePuzzzle-Konto, Ihr Anmeldepasswort oder nationale Identifikationsnummern. Weitere Informationen &uuml;ber Phishing erhalten Sie auf der Website der Federal Trade Commission unter <a href="http://www.ftc.gov/"><span style="color: #1d95cb">http://www.ftc.gov</span></a>.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>5 Weitergabe und Offenlegung von Informationen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.1 &Uuml;berblick</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Seite, die Anwendung und die Leistung k&ouml;nnen f&uuml;r Eintr&auml;ge und Buchungen von Dienstleistungen genutzt werden. Eintr&auml;ge f&uuml;r solche Angebote werden &uuml;ber die Seite, die Anwendung und die Leistung von Kundegebern angeboten. Von Kundegebern eingestellte Eintr&auml;ge, Bewertungen und Rezensionen von Kundegebern und Kunden sowie die Profilinformationen (wie unten definiert) von Kundegebern und Kunden sind f&uuml;r alle ThePuzzzle-Benutzer einsehbar.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.2 ThePuzzzle-Mitglieder und -Benutzer</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie ein ThePuzzzle-Konto erstellen, richten wir eine Profilseite f&uuml;r Ihr ThePuzzzle-Konto ein. Die Profilseite Ihres ThePuzzzle-Kontos enth&auml;lt Ihren Vornamen und den ersten Buchstaben Ihres Nachnamens. Sie k&ouml;nnen andere pers&ouml;nliche Informationen ausw&auml;hlen, die auf der Profil-seite Ihres ThePuzzzle-Kontos angezeigt werden sollen &ndash; unter anderem ein Profilbild, eine Liste der SNS-Gruppen, denen Sie angeh&ouml;ren, eine Liste Ihrer SNS-Freunde oder -Verbindungen, die ebenfalls ThePuzzzle-Mitglieder sind, Verbindungen, die Sie zwischen Ihrem Konto und SNSs erstellt haben und eine Biographie und Links zu etwaigen Eintr&auml;gen (zusammen Ihre &bdquo;Profil-informationen&ldquo;). Wir zeigen Ihre Profilinformationen auf der Profilseite Ihres ThePuzzzle-Kontos &uuml;ber die Seite und die Anwendung sowie mit Ihrer vorherigen Genehmigung auf den Seiten Dritter &ouml;ffentlich an. Informationen, die Sie als Teil Ihrer Profilinformationen bereitstellen, sind f&uuml;r alle ThePuzzzle-Benutzer &ouml;ffentlich einsehbar und sollten dementsprechend widerspiegeln, wie viel andere ThePuzzzle-Benutzer &uuml;ber Sie wissen sollen. Wir empfehlen, dass Sie Ihre Anonymit&auml;t wahren und Ihre empfindlichen Informationen sch&uuml;tzen und wir fordern Mitglieder auf, sich genau zu &uuml;berlegen, welche Informationen &uuml;ber sich selbst sie auf ihren Profilseiten offen-legen. Sie k&ouml;nnen Ihre Profilinformationen jederzeit &uuml;berpr&uuml;fen und anpassen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.3 Eintr&auml;ge</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie einen Eintrag einstellen, sind wir berechtigt, diesen Eintrag &ouml;ffentlich auf der Seite und der Anwendung anzuzeigen und sind berechtigt, Dritten die Ver&ouml;ffentlichung Ihres Eintrags auf ihrer Website mithilfe eines HTML &bdquo;Widgets&ldquo; zu erm&ouml;glichen. Wir sind auch berechtigt, den geographischen Standort Ihres Eintrags in Form einer Karte anzuzeigen, sodass m&ouml;gliche Kunde sehen k&ouml;nnen, in welcher Region und in welcher Gegend sich Ihr Eintrag befindet. Die genaue Postanschrift wird jedoch erst offengelegt, wenn Sie eine best&auml;tigte Transaktion mit einem anderen Mitglied abschlie&szlig;en. In diesem Fall teilen wir Ihre tats&auml;chliche Postanschrift ausschlie&szlig;lich diesem anderen Mitglied mit.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie &uuml;ber die Seite, die Anwendung und die Leistung eine Buchungsanfrage stellen, gibt ThePuzzzle folgende Informationen &uuml;ber Sie an den entsprechenden Kundegeber weiter: (i) Ihren Vor- und Nachnamen, (ii) einen Link zur Profilseite Ihres ThePuzzzle-Kontos, (iii) die Namen von Mitgliedern eines SNS, die Ihre &bdquo;Freunde&ldquo; sind oder mit denen Sie auf dem SNS verbunden sind, wenn solche Personen auf solchem SNS auch &bdquo;Freunde&ldquo; des Kundegebers oder mit dem Kundegeber verbunden sind und (iv) einen Hinweis, dass der Name, den Sie ThePuzzzle mitgeteilt haben, als Sie Mitglied bei ThePuzzzle wurden, dem Namen entspricht, den Sie dem SNS bereitgestellt haben, mit dem Sie Ihr ThePuzzzle-Konto verbunden haben. Alle diese Informationen helfen dem Kundegeber bei seiner Entscheidung, Ihre Buchung zu best&auml;tigen oder abzulehnen. Bei Best&auml;tigung der Buchung durch den Kundegeber geben wir dem entsprechenden vom Kundegeber ausgew&auml;hlten Kunde Teile der Identit&auml;tsinformationen des Kundegebers weiter, unter anderem seinen vollst&auml;ndigen Namen, seine Telefonnummer, die Adresse des Objekts, der Dienstleistung und die E-Mail-Adresse des Kundegebers und geben dem Kundegeber Teile der Identit&auml;tsinforma-tionen des Kundees weiter, unter anderem seinen vollst&auml;ndigen Namen, seine Telefonnummer und E-Mail-Adresse, sodass sich der Kunde und der Kundegeber direkt miteinander in Verbindung setzen k&ouml;nnen. Kundegebern werden in keinem Fall die Rechnungsinformationen eines Kundees mitgeteilt.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.4 Zusammenfassende Informationen und nicht-identifizierende Informationen</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir sind berechtigt, zusammenfassende Informationen, die keine pers&ouml;nlichen Informationen umfassen, weiterzugeben und wir sind berechtigt, nicht-identifizierende Informationen und Systemkennungen anderweitig Dritten zum Zwecke der Branchenanalyse, der Erstellung demographischer Profile und zu anderen Zwecken offenzulegen. In diesen Zusammenh&auml;ngen bereitgestellte, zusammenfassende Informationen enthalten nicht Ihre pers&ouml;nlichen Informationen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.5 Dienstleistungsanbieter</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir beauftragen m&ouml;glicherweise Drittunternehmen und Drittpersonen mit der Erbringung unserer Leistung, der Bereitstellung der Leistung in unserem Namen, der Erbringung von Dienstleistungen in Verbindung mit der Seite und der Anwendung (unter anderem Wartungsleistungen, Datenbankmanagement, Webanalyse, Zahlungsabwicklung, Erkennung und Vermeidung von Betrug in Verbindung mit der Aktivit&auml;t von ThePuzzzle-Benutzern und Verbesserung der Seite und der Funktionen der Anwendung) oder der Unterst&uuml;tzung bei unserer Analyse, wie unsere Seite, unsere Anwendung und unsere Leistung genutzt werden. Diese Dritten haben m&ouml;glicherweise Zugriff auf Ihre pers&ouml;nlichen Informationen und Systemkennung. Wenn sie Zugriff darauf haben, dient dieser Zugriff lediglich der Erf&uuml;llung ihrer Aufgaben in unserem Namen, und solche Dritte sind verpflichtet, solche Informationen nicht offenzulegen oder f&uuml;r andere Zwecke zu nutzen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.6 Cookies Dritter</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Drittanbieter, einschlie&szlig;lich Google, verwenden Cookies, um auf Grundlage fr&uuml;herer Besuche eines ThePuzzzle-Benutzers auf der Seite von ThePuzzzle Werbeanzeigen zu schalten. Sie k&ouml;nnen diese konkreten Cookies, die fr&uuml;here Besuche zum Zwecke von Folgewerbung aufzeichnen, unter <a href="http://www.google.com/privacy_ads.html"><span style="color: #1d95cb">http://www.google.com/privacy_ads.html</span></a> deaktivieren.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.7 Schaltfl&auml;che Gef&auml;llt Mir auf Facebook</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Unsere Seite und unsere Anwendung nutzen Social Plug-ins wie die Schaltfl&auml;che Gef&auml;llt Mir. Facebook wird von Facebook, Inc. 1601 S. California Avenue, Palo Alto, CA 94304, USA betrieben. Immer, wenn Sie einen Teil unserer Seite oder Anwendung besuchen, der ein solches Plug-in enth&auml;lt, stellt Ihr Internetbrowser eine direkte Verbindung zu den Servern von Facebook her, und bestimmte Daten bez&uuml;glich des Plug-ins werden von Facebook an Ihren Browser &uuml;bertragen und in unsere Seite oder Anwendung eingebettet.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Infolgedessen erh&auml;lt Facebook die Informationen, die Sie in einem bestimmten Teil unserer Seite oder unserer Anwendung einsehen, ohne dabei Ihre Identit&auml;t zu kennen. Wenn Sie sich auf Ihrem pers&ouml;nlichen Facebook-Konto angemeldet haben, kann Facebook Ihren Besuch auf unserer Seite oder unserer Anwendung auch mit Ihrem pers&ouml;nlichen Facebook-Konto verbinden. Ebenso wird die Nutzung der Schaltfl&auml;che Gef&auml;llt Mir auf Facebook von Facebook aufgezeichnet.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie mehr dar&uuml;ber erfahren m&ouml;chten, welche Ihrer Daten von Facebook erfasst werden und wie solche Daten von Facebook genutzt werden, lesen Sie bitte die Datenschutzrichtlinie von Facebook unter: [<a href="http://de-de.facebook.com/policy.php"><span style="color: #1d95cb">http://de-de.facebook.com/policy.php</span></a>]</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.8 Befolgung von Gesetzen und Strafverfolgung; Garantieprogramm</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle kooperiert mit Regierungsbeamten und den Strafverfolgungsbeh&ouml;rden sowie privaten Parteien, um das Gesetz durchzusetzen und zu befolgen. Wir geben solche Informationen &uuml;ber Sie an Regierungs- oder Strafverfolgungsbeh&ouml;rden oder private Parteien weiter, wenn dies im Rahmen der Reaktion auf Anspr&uuml;che und Rechtsverfahren (unter anderem Vorladungen) verpflichtend oder angemessen ist, um das Eigentum und die Rechte von ThePuzzzle oder einem Dritten zu sch&uuml;tzen, um die Sicherheit der &Ouml;ffentlichkeit oder von Einzelpersonen zu sch&uuml;tzen oder um Aktivit&auml;ten zu verhindern oder zu unterbinden, die wir als illegal, unethisch oder strafbar erachten oder von denen wir denken, dass sie m&ouml;glicherweise illegal, unethisch oder strafbar sein k&ouml;nnten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir geben solche Informationen &uuml;ber Sie an Regierungs- oder Strafverfolgungsbeh&ouml;rden und an unsere Versicherungsanbieter weiter, wenn dies im Rahmen der Erf&uuml;llung unserer ThePuzzzle-Kundegebergarantie <a href="http://www.thepuzzzle.com/loadArtical/9-term-conditions"><span style="color: #1d95cb">http://www.thepuzzzle.com/loadArtical/9-term-conditions</span></a> verpflichtend oder angemessen ist, um das Eigentum und die Rechte von ThePuzzzle oder eines Dritten zu sch&uuml;tzen, um die Sicherheit der &Ouml;ffentlichkeit oder von Einzelpersonen zu sch&uuml;tzen oder um Aktivit&auml;ten zu verhindern oder zu unterbinden, die wir als illegal, unethisch oder strafbar erachten oder von denen wir denken, dass sie m&ouml;glicherweise illegal, unethisch oder strafbar sein k&ouml;nnten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">5.9 Gesch&auml;fts&uuml;berg&auml;nge</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle ist berechtigt, im Rahmen einer Fusion, &Uuml;bernahme, Neustrukturierung oder eines Verkaufs von Verm&ouml;gensobjekten oder im Falle eines Konkurses einige oder alle seiner Verm&ouml;gensObjekte, einschlie&szlig;lich Ihrer pers&ouml;nlichen Informationen zu verkaufen, zu &uuml;bertragen oder anderweitig weiterzugeben. Auch in diesem Fall werden Ihre pers&ouml;nlichen Informationen weiter gem&auml;&szlig; dieser Datenschutzrichtlinie verarbeitet.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>6 Ihre Informationen einsehen, &auml;ndern oder l&ouml;schen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Alle Mitglieder d&uuml;rfen Ihre pers&ouml;nlichen Informationen, die ThePuzzzle in ihrem Registrierungsprofil gespeichert hat, jederzeit pr&uuml;fen, aktualisieren, korrigieren oder l&ouml;schen. Kontaktieren Sie uns hierf&uuml;r bitte unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a> oder bearbeiten Sie den entsprechenden Teil in Ihrem Profil. Wenn Sie Ihr ThePuzzzle-Konto schlie&szlig;en m&ouml;chten, kontaktieren Sie uns bitte oder w&auml;hlen Sie die Funktion &bdquo;Konto schlie&szlig;en&ldquo; der Leistung, und wir werden uns bem&uuml;hen, Ihrer Aufforderung Folge zu leisten, sofern wir nicht gesetzlich verpflichtet sind oder einen legitimen Gesch&auml;ftsgrund haben, einige der in Ihrem ThePuzzzle-Konto enthaltenen Informationen zu behalten. Bitte beachten Sie, dass Rezensionen, die Sie &uuml;ber die Seite und die Anwendung eingestellt haben, auch nach der Schlie&szlig;ung Ihres ThePuzzzle-Kontos &ouml;ffentlich auf der Seite und der Anwendung sichtbar bleiben. Kontaktinformationen f&uuml;r Datenschutzangelegenheiten finden Sie unten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Des Weiteren informiert ThePuzzzle Sie auf Verlangen &uuml;ber andere pers&ouml;nliche Informationen, die ThePuzzzle &uuml;ber Sie gespeichert hat, wenn wir hierzu verpflichtet sind.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Bitte beschreiben Sie die erforderlichen Informationen jedoch genau, damit wir Ihnen die korrekten Informationen geben k&ouml;nnen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>7 Sicherheit</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Der Schutz Ihrer Informationen ist ThePuzzzle sehr wichtig. Wenn Sie sensible Informationen in unsere Registrierungs- oder Bestellformulare eingeben (zum Beispiel Ihre Kreditkartennummer), verschl&uuml;sseln wir solche Informationen mithilfe von Secure Socket Layer Technologie (SSL). Wir befolgen allgemein anerkannte Branchenstandards zum Schutz der bei uns eingereichten, pers&ouml;nlichen Informationen, sowohl w&auml;hrend der &Uuml;bertragung als auch nach Erhalt solcher Informationen. Keine &Uuml;bertragungsmethode &uuml;ber das Internet oder elektronische Speichermethode ist jedoch 100% sicher. Daher k&ouml;nnen wir ihre absolute Sicherheit nicht garantieren. Bei Fragen zur Sicherheit auf unserer Seite und in unserer Anwendung k&ouml;nnen Sie uns unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a> kontaktieren.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir informieren Sie, wenn gesetzlich erforderlich, per E-Mail oder &uuml;ber deutlich sichtbare Hinweise auf der Seite und in der Anwendung so schnell wie m&ouml;glich und ohne unangemessene Verz&ouml;gerung &uuml;ber Verletzungen der Sicherheit, Vertraulichkeit oder Integrit&auml;t Ihrer elektronisch gespeicherten &bdquo;pers&ouml;nlichen Daten&ldquo; (wie und wenn gem&auml;&szlig; geltenden Gesetzen zur Meldung von Sicherheitsverletzungen erforderlich), soweit dies mit (i) den legitimen Anforderungen der Strafverfolgung oder (ii) f&uuml;r die Feststellung des Umfangs der Verletzung und die Wiederherstellung der angemessenen Integrit&auml;t des Datensystems erforderlichen Ma&szlig;nahmen im Einklang steht.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>8 Links zu anderen Webseiten</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Unsere Seite und unsere Anwendung enthalten Links zu anderen Webseiten. Wenn Sie die Seite eines Werbepartners durch Anklicken einer Bannerwerbung oder einer anderen Art der Werbung besuchen, oder auf den Link eines Dritten klicken, werden Sie auf die Webseite des entsprechenden Dritten weitergeleitet. Die Tatsache, dass unsere Seite Links zu einer Webseite, Bannerwerbungen oder anderen Arten von Werbung enth&auml;lt, stellt weder eine Unterst&uuml;tzung noch eine Erkl&auml;rung unserer Verbundenheit mit dem entsprechenden Dritten dar, noch stellt dies eine Unterst&uuml;tzung ihrer Richtlinien oder Praktiken in Verbindung mit Datenschutz oder Informationssicherheit dar. Wir haben keine Kontrolle &uuml;ber die Webseiten Dritter. Diese anderen Webseiten platzieren m&ouml;glicherweise ihre eigenen Cookies oder andere Dateien auf Ihrem Computer, erheben Daten oder erbitten pers&ouml;nliche Informationen von Ihnen. Andere Webseiten befolgen andere Regeln hinsichtlich der Nutzung oder Offenlegung von pers&ouml;nlichen Informationen, die Sie auf diesen Webseiten bereitstellen. Diese Datenschutzrichtlinie gilt ausschlie&szlig;lich f&uuml;r unsere Seite. Wir fordern Sie auf, die Datenschutzrichtlinien oder -erkl&auml;rungen der anderen Webseiten, die Sie besuchen, zu lesen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>9 Erfahrungsberichte</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Mit Ihrer vorherigen Genehmigung d&uuml;rfen wir Ihre Erfahrungsberichte zusammen mit Ihrem Namen auf der Seite und der Anwendung ver&ouml;ffentlichen. Wenn Sie m&ouml;chten, dass Ihr Erfahrungsbericht entfernt wird, kontaktieren Sie uns bitte unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a>.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>10 Unsere Richtlinie bez&uuml;glich Kindern</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Seite und die Anwendung richten sich an Personen ab 18 Jahre. Wir erheben wissentlich keine pers&ouml;nlich identifizierbaren Informationen von Personen unter 18 Jahren.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>Kontakt</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Bei Fragen zu dieser Datenschutzrichtlinie kontaktieren Sie bitte ThePuzzzle unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a></p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Impressum:</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Maistr. 26</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">80337 M&uuml;nchen</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">DE Germany</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Telefon +49 89&nbsp;95 40 58 18</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">E-Mail info@thepuzzzle.com</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">http://www.thepuzzzle.com</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">vertreten durch: Brian Michael Seyum</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wirtschafts-Identifikationsnummer UST-NR.: DE215284939</p>\r\n', NULL, 1, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `bsp_articla` (`ID`, `article_name`, `details_en`, `details_de`, `custom_url`, `iStatus`, `article_name_de`, `custom_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(13, 'Term & Conditions                    ', '', '<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>Handlungsweise von Nutzern</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie sind sich bewusst und erkl&auml;ren sich damit einverstanden, dass Sie die alleinige Verantwortung f&uuml;r die Einhaltung aller Gesetze, Regeln, Vorschriften und Steuerpflichten tragen, die u. U. f&uuml;r die Nutzung der Website, Anwendung, Dienstleistungen und Inhalte gelten. Im Rahmen der Nutzung unserer Website, der Anwendung und der Dienstleistungen erkl&auml;ren Sie sich einverstanden, Folgendes zu unterlassen:</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">lokale, staatliche, bundesstaatliche, nationale oder sonstige Gesetze oder Richtlinien oder Gerichtsbeschl&uuml;sse zu missachten, einschlie&szlig;lich, aber nicht beschr&auml;nkt auf Beschr&auml;nkungen nach Zone und Steuervorschriften</li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Nutzung manueller oder automatisierter Software, Ger&auml;te, Skript-Robots, sonstiger Mittel oder Verfahren f&uuml;r den Zugriff, &bdquo;Scrapen&ldquo;, &bdquo;Crawling&ldquo; oder &bdquo;Spidern&ldquo; von Webseiten oder sonstigen Dienstleistungen, die auf&nbsp; der Website, in der Anwendung, in den Dienstleistungen oder im Inhalt beinhaltet sind<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Nutzung der Website, Anwendung oder Dienstleistungen f&uuml;r gewerbliche oder sonstige Zwecke, die nicht ausdr&uuml;cklich durch diese Bedingungen gestattet werden<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">Kopieren, Speichern oder sonstigen Zugriff auf Informationen, die auf der Website, in der Anwendung, in den Dienstleistungen oder im Inhalt enthalten sind, f&uuml;r Zwecke, die nicht ausdr&uuml;cklich durch diese Bedingungen gestattet werden<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Rechte einer Person oder Entit&auml;t zu verletzen, einschlie&szlig;lich und ohne Einschr&auml;nkung geistigem Eigentumsrecht, Datenschutz-, Werbe- oder Vertragsrecht<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">den Betrieb unserer Website, der Anwendung und der Dienstleistungen zu st&ouml;ren oder diese zu besch&auml;digen, u.&nbsp;a. durch Verwendung von Viren, Cancelbots, Trojanern, sch&auml;dlichen Codes, Ping-Fluten, Denial-of-Service-Angriffen, Paket- oder IP-Spoofing, gef&auml;lschtem Routing oder E-Mail-Adressen oder &auml;hnlichen Methoden und Technologien<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">unsere Website, die Anwendung oder die Dienstleistungen f&uuml;r die &Uuml;bertragung, Verteilung, Ver&ouml;ffentlichung oder Bereitstellung von Informationen zu einer Drittperson oder<!-- br--> -organisation zu verwenden, u.&nbsp;a. Fotografien Dritter ohne deren Erlaubnis, pers&ouml;nliche Kontaktdaten oder Kredit-, Kunden- oder Anrufkarten oder Kontonummern<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">unsere Website, die Anwendung oder die Dienstleistungen in Verbindung mit der Weitergabe unerw&uuml;nschter Werbe-E-Mails (&bdquo;Spam&quot;) oder Werbeanzeigen zu verwenden, die nicht mit der Unterkunft in Privatr&auml;umen in Zusammenhang steht<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">andere Benutzer unserer Website, der Anwendung oder der Dienstleistungen zu verfolgen oder zu bel&auml;stigen oder personenbezogene Daten &uuml;ber andere Benutzer f&uuml;r andere Zwecke als dem zu speichern, Transaktionen als Kunde oder Anbieter von ThePuzzzle zu agieren<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">als Anbieter Objekte anzubieten, die nicht Ihr Eigentum sind oder f&uuml;r die Sie nicht &uuml;ber die erforderliche Genehmigung verf&uuml;gen (ohne Einschr&auml;nkung des Vorstehenden, d&uuml;rfen Sie nicht als Anbieter f&uuml;r Objekte werben, wenn Sie als Mietvermittler oder Inserent f&uuml;r einen Dritten agieren)<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">als Anbieter ein Objekt anzubieten, das nicht gem&auml;&szlig; den Bestimmungen eines Vertrages mit einem Dritten vermietet oder untervermietet wird, einschlie&szlig;lich, aber nicht beschr&auml;nkt auf einen Mietvertrag<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); line-height: 30px;">sich f&uuml;r mehr als ein ThePuzzzle-Konto oder im Namen einer anderen Person f&uuml;r ein ThePuzzzle-Konto anzumelden<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">einen Anbieter zu einem anderen Zweck als dem zu kontaktieren, um eine Frage bez&uuml;glich einer Buchung, wie z.&nbsp;B. des Objekts, Dienstleistung oder eines Eintrags des Anbieters, zu stellen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">einen Kunde zu einem anderen Zweck als dem zu kontaktieren, eine Frage bez&uuml;glich einer Buchung oder der Benutzung der Website, der Anwendung oder der Dienstleistungen durch den Kunde zu kontaktieren<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">ohne vorheriges schriftliches Einverst&auml;ndnis in Ihrer Eigenschaft als Kunde oder anderweitig einen Anbieter oder ein anderes Mitglied dazu aufzufordern, die Dienste oder Website eines Dritten zu nutzen, der in Wettbewerb mit ThePuzzzle steht<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">im Namen einer anderen Person oder Entit&auml;t zu handeln, eine falsche Identit&auml;t anzunehmen oder sich selbst oder Ihre Zugeh&ouml;rigkeit zu einer Person oder Entit&auml;t anderweitig falsch darzustellen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); line-height: 30px;">automatische Skripte zur Datenerfassung zu verwenden oder anderweitig mit der Website, der Anwendung und den Dienstleistungen zu interagieren<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Website, die Anwendung und die Dienstleistungen zu nutzen, um einen Anbieter oder Kunde ausfindig zu machen und eine Buchung eines Angebots au&szlig;erhalb der Website, der Anwendung oder den Dienstleistungen zu t&auml;tigen, um die Bezahlung der Dienstgeb&uuml;hr f&uuml;r die von ThePuzzzle erbrachten Leistungen zu umgehen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">als Anbieter einen Eintrag mit falschen oder irref&uuml;hrenden Preisangaben vorzunehmen oder einen Eintrag unter Angabe eines Preisangebots vorzunehmen, das Sie nicht einzuhalten beabsichtigen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">oder ver&ouml;ffentlichen, hochladen, abschicken oder &uuml;bertragen von Inhalten, die: (i) die gegen das Patent&nbsp;oder Urheberrecht, das Markenzeichen, Handelsgeheimnis, das moralische Recht oder sonstiges geistige Eigentums- oder Werberecht oder den Datenschutz versto&szlig;en; (ii) die gegen geltendes Recht oder eine Richtlinie versto&szlig;en oder zu zivilrechtlicher Haftung f&uuml;hren w&uuml;rde bzw. zu einer solchen Verhaltensweise anhalten; (iii) die arglistig, falsch, irref&uuml;hrend oder tr&uuml;gerisch sind; (iv) die verleumderisch, obsz&ouml;n, vulg&auml;r, beleidigend oder pornografischer Natur sind; (v) die zu Diskriminierung, Bigotterie, Rassismus, Hass, Bel&auml;stigung oder Sch&auml;digung einer Person oder Gruppe anhalten; (vi) die gewaltsam oder bedrohlich ist oder Gewalt und Handlungen f&ouml;rdern, die eine andere Person bedrohen; oder (vii) die den Gebrauch illegaler oder sch&auml;dlicher Substanzen f&ouml;rdern</li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">systematisch Daten oder andere Inhalte von unserer Website, Anwendung oder unseren Dienstleistungen zu erfassen, um direkt oder indirekt in einzelnen oder mehreren Ladevorg&auml;ngen eine Sammlung, Zusammenstellung, ein Verzeichnis oder &auml;hnlichem zu erstellen oder zusammenzustellen, sei es durch manuelle Verfahren, durch den Einsatz von Bots, Abrufprogrammen (Webcrawlern oder Webspidern) oder &Auml;hnlichem<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Website oder die Anwendung oder einen einzelnen Aspekt innerhalb der Website, der Dienstleistungen oder der Anwendung, dem Namen von ThePuzzzle, einem Markenzeichen von ThePuzzzle, dem Logo oder sonstigen gesch&uuml;tzten Informationen oder das Layout und das Design einer Webseite oder die auf einer Seite enthaltene Form ohne das ausdr&uuml;ckliche schriftliche Einverst&auml;ndnis von ThePuzzzle zu verwenden, anzuzeigen, nachzuahmen oder auszuarbeiten<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">auf nicht-&ouml;ffentliche Bereiche der Website oder Anwendung, die Computersysteme von ThePuzzzle oder die technischen Liefersysteme der Anbieter von ThePuzzzle zuzugreifen, zu modifizieren oder zu verwenden<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">zu versuchen, die Zug&auml;nglichkeit eines Systems oder Netzwerks von ThePuzzzle zu erproben, scannen oder zu testen oder Sicherheits- und Authentifizierungsma&szlig;nahmen zu umgehen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">von ThePuzzzle eingesetzte technische Ma&szlig;nahmen, die Ma&szlig;nahmen eines Anbieters von ThePuzzzle oder eines Dritten (einschlie&szlig;lich eines anderen Benutzers) zum Schutz der Website, der Dienstleistungen, der Anwendung und gemeinsamer Inhalte zu umgehen, &uuml;berbr&uuml;cken, entfernen, deaktivieren, st&ouml;ren, entschl&uuml;sseln oder anderweitig au&szlig;er Kraft zu setzen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">die Kopfzeile eines TCP/IP-Pakets oder einen Teil der Information der Kopfzeile einer E-Mail oder eines Eintrags in einer Newsgroup zu f&auml;lschen oder die Website, die Dienstleistungen, die Anwendung oder die gemeinsamen Inhalte auf irgendeine Weise zu f&auml;lschen, um ver&auml;nderte, betr&uuml;gerische oder f&auml;lschliche, die Quelle preisgebende Informationen zu verschicken<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); ">zu versuchen, die f&uuml;r die Website, die Anwendung oder gemeinsame Inhalte verwendete Software zu entschl&uuml;sseln, dekompilieren, zerlegen oder zur&uuml;ckzuentwickeln<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font: normal normal normal 15px/normal ''Helvetica Neue''; color: rgb(57, 60, 62); line-height: 30px;">oder einen Dritten zu einer der voranstehenden Handlungen aufzufordern, zu ermutigen oder ihm bei diesen zur Hand zu gehen<!-- br--></li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle hat das Recht, Verst&ouml;&szlig;e gegen die oben genannten Bestimmungen mit allen ihm zur Verf&uuml;gung stehenden Rechtsmitteln zu untersuchen und zu verfolgen. ThePuzzzle hat das Recht, Strafverfolgungs- und Vollzugsbeh&ouml;rden in die Verfolgung von Benutzern, die diese Bestimmungen missachten, involvieren und mit diesen zusammenzuarbeiten. Sie erkennen an, dass ThePuzzzle nicht verpflichtet ist, Ihre Nutzung der Website, der Anwendung, der Dienstleistungen oder der gemeinsamen Inhalte zu &uuml;berwachen oder die Inhalte von Mitgliedern zu &uuml;berpr&uuml;fen oder zu bearbeiten, sich hierzu jedoch zu Betriebszwecken der Website, der Anwendung und der Dienstleistungen das Recht vorbeh&auml;lt, um Ihre Einhaltung der hier genannten Bestimmungen durchzusetzen oder die Einhaltung der geltenden Gesetze oder Beschl&uuml;sse oder Anforderungen eines Gerichts, einer Verwaltungs- oder Regierungsbeh&ouml;rde zu erwirken. ThePuzzzle beh&auml;lt sich das Recht vor, jederzeit und ohne vorherige Ank&uuml;ndigung den Zugriff auf den gemeinsamen Inhalt zu l&ouml;schen oder zu deaktivieren, den ThePuzzzle nach eigenem Ermessen als fragw&uuml;rdig, den hier aufgef&uuml;hrten Bestimmungen zuwiderlaufend oder anderweitig sch&auml;dlich f&uuml;r die Website, die Anwendung oder die Dienstleistungen erachtet.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Datenschutz&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Datenschutzrichtlinie von ThePuzzzle ist unter <a href="http://www.thepuzzzle.com/loadArtical/9-term-conditions"><span style="color: #1d95cb">http://www.thepuzzzle.com/loadArtical/9-term-conditions</span></a> aufgef&uuml;hrt. Hier erhalten Sie zudem Informationen und Hinweise zur Erfassung und Verwendung Ihrer personenbezogenen Daten seitens ThePuzzzle.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Eigentum&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Website, die Anwendung, die Dienstleistungen und die gemeinsamen Inhalte sind urheber- und markenrechtlich gesch&uuml;tzt. Sie erkennen an, dass die Website, die Anwendung, die Dienstleistungen und die gemeinsamen Inhalte, einschlie&szlig;lich aller in Zusammenhang stehender geisteigen Eigentumsrechte alleiniges Eigentum von ThePuzzzle und dessen Lizenzgeber sind. Sie d&uuml;rfen das Urheberrecht, das Markenzeichen, das Dienstleistungszeichen oder sonstige urheberrechtliche Hinweise auf der oder in Zusammenhang mit der Website, der Anwendung, der Dienstleistungen und der gemeinsamen Inhalte keinesfalls entfernen, ver&auml;ndern oder unkenntlich machen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Anwendungslizenz&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Vorbehaltlich der Einhaltung dieser Bedingungen durch Sie, gew&auml;hrt Ihnen ThePuzzzle eine beschr&auml;nkte, nicht exklusive, nicht &uuml;bertragbare Lizenz f&uuml;r den Download und die Installation einer Kopie der Anwendung auf einem einzigen mobilen Ger&auml;t oder Computer, der sich in Ihrem Besitz oder Eigentum befindet, und f&uuml;r die Ausf&uuml;hrung der Anwendung allein f&uuml;r Ihre eigenen pers&ouml;nlichen Zwecke. Weiterhin werden Sie in Bezug auf jede vom App-Store bezogene Anwendung (gem&auml;&szlig; untenstehender Definition) diese vom App-Store bezogene Anwendung nur (i) auf einem Apple-Markenprodukt verwenden, das unter Apples eigenem Betriebssystem (iOS) l&auml;uft, und (ii) gem&auml;&szlig; den zul&auml;ssigen &bdquo;Nutzungsregeln&ldquo;, die in den App-Store-Servicebedingungen von Apple festgelegt sind. ThePuzzzle beh&auml;lt sich alle Rechte an der Anwendung vor, die Ihnen nicht ausdr&uuml;cklich in diesen Bedingungen gew&auml;hrt werden.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>ThePuzzzle Inhalts- und Mitgliederinhaltslizenz</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Vorbehaltlich Ihrer Einhaltung der Bestimmungen und Bedingungen dieser Bedingungen gew&auml;hrt Ihnen ThePuzzzle eine beschr&auml;nkte, nicht exklusive, nicht &uuml;bertragbare Lizenz f&uuml;r den (i) Zugriff und die Anzeige jeglicher ThePuzzzle-Inhalte, und zwar einzig und allein f&uuml;r pers&ouml;nliche und nichtgewerbliche Zwecke, und (ii) den Zugriff und die Anzeige jeglicher Mitgliederinhalte, auf die Sie zugreifen d&uuml;rfen, und zwar einzig und allein f&uuml;r pers&ouml;nliche und nichtgewerbliche Zwecke. Sie sind nicht berechtigt, die in diesem Abschnitt gew&auml;hrten Lizenzrechte an Dritte weiterzugew&auml;hren.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie werden die Website, Anwendung, Dienstleistungen oder gesammelten Inhalte, au&szlig;er so wie dies ausdr&uuml;cklich in diesen Bedingungen erlaubt ist, weder nutzen noch kopieren, adaptieren, modifizieren, auf deren Grundlage abgeleitete Arbeiten erstellen, vertreiben, lizenzieren, verkaufen, &uuml;bertragen, &ouml;ffentlich ausstellen, &ouml;ffentlich ausf&uuml;hren, &uuml;bermitteln, senden oder anderweitig verwerten. Es werden Ihnen keine Lizenzen oder Rechte gew&auml;hrt, weder stillschweigend noch anderweitig, die geistigen Eigentumsrechten unterliegen, die im Besitz oder Eigentum von ThePuzzzle oder dessen Lizenzgebern sind, mit Ausnahme der Lizenzen und Rechte, die ausdr&uuml;cklich unter diesen Bedingungen gew&auml;hrt werden.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Mitgliederinhalte&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Es liegt in unserem eigenen Ermessen, es Mitgliedern zu erlauben, Mitgliederinhalte zu posten, hochzuladen, zu ver&ouml;ffentlichen, zu &uuml;bertragen oder &uuml;bermitteln. Indem Sie auf oder &uuml;ber die Website, Anwendung und Dienstleistungen Mitgliederinhalte zur Verf&uuml;gung stellen, gew&auml;hren Sie ThePuzzzle eine weltweite, unwiderrufliche, st&auml;ndige, nicht exklusive, &uuml;bertragbare und kostenlose Lizenz, einschlie&szlig;lich dem Recht Unterlizenzen zu gew&auml;hren, f&uuml;r die Nutzung, Anzeige, Vervielf&auml;ltigung, Adaptierung, Modifizierung, den Vertrieb, die Lizenzierung, den Verkauf, die &Uuml;bertragung, &ouml;ffentliche Anzeige, &ouml;ffentliche Ausf&uuml;hrung, &Uuml;bermittlung, das Streaming, die Sendung, den Zugriff und die Anzeige und sonstige Verwertung dieser Mitgliederinhalte, und zwar auf, &uuml;ber und mittels der Website, Anwendung und Dienstleistungen. ThePuzzzle beansprucht keinerlei Eigentumsrechte an solchen Mitgliederinhalten und keine Bestimmungen dieser Bedingungen soll etwaige Rechte einschr&auml;nken, die Sie f&uuml;r die Nutzung und Verwertung solcher Mitgliederinhalte haben m&ouml;gen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie best&auml;tigen und vereinbaren, dass Sie allein f&uuml;r alle Mitgliederinhalte verantwortlich sind, die Sie &uuml;ber die Website, Anwendung oder Dienstleistungen zur Verf&uuml;gung stellen. Dementsprechend versichern und garantieren Sie, dass: (i) Sie entweder der alleinige und ausschlie&szlig;liche Eigent&uuml;mer aller Mitgliederinhalte sind, die Sie &uuml;ber die Website, Anwendung oder Dienstleistungen zur Verf&uuml;gung stellen, oder Sie alle Rechte, Lizenzen, Genehmigungen und Freigaben haben, die notwendig sind, um ThePuzzzle die Rechte an solchen Mitgliederinhalten zu gew&auml;hren, so wie dies gem&auml;&szlig; diesen Bedingungen beabsichtigt ist; und (ii) dass weder die Mitgliederinhalte noch deren Posten, Hochladen, Ver&ouml;ffentlichen, &Uuml;bertragen oder &Uuml;bermitteln oder die Nutzung der Mitgliederinhalte (oder eines Teils davon) durch ThePuzzzle auf, durch oder mittels der Website, Anwendung oder Dienstleistungen etwaige Patentrechte, Copyrights, Marken, Betriebsgeheimnisse, Urheberpers&ouml;nlichkeitsrechte oder sonstige Eigentums- oder geistigen Eigentumsrechte oder &Ouml;ffentlichkeits- oder Pers&ouml;nlichkeitsrechte oder Datenschutzrechte Dritter missbraucht oder verletzt oder die Verletzung eines geltenden Gesetzes oder einer Vorschrift zur Folge hat.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Links&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Website, Anwendung und Dienstleistungen k&ouml;nnen Links auf Webseiten oder Ressourcen Dritter enthalten. Sie best&auml;tigen und vereinbaren, dass ThePuzzzle nicht f&uuml;r Folgendes verantwortlich oder haftbar ist: (i) die Verf&uuml;gbarkeit oder Richtigkeit dieser Webseiten oder Ressourcen; oder (ii) den Inhalt, die Produkte oder Dienstleistungen auf diesen Webseiten oder Ressourcen, oder die dort zur Verf&uuml;gung gestellt werden. Links auf diese Webseiten oder Ressourcen beinhalten keine Unterst&uuml;tzung dieser Webseiten oder Ressourcen oder der Inhalte, Produkte oder Dienstleistungen, die auf diesen Webseiten oder Ressourcen zur Verf&uuml;gung gestellt werden, durch ThePuzzzle. Sie best&auml;tigen Ihre alleinige Verantwortung und &uuml;bernehmen das volle Risiko aus Ihrer Nutzung solcher Webseiten oder Ressourcen oder Inhalte, Produkte oder Dienstleistungen auf diesen Webseiten oder Ressourcen, oder die dort zur Verf&uuml;gung gestellt werden.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Hinweise auf Eigentumsrechte</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Alle Marken, Dienstleistungsmarken, Logos, Handelsnamen und sonstige Eigentumsbezeichnungen von ThePuzzzle, die hierin verwendet werden, sind Marken oder eingetragene Marken von ThePuzzzle. Alle sonstigen Marken, Dienstleistungsmarken, Logos, Handelsnamen und sonstige Eigentumsbezeichnungen sind die Marken oder eingetragene Marken der jeweiligen Parteien.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>R&uuml;ckmeldung&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wir freuen uns &uuml;ber und unterst&uuml;tzen Ihre R&uuml;ckmeldung, Kommentare und Vorschl&auml;ge zur Verbesserungen der Website, Anwendung oder Dienstleistungen (&bdquo;R&uuml;ckmeldung&ldquo;). Sie k&ouml;nnen uns R&uuml;ckmeldung geben, indem Sie uns eine E-Mail an<span style="font: 21.0px ''Helvetica Neue''"> <a href="mailto:info@thepuzzzle.com"><span style="font: 15.0px ''Helvetica Neue''; color: #1d95cb">info@thepuzzzle.com</span></a></span> senden oder &uuml;ber den Abschnitt &bdquo;<b>Kontakt</b>&ldquo; (<a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a>) auf der Website und in der Anwendung. Sie best&auml;tigen und vereinbaren, dass jede R&uuml;ckmeldung das alleinige und ausschlie&szlig;liche Eigentum von ThePuzzzle ist, und Sie &uuml;bertragen ThePuzzzle hiermit unwiderruflich alle Ihre Rechte, Eigentumsrechte und Anspr&uuml;che an und auf die gesamte R&uuml;ckmeldung und stimmen dem unwiderruflich zu, insbesondere f&uuml;r alle weltweiten Patente, Copyrights, Betriebsgeheimnisse, Urheberpers&ouml;nlichkeitsrechte und sonstige Eigentums- oder geistigen Eigentumsrechte diesbez&uuml;glich. Auf Antrag und Kosten von ThePuzzzle unterzeichnen Sie alle Dokumente und unternehmen alle weiteren Schritte, die ThePuzzzle angemessenerweise fordern kann, um ThePuzzzle dabei zu unterst&uuml;tzen, seine geistigen Eigentumsrechte oder sonstigen rechtlichen Schutzma&szlig;nahmen f&uuml;r die R&uuml;ckmeldung zu erwerben, abzuschlie&szlig;en und aufrechtzuerhalten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Copyright-Regelung&nbsp;</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle respektiert das Copyright-Gesetz und erwartet dies auch von seinen Nutzern. ThePuzzzle macht es sich zur Regel, unter gewissen, angemessenen Umst&auml;nden die ThePuzzzle-Konten von Mitgliedern oder sonstigen Inhabern von Konten zu k&uuml;ndigen, die Rechte von Copyright-Eigent&uuml;mern und Besitzern wiederholt verletzen oder vermutlich verletzen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e"><b>K&uuml;ndigung und L&ouml;schung von ThePuzzzle-Konten</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Es liegt in unserem eigenen Ermessen, ohne dass wir Ihnen gegen&uuml;ber haftbar sind, Folgendes zu unternehmen, und zwar jederzeit, mit oder ohne Grund und mit oder ohne Frist: (a) diese Bedingungen zu k&uuml;ndigen oder Ihren Zugriff auf unsere Website, Anwendung oder Dienstleistungen zu beenden und (b) Ihr ThePuzzzle-Konto zu deaktivieren oder zu l&ouml;schen. Nach der K&uuml;ndigung werden wir Ihnen sofort alle Betr&auml;ge auszahlen, die wir Ihnen angemessenerweise, in unserem eigenen Ermessen schulden und die wir Ihnen rechtlich zu zahlen verpflichtet sind. Falls ThePuzzzle diese Bedingungen k&uuml;ndigt oder Ihren Zugriff auf unsere Website, Anwendung oder Dienstleistungen beendet oder Ihr ThePuzzzle-Konto deaktiviert oder l&ouml;scht, haften Sie weiterhin f&uuml;r alle Betr&auml;ge die gem&auml;&szlig; diesen Bedingungen f&auml;llig sind. Sie k&ouml;nnen Ihr ThePuzzzle-Konto jederzeit &uuml;ber die Funktion &bdquo;Konto l&ouml;schen&ldquo; in den Dienstleistungen l&ouml;schen oder indem Sie uns eine E-Mail an<span style="font: 21.0px ''Helvetica Neue''"> <a href="mailto:info@thepuzzzle.com"><span style="font: 15.0px ''Helvetica Neue''; color: #1d95cb">info@thepuzzzle.com</span></a></span> senden. Bitte beachten Sie, dass wenn Ihr ThePuzzzle-Konto gel&ouml;scht wird, wir nicht verpflichtet sind, etwaige Inhalte, die Sie auf der Website, Anwendung oder in den Dienstleistungen gepostet haben, zu l&ouml;schen oder zur&uuml;ckzugeben; dies trifft insbesondere auf etwaige Bewertungen oder R&uuml;ckmeldungen zu.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Ausschlussklausel</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">WENN SIE DIESE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN NUTZEN UND AM EMPFEHLUNGSPROGAMM TEILNEHMEN, DANN TUN SIE DIES AUF IHR EIGENES RISIKO. SIE BEST&Auml;TIGEN UND VEREINBAREN, DASS THEPUZZZLE KEINE &Uuml;BERPR&Uuml;FUNGEN ZU ETWAIGEN MITGLIEDERN ANSTELLT, INSBESONDERE NICHT &Uuml;BER Kunde UND ANBIETER. DIE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN, GESAMMELTEN INHALTE UND DAS EMPFEHLUNGSPROGRAMM WERDEN &bdquo;WIE GESEHEN&ldquo; ZUR VERF&Uuml;GUNG GESTELLT, OHNE GEW&Auml;HRLEISTUNG JEDER ART, WEDER AUSDR&Uuml;CKLICH NOCH STILLSCHWEIGEND. OHNE DAS OBEN GESAGTE EINZUSCHR&Auml;NKEN, SCHLIESST THEPUZZZLE S&Auml;MTLICHE GARANTIEN DER ALLGEMEINEN GEBRAUCHSTAUGLICHKEIT, DER EIGNUNG F&Uuml;R EINEN BESTIMMTEN ZWECK, DEN UNGEST&Ouml;RTEN BESITZ ODER DIE NICHTVERLETZUNG VON RECHTEN DRITTER UND ETWAIGE GARANTIEN IN BEZUG AUF DIE HANDELSSITTEN AUS. THEPUZZZLE &Uuml;BERNIMMT KEINE GARANTIE DAF&Uuml;R, DASS DIE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN, GESAMMELTE INHALTE, INSBESONDERE DAS ANGEBOT ODER ETWAIGE OBJEKTE ODER DAS EMPFEHLUNGSPROGRAMM, IHREN ANFORDERUNGEN ENTSPRECHEN ODER UNUNTERBROCHEN, SICHER ODER FEHLERFREI ZUR VERF&Uuml;GUNG STEHEN. THEPUZZZLE &Uuml;BERNIMMT KEINE GARANTIE F&Uuml;R DIE QUALIT&Auml;T ETWAIGER ANGEBOTE, UNTERK&Uuml;NFTE, DIE SAMMLUNG VON ThePuzzzle-REISEKREDIT-PUNKTE DURCH SIE, DIE DIENSTLEISTUNGEN ODER GESAMMELTEN INHALTE ODER DIE RICHTIGKEIT, RECHTZEITIGKEIT, WAHRHEIT, VOLLST&Auml;NDIGKEIT ODER VERL&Auml;SSLICHKEIT DER GESAMMELTEN INHALTE, DIE &Uuml;BER DIE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER DAS EMPFEHLUNGSPROGRAMM ERHALTEN WERDEN.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">KEIN RAT UND KEINE INFORMATION, WEDER M&Uuml;NDLICH NOCH SCHRIFTLICH, DER VON ThePuzzzle ODER &Uuml;BER DIE WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER GESAMMELTEN INHALTE ERHALTEN WORDEN IST, ERZEUGT EINE GEW&Auml;HRLEISTUNG, DIE IN DIESEN BEDINGUNGEN NICHT AUSDR&Uuml;CKLICH GEGEBEN WIRD.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">SIE SIND ALLEIN F&Uuml;R IHRE GESAMTE KOMMUNIKATION UND INTERAKTION MIT ANDEREN NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN VERANTWORTLICH, UND MIT ANDEREN PERSONEN, MIT DENEN SIE INFOLGE DER NUTZUNG DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN KOMMUNIZIEREN ODER INTERAGIEREN, INSBESONDERE MIT ANBIETERN ODER KundeN. SIE VERSTEHEN, DASS THEPUZZZLE KEINERLEI VERSUCHE UNTERNIMMT, DIE AUSSAGEN VON NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN ZU &Uuml;BERPR&Uuml;FEN ODER ETWAIGE OBJEKTE ZU &Uuml;BERPR&Uuml;FEN ODER BESUCHEN. THEPUZZZLE MACHT KEINE ZUSICHERUNGEN UND &Uuml;BERNIMMT KEINE GARANTIEN BEZ&Uuml;GLICH DES VERHALTENS VON NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN ODER DEREN KOMPATIBILIT&Auml;T MIT JETZIGEN UND K&Uuml;NFTIGEN NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN. SIE VERPFLICHTEN SICH ENTSPRECHENDE VORSICHTSMASSNAHMEN F&Uuml;R IHRE GESAMTE KOMMUNIKATION UND INTERAKTION MIT ANDEREN NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN ZU ERGREIFEN, UND MIT ANDEREN PERSONEN, MIT DENEN SIE INFOLGE DER NUTZUNG DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN KOMMUNIZIEREN ODER INTERAGIEREN, INSBESONDERE MIT ANBIETERN ODER KundeN UND BESONDERS, WENN SIE SICH DAZU ENTSCHLIESSEN, DIESE OFFLINE ODER PERS&Ouml;NLICH UNABH&Auml;NGIG DAVON ZU TREFFEN, OB DIE TREFFEN VON THEPUZZZLE ORGANISIERT WERDEN. UNGEACHTET THEPUZZZLES ERNENNUNG ALS EINGESCHR&Auml;NKTER ZAHLUNGSEINZIEHENDER VERTRETER DER ANBIETER ZUM ZWECK DER ANNAHME VON ZAHLUNGEN VON KundeN IM NAMEN DER ANBIETER SCHLIESST THEPUZZZLE AUSDR&Uuml;CKLICH JEGLICHE HAFTUNG F&Uuml;R HANDLUNGEN ODER UNTERLASSUNGEN DER ANBIETER IM HINBLICK AUF Kunde ODER SONSTIGE DRITTPARTEIEN AUS.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Haftungsbeschr&auml;nkung</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">SIE BEST&Auml;TIGEN UND VEREINBAREN, DASS SIE, SOWEIT DIES GESETZLICH ERLAUBT IST, DAS GESAMTE RISIKO AUS IHREM ZUGRIFF UND DER NUTZUNG DER WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN UND GESAMMELTEN INHALTE, IHRES ANGEBOTES BZW. BUCHUNG EINEs OBJEKTE &Uuml;BER DIE WEBSITE, ANWENDUNG UND DIENSTLEISTUNGEN, IHRE TEILNAHME AM EMPFEHLUNGSPROGRAMM UND KONTAKTEN, DIE SIE MIT ANDEREN NUTZERN VON THEPUZZZLE PERS&Ouml;NLICH ODER ONLINE HABEN, SELBST TRAGEN. WEDER THEPUZZZLE NOCH EINE ANDERE PARTEI, DIE AN DER ERSTELLUNG, HERSTELLUNG ODER BEREITSTELLUNG DER WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN, GESAMMELTEN INHALTE ODER DEM EMPFEHLUNGSPROGRAMM BETEILIGT IST, IST HAFTBAR F&Uuml;R ETWAIGE BEIL&Auml;UFIG ENTSTANDENE, BESONDERE, SCHADENERSATZ MIT STRAFCHARAKTER ODER FOLGESCH&Auml;DEN, EINSCHLIESSLICH ENTGANGENER GEWINN, DATENVERLUST ODER VERLUST VON FIRMENWERT, DIENSTUNTERBRECHUNG, COMPUTERSCH&Auml;DEN ODER SYSTEMAUSF&Auml;LLE ODER KOSTEN F&Uuml;R ERSATZPRODUKTE ODER -DIENSTLEISTUNGEN ODER F&Uuml;R ETWAIGEN SCHADENERSATZ F&Uuml;R PERSONENSCH&Auml;DEN ODER STRESS AUFGRUND ODER IN VERBINDUNG MIT DIESEN BEDINGUNGEN, AUS DER NUTZUNG ODER UNM&Ouml;GLICHKEIT DER NUTZUNG DER WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER GESAMMELTEN INHALTEN, AUS ETWAIGER KOMMUNIKATION, INTERAKTION ODER TREFFEN MIT ANDEREN NUTZERN DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN ODER ANDEREN PERSONEN, MIT DENEN SIE INFOLGE IHRER NUTZUNG DER WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER IHRER TEILNAHME AM EMPFEHLUNGSPROGRAMM ODER IHRES ANGEBOTS ODER IHRER BUCHUNG EINES ANGEBOTS &Uuml;BER DIE WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN KOMMUNIZIEREN ODER INTERAGIEREN, UNABH&Auml;NGIG DAVON, OB DIES IN EINER GEW&Auml;HRLEISTUNG, VERTRAGLICH, UNERLAUBTEN HANDLUNG (EINSCHLIESSLICH FAHRL&Auml;SSIGKEIT), PRODUKTHAFTUNG ODER EINER ANDEREN RECHTSTHEORIE BEGR&Uuml;NDET IST UND OB THEPUZZZLE &Uuml;BER DIE M&Ouml;GLICHKEIT EINES SOLCHEN SCHADENS UNTERRICHTET WAR ODER NICHT, AUCH DANN NICHT, WENN EIN IN DIESEN BEDINGUNGEN FESTGELEGTER EINGESCHR&Auml;NKTER RECHTSBEHELF SEINEN WESENTLICHEN ZWECK OFFENSICHTLICH NICHT ERF&Uuml;LLT HAT.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">MIT AUSNAHME UNSERER VERPFLICHTUNG, DIE BETR&Auml;GE GEM&Auml;SS DIESEN BEDINGUNGEN ODER EINER GENEHMIGTEN ZAHLUNGSFORDERUNG UNTER DER THEPUZZZLE-ANBIETERGARANTIE AN DIE JEWEILIGEN ANBIETER ZU ZAHLEN, &Uuml;BERSTEIGT THEPUZZZLES GESAMTHAFTUNG AUS ODER IN VERBINDUNG MIT DIESEN BEDINGUNGEN UND IHRER NUTZUNG DER WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN, INSBESONDERE IHRES ANGEBOTS ODER IHRER BUCHUNG EINES ANGEBOTS &Uuml;BER DIE WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN, ODER IHRER NUTZUNG ODER UNM&Ouml;GLICHKEIT DER NUTZUNG DER WEBSITE, ANWENDUNG, DIENSTLEISTUNGEN ODER GESAMMELTEN INHALTE ODER IHRER TEILNAHME AM EMPFEHLUNGSPROGRAMM UND IN VERBINDUNG MIT EINEM ANGEBOT ODER HANDLUNG MIT ANDEREN MITGLIEDERN NICHT DEN BETRAG, DEN SIE F&Uuml;R DIE BUCHUNG &Uuml;BER DIE WEBSITE, ANWENDUNG ODER DIENSTLEISTUNGEN ALS Kunde GEZAHLT HABEN ODER SCHULDEN, UND ZWAR W&Auml;HREND DER LETZTEN ZW&Ouml;LF (12) MONATE VOR DEM EREIGNIS, DAS ZUR HAFTUNG F&Uuml;HRT, ODER FALLS SIE EIN ANBIETER SIND, DEN BETRAG, DEN THEPUZZZLE AN SIE GEZAHLT HAT, UND ZWAR W&Auml;HREND DER LETZTEN ZW&Ouml;LF (12) MONATE VOR DEM EREIGNIS, DAS ZUR HAFTUNG F&Uuml;HRT, ODER GEGEBENENFALLS EINHUNDERT US-DOLLAR (100 $), FALLS KEINE SOLCHE ZAHLUNGEN ERFOLGT SIND. DIE OBEN FESTGELEGTEN BESCHR&Auml;NKUNGEN IN BEZUG AUF SCH&Auml;DEN UND SCHADENERSATZ STELLEN EIN WESENTLICHES ELEMENT DER GESCH&Auml;FTSGRUNDLAGE ZWISCHEN THEPUZZZLE UND IHNEN DAR. IN EINIGEN GERICHTSBARKEITEN IST DER AUSSCHLUSS ODER DIE BESCHR&Auml;NKUNG DER HAFTUNG F&Uuml;R FOLGE- ODER BEIL&Auml;UFIG ENTSTANDENE SCH&Auml;DEN NICHT ERLAUBT. DESHALB KANN ES SEIN, DASS OBIGE BESCHR&Auml;NKUNG F&Uuml;R SIE NICHT GILT.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Schadloshaltung</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie verpflichten sich, ThePuzzzle und seine verbundenen Unternehmen und Tochtergesellschaften und deren F&uuml;hrungskr&auml;fte, Verwaltungsr&auml;te, Mitarbeiter und Bevollm&auml;chtigte schadlos zu halten, freizustellen, zu verteidigen und zu entsch&auml;digen, und zwar von und gegen alle Anspr&uuml;che, Haftungen, Sch&auml;den, Verluste und Ausgaben, insbesondere angemessene Rechts- und Abrechnungskosten, die aus oder in Verbindung mit (a) Ihrem Zugriff oder Ihre Nutzung der Website, Anwendung, Dienstleistungen oder gesammelten Inhalte oder Ihrer Verletzung dieser Bedingungen entstehen, durch (b) Ihre Mitgliederinhalte, (c) Ihre (i) Interaktion mit einem Mitglied, (ii) Buchung eines Angebots, (iii) Erstellung eines Angebotes oder (iv) Nutzung, Zustands oder Vermietung eines Objekts durch Sie, insbesondere Verletzungen, Verluste oder Sch&auml;den (ausgleichend, direkt, beil&auml;ufig entstanden, Folge- oder sonstige Sch&auml;den) jeder Art in Verbindung oder in Folge der Vermietung, Buchung oder Nutzung eines Angebots und (d) Ihre Teilnahme durch Sie.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Exportbeschr&auml;nkungen und L&auml;nder mit Beschr&auml;nkungen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie d&uuml;rfen die Anwendung nicht anderweitig nutzen, exportieren, reexportieren, importieren oder weiterleiten, als dies durch die Gesetze der Vereinigten Staaten erlaubt ist, durch die Gesetze Ihrer Gerichtsbarkeit, in der Sie die Anwendung erhalten haben, und etwaigen anderen geltenden Gesetzen. Insbesondere darf die Anwendung nicht exportiert oder reexportiert werden: (a) in ein Land, das einem Embargo der USA unterliegt, oder (b) an jemanden, der auf der Liste der US-Steuerbeh&ouml;rden steht, der Liste der &bdquo;Specially Designated Nationals&ldquo; oder auf den Listen des US-Handelsministeriums, der Liste &bdquo;Denied Persons&ldquo; oder der &bdquo;Entity&ldquo;-Liste. Indem Sie die Website, Anwendung und Dienstleistungen nutzen, versichern und garantieren Sie, dass (i) weder Sie noch die von Ihnen angebotene Dienstleistung in einem Land ans&auml;ssig sind bzw. liegt, das einem US-Embargo unterliegt oder das von der US-Regierung als Land gekennzeichnet wurde, das &bdquo;Terroristen unterst&uuml;tzt&ldquo; und (ii) Sie nicht auf einer Liste der US-Regierung, die verbotene oder beschr&auml;nkte Parteien erfasst. Sie werden die Website, Anwendung und Dienstleistungen auch nicht f&uuml;r Zwecke nutzen, die nach US-amerikanischem Gesetz verboten sind, einschlie&szlig;lich der Entwicklung, Konstruktion, Herstellung oder Produktion von Raketen oder nuklearen, chemischen oder biologischen Waffen. ThePuzzzle gestattet aufgrund der US-amerikanischen Embargobeschr&auml;nkungen keine Angebote, die mit bestimmten L&auml;ndern assoziiert sind.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Meldung von Missbrauch</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Wenn Sie bei jemandem wohnen oder jemanden beherbergen, von dem Sie glauben, dass er unangebracht handelt oder gehandelt hat, insbesondere Personen, die (i) sich anst&ouml;&szlig;ig, gewaltt&auml;tig oder sexuell unangebracht verhalten, (ii) Sie des Diebstahls bei sich verd&auml;chtigen oder (iii) sich anderweitig st&ouml;rend verhalten, dann sollten Sie dies unverz&uuml;glich den zust&auml;ndigen Beh&ouml;rden melden und dann ThePuzzzle, indem Sie uns die Polizeidienststelle und die Meldungsnummer durchgeben, und zwar unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a>, jedoch unter der Voraussetzung, dass uns Ihre Meldung nicht dazu verpflichtet, eine &uuml;ber das gesetzliche Ma&szlig; hinaus erforderliche Handlung zu unternehmen (gegebenenfalls), oder uns dazu verpflichtet, Ihnen gegen&uuml;ber zu haften.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Gesamte Vereinbarung</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Diese Bedingungen stellen die gesamte und ausschlie&szlig;liche Verabredung und Vereinbarung zwischen ThePuzzzle und Ihnen in Bezug auf die Website, Anwendung, Dienstleistungen, gesammelten Inhalte, das Empfehlungsprogramm und etwaige Buchungen oder Angebote f&uuml;r Dienstleistungen dar, die &uuml;ber die Website, Anwendung oder Dienstleistungen erfolgt sind, und diese Bedingungen gelten vorrangig vor und ersetzen s&auml;mtliche vorherigen m&uuml;ndlichen oder schriftlichen Verabredungen oder Vereinbarungen zwischen ThePuzzzle und Ihnen bez&uuml;glich Buchungen oder Angebote f&uuml;r Dienstleistungen, der Website, Anwendung, den Dienstleistungen, gesammelten Inhalten und dem Empfehlungsprogramm.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Abtretung</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Sie d&uuml;rfen diese Bedingungen ohne die vorherige schriftliche Zustimmung von ThePuzzzle weder kraft Gesetz noch anderweitig abtreten. Jeder Versuch Ihrerseits, diese Bedingungen ohne diese Zustimmung abzutreten oder zu &uuml;bertragen, ist nichtig und hat keine Wirkung. ThePuzzzle kann diese Bedingungen im eigenen Ermessen und ohne Einschr&auml;nkung abtreten oder &uuml;bertragen. Vorbehaltlich des oben Gesagten sind diese Bedingungen bindend f&uuml;r die Parteien, deren Rechtsnachfolger und zugelassene Abtretungsempf&auml;nger und sollen zu deren Gunsten wirken.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Benachrichtigungen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Alle Benachrichtigungen oder sonstige Kommunikation, die gem&auml;&szlig; diesen Bedingungen erlaubt oder erforderlich ist, einschlie&szlig;lich der Bestimmungen zur &Auml;nderung dieser Bedingungen, erfolgen schriftlich und von ThePuzzzle (i) per E-Mail (in jedem Fall an die von Ihnen angegebene Adresse) oder (ii) durch Posten auf der Website oder &uuml;ber die Anwendung. Bei Benachrichtigungen, die per E-Mail erfolgen, gilt das Datum des Eingangs als das Datum der &Uuml;bertragung der Nachricht.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Geltendes Recht und Gerichtsbarkeit</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Diese Bedingungen werden entsprechend den Gesetzen des Staates Kalifornien und der Vereinigten Staaten von Amerika ausgelegt, ohne R&uuml;cksicht auf die Bestimmungen des Kollisionsrechts. Sie und wir vereinbaren, uns dem personenbezogenen Gerichtsstand des einzelstaatlichen Gerichts im Bezirk San Francisco, San Francisco, Kalifornien, oder einem US-Bezirksgericht, n&ouml;rdlicher Bezirk von Kalifornien, mit Sitz in San Francisco, Kalifornien, zu unterwerfen, und zwar bez&uuml;glich aller Klagen, mit denen die Parteien versuchen von einem zust&auml;ndigen Gericht, eine einstweilige Verf&uuml;gung oder einen sonstigen billigkeitsrechtlichen Rechtsbehelf zu erlangen, um tats&auml;chliche oder drohende Verst&ouml;&szlig;e, Missbrauch oder Verletzungen von Copyrights, Marken, Gesch&auml;ftsgeheimnissen, Patenten oder sonstigen geistigen Eigentumsrechten einer Partei zu verhindern, so wie dies im Abschnitt &bdquo;Beilegung von Rechtsstreitigkeiten&ldquo; unten festgelegt ist.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 14.0px Arial; color: #444444; min-height: 16.0px"><b>Verbotene Mietsachen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Es ist untersagt, Gegenst&auml;nde in den Dienst einzustellen und zur Miete anzubieten:</p>\r\n\r\n<ul>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px; ">Deren Vermietung strafbar oder ordnungswidrig ist</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); ">Deren Vermietung, Zug&auml;nglichmachung oder Bewerbung Schutzrechte Dritter (insbesondere Urheber&nbsp; und Leistungsschutzrechte,&nbsp;Kennzeichenrechte, Patentrechte, Gebrauchs oder Geschmacksmusterrechte) oder sonstige Rechte Dritter verletzt</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px;">Die mit Kennzeichen verfassungswidriger Organisationen versehen sind</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px; ">Die einen pornographischen oder sonst jugendgef&auml;hrdenden Charakter haben</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px;">Die Waffen im Sinne des Waffengesetzes sind</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px;">Die unmittelbar gesundheitsgef&auml;hrdend sind</li>\r\n	<li style="list-style-type:none; background: url(''../images/bubble1.png'') no-repeat; padding-left: 40px;margin-top: 0px; margin-right: 0px; margin-bottom: 12px; margin-left: 0px; font: normal normal normal 15px/normal Arial; color: rgb(68, 68, 68); line-height: 30px;">Deren Vermietung gegen die guten Sitten versto&szlig;en w&uuml;rde</li>\r\n</ul>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Die Vermietung von Tieren, insbesondere von Wirbeltieren, unterliegt besonderen gesetzlichen Vorschriften zum Schutz der Tiere. Die Beachtung dieser Vorschriften obliegt dem Vermieter. Sofern diese Vorschriften eine beh&ouml;rdliche Erlaubnis voraussetzen, ist die Vermietung nur zul&auml;ssig, wenn der Vermieter &uuml;ber die entsprechende Erlaubnis verf&uuml;gt.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">ThePuzzzle beh&auml;lt sich vor, Angebote, die gegen diese Besonderen Gesch&auml;ftsbedingungen oder gegen geltendes Recht versto&szlig;en, ohne Angabe von Gr&uuml;nden und ohne Vorwarnung zu entfernen. Dies gilt insbesondere auch f&uuml;r Vorschriften zum Schutz von Tieren.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444; min-height: 17.0px"><b>Urheberrechtlich gesch&uuml;tzte Mietsachen</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Originale oder Vervielf&auml;ltigungsst&uuml;cke von Werken, an denen Urheberrechte oder Leistungsschutzrechte bestehen (z. B. Musikwerke, Filme, Mitschnitte von Darbietungen oder Konzerten, Fotografien, Sprachwerke, Landkarten, Gem&auml;lde, Grafiken, Computerprogramme, Datenbanken, usw.) d&uuml;rfen nur mit Zustimmung des Rechteinhabers vermietet werden. Dies gilt mit Ausnahme von Bauwerken und Werken der angewandten Kunst auch dann, wenn das Original oder Vervielf&auml;ltigungsst&uuml;ck mit Zustimmung des zur Verbreitung Berechtigten im Wege der Ver&auml;u&szlig;erung in Verkehr gebracht worden ist und der Vermieter das Original oder Vervielf&auml;ltigungsst&uuml;ck des Werks ordnungsgem&auml;&szlig; erworben hat.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Der Vermieter versichert, dass der zur Verbreitung des gesch&uuml;tzten Gegenstands Berechtigte der Vermietung zugestimmt hat. Der Vermieter ist verpflichtet, ThePuzzzle die Zustimmung auf Verlangen schriftlich nachzuweisen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444; min-height: 17.0px"><b>Verbotene Angaben</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Die vom Vermieter angegebene Beschreibung der Mietsache, einschlie&szlig;lich der hochgeladenen Abbildungen und Dokumenten, darf keine Werbung f&uuml;r andere Produkte als die angebotene Mietsache enthalten, es sei denn, es liegt eine ausdr&uuml;ckliche Zustimmung von ThePuzzzle vor.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Das Setzen von Links auf fremde Internetangebote oder ein vom Vermieter betriebenes Internetangebot ist nur mit ausdr&uuml;cklicher Zustimmung von ThePuzzzle gestattet.&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 12.0px 0.0px; font: 15.0px Arial; color: #444444">Die Nennung der Kontaktdaten des Vermieters innerhalb der Beschreibung der Mietsache, einschlie&szlig;lich der Kurzbeschreibung und dem Titel, ist nicht gestattet.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Allgemein</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Ein Vers&auml;umnis seitens ThePuzzzle, ein Recht oder eine Bestimmung dieser Bedingungen durchzusetzen stellt keinen Verzicht auf eine k&uuml;nftige Durchsetzung oder das Recht oder die Bestimmung dar. Der Verzicht auf ein solches Recht oder eine solche Bestimmung wird nur dann wirksam, wenn dies schriftlich erfolgt und von einem dazu berechtigten Vertreter von ThePuzzzle unterzeichnet wird. Wenn in diesen Bedingungen nichts anderes ausdr&uuml;cklich festgelegt ist, dann hat die Durchsetzung einer Abhilfe durch eine der Parteien keine Auswirkung auf die anderen Abhilfen, die dieser unter diesen Bedingungen oder anderweitig zustehen. Sollte ein Schlichter oder ein zust&auml;ndiges Gericht aus irgendeinem Grund feststellen, dass eine Bestimmung dieser Bedingungen ung&uuml;ltig oder undurchsetzbar ist, dann wird diese Bestimmung im gr&ouml;&szlig;tm&ouml;glichen Ma&szlig; durchgesetzt und die anderen Bestimmungen dieser Bedingungen bleiben voll und ganz in Kraft und wirksam.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Kontakt zu ThePuzzzle</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Falls sie Fragen zu diesen Bedingungen oder eine vom App-Store bezogene Anwendung haben, wenden Sie sich bitte an ThePuzzzle unter <a href="mailto:info@thepuzzzle.com"><span style="color: #1d95cb">info@thepuzzzle.com</span></a><span style="font: 21.0px ''Helvetica Neue''">.</span></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 18.0px"><b>Sonderbestimmungen f&uuml;r Nutzer in Deutschland</b></p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle ist bestrebt, eine internationale Gemeinschaft mit einheitlichen Standards f&uuml;r alle Nutzer zu schaffen, ist aber auch um die Einhaltung der &ouml;rtlichen Gesetze bem&uuml;ht. Die folgenden Bestimmungen gelten nur f&uuml;r Nutzer in Deutschland:&nbsp;<br />\r\nDie Bestimmung &bdquo;Modifizierung&ldquo; in den Bedingungen wird durch Folgendes ersetzt:&nbsp;<br />\r\nThePuzzzle beh&auml;lt sich das Recht vor, nach alleinigem Ermessen jederzeit und ohne vorherige Benachrichtigung Modifizierungen an der Website, Anwendung oder an den Dienstleistungen vorzunehmen. Wir sind jedoch nicht verpflichtet, die Website, Anwendung oder Dienstleistungen auf dem neuesten Stand zu halten. Falls wir Modifizierungen an diesen Bedingungen, einschlie&szlig;lich an den Dienstleistungsgeb&uuml;hren, vornehmen, (i) stellen wir die Modifizierung auf der Website oder &uuml;ber die Anwendung bei Ihrem n&auml;chsten Login ein oder (ii) teilen wir Ihnen die Modifizierung &uuml;ber E-Mail mit. Wir aktualisieren auch den Eintrag &bdquo;Letztes Aktualisierungsdatum&ldquo; am oberen Rand dieser Bedingungen. Wenn Sie im obigen Fall (i) weiterhin auf unsere Website zugreifen oder sie nutzen oder im Fall von (ii) weiterhin auf unsere Website, Anwendung oder Dienstleistungen zugreifen oder diese nutzen und innerhalb von vier Wochen nach der Benachrichtigung einer Modifizierung im obigen Fall (ii) keinen Widerspruch gegen die Modifizierung einlegen, erkl&auml;ren Sie sich damit mit der Verbindlichkeit der modifizierten Bedingungen unabh&auml;ngig davon einverstanden, ob Sie diese durchgelesen haben. Wir werden Ihnen in der Benachrichtigung im Fall von (ii) oben einen entsprechenden Hinweis zukommen lassen. Falls die modifizierten Bedingungen aufgrund einer unterlassenen weiteren Nutzung der Website oder aufgrund eines unter (i) und (ii) oben beschriebenen Widerspruchs nicht in Kraft treten, kann jede Partei alle jeweiligen bestehenden Vereinbarungen mit sofortiger Wirkung k&uuml;ndigen, worauf Sie die Nutzung der betroffenen Website, Anwendung oder Dienstleistungen einstellen m&uuml;ssen. Abweichende Bedingungen von Mitgliedern treten selbst dann nicht in Kraft, wenn wir nicht ausdr&uuml;cklich Widerspruch gegen solche Bedingungen einlegen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Die Bestimmung &bdquo;Haftungsbeschr&auml;nkung&ldquo; in den Bedingungen wird durch Folgendes ersetzt:</p>\r\n\r\n<p style="margin: 0.0px 0.0px 9.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle und die mit ihm verbundenen Unternehmen und Tochtergesellschaften sind im gesetzlich zugelassenen Umfang nur dem Grunde nach f&uuml;r vors&auml;tzliches Fehlverhalten oder grobe Fahrl&auml;ssigkeit haftbar. Bei Vorliegen von leichter Fahrl&auml;ssigkeit ist ThePuzzzle nur im Falle einer Verletzung einer Vertragspflicht von wesentlicher Bedeutung f&uuml;r die Erf&uuml;llung der Beziehung zwischen ThePuzzzle und Ihnen haftbar. Eine solche Haftung f&uuml;r leichte Fahrl&auml;ssigkeit ist auf Schadensersatz beschr&auml;nkt, der f&uuml;r ThePuzzzle im vern&uuml;nftigen Ma&szlig;e absehbar ist und nicht &uuml;ber EUR 100 (100 &euro;) hinausgeht. Im gesetzlich zul&auml;ssigen Umfang werden alle anderen Schadensanspr&uuml;che gegen ThePuzzzle unabh&auml;ngig von Rechtsgr&uuml;nden, insbesondere aufgrund von Verletzung vertraglicher Pflichten, Verletzung von Rechten des geistigen Eigentums Dritter und unerlaubter Handlung, ausgeschlossen. ThePuzzzle ist nicht haftbar f&uuml;r unmittelbaren, mittelbaren oder Folgeschaden, einschlie&szlig;lich entgangener Gewinne, Datenverlust oder Verlust von Firmenwert, Leistungsunterbrechung, Rechnerschaden oder Systemausfall oder Kosten f&uuml;r Ersatzprodukte oder &ndash;leistungen oder f&uuml;r sonstigen mittelbaren oder Folgeschaden, der sich aus der Nutzung oder nicht m&ouml;glichen Nutzung der Website, Anwendung, Dienstleistungen oder des gemeinsamen Inhalts, aus Kommunikationen, Kontakten oder Treffen mit anderen Nutzern der Website, Anwendung oder Dienstleistungen oder anderen Personen ergibt, mit denen Sie aufgrund der Nutzung der Website, Anwendung, Dienstleistungen oder Ihrer Teilnahme am Empfehlungsprogramm oder aufgrund Ihrer Angebote oder Buchung von Dienstleistungen &uuml;ber die Website, Anwendung und Dienstleistungen in Kontakt stehen.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Obige Haftungsbeschr&auml;nkung gilt nicht im Falle von (i) betr&uuml;gerischer falscher Darstellung, (ii) Abgabe einer Qualit&auml;tsgarantie, (iii) Tod oder K&ouml;rperverletzung oder Verletzung der Gesundheit, die der Fahrl&auml;ssigkeit von ThePuzzzle zuzurechnen sind und nicht durch Nichtbeachtung dieser Bedingungen durch Sie verschuldet werden, (iv) sonstiger Haftung, die gem&auml;&szlig; Gesetz nicht ausgeschlossen oder eingeschr&auml;nkt werden darf und (v) Anspr&uuml;chen auf der Grundlage des deutschen Produkthaftungsgesetzes. In dem Umfang, in dem die Haftung von ThePuzzzle gem&auml;&szlig; diesen Bedingungen ausgeschlossen oder gem&auml;&szlig; obiger Bestimmung eingeschr&auml;nkt ist, gilt der Ausschluss bzw. die Einschr&auml;nkung ebenso f&uuml;r die pers&ouml;nliche Haftung der F&uuml;hrungskr&auml;fte, Verwaltungsr&auml;te, Mitarbeiter und Bevollm&auml;chtigten von ThePuzzzle und alle anderen Parteien, die an der Schaffung, Herstellung oder Bereitstellung der Website, Anwendung, Dienstleistungen, gemeinsamen Inhalte oder des Empfehlungsprogramms beteiligt sind. Obige Haftungsbeschr&auml;nkung bewirkt keine &Auml;nderung an der Beweislast zu Ihren Ungunsten.</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">Impressum:</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e; min-height: 17.0px">&nbsp;</p>\r\n\r\n<p style="margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px ''Helvetica Neue''; color: #393c3e">ThePuzzzle I&nbsp;Maistr. 26 I&nbsp;80337 M&uuml;nchen I&nbsp;DE Germany I&nbsp;Telefon +49 89 95 40 58 18 I&nbsp;E-Mail info@thepuzzzle.com I&nbsp;http://www.thepuzzzle.com I&nbsp;vertreten durch: Brian Michae</p>\r\n', NULL, 1, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `bsp_articla` (`ID`, `article_name`, `details_en`, `details_de`, `custom_url`, `iStatus`, `article_name_de`, `custom_url_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(15, 'Hello   ', '<p>Hello cxcxcdcd</p>\n', '<p>Hallo cxcxcxc</p>\n', 'hallo', 1, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 'dsds  ', '<p>dsds</p>\n', '<p>dsds</p>\n', 'dsds', 1, 'ger', 'ger dd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 'adsd', '<p>dsds</p>\n', '<p>dsds</p>\n', 'sdds', 1, 'geee', 'ggg', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_blog`
--

DROP TABLE IF EXISTS `bsp_blog`;
CREATE TABLE IF NOT EXISTS `bsp_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text,
  `detail` text,
  `date_create` datetime DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `bsp_blog`
--

INSERT INTO `bsp_blog` (`id`, `user_id`, `title`, `img`, `description`, `detail`, `date_create`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(7, '53', 'The new user community', 'img749260girlxinh.jpg', 'Lorem Ipsum is simply dudsdmmy text of the printing and typesetting industry.\r\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\r\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n            It has survived not only five centuries, but also the leap into electronic typesetting,\r\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\r\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\r\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div class="box">\r\n<h3>The standard Lorsdsdem Ipsum passage, used since the 1500s lorem</h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>\r\n</div>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-11-28 22:22:50', 73),
(10, NULL, 'What is Lorem Ipsum?', 'img281772123.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div id="lipsum">\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl diam, vel consectetur tellus. Nam eu porta risus. Cras eget urna a erat egestas dignissim lobortis at metus. Aliquam fringilla dui vel eros vulputate imperdiet. Etiam eget ornare sapien. Maecenas nisl felis, luctus ac feugiat et, cursus sed nulla. Aliquam lacus eros, sagittis sed accumsan non, faucibus eu nisl.</p>\n\n<p>Maecenas et lectus turpis, nec ullamcorper urna. Sed vestibulum interdum leo, in facilisis elit ullamcorper ut. Nullam ac mi vel risus bibendum blandit. Sed suscipit viverra est ut vulputate. Aenean in quam mi, nec accumsan nulla. Nunc laoreet euismod magna, non consequat sem varius ac. Ut congue nunc sed est luctus eget venenatis elit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec luctus elit in dui imperdiet ut venenatis nulla condimentum. Donec at metus dui.</p>\n\n<p>Nam consectetur adipiscing odio vitae egestas. Curabitur eros lacus, tincidunt a semper non, pulvinar vitae dui. Integer vestibulum vehicula elementum. Sed nec sodales arcu. Nulla facilisi. Fusce eu sem diam, vel pulvinar ipsum. In hac habitasse platea dictumst. Nam quis lacinia metus. Aenean malesuada leo nec dui porttitor ac mattis lorem dictum. Nullam placerat orci at dolor pretium quis faucibus nunc facilisis. Duis felis urna, pulvinar vel aliquet ornare, adipiscing vitae metus. Praesent quam tellus, blandit in volutpat et, vehicula a sapien. Donec volutpat cursus mi, nec laoreet elit eleifend a.</p>\n\n<p>Quisque aliquet aliquam viverra. Cras eget eros justo, id venenatis dui. Donec sapien ligula, imperdiet ut mattis vel, semper auctor elit. Nullam venenatis est non dolor adipiscing viverra. In volutpat viverra molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed eros quis augue viverra luctus eget quis nisi. Curabitur varius tellus eget est dignissim id ultricies sapien pulvinar. Sed consectetur, metus vitae accumsan condimentum, neque nisl pellentesque dolor, sed hendrerit velit nisi vitae magna.</p>\n\n<p>Proin aliquet volutpat lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis libero id dui vestibulum blandit nec non mauris. Suspendisse potenti. Curabitur quis ornare dui. Nunc laoreet elementum felis, interdum dapibus nisi laoreet eu. Vestibulum hendrerit adipiscing posuere. Fusce id elit lacus. Proin dolor nulla, facilisis id pretium a, auctor ac nisi. Quisque gravida justo lobortis mauris volutpat vestibulum. Suspendisse elit risus, scelerisque eu porttitor ut, vulputate rutrum neque.</p>\n</div>\n', '2013-04-12 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, NULL, 'What is Lorem Ipsum?', 'img749260girlxinh.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div id="lipsum">\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl diam, vel consectetur tellus. Nam eu porta risus. Cras eget urna a erat egestas dignissim lobortis at metus. Aliquam fringilla dui vel eros vulputate imperdiet. Etiam eget ornare sapien. Maecenas nisl felis, luctus ac feugiat et, cursus sed nulla. Aliquam lacus eros, sagittis sed accumsan non, faucibus eu nisl.</p>\n\n<p>Maecenas et lectus turpis, nec ullamcorper urna. Sed vestibulum interdum leo, in facilisis elit ullamcorper ut. Nullam ac mi vel risus bibendum blandit. Sed suscipit viverra est ut vulputate. Aenean in quam mi, nec accumsan nulla. Nunc laoreet euismod magna, non consequat sem varius ac. Ut congue nunc sed est luctus eget venenatis elit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec luctus elit in dui imperdiet ut venenatis nulla condimentum. Donec at metus dui.</p>\n\n<p>Nam consectetur adipiscing odio vitae egestas. Curabitur eros lacus, tincidunt a semper non, pulvinar vitae dui. Integer vestibulum vehicula elementum. Sed nec sodales arcu. Nulla facilisi. Fusce eu sem diam, vel pulvinar ipsum. In hac habitasse platea dictumst. Nam quis lacinia metus. Aenean malesuada leo nec dui porttitor ac mattis lorem dictum. Nullam placerat orci at dolor pretium quis faucibus nunc facilisis. Duis felis urna, pulvinar vel aliquet ornare, adipiscing vitae metus. Praesent quam tellus, blandit in volutpat et, vehicula a sapien. Donec volutpat cursus mi, nec laoreet elit eleifend a.</p>\n\n<p>Quisque aliquet aliquam viverra. Cras eget eros justo, id venenatis dui. Donec sapien ligula, imperdiet ut mattis vel, semper auctor elit. Nullam venenatis est non dolor adipiscing viverra. In volutpat viverra molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed eros quis augue viverra luctus eget quis nisi. Curabitur varius tellus eget est dignissim id ultricies sapien pulvinar. Sed consectetur, metus vitae accumsan condimentum, neque nisl pellentesque dolor, sed hendrerit velit nisi vitae magna.</p>\n\n<p>Proin aliquet volutpat lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis libero id dui vestibulum blandit nec non mauris. Suspendisse potenti. Curabitur quis ornare dui. Nunc laoreet elementum felis, interdum dapibus nisi laoreet eu. Vestibulum hendrerit adipiscing posuere. Fusce id elit lacus. Proin dolor nulla, facilisis id pretium a, auctor ac nisi. Quisque gravida justo lobortis mauris volutpat vestibulum. Suspendisse elit risus, scelerisque eu porttitor ut, vulputate rutrum neque.</p>\n</div>\n', '2013-04-13 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, NULL, 'What is Lorem Ipsum?', 'img281772123.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div id="lipsum">\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl diam, vel consectetur tellus. Nam eu porta risus. Cras eget urna a erat egestas dignissim lobortis at metus. Aliquam fringilla dui vel eros vulputate imperdiet. Etiam eget ornare sapien. Maecenas nisl felis, luctus ac feugiat et, cursus sed nulla. Aliquam lacus eros, sagittis sed accumsan non, faucibus eu nisl.</p>\n\n<p>Maecenas et lectus turpis, nec ullamcorper urna. Sed vestibulum interdum leo, in facilisis elit ullamcorper ut. Nullam ac mi vel risus bibendum blandit. Sed suscipit viverra est ut vulputate. Aenean in quam mi, nec accumsan nulla. Nunc laoreet euismod magna, non consequat sem varius ac. Ut congue nunc sed est luctus eget venenatis elit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec luctus elit in dui imperdiet ut venenatis nulla condimentum. Donec at metus dui.</p>\n\n<p>Nam consectetur adipiscing odio vitae egestas. Curabitur eros lacus, tincidunt a semper non, pulvinar vitae dui. Integer vestibulum vehicula elementum. Sed nec sodales arcu. Nulla facilisi. Fusce eu sem diam, vel pulvinar ipsum. In hac habitasse platea dictumst. Nam quis lacinia metus. Aenean malesuada leo nec dui porttitor ac mattis lorem dictum. Nullam placerat orci at dolor pretium quis faucibus nunc facilisis. Duis felis urna, pulvinar vel aliquet ornare, adipiscing vitae metus. Praesent quam tellus, blandit in volutpat et, vehicula a sapien. Donec volutpat cursus mi, nec laoreet elit eleifend a.</p>\n\n<p>Quisque aliquet aliquam viverra. Cras eget eros justo, id venenatis dui. Donec sapien ligula, imperdiet ut mattis vel, semper auctor elit. Nullam venenatis est non dolor adipiscing viverra. In volutpat viverra molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed eros quis augue viverra luctus eget quis nisi. Curabitur varius tellus eget est dignissim id ultricies sapien pulvinar. Sed consectetur, metus vitae accumsan condimentum, neque nisl pellentesque dolor, sed hendrerit velit nisi vitae magna.</p>\n\n<p>Proin aliquet volutpat lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis libero id dui vestibulum blandit nec non mauris. Suspendisse potenti. Curabitur quis ornare dui. Nunc laoreet elementum felis, interdum dapibus nisi laoreet eu. Vestibulum hendrerit adipiscing posuere. Fusce id elit lacus. Proin dolor nulla, facilisis id pretium a, auctor ac nisi. Quisque gravida justo lobortis mauris volutpat vestibulum. Suspendisse elit risus, scelerisque eu porttitor ut, vulputate rutrum neque.</p>\n</div>\n', '2013-04-14 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, NULL, 'What is Lorem Ipsum?', 'img749260girlxinh.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div id="lipsum">\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl diam, vel consectetur tellus. Nam eu porta risus. Cras eget urna a erat egestas dignissim lobortis at metus. Aliquam fringilla dui vel eros vulputate imperdiet. Etiam eget ornare sapien. Maecenas nisl felis, luctus ac feugiat et, cursus sed nulla. Aliquam lacus eros, sagittis sed accumsan non, faucibus eu nisl.</p>\n\n<p>Maecenas et lectus turpis, nec ullamcorper urna. Sed vestibulum interdum leo, in facilisis elit ullamcorper ut. Nullam ac mi vel risus bibendum blandit. Sed suscipit viverra est ut vulputate. Aenean in quam mi, nec accumsan nulla. Nunc laoreet euismod magna, non consequat sem varius ac. Ut congue nunc sed est luctus eget venenatis elit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec luctus elit in dui imperdiet ut venenatis nulla condimentum. Donec at metus dui.</p>\n\n<p>Nam consectetur adipiscing odio vitae egestas. Curabitur eros lacus, tincidunt a semper non, pulvinar vitae dui. Integer vestibulum vehicula elementum. Sed nec sodales arcu. Nulla facilisi. Fusce eu sem diam, vel pulvinar ipsum. In hac habitasse platea dictumst. Nam quis lacinia metus. Aenean malesuada leo nec dui porttitor ac mattis lorem dictum. Nullam placerat orci at dolor pretium quis faucibus nunc facilisis. Duis felis urna, pulvinar vel aliquet ornare, adipiscing vitae metus. Praesent quam tellus, blandit in volutpat et, vehicula a sapien. Donec volutpat cursus mi, nec laoreet elit eleifend a.</p>\n\n<p>Quisque aliquet aliquam viverra. Cras eget eros justo, id venenatis dui. Donec sapien ligula, imperdiet ut mattis vel, semper auctor elit. Nullam venenatis est non dolor adipiscing viverra. In volutpat viverra molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed eros quis augue viverra luctus eget quis nisi. Curabitur varius tellus eget est dignissim id ultricies sapien pulvinar. Sed consectetur, metus vitae accumsan condimentum, neque nisl pellentesque dolor, sed hendrerit velit nisi vitae magna.</p>\n\n<p>Proin aliquet volutpat lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis libero id dui vestibulum blandit nec non mauris. Suspendisse potenti. Curabitur quis ornare dui. Nunc laoreet elementum felis, interdum dapibus nisi laoreet eu. Vestibulum hendrerit adipiscing posuere. Fusce id elit lacus. Proin dolor nulla, facilisis id pretium a, auctor ac nisi. Quisque gravida justo lobortis mauris volutpat vestibulum. Suspendisse elit risus, scelerisque eu porttitor ut, vulputate rutrum neque.</p>\n</div>\n', '2013-04-15 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, NULL, 'What is Lorem Ipsum?', 'img281772123.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n            Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,\n            when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n            It has survived not only five centuries, but also the leap into electronic typesetting,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', '<div id="lipsum">\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl diam, vel consectetur tellus. Nam eu porta risus. Cras eget urna a erat egestas dignissim lobortis at metus. Aliquam fringilla dui vel eros vulputate imperdiet. Etiam eget ornare sapien. Maecenas nisl felis, luctus ac feugiat et, cursus sed nulla. Aliquam lacus eros, sagittis sed accumsan non, faucibus eu nisl.</p>\n\n<p>&nbsp;</p>\n\n<p>Maecenas et lectus turpis, nec ullamcorper urna. Sed vestibulum interdum leo, in facilisis elit ullamcorper ut. Nullam ac mi vel risus bibendum blandit. Sed suscipit viverra est ut vulputate. Aenean in quam mi, nec accumsan nulla. Nunc laoreet euismod magna, non consequat sem varius ac. Ut congue nunc sed est luctus eget venenatis elit elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec luctus elit in dui imperdiet ut venenatis nulla condimentum. Donec at metus dui.</p>\n\n<p>&nbsp;</p>\n\n<p>Nam consectetur adipiscing odio vitae egestas. Curabitur eros lacus, tincidunt a semper non, pulvinar vitae dui. Integer vestibulum vehicula elementum. Sed nec sodales arcu. Nulla facilisi. Fusce eu sem diam, vel pulvinar ipsum. In hac habitasse platea dictumst. Nam quis lacinia metus. Aenean malesuada leo nec dui porttitor ac mattis lorem dictum. Nullam placerat orci at dolor pretium quis faucibus nunc facilisis. Duis felis urna, pulvinar vel aliquet ornare, adipiscing vitae metus. Praesent quam tellus, blandit in volutpat et, vehicula a sapien. Donec volutpat cursus mi, nec laoreet elit eleifend a.</p>\n\n<p>Quisque aliquet aliquam viverra. Cras eget eros justo, id venenatis dui. Donec sapien ligula, imperdiet ut mattis vel, semper auctor elit. Nullam venenatis est non dolor adipiscing viverra. In volutpat viverra molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed eros quis augue viverra luctus eget quis nisi. Curabitur varius tellus eget est dignissim id ultricies sapien pulvinar. Sed consectetur, metus vitae accumsan condimentum, neque nisl pellentesque dolor, sed hendrerit velit nisi vitae magna.</p>\n\n<p>&nbsp;</p>\n\n<p>Proin aliquet volutpat lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus venenatis libero id dui vestibulum blandit nec non mauris. Suspendisse potenti. Curabitur quis ornare dui. Nunc laoreet elementum felis, interdum dapibus nisi laoreet eu. Vestibulum hendrerit adipiscing posuere. Fusce id elit lacus. Proin dolor nulla, facilisis id pretium a, auctor ac nisi. Quisque gravida justo lobortis mauris volutpat vestibulum. Suspendisse elit risus, scelerisque eu porttitor ut, vulputate rutrum neque.</p>\n</div>\n', '2013-04-16 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, NULL, 'The new user community', 'img749260girlxinh.jpg', 'ing,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2013-04-17 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, NULL, 'What is Lorem Ipsum?', 'img281772123.jpg', 'ing,\n            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset\n            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like\n            Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2013-04-17 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, NULL, 'What is Lorem Ipsum?', 'img749260girlxinh.jpg', 'img749260girlxinh.jpg', NULL, '2013-04-18 15:29:57', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, NULL, 'This is test by andra', 'img6488242MJqu6Rn73.jpg', 'Hi', '<p>Hi Brian</p>\n', '2013-10-05 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, NULL, 'Test again by andra', 'img345791hb7hY6Igfg.jpg', 'Test again..........', '<p>I test again and again</p>\n', '2013-10-05 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, NULL, 'This is a test the puzzle', 'img970762Phibo.jpg', 'This is a test the puzzle', '<p>This is a test the puzzle</p>\n\n<p><img alt="" src="/upload/blog/img970762Phibo.jpg" /></p>\n', '2013-10-05 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '53', 'test', 'Koala.jpg', 'test', 'test', '2013-11-28 18:17:02', '2013-11-28 18:17:02', 73, '2013-11-28 22:26:22', 73);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_category`
--

DROP TABLE IF EXISTS `bsp_category`;
CREATE TABLE IF NOT EXISTS `bsp_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `parent_name` varchar(225) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL COMMENT 'each category must have their parent, the parent has id = 0, and the child  category has parent_id',
  `level` int(11) DEFAULT '0' COMMENT 'the index of category',
  `num_post` varchar(30) DEFAULT NULL COMMENT 'when user post new item in the selected category, this field auto increase +1, when loading this page we do not take time to re-calculate',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `bsp_category`
--

INSERT INTO `bsp_category` (`id`, `name`, `parent_name`, `parent_id`, `level`, `num_post`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(9, 'Services', 'Root', 0, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 'Rentals', 'Root', 0, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 'Admin', 'Service', 9, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 'Design', 'Service', 9, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 'Mobile', 'Service', 9, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 'Creatives Arts', 'Service', 9, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 'Business Support', 'Service', 9, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 'Bookkeeping', 'Business Support', 15, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 'Data Analysis', 'Business Support', 15, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 'Data Entry', 'Admin', 11, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 'Email Support', 'Admin', 11, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 'Telephone Support', 'Admin', 11, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, '3D Graphics', 'Design', 12, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 'Animation', 'Design', 12, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 'Car', 'To Let', 10, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 'Camera', 'To Let', 10, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 'test', 'Admin', 11, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 'abc ', 'Root', 0, 1, NULL, '2013-11-28 20:21:52', 73, '2013-11-28 20:21:52', 73),
(30, 'abc 2dd', 'Services', 9, 2, NULL, '2013-11-28 20:22:18', 73, '2013-11-28 20:22:18', 73);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_comment`
--

DROP TABLE IF EXISTS `bsp_comment`;
CREATE TABLE IF NOT EXISTS `bsp_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `objType` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` text,
  `date_comment` datetime DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bsp_comment`
--

INSERT INTO `bsp_comment` (`id`, `user_id`, `item_id`, `order_id`, `objType`, `rating`, `comment`, `date_comment`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 31, 299, 2, 0, 4, 'I am very satisfied with the service of HO Chi Min for the 3d arts designed for me I am likely to give more orders to hi in near future', '2013-07-05 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 44, 299, 4, 0, 3, 'Excellent service will or\r\nder him again', '2013-06-29 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 31, 299, 4, 0, 4, 'fjfjjfjfjfjfjfjhfjhf', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 31, 299, 4, 0, 3, 'bmnbmbmbmbbvmn bmbmbmbmb mbnmbmbmb bmbmbmbmbmbb bmnbmn bmbbmbb bbmnbmbm', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 31, 437, 3, 0, 3, 'vfwvfsvfedff', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 31, 299, 4, 0, 5, 'sumantra', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_comment_blog`
--

DROP TABLE IF EXISTS `bsp_comment_blog`;
CREATE TABLE IF NOT EXISTS `bsp_comment_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `comment` text,
  `date_comment` datetime DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bsp_condition_sending`
--

DROP TABLE IF EXISTS `bsp_condition_sending`;
CREATE TABLE IF NOT EXISTS `bsp_condition_sending` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` varchar(5) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bsp_condition_sending`
--

INSERT INTO `bsp_condition_sending` (`id`, `active`, `item_id`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, '1', '305', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, '1', '305', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '0', '355', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '0', '356', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '0', '356', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, '1', '359', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, '1', '359', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, '1', '403', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, '0', '403', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, '1', '299', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, '1', '299', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, '1', '428', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, '0', '428', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, '0', '439', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, '0', '439', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, '0', '440', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, '0', '440', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, '1', '441', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, '1', '441', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, '0', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '0', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, '0', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, '0', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_currency`
--

DROP TABLE IF EXISTS `bsp_currency`;
CREATE TABLE IF NOT EXISTS `bsp_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bsp_currency`
--

INSERT INTO `bsp_currency` (`id`, `name`, `symbol`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'EUR', '&euro;', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'USD', '$', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'GBP', '&pound;', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_faq`
--

DROP TABLE IF EXISTS `bsp_faq`;
CREATE TABLE IF NOT EXISTS `bsp_faq` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `sQname` varchar(255) NOT NULL,
  `sQdetails` text NOT NULL,
  `dDateposted` datetime DEFAULT NULL,
  `sAnswers` text NOT NULL,
  `dDateUpdate` datetime DEFAULT NULL,
  `iStatus` int(1) NOT NULL DEFAULT '0',
  `sQname_en` varchar(255) NOT NULL,
  `sQdetails_en` text NOT NULL,
  `sAnswers_en` text NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `bsp_faq`
--

INSERT INTO `bsp_faq` (`ID`, `userID`, `sQname`, `sQdetails`, `dDateposted`, `sAnswers`, `dDateUpdate`, `iStatus`, `sQname_en`, `sQdetails_en`, `sAnswers_en`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(11, NULL, 'Wieso ist ein gutes Profil Bild wichtig?              ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p><strong>Dein Profil-Bild erscheint auf deiner Angebots-Seite und auch in der Suche, es ist also mitunter dein Aush&auml;ngeschild und soll Vertrauen und auch Aufmerksamkeit schaffen.</strong></p>\n\n<p><br />\nWas ist ein gutes Bild?</p>\n\n<p>&nbsp;</p>\n\n<ul style="padding-top: 0px; padding-right: 40px; padding-bottom: 0px; padding-left: 40px; ">\n	<li>- Ein Foto von dir. Wir haben festgestellt, dass K&auml;ufer Anbieter mit ihrem Foto mehr vertrauen schencken als Anbietern, die kein Foto eingestellt haben.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<ul style="padding-top: 0px; padding-right: 40px; padding-bottom: 0px; padding-left: 40px; ">\n	<li>- Ein qualitativ hochwertiges Bild. Vermeide Fotos einzustellen, welche verschwommen, pixelig oder deformiert sind. (maximum Gr&ouml;sse: 1Mb und Format: jpeg, png, gif)</li>\n</ul>\n</div>\n', '2013-07-30 00:00:00', '<p><strong>Dein Profil-Bild erscheint auf deiner Angebots-Seite und auch in der Suche, es ist also mitunter dein Aush&auml;ngeschild und soll Vertrauen und auch Aufmerksamkeit schaffen.</strong></p>\n\n<p><br />\nWas ist ein gutes Bild?</p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>- Ein Foto von dir. Wir haben festgestellt, dass K&auml;ufer Anbieter mit ihrem Foto mehr vertrauen schencken als Anbietern, die kein Foto eingestellt haben.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>- Ein qualitativ hochwertiges Bild. Vermeide Fotos einzustellen, welche verschwommen, pixelig oder deformiert sind. (maximum Gr&ouml;sse: 1Mb und Format: jpeg, png, gif)</li>\n</ul>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, NULL, 'Kann ich Anfragen ablehnen?    ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p>Nat&uuml;rlich kannst du auch Anfragen ablehnen, aber generell sollte dein Angebot schon zug&auml;glich sein, denn daf&uuml;r bist du ja hier.</p>\n</div>\n', '2013-07-30 00:00:00', '<p>Nat&uuml;rlich kannst du auch Anfragen ablehnen, aber generell sollte dein Angebot schon zug&auml;glich sein, denn daf&uuml;r bist du ja hier.</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, NULL, 'Wie kann ich mich absichern?    ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p>Sch&uuml;tze Deine Mietgegenst&auml;nde: Setze eine Kaution &uuml;ber den aktuellen Wert Deines Gebrauchsegegenstandes fest, lass den Mietvertrag unterschreiben und bestens vereinbare eine pers&ouml;nliche &Uuml;bergabe.&nbsp;- Nun bist Du bei Verlust oder Zerst&ouml;rung auf der sicheren Seite.</p>\n\n<p>Um Dir und Deine Kunden mehr Sicherheit zu geben, soltten alle Gesch&auml;fte und die Kommunikation &uuml;ber die Platform abgewickelt werden</p>\n</div>\n', '2013-07-30 00:00:00', '<p>Sch&uuml;tze Deine Mietgegenst&auml;nde: Setze eine Kaution &uuml;ber den aktuellen Wert Deines Gebrauchsegegenstandes fest, lass den Mietvertrag unterschreiben und bestens vereinbare eine pers&ouml;nliche &Uuml;bergabe.&nbsp;- Nun bist Du bei Verlust oder Zerst&ouml;rung auf der sicheren Seite.</p>\n\n<p>Um Dir und Deine Kunden mehr Sicherheit zu geben, soltten alle Gesch&auml;fte und die Kommunikation &uuml;ber die Platform abgewickelt werden</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, NULL, 'Wie bekomme ich mehr Verk&auml;ufe? ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Die F&auml;higkeit den&nbsp;ersten Verkauf und auch weitere zu t&auml;tigen, h&auml;ngt meistens von deinem Angebot ab und wie andere es empfinden. NIchts desto trotz, kannst du es sicherlich beeinflussen, wenn du dich an diese Richtlinien h&auml;lst.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">&nbsp;</p>\n\n<ul style="padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">Erstelle ein kompletes Profil mit allen Informationen. Lade ein Foto von dir selbst hoch, beschreibe dich und dein Angebot und berichte wieso du der geeignete Anbieter f&uuml;r diesen Dienst bist. Vermeide Links und E-mails.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">&nbsp;</p>\n\n<ul style="padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">W&auml;hle Fotos f&uuml;r Dein Angebot die du gemacht hast und welche dein Angebot tats&auml;chlich darstellen.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">&nbsp;</p>\n\n<ul style="padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">Erstelle ein Video von dir selbst. Erz&auml;hle einwenig &uuml;ber deinen Background und &uuml;ber das Angebot das du offerierst. Berichte gelassen den Besuchern, dass du eine nette und angenehme Person bist, die den Dienst gewissenhaft und z&uuml;gig erf&uuml;llt.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">&nbsp;</p>\n\n<ul style="padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">Am wichtigsten: Berwerbe dein Angebot &uuml;ber soziale Netzwerke! Teile dein Angebot mit deinen Facebook-Freunden, frag sie es zu liken, twitter regul&auml;r &uuml;ber deine Angebote und&nbsp;teile es &uuml;ber Google+ mit. Sozial aktive Angebote erhlaten ein&nbsp;besseres Ranking in der Populatit&auml;ts-Filter-Auswahl.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">&nbsp;</p>\n\n<ul style="padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; ">Nach deinem ersten Verkauf stell sicher, dass der Kunde zufrieden ist. Positives Feedback ist das a und o um weitere Kunden anzuziehen und um weitere Verk&auml;ufe zu t&auml;tigen.</li>\n	<li>&nbsp;</li>\n</ul>\n</div>\n', '2013-07-30 00:00:00', '<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Die F&auml;higkeit den&nbsp;ersten Verkauf und auch weitere zu t&auml;tigen, h&auml;ngt meistens von deinem Angebot ab und wie andere es empfinden. NIchts desto trotz, kannst du es sicherlich beeinflussen, wenn du dich an diese Richtlinien h&auml;lst.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">&nbsp;</p>\n\n<ul style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">Erstelle ein kompletes Profil mit allen Informationen. Lade ein Foto von dir selbst hoch, beschreibe dich und dein Angebot und berichte wieso du der geeignete Anbieter f&uuml;r diesen Dienst bist. Vermeide Links und E-mails.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">&nbsp;</p>\n\n<ul style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">W&auml;hle Fotos f&uuml;r Dein Angebot die du gemacht hast und welche dein Angebot tats&auml;chlich darstellen.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">&nbsp;</p>\n\n<ul style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">Erstelle ein Video von dir selbst. Erz&auml;hle einwenig &uuml;ber deinen Background und &uuml;ber das Angebot das du offerierst. Berichte gelassen den Besuchern, dass du eine nette und angenehme Person bist, die den Dienst gewissenhaft und z&uuml;gig erf&uuml;llt.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">&nbsp;</p>\n\n<ul style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">Am wichtigsten: Berwerbe dein Angebot &uuml;ber soziale Netzwerke! Teile dein Angebot mit deinen Facebook-Freunden, frag sie es zu liken, twitter regul&auml;r &uuml;ber deine Angebote und&nbsp;teile es &uuml;ber Google+ mit. Sozial aktive Angebote erhlaten ein&nbsp;besseres Ranking in der Populatit&auml;ts-Filter-Auswahl.</li>\n</ul>\n\n<p style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">&nbsp;</p>\n\n<ul style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 5px; padding-left: 36px; ">\n	<li style="margin-top: 5px; margin-right: 11px; margin-bottom: 5px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; color: rgb(51, 51, 51); list-style-type: disc; background-position: initial initial; background-repeat: initial initial; ">Nach deinem ersten Verkauf stell sicher, dass der Kunde zufrieden ist. Positives Feedback ist das a und o um weitere Kunden anzuziehen und um weitere Verk&auml;ufe zu t&auml;tigen.</li>\n</ul>\n\n<p>&nbsp;</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, NULL, 'Wie finden K&auml;ufer mein Angebot? ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Jedes&nbsp;kreierte oder editierte Angebot wird redaktionell von uns gepr&uuml;ft. Ausgeschlossen werden anst&ouml;&szlig;ige Angebote, welche nicht unseren Richtlinien&nbsp;entsprechen. Wenn du unsere Terms and Conditions und die Richtlinien einh&auml;lst, wird dein Angebot sicher durch unser Moderations-System passieren.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Nachdem du es eingestellt hast wird dein Angebot in k&uuml;rze in der von dir ausgew&auml;hlten&nbsp;Kategorie&nbsp;und in der Suche erscheinen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Je mehr positives Feedback du von K&auml;ufern bekommst um so h&ouml;her steigen&nbsp;deine Chancen auf mehr Erfolg und somit auch auf&nbsp;mehr Umstatz.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Promote dein Angebot &uuml;ber Soziale-Netzwerke ist eine weitere gute M&ouml;glichkeit um mit deinem Angebot mehr Aufmerksamkeit zu gewinnen. Teile es mit deinen Facebook-Freunden, nutze Twitter, stelle es in Blogs, mach Mundpropaganda und hab Spa&szlig;.</p>\n</div>\n', '2013-07-30 00:00:00', '<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Jedes&nbsp;kreierte oder editierte Angebot wird redaktionell von uns gepr&uuml;ft. Ausgeschlossen werden anst&ouml;&szlig;ige Angebote, welche nicht unseren Richtlinien&nbsp;entsprechen. Wenn du unsere Terms and Conditions und die Richtlinien einh&auml;lst, wird dein Angebot sicher durch unser Moderations-System passieren.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Nachdem du es eingestellt hast wird dein Angebot in k&uuml;rze in der von dir ausgew&auml;hlten&nbsp;Kategorie&nbsp;und in der Suche erscheinen.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Je mehr positives Feedback du von K&auml;ufern bekommst um so h&ouml;her steigen&nbsp;deine Chancen auf mehr Erfolg und somit auch auf&nbsp;mehr Umstatz.</p>\n\n<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 6px; margin-left: 0px; padding-top: 2px; padding-right: 0px; padding-bottom: 1px; padding-left: 0px; color: rgb(51, 51, 51); line-height: 1.45em; clear: left; font-size: 1em; text-align: left; ">Promote dein Angebot &uuml;ber Soziale-Netzwerke ist eine weitere gute M&ouml;glichkeit um mit deinem Angebot mehr Aufmerksamkeit zu gewinnen. Teile es mit deinen Facebook-Freunden, nutze Twitter, stelle es in Blogs, mach Mundpropaganda und hab Spa&szlig;.</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, NULL, 'Wie hoch sind die Kosten ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p>Das Einstelen&nbsp;von Angeboten bei&nbsp;<strong>&quot;The Puzzzle&quot;</strong>&nbsp;ist kostenfrei. Erst nachdem du einen K&auml;ufer gefunden hast und du deinen Dienst erf&uuml;llt hast berechnen wir dir&nbsp;<strong>1&euro;</strong>&nbsp;f&uuml;r dein Angebot. Der K&auml;ufer bezahlt den angegebenen Preis und hat ansonsten keine weiteren Kosten.</p>\n</div>\n', '2013-07-30 00:00:00', '<p>Das Einstelen&nbsp;von Angeboten bei&nbsp;<strong>&quot;The Puzzzle&quot;</strong> ist kostenfrei. Erst nachdem du einen K&auml;ufer gefunden hast und du deinen Dienst erf&uuml;llt hast berechnen wir dir <strong>1&euro;</strong> f&uuml;r dein Angebot. Der K&auml;ufer bezahlt den angegebenen Preis und hat ansonsten keine weiteren Kosten.</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, NULL, 'Muss ich mich anmelden? ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p>Zum herumst&ouml;bern und um Angebote einzusehen ist keine Anmeldung erforderlich.&nbsp;Zum einstellen von Angeboten oder zum kauf&nbsp;solltest du angemeldet sein, damit wir euch die n&ouml;tige Sicherheit bieten k&ouml;nnen.</p>\n</div>\n', '2013-07-30 00:00:00', '<p>Zum herumst&ouml;bern und um Angebote einzusehen ist keine Anmeldung erforderlich.&nbsp;Zum einstellen von Angeboten oder zum kauf&nbsp;solltest du angemeldet sein, damit wir euch die n&ouml;tige Sicherheit bieten k&ouml;nnen.</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, NULL, 'Was ist ThePuzzzle ', '<div style="font-family: sans-serif, Arial, Verdana, ''Trebuchet MS''; font-size: 13px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); margin-top: 20px; margin-right: 20px; margin-bottom: 20px; margin-left: 20px; line-height: 1.6em; cursor: text; ">\n<p><strong>&quot;The Puzzzle&quot;</strong>&nbsp;Marktplatz ist sozial, nachhaltig und du kannst Geld verdienen.&nbsp;Als&nbsp;<strong>Verk&auml;ufer</strong>&nbsp;kannst du deine Dienstleistungen und deine Sachen mit anderen Menschen teilen und somit Geld verdienen. Als&nbsp;<strong>K&auml;ufer</strong>&nbsp;kannst dir eine geeignete Leihkraft f&uuml;r dein anstehendes Projekt aussuchen und auch&nbsp;Gegenst&auml;nde von anderen Menschen ausleihen, denn wieso f&uuml;r teures Geld kaufen,&nbsp;wenn du es dir aus deiner Nachbarschaft borgen kannst.</p>\n</div>\n', '2013-07-30 00:00:00', '<p><strong>&quot;The Puzzzle&quot;</strong>&nbsp;Marktplatz ist sozial, nachhaltig und du kannst Geld verdienen.&nbsp;Als <strong>Verk&auml;ufer</strong> kannst du deine Dienstleistungen und deine Sachen mit anderen Menschen teilen und somit Geld verdienen. Als <strong>K&auml;ufer</strong>&nbsp;kannst dir eine geeignete Leihkraft f&uuml;r dein anstehendes Projekt aussuchen und auch&nbsp;Gegenst&auml;nde von anderen Menschen ausleihen, denn wieso f&uuml;r teures Geld kaufen,&nbsp;wenn du es dir aus deiner Nachbarschaft borgen kannst.</p>\n', '2013-09-17 00:00:00', 1, '', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 53, 'tes', 'tds', '2013-11-28 19:26:25', 'ds', '2013-11-28 19:26:25', 0, 'dsds', 'sdsdsd', 'sdds', '2013-11-28 19:26:25', 73, '2013-11-28 19:26:25', 73);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_farvorite`
--

DROP TABLE IF EXISTS `bsp_farvorite`;
CREATE TABLE IF NOT EXISTS `bsp_farvorite` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `bsp_farvorite`
--

INSERT INTO `bsp_farvorite` (`id`, `user_id`, `item_id`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(27, 44, 308, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 44, 279, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 44, 283, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 44, 295, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 45, 278, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 45, 281, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 48, 287, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 48, 298, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 48, 279, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 45, 279, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 45, 297, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 45, 314, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 48, 289, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 48, 290, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 48, 309, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 48, 305, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 48, 288, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 48, 285, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 48, 431, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 48, 280, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 48, 281, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 48, 282, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 48, 304, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 48, 283, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 48, 397, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 48, 428, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 48, 437, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 48, 438, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 48, 314, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 48, 439, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 48, 311, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 48, 398, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 48, 440, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 48, 278, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 48, 365, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 48, 284, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 48, 306, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 48, 286, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 52, 285, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 52, 287, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 52, 478, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 52, 278, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 52, 479, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 52, 475, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 52, 281, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 52, 282, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 52, 435, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 52, 474, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 52, 444, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 52, 440, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 52, 442, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 52, 439, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 52, 433, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 52, 434, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 52, 310, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 52, 298, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 52, 292, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 52, 303, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 52, 313, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 52, 300, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 52, 317, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 52, 295, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 52, 299, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 52, 289, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 52, 279, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 52, 284, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 52, 305, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 64, 474, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 64, 278, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 66, 475, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item`
--

DROP TABLE IF EXISTS `bsp_item`;
CREATE TABLE IF NOT EXISTS `bsp_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `avatar_image` varchar(255) DEFAULT NULL,
  `description` text,
  `num_star` int(11) DEFAULT '0',
  `num_like` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `price` double DEFAULT '0',
  `num_review` varchar(30) DEFAULT NULL,
  `sound_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `item_image` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `discount_price` varchar(30) DEFAULT NULL,
  `is_public` varchar(5) DEFAULT '0' COMMENT 'true, false',
  `showlocation` int(11) DEFAULT '0',
  `num_orders` int(11) DEFAULT '0' COMMENT 'This field auto increase +1 when user has their customer order',
  `my_condition` int(11) DEFAULT NULL,
  `my_other_price` int(11) DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '0',
  `iPayment` int(11) NOT NULL DEFAULT '0',
  `special_deal` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `per_price` int(11) DEFAULT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` text NOT NULL,
  `seo_keywords` varchar(255) NOT NULL,
  `lat` float(18,8) NOT NULL DEFAULT '0.00000000',
  `lng` float(18,10) NOT NULL DEFAULT '0.0000000000',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=575 ;

--
-- Dumping data for table `bsp_item`
--

INSERT INTO `bsp_item` (`id`, `category_id`, `sub_category_id`, `group_id`, `name`, `avatar_image`, `description`, `num_star`, `num_like`, `user_id`, `date_create`, `price`, `num_review`, `sound_id`, `video_id`, `item_image`, `background_image`, `discount_price`, `is_public`, `showlocation`, `num_orders`, `my_condition`, `my_other_price`, `iStatus`, `iPayment`, `special_deal`, `currency_id`, `per_price`, `seo_title`, `seo_description`, `seo_keywords`, `lat`, `lng`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(278, 14, NULL, 9, 'Hand made item k,,n,mn,fgfgfggfgmn', 'img188687Screen Shot 20130923 at 11.41.02 AM 2.png', 'lorem ipsum dollor lorem ipsum dollore\nbcnvvmbmbm b,n.kj.j. kkjkkkjkjk jnh,k,k', 4, '6', 44, '2013-10-18 14:39:39', 32, NULL, NULL, NULL, NULL, '351218272328pzmg24.jpg', NULL, '0', 0, 1, 1, 1, 1, 0, NULL, 3, 2, '', '', '', 52.50193405, 13.4554471970, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(472, NULL, NULL, NULL, NULL, 'k-2.JPG', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, '', '', '', 0.00000000, 0.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(473, NULL, NULL, NULL, NULL, 'k-2.JPG', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, '', '', '', 52.00000000, 11.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(474, 21, NULL, 9, 'Telephone support', '476351109893Justyna Kopania_3.jpg', 'Some description', 0, NULL, 53, '2013-06-13 00:00:00', 10, NULL, NULL, NULL, NULL, '775356582808Justyna Kopania_2.jpg', '', '0', 1, 0, NULL, 0, 1, 0, 1, 1, 2, '', '', '', 53.00000000, 12.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(475, 20, NULL, 9, 'Some email support', '828121032238Justyna Kopania_5.jpg', 'Some desc', 0, NULL, 53, '2013-06-13 00:00:00', NULL, NULL, NULL, NULL, NULL, '12043459605Justyna Kopania_4.jpg', NULL, '0', 1, 0, NULL, 0, 1, 0, 0, 1, 1, '', '', '', 0.00000000, 0.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(477, 25, NULL, 9, 'My Sample Puzzles test', '792233026379Phibo.jpg', '', 0, NULL, 52, '2013-08-31 19:20:10', 10, NULL, NULL, NULL, NULL, '455358102595Phibo.jpg', NULL, '0', 1, 0, NULL, 0, 1, 0, 0, 1, 1, '', '', '', 0.00000000, 0.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(481, 0, NULL, 9, 'Some test offer 2', '128219878739Justyna Kopania_3.jpg', '', 0, NULL, 56, '2013-07-16 00:00:00', 100, NULL, NULL, NULL, NULL, '175843641Justyna Kopania_2.jpg', NULL, '0', 1, 0, NULL, 0, 1, 0, 0, 1, 1, '', '', '', 0.00000000, 0.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(530, 12, NULL, 9, 'my new offer', 'img70362Screen Shot 20130923 at 11.41.02 AM 2.png', 'itzdsdzsdss', 0, NULL, 54, '2013-10-18 16:26:02', 12, NULL, NULL, NULL, NULL, '646320316030banner.jpg', NULL, '1', 1, 0, NULL, 1, 1, 0, 0, 1, 4, '', '', '', 46.83919907, -96.6631011963, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(570, 10, NULL, 9, 'fdfdf', 'img326830Screen Shot 20130923 at 11.41.02 AM 2.png', 'asghagsas', 0, NULL, 54, '2013-10-18 16:26:25', 33, NULL, NULL, NULL, NULL, '9115441040banner.jpg', NULL, '1', 1, 0, NULL, 1, 0, 0, 0, 1, 3, '', '', '', 46.83919907, -96.6631011963, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(573, 10, 27, 9, 'sds', '380827779596790392797089606289472118sourav dey jpeg.png', 'test', 0, NULL, 66, '2013-11-22 22:42:27', 5, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, 0, NULL, NULL, 0, 0, 0, 2, 3, '', '', '', 0.00000000, 0.0000000000, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(574, 18, NULL, 9, 'test', '66338967357Hydrangeas.jpg', 'test te', 0, NULL, 66, '2013-11-16 19:10:12', 2, NULL, NULL, NULL, NULL, NULL, '5', '2', 1, 0, NULL, 0, 0, 0, 1, 1, 1, '', '', '', 48.13669968, 11.5768003464, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_additional`
--

DROP TABLE IF EXISTS `bsp_item_additional`;
CREATE TABLE IF NOT EXISTS `bsp_item_additional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `name_additonal` varchar(255) DEFAULT NULL,
  `price_add` int(11) DEFAULT NULL,
  `active` varchar(45) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=477 ;

--
-- Dumping data for table `bsp_item_additional`
--

INSERT INTO `bsp_item_additional` (`id`, `item_id`, `name_additonal`, `price_add`, `active`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(42, 2, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 3, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 5, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 3, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 4, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 2, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 4, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 2, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 6, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 6, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 2, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 271, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 292, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 292, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 293, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 293, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 296, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 297, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 298, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 300, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 301, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 302, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 303, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 303, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 305, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 305, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 306, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 311, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 313, 'test', 200, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 305, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 305, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 332, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 332, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 332, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 332, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 347, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 347, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 347, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 347, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 352, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 352, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 352, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 352, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 353, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 353, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 353, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 353, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 354, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 354, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 354, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 354, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 355, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 355, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 355, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, 355, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, 356, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, 356, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, 356, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, 356, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, 357, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 357, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 357, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 357, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 358, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 358, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 358, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, 358, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, 359, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, 359, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, 359, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, 359, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, 360, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, 360, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, 360, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, 360, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, 361, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, 361, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, 361, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, 361, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, 362, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, 364, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, 364, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, 364, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, 364, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, 365, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, 365, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, 365, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, 365, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, 369, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, 369, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, 369, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, 379, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, 379, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, 379, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, 379, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, 380, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, 380, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, 380, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, 380, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, 383, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, 383, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, 383, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, 383, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, 387, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, 387, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, 387, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, 387, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, 388, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, 388, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, 388, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, 388, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, 390, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, 390, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, 390, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, 390, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, 391, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, 391, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, 391, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, 391, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, 392, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, 392, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, 392, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, 392, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, 393, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, 393, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, 393, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, 393, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, 396, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, 396, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, 396, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, 396, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, 398, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, 398, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(191, 398, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(192, 398, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(193, 399, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(194, 399, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(195, 399, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(196, 399, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(197, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(198, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(199, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(200, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(201, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(202, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(203, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(204, 400, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(205, 402, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(206, 402, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(207, 402, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(208, 402, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(209, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(210, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(211, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(212, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(213, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(214, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(215, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(216, 403, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(217, 405, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(218, 405, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(219, 405, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(220, 405, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(221, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(222, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(223, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(224, 397, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(225, 407, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(226, 407, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(227, 407, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(228, 407, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(229, 408, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(230, 408, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(231, 408, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(232, 408, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(233, 409, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(234, 409, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(235, 409, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(236, 409, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(237, 410, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(238, 410, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(239, 410, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(240, 410, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(241, 411, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(242, 411, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(243, 411, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(244, 411, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(245, 412, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(246, 412, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(247, 412, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(248, 412, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(249, 413, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(250, 413, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(251, 413, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(252, 413, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(253, 414, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(254, 414, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(255, 414, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(256, 414, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(257, 415, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(258, 415, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(259, 415, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(260, 415, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(261, 416, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(262, 416, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(263, 416, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(264, 416, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(265, 417, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(266, 417, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(267, 417, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(268, 417, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(269, 426, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(270, 426, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(271, 426, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(272, 426, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(273, 427, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(274, 427, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(275, 427, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(276, 427, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(277, 429, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(278, 429, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(279, 429, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(280, 429, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(281, 428, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(282, 428, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(283, 428, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(284, 428, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(285, 430, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(286, 430, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(287, 430, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(288, 430, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(289, 431, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(290, 431, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(291, 431, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(292, 431, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(293, 433, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(294, 433, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(295, 433, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(296, 433, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(297, 434, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(298, 434, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(299, 434, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(300, 434, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(301, 435, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(302, 435, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(303, 435, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(304, 435, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(305, 436, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(306, 436, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(307, 436, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(308, 436, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(309, 441, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(310, 441, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(311, 441, 'test', 200, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(312, 441, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(317, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(318, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(319, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(320, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(321, 444, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(322, 444, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(323, 444, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(324, 444, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(325, 446, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(326, 446, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(327, 446, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(328, 446, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(329, 447, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(330, 447, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(331, 447, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(332, 447, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(333, 448, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(334, 448, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(335, 448, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(336, 448, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(337, 449, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(338, 449, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(339, 449, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(340, 449, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(341, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(342, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(343, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(344, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(345, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(346, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(347, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(348, 451, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(349, 452, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(350, 452, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(351, 452, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(352, 452, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(353, 453, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(354, 453, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(355, 453, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(356, 453, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(357, 454, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(358, 454, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(359, 454, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(360, 454, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(361, 455, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(362, 455, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(363, 455, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(364, 455, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(365, 456, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(366, 456, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(367, 456, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(368, 456, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(369, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(370, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(371, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(372, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(373, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(374, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(375, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(376, 457, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(377, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(378, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(379, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(380, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(381, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(382, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(383, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(384, 459, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(385, 461, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(386, 461, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(387, 461, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(388, 461, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(389, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(390, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(391, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(392, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(393, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(394, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(395, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(396, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(397, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(398, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(399, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(400, 445, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(401, 462, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(402, 462, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(403, 462, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(404, 462, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(405, 463, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(406, 463, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(407, 463, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(408, 463, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(409, 464, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(410, 464, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(411, 464, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(412, 464, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(413, 465, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(414, 465, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(415, 465, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(416, 465, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(417, 466, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(418, 466, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(419, 466, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(420, 466, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(421, 467, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(422, 467, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(423, 467, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(424, 467, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(425, 469, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(426, 469, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(427, 469, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(428, 469, 'test', 200, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(429, 471, 'test', 123, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(430, 471, 'test', 123, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(431, 471, 'test', 123, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(432, 471, 'test', 123, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(433, 474, 'Soe additio option', 30, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(434, 474, 'Another addition option', 50, '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(435, 474, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(436, 474, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(437, 475, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(438, 475, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(439, 475, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(440, 475, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(441, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(442, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(443, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(444, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(445, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(446, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(447, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(448, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(449, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(450, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(451, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(452, 478, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(453, 481, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(454, 481, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(455, 481, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(456, 481, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(457, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(458, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(459, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(460, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(461, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(462, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(463, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(464, 477, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(465, 572, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(466, 572, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(467, 572, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(468, 572, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(469, 573, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(470, 573, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(471, 573, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(472, 573, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(473, 575, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(474, 575, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(475, 575, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(476, 575, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_calendar`
--

DROP TABLE IF EXISTS `bsp_item_calendar`;
CREATE TABLE IF NOT EXISTS `bsp_item_calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(45) DEFAULT NULL,
  `free_day` text,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `bsp_item_calendar`
--

INSERT INTO `bsp_item_calendar` (`id`, `item_id`, `free_day`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, '433', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, '434', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '435', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '436', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '439', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, '441', '1367341200000,1367514000000,1367686800000,1367859600000,1368032400000,1368205200000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, '438', '1367341200000,1367427600000,1367514000000,1368205200000,1368291600000,1368378000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, '445', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, '444', '1369933200000,1369760400000,1369587600000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, '446', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, '447', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, '448', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, '449', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, '451', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, '451', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, '452', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, '453', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, '454', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, '455', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, '456', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '457', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, '457', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, '459', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, '459', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, '461', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, '445', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, '445', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, '445', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, '462', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, '463', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, '464', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, '465', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, '466', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, '467', '1368550800000,1369069200000,1369328400000,1368118800000,1367946000000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, '305', '1367686800000,1368118800000,1368550800000,1368982800000,1369414800000,1369846800000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, '437', '1369587600000', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, '468', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, '469', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, '469', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, '471', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 'null', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, '474', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, '475', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 'null', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 'null', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, '477', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, '478', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, '478', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 'null', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, '481', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, '477', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, '477', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 'null', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, '477', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, '571', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, '572', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, '573', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, '573', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, '574', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, '575', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, '577', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_condition_hour`
--

DROP TABLE IF EXISTS `bsp_item_condition_hour`;
CREATE TABLE IF NOT EXISTS `bsp_item_condition_hour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `hour` varchar(45) DEFAULT NULL,
  `price` double(45,0) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

--
-- Dumping data for table `bsp_item_condition_hour`
--

INSERT INTO `bsp_item_condition_hour` (`id`, `title`, `hour`, `price`, `item_id`, `active`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'Holiday1', '2', 20, '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'Until1', '2', 20, '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '2 Times1', '2', 20, '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '3 Times1', '2', 20, '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '4 Times1', '2', 20, '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, '1', '2', 20, '326', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, '2', '2', 20, '326', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, '3', '2', 20, '326', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, '4', '2', 20, '326', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, '5', '2', 20, '326', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, '1', '2', 20, '328', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, '2', '2', 20, '328', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, '3', '2', 20, '328', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, '4', '2', 20, '328', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, '5', '2', 20, '328', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 'test', '2', 20, '330', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 'test', '2', 20, '330', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 'test', '2', 20, '330', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 'test', '2', 20, '330', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 'test', '2', 20, '330', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '', '2', 20, '331', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, '', '2', 20, '331', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, '', '2', 20, '331', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, '', '2', 20, '331', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, '', '2', 20, '331', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, '', '2', 20, '332', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, '', '2', 20, '332', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, '', '2', 20, '332', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, '', '2', 20, '332', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, '', '2', 20, '332', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, '', '2', 20, '333', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, '', '2', 20, '333', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, '', '2', 20, '333', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, '', '2', 20, '333', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, '', '2', 20, '333', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, '', '2', 20, '334', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, '', '2', 20, '334', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, '', '2', 20, '334', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, '', '2', 20, '334', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, '', '2', 20, '334', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, '', '2', 20, '335', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, '', '2', 20, '335', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, '', '2', 20, '335', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, '', '2', 20, '335', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, '', '2', 20, '335', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, '', '2', 20, '337', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, '', '2', 20, '339', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, '', '2', 20, '340', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, '', '2', 20, '340', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, '', '2', 20, '340', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, '', '2', 20, '340', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, '', '2', 20, '340', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, '', '2', 20, '341', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, '', '2', 20, '341', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, '', '2', 20, '341', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, '', '2', 20, '341', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, '', '2', 20, '341', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, '', '2', 20, '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, '', '2', 20, '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, '', '2', 20, '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, '', '2', 20, '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, '', '2', 20, '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, '', '2', 20, '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, '', '2', 20, '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, '', '2', 20, '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, '', '2', 20, '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, '', '2', 20, '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, '', '2', 20, '344', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, '', '2', 20, '344', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, '', '2', 20, '344', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, '', '2', 20, '344', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, '', '2', 20, '344', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, '', '2', 20, '345', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, '', '2', 20, '345', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, '', '2', 20, '345', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, '', '2', 20, '345', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, '', '2', 20, '345', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, '', '2', 20, '347', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, '', '2', 20, '347', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, '', '2', 20, '347', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, '', '2', 20, '347', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, '', '2', 20, '347', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, '', '2', 20, '348', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, '', '2', 20, '350', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, '', '2', 20, '350', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, '', '2', 20, '350', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, '', '2', 20, '350', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, '', '2', 20, '350', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, '', '2', 20, '351', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, '', '2', 20, '351', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, '', '2', 20, '351', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, '', '2', 20, '351', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, '', '2', 20, '351', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, '', '2', 20, '352', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, '', '2', 20, '352', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, '', '2', 20, '352', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, '', '2', 20, '352', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, '', '2', 20, '352', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, '', '2', 20, '353', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, '', '2', 20, '353', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, '', '2', 20, '353', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, '', '2', 20, '353', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, '', '2', 20, '353', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, '', '2', 20, '354', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, '', '2', 20, '354', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, '', '2', 20, '354', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, '', '2', 20, '354', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, '', '2', 20, '354', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, '', '2', 20, '355', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, '', '2', 20, '355', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, '', '2', 20, '355', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, '', '2', 20, '355', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, '', '2', 20, '355', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, '', '2', 20, '356', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, '', '2', 20, '356', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, '', '2', 20, '356', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, '', '2', 20, '356', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, '', '2', 20, '356', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, '', '2', 20, '357', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, '', '2', 20, '357', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, '', '2', 20, '357', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, '', '2', 20, '357', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, '', '2', 20, '357', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, '', '2', 20, '358', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, '', '2', 20, '358', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, '', '2', 20, '358', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, '', '2', 20, '358', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, '', '2', 20, '358', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, '', '2', 20, '359', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, '', '2', 20, '359', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, '', '2', 20, '359', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, '', '2', 20, '359', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, '', '2', 20, '359', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, '', '2', 20, '360', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, '', '2', 20, '360', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, '', '2', 20, '360', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, '', '2', 20, '360', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, '', '2', 20, '360', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, '', '2', 20, '361', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, '', '2', 20, '361', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, '', '2', 20, '361', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, '', '2', 20, '361', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, '', '2', 20, '361', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, '', '2', 20, '362', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, '', '2', 20, '364', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, '', '2', 20, '364', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, '', '2', 20, '364', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, '', '2', 20, '364', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, '', '2', 20, '364', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, '', '2', 20, '365', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, '', '2', 20, '365', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, '', '2', 20, '365', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, '', '2', 20, '365', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, '', '2', 20, '365', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(221, 'test1', '2', 20, '372', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(222, 'test2', '2', 20, '372', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(223, 'test3', '2', 20, '372', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(224, 'test4', '2', 20, '372', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(225, 'test5', '2', 20, '372', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(226, '', '2', 20, '388', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(227, '', '2', 20, '390', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(228, '1', '2', 20, '394', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(229, '2', '2', 20, '394', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(230, '3', '2', 20, '394', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(231, '4', '2', 20, '394', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(232, '5', '2', 20, '394', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(233, 'gfg', '2', 20, '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(234, '', '2', 20, '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(235, '', '2', 20, '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(236, '', '2', 20, '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(237, '', '2', 20, '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(238, 'test', '2', 20, '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(239, '', '2', 20, '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(240, '', '2', 20, '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(241, '', '2', 20, '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(242, '', '2', 20, '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(243, '', '2', 20, '439', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(244, '', '2', 20, '439', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(245, '', '2', 20, '439', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(246, '', '2', 20, '439', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(247, '', '2', 20, '439', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(248, '', '2', 20, '440', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(249, '', '2', 20, '440', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(250, '', '2', 20, '440', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(251, '', '2', 20, '440', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(252, '', '2', 20, '440', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(253, '1-6', '1', 10, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(254, 'Until 2', '2', 20, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(255, '45', '3', 30, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(256, '2 Times', '4', 40, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(257, 'From 28', '5', 50, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(258, 'test', '6', 60, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(259, '1', '7', 70, '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(260, NULL, '1', 11, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(261, NULL, '2', 22, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(262, NULL, '3', 33, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(263, NULL, '4', 44, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(264, NULL, '5', 55, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(265, NULL, '6', 66, '468', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(266, NULL, '1', 11, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(267, NULL, '2', 22, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(268, NULL, '3', 33, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(269, NULL, '4', 44, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(270, NULL, '5', 55, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(271, NULL, '6', 66, '469', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(272, NULL, '2', 22, '471', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(273, NULL, '3', 33, '471', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(274, NULL, '2', 22, '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(275, NULL, '3', 33, '471', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(276, NULL, '2', 22, '471', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(277, NULL, '3', 33, '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(278, NULL, '2', 22, '471', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_condition_service`
--

DROP TABLE IF EXISTS `bsp_item_condition_service`;
CREATE TABLE IF NOT EXISTS `bsp_item_condition_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(45) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=172 ;

--
-- Dumping data for table `bsp_item_condition_service`
--

INSERT INTO `bsp_item_condition_service` (`id`, `price`, `item_id`, `active`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, '1000', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, NULL, '305', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '3000', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, '1', '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, '23', '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, '2', '342', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, '1', '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, '3', '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, '2', '343', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, '', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, '23', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, '44', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, '6', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, '8', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, '5', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, '7', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, '9', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, '6', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, '7', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, '8', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, '9', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, '78', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, '8', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, '8', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, '8', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, '9', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, '12', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, '2', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, '3', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, '13', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, '5', '397', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, '5', '397', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, '12', '398', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, '12', '398', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, '12', '399', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, '12', '399', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, '12', '402', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, '66', '402', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, '12', '402', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, '5', '405', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, '3', '405', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, '5', '405', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, '222', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, '6', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, '33', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, '11', '397', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, '6', '397', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, '12', '397', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, '123', '407', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, '6', '407', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, '443', '407', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, '12', '408', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, '6', '408', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, '12', '408', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, '12', '408', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, '5', '408', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, '12', '408', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, '12', '409', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, '2', '409', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, '11', '409', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, '123', '410', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, '3', '410', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, '111', '410', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, '123', '411', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, '4', '411', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, '111', '411', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, '2', '409', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, '2', '409', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, '45', '412', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, '46', '412', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, '12', '412', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, '12', '412', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, '12', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, '23', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, '3', '413', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, '33', '413', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, '12', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, '23', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, '12', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, '23', '299', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, '3', '414', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, '33', '414', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, '3', '415', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, '33', '415', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, '3', '416', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, '33', '416', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, '12', '417', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, '23', '417', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, '12', '427', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, NULL, '427', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, '11', '427', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, '1000', '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, NULL, '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, '3000', '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, '100', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, NULL, NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, '', NULL, '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_condition_time`
--

DROP TABLE IF EXISTS `bsp_item_condition_time`;
CREATE TABLE IF NOT EXISTS `bsp_item_condition_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_start` varchar(45) DEFAULT NULL,
  `time_end` varchar(45) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=666 ;

--
-- Dumping data for table `bsp_item_condition_time`
--

INSERT INTO `bsp_item_condition_time` (`id`, `time_start`, `time_end`, `item_id`, `active`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, '01:00', '02:00', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, '03:00', '04:00', '305', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '05:00', '06:00', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '07:00', '08:00', '305', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '09:00', '10:00', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, '11:00', '12:00', '305', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, '13:00', '14:00', '305', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, '12:00', '22:00', '317', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, '01:00', '06:00', '317', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, '01:00', '04:00', '317', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, '04:00', '05:00', '317', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, '03:00', '06:00', '317', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, '03:00', '06:00', '317', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, '07:00', '12:00', '317', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, '01:00', '02:00', '324', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, '03:00', '04:00', '324', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, '05:00', '06:00', '324', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, '07:00', '08:00', '324', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, '09:00', '10:00', '324', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, '11:00', '11:00', '324', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '13:00', '14:00', '324', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, '01:00', '02:00', '325', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, '03:00', '04:00', '325', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, '05:00', '06:00', '325', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, '07:00', '08:00', '325', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, '09:00', '10:00', '325', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, '11:00', '12:00', '325', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, '13:00', '14:00', '325', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 'Time', 'Time', '326', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 'Time', 'Time', '328', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 'Time', 'Time', '329', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 'Time', 'Time', '330', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 'Time', 'Time', '331', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 'Time', 'Time', '332', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 'Time', 'Time', '333', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 'Time', 'Time', '334', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 'Time', 'Time', '335', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 'Time', 'Time', '337', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, 'Time', 'Time', '339', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, 'Time', 'Time', '340', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, 'Time', 'Time', '341', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, 'Time', 'Time', '342', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, 'Time', 'Time', '343', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, 'Time', 'Time', '344', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, 'Time', 'Time', '345', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, 'Time', 'Time', '347', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, 'Time', 'Time', '348', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, 'Time', 'Time', '350', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(191, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(192, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(193, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(194, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(195, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(196, 'Time', 'Time', '351', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(197, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(198, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(199, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(200, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(201, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(202, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(203, 'Time', 'Time', '352', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(204, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(205, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(206, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(207, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(208, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(209, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(210, 'Time', 'Time', '353', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(211, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(212, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(213, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(214, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(215, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(216, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(217, 'Time', 'Time', '354', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(218, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(219, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(220, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(221, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(222, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(223, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(224, 'Time', 'Time', '355', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(225, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(226, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(227, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(228, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(229, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(230, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(231, 'Time', 'Time', '356', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(232, '01:00', '03:00', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(233, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(234, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(235, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(236, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(237, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(238, 'Time', 'Time', '357', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(239, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(240, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(241, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(242, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(243, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(244, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(245, 'Time', 'Time', '396', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(246, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(247, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(248, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(249, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(250, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(251, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(252, 'Time', 'Time', '400', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(253, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(254, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(255, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(256, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(257, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(258, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(259, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(260, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(261, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(262, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(263, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(264, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(265, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(266, 'Time', 'Time', '299', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(267, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(268, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(269, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(270, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(271, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(272, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(273, 'Time', 'Time', '403', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(274, '01:00', '02:00', '418', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(275, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(276, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(277, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(278, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(279, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(280, 'Time', 'Time', '418', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(281, '01:00', '02:00', '419', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(282, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(283, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(284, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(285, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(286, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(287, 'Time', 'Time', '419', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(288, '01:00', '02:00', '420', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(289, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(290, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(291, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(292, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(293, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(294, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(295, '01:00', '02:00', '420', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(296, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(297, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(298, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(299, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(300, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(301, 'Time', 'Time', '420', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(302, '01:00', '02:00', '421', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(303, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(304, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(305, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(306, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(307, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(308, 'Time', 'Time', '421', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(309, '01:00', '02:00', '422', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(310, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(311, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(312, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(313, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(314, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(315, 'Time', 'Time', '422', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(316, '01:00', '02:00', '423', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(317, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(318, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(319, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(320, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(321, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(322, 'Time', 'Time', '423', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(323, '01:00', '02:00', '424', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(324, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(325, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(326, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(327, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(328, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(329, 'Time', 'Time', '424', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(330, '01:00', '02:00', '426', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(331, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(332, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(333, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(334, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(335, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(336, 'Time', 'Time', '426', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(337, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(338, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(339, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(340, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(341, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(342, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(343, 'Time', 'Time', '429', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(344, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(345, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(346, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(347, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(348, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(349, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(350, 'Time', 'Time', '430', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(351, '01:00', '02:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(352, '03:00', '03:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(353, '01:00', '03:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(354, '02:00', '01:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(355, '02:00', '01:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(356, '02:00', '04:00', '431', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(357, '08:00', '02:00', '431', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(358, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(359, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(360, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(361, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(362, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(363, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(364, 'Time', 'Time', '433', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(365, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(366, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(367, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(368, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(369, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(370, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(371, 'Time', 'Time', '434', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(372, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(373, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(374, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(375, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(376, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(377, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(378, 'Time', 'Time', '435', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(379, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(380, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(381, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(382, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(383, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(384, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(385, 'Time', 'Time', '436', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(386, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(387, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(388, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(389, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(390, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(391, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(392, 'Time', 'Time', '437', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(393, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(394, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(395, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(396, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(397, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(398, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(399, 'Time', 'Time', '438', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(400, '01:00', '02:00', '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(401, '03:00', '04:00', '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(402, '05:00', '06:00', '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(403, '01:00', '02:00', '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(404, '03:00', '04:00', '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(405, '05:00', '06:00', '441', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(406, '01:00', '02:00', '441', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(407, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(408, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(409, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(410, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(411, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(412, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(413, 'Time', 'Time', '468', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(414, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(415, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(416, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(417, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(418, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(419, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(420, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(421, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(422, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(423, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(424, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(425, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(426, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(427, 'Time', 'Time', '469', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(428, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(429, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(430, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(431, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(432, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(433, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(434, 'Time', 'Time', '471', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(435, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(436, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(437, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(438, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(439, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(440, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(441, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(442, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(443, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(444, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(445, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(446, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(447, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(448, 'Time', 'Time', '474', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(449, '00:00', '23:00', '475', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(450, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(451, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(452, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(453, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(454, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(455, 'Time', 'Time', '475', '1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(456, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(457, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(458, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(459, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(460, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(461, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(462, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(463, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(464, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(465, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(466, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(467, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(468, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(469, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(470, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(471, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(472, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(473, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(474, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(475, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(476, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(477, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(478, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(479, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(480, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(481, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(482, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(483, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(484, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(485, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(486, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(487, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(488, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(489, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(490, 'Time', 'Time', '478', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(491, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(492, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(493, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(494, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(495, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(496, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(497, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(498, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(499, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(500, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(501, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(502, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(503, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(504, 'Time', 'Time', '481', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(505, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(506, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(507, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(508, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(509, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(510, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(511, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(512, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(513, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(514, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(515, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(516, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(517, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(518, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(519, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(520, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(521, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(522, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(523, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(524, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(525, 'Time', 'Time', 'null', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(526, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(527, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(528, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(529, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(530, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(531, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(532, 'Time', 'Time', '477', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(533, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(534, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(535, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(536, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(537, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(538, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(539, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(540, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(541, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(542, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(543, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(544, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(545, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(546, NULL, NULL, '572', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(547, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(548, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(549, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(550, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(551, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(552, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(553, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(554, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(555, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(556, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(557, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(558, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(559, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(560, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(561, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(562, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(563, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(564, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(565, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(566, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(567, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(568, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(569, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(570, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(571, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(572, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(573, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(574, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(575, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(576, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(577, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(578, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(579, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(580, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(581, NULL, NULL, '575', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(582, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(583, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(584, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(585, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(586, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(587, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(588, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);
INSERT INTO `bsp_item_condition_time` (`id`, `time_start`, `time_end`, `item_id`, `active`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(589, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(590, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(591, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(592, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(593, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(594, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(595, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(596, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(597, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(598, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(599, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(600, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(601, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(602, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(603, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(604, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(605, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(606, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(607, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(608, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(609, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(610, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(611, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(612, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(613, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(614, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(615, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(616, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(617, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(618, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(619, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(620, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(621, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(622, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(623, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(624, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(625, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(626, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(627, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(628, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(629, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(630, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(631, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(632, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(633, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(634, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(635, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(636, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(637, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(638, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(639, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(640, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(641, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(642, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(643, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(644, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(645, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(646, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(647, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(648, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(649, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(650, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(651, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(652, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(653, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(654, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(655, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(656, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(657, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(658, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(659, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(660, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(661, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(662, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(663, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(664, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(665, NULL, NULL, '573', '0', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_image_video`
--

DROP TABLE IF EXISTS `bsp_item_image_video`;
CREATE TABLE IF NOT EXISTS `bsp_item_image_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `is_offer` tinyint(1) DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=745 ;

--
-- Dumping data for table `bsp_item_image_video`
--

INSERT INTO `bsp_item_image_video` (`id`, `item_id`, `image_url`, `video_url`, `is_offer`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(694, 441, 'http://img.youtube.com/vi/An5RSXS2eX4/default.jpg', 'http://www.youtube.com/v/An5RSXS2eX4', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(695, 441, 'http://img.youtube.com/vi/y6g_FdH68Uk/default.jpg', 'http://www.youtube.com/v/y6g_FdH68Uk', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(697, 441, 'http://img.youtube.com/vi/shrbxEQZcBk/default.jpg', 'http://www.youtube.com/v/shrbxEQZcBk', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(704, 441, 'http://b.vimeocdn.com/ts/436/678/436678707_100.jpg', 'http://player.vimeo.com/video/65600860', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(706, 441, '3627-Penguins.jpg', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(712, 441, '5959-Hydrangeas.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(713, 441, 'http://img.youtube.com/vi/eR2_9CqkkOI/default.jpg', 'http://www.youtube.com/v/eR2_9CqkkOI', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(714, 441, 'http://img.youtube.com/vi/eR2_9CqkkOI/default.jpg', 'http://www.youtube.com/v/eR2_9CqkkOI', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(715, 441, 'http://b.vimeocdn.com/ts/436/495/436495619_100.jpg', 'http://player.vimeo.com/video/65472977', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(716, 441, 'http://b.vimeocdn.com/ts/436/976/436976316_100.jpg', 'http://player.vimeo.com/video/65819216', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(717, 441, 'http://b.vimeocdn.com/ts/398/257/398257077_100.jpg', 'http://player.vimeo.com/video/57410698', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(718, 441, 'http://img.youtube.com/vi/zhmk22GHaE8/default.jpg', 'http://www.youtube.com/v/zhmk22GHaE8', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(719, 441, 'http://img.youtube.com/vi/zhmk22GHaE8/default.jpg', 'http://www.youtube.com/v/zhmk22GHaE8', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(720, 441, 'http://b.vimeocdn.com/ts/400/948/400948617_100.jpg', 'http://player.vimeo.com/video/57815442', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(722, 441, 'http://b.vimeocdn.com/ts/205/526/205526683_100.jpg', 'http://player.vimeo.com/video/30581015', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(723, 441, 'http://img.youtube.com/vi/RgdSdyoc9Gk/default.jpg', 'http://www.youtube.com/v/RgdSdyoc9Gk', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(724, 444, 'http://img.youtube.com/vi/RgdSdyoc9Gk/default.jpg', 'http://www.youtube.com/v/RgdSdyoc9Gk', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(725, 475, '4600-Justyna Kopania_6.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(726, 477, '1352-Phibo.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(727, 477, '5203-Phibo.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(728, 571, '8270-Screen Shot 2013-09-23 at 11.40.10 AM.png', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(729, 573, '9773-odeskclientpopu.png', NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(730, 573, '1861-chatra.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(731, NULL, '4855-Chrysanthemum.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(732, NULL, '1157-Desert.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(733, 574, '1675-Chrysanthemum.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(734, 574, '1075-Desert.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(735, 575, '9931-Chrysanthemum.jpg', NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(737, 575, '2748-Jellyfish.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(738, 575, '6816-Desert.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(739, NULL, '9783-Koala.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(740, NULL, '9238-Desert.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(741, NULL, '5841-Koala.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(742, NULL, '945-Koala.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(743, NULL, '740-Desert.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(744, NULL, '4251-Lighthouse.jpg', NULL, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_info`
--

DROP TABLE IF EXISTS `bsp_item_info`;
CREATE TABLE IF NOT EXISTS `bsp_item_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `description` text,
  `condition` text,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `bsp_item_info`
--

INSERT INTO `bsp_item_info` (`id`, `item_id`, `description`, `condition`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 189, 'len la len la len!', 'len la len la len!len la len la len!len la len la len!  ^^', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 191, 'len la len la len!len la len la len!', 'len la len la len!len la len la len! len la len la len! len la len la len!', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 192, 'len la len la len! len la len la len!', 'len la len la len! len la len la len!', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 188, 'len la len la len!llen la len la len! len la len la len!', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 190, NULL, 'Send option : /ln - Pick up /ln - Sengding /ln', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 6, NULL, ' Send option - Pick up - Sengding', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 5, NULL, 'Send Option \n - Pick up \n - Sengding \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 4, NULL, 'Send Option \n - Pick up \n - Sengding \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 6, NULL, 'Send Option \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 7, NULL, 'Service Conditions \n - Kaution and Contract  ? \n - Kaution, Passport and Contract  ? \n\nSend Option \n - Sengding \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 2, NULL, 'Service Conditions \n - Kaution and Contract 1000 ? \n - Kaution, Passport and Contract 2000 ? \n\nSend Option \n - Sengding \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 3, NULL, 'Service Conditions \n - + Kaution and Contract 2000 ? \n - + Passport and Contract \n - + Kaution, Passport and Contract 3000 ? \n\n- Send Option \n - + Pick up \n -  + Sengding \n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 6, NULL, 'Service Conditions \n\nundefined\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 6, NULL, 'Service Conditions \n\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 6, NULL, 'Service Conditions \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 6, NULL, 'Service Conditions \n - + Kaution and Contract 1000 ? \n - + Kaution, Passport and Contract 1000 ? \n\n- Send Option \n -  + Sending \n\n- To get started I will need from the buyer: \n-abc abc', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 6, NULL, 'Service Conditions \n - + Kaution and Contract  ? \n - + Passport and Contract \n - + Kaution, Passport and Contract  ? \n\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 6, NULL, 'Service Conditions \n\n- Send Option \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 270, NULL, 'Service Conditions \n - + Kaution and Contract 1000 ? \n - + Kaution, Passport and Contract 1000 ? \n\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 271, NULL, 'Service Conditions \n - + Kaution and Contract 1000 ? \n - + Kaution, Passport and Contract 10000 ? \n\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 272, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 273, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 274, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 275, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 276, NULL, 'Service Conditions \n - + Kaution and Contract 15 ? \n - + Passport and Contract \n - + Kaution, Passport and Contract 18 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 277, NULL, 'Service Conditions \n - + Kaution and Contract 15 ? \n - + Passport and Contract \n - + Kaution, Passport and Contract 18 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 278, NULL, 'Service Conditions \n - + Kaution and Contract 5 ? \n - + Kaution, Passport and Contract 7 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 279, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 280, NULL, 'Service Conditions \n - + Kaution and Contract 5 ? \n - + Kaution, Passport and Contract 6 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 281, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 282, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 283, NULL, 'Service Conditions \n - + Kaution and Contract 15 ? \n - + Passport and Contract \n - + Kaution, Passport and Contract 20 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 284, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 285, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 286, NULL, 'Service Conditions \n - + Kaution and Contract 15 ? \n - + Kaution, Passport and Contract 5 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 287, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 288, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 289, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 290, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 291, NULL, 'Service Conditions \n - + Kaution and Contract 3 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 292, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 293, NULL, 'Service Conditions \n - + Kaution and Contract 1000 ? \n - + Passport and Contract \n - + Kaution, Passport and Contract 1000 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 293, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 295, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 296, NULL, '\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 295, NULL, '\n- Send Option \n - + Pick up \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, 295, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, 295, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, 297, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, 295, NULL, 'Service Conditions \n - + Kaution and Contract 10 ? \n\n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, 295, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, 298, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 299, NULL, '\n- Send Option \n - + Pick up \n -  + Sending \n\n- To get started I will need from the buyer: \n-', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 300, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 301, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 302, NULL, '-------undefined- Mo. time start04:00:00 time end 05:00:00- Tu. time start04:00:00 time end 05:00:00 - We. close \n - Th. close \n - Fr. close \n- Sa. time start06:00:00 time end 05:00:00- Su. time start05:00:00 time end 07:00:00\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 303, NULL, '\nService Conditions \n - + Kaution and Contract 55 ? \n - + Kaution, Passport and Contract 55 ? \n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 303, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, 305, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, 306, NULL, '\n\n- Send Option \n - + Pick up \n -  + Sending \n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, 308, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, 309, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, 310, NULL, '\nService Conditions \n - + Kaution and Contract 10 ? \n - + Kaution, Passport and Contract 12 ? \n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, 311, NULL, '\nService Conditions \n - + Kaution and Contract 10 ? \n - + Kaution, Passport and Contract 10 ? \n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, 312, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, 313, NULL, '\nService Conditions \n - + Kaution and Contract 10 ? \n - + Kaution, Passport and Contract 10 ? \n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, 314, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, 315, NULL, '-------undefined- Mo. time start01:00:00 time end 01:00:00- Tu. time start00:00:00 time end 04:00:00- We. time start00:00:00 time end 02:00:00- Th. time start02:00:00 time end 03:00:00- Fr. time start02:00:00 time end 02:00:00- Sa. time start06:00:00 time end 06:00:00- Su. time start08:00:00 time end 06:00:00\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, 315, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, 316, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, 316, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, 317, NULL, '\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, 318, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, 320, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, 320, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, 321, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, 322, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, 323, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, 324, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, 325, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, 326, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, 328, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, 329, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, 330, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, 331, NULL, '\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, 332, NULL, '\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, 333, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, 334, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, 335, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, 337, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, 337, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, 339, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, 340, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, 342, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, 343, NULL, '\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, 344, NULL, '\n\n\n', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, 362, NULL, 'fdsafdsa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, 441, NULL, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, 446, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, 447, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, 448, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, 449, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, 451, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, 451, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, 452, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, 453, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, 454, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, 455, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, 456, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, 457, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, 457, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, 459, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, 459, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, 461, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, 445, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, 445, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, 445, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, 462, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, 463, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, 464, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, 465, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, 466, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, 467, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, 468, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, 469, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, 469, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, 471, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, 474, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, 475, NULL, 'kjkjhkjh', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, 477, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, 478, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, 478, NULL, 'test,geolocaiton,', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, 481, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, 477, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, 477, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, 477, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, NULL, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, NULL, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, NULL, NULL, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(191, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(192, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(193, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(194, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(195, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(196, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(197, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(198, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(199, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(200, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(201, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(202, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(203, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(204, NULL, NULL, '                    ', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_like`
--

DROP TABLE IF EXISTS `bsp_item_like`;
CREATE TABLE IF NOT EXISTS `bsp_item_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `like_status` varchar(45) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_price_offer`
--

DROP TABLE IF EXISTS `bsp_item_price_offer`;
CREATE TABLE IF NOT EXISTS `bsp_item_price_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `option` varchar(8) NOT NULL,
  `price` float NOT NULL,
  `period` int(11) NOT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `bsp_item_price_offer`
--

INSERT INTO `bsp_item_price_offer` (`id`, `item_id`, `option`, `price`, `period`, `start`, `end`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(41, 561, 'extra', 13, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 561, 'abs', 11, 3, 2, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 562, 'extra', 11, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 563, 'extra', 11, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 564, 'extra', 11, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 570, 'extra', 22, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 571, 'abs', 20, 5, 1, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 571, 'abs', 80, 2, 5, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 571, 'extra', 10, 2, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 571, 'range', 80, 3, 4, 8, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 571, 'extra', 50, 3, NULL, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_search_keyword`
--

DROP TABLE IF EXISTS `bsp_item_search_keyword`;
CREATE TABLE IF NOT EXISTS `bsp_item_search_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=418 ;

--
-- Dumping data for table `bsp_item_search_keyword`
--

INSERT INTO `bsp_item_search_keyword` (`id`, `item_id`, `keyword`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(3, 161, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 163, 'key test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 164, 'test key', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 164, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 165, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 167, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 167, 'aaaaaa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 168, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 169, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 170, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 172, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 173, 'key', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 174, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 174, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 175, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 176, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 177, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 179, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 180, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 180, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 181, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 182, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 184, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 185, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 186, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 186, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 188, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 188, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 190, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 190, 'abc  dvaga fadg ?dsfsa', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 191, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 192, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 193, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 194, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 195, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 196, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 197, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 198, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 199, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 200, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 201, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 202, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 203, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 204, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 205, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 206, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 207, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 208, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 209, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 210, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 212, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 212, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 213, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 214, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 216, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 216, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 217, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 218, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 219, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 221, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 222, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 222, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 223, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 224, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 226, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 226, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 227, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 228, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 229, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 231, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 231, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 232, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 233, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 235, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 235, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 236, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 237, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 238, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 239, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 241, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 241, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 242, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 243, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 244, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 245, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 246, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, 247, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 248, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 249, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 251, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 252, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 252, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 253, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, 255, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, 255, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, 257, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, 257, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, 258, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, 259, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, 261, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, 261, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, 262, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, 263, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, 265, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, 266, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, 266, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(122, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(123, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(124, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(125, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(126, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(127, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(128, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(129, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(130, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(131, 267, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(132, 269, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(133, 270, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(134, 271, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(135, 272, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(136, 273, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(137, 274, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(138, 275, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(139, 276, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(140, 277, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(141, 278, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(142, 279, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(143, 280, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(144, 281, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(145, 282, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(146, 283, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(147, 284, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(148, 285, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(149, 286, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(150, 287, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(151, 288, 'mobile, develop moible app, mobile app', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(152, 289, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(153, 290, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(154, 291, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(155, 292, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(156, 293, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(157, 293, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(158, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(159, 296, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(160, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(161, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(162, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(163, 297, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(164, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(165, 295, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(166, 298, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(167, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(168, 300, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(169, 301, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(170, 302, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(171, 303, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(172, 303, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(173, 305, 'post my offer1', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(174, 306, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(175, 308, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(176, 309, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(177, 310, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(178, 311, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(179, 312, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(180, 313, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(181, 314, 'keywords', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(182, 315, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(183, 315, 'post my offer', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(184, 316, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(185, 316, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(186, 317, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(187, 318, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(188, 320, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(189, 320, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(190, 321, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(191, 322, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(192, 323, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(193, 324, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(194, 325, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(195, 326, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(196, 328, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(197, 329, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(198, 330, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(199, 331, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(200, 332, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(201, 333, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(202, 334, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(203, 335, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(204, 337, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(205, 337, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(206, 339, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(207, 339, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(208, 340, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(209, 341, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(210, 342, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(211, 343, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(212, 344, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(213, 345, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(214, 347, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(215, 348, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(216, 348, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(217, 350, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(218, 351, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(219, 352, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(220, 353, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(221, 354, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(222, 355, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(223, 356, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(224, 357, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(225, 358, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(226, 359, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(227, 360, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(228, 361, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(229, 362, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(230, 362, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(231, 364, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(232, 365, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(233, 366, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(234, 367, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(235, 368, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(236, 369, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(237, 369, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(238, 371, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(239, 372, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(240, 374, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(241, 375, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(242, 376, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(243, 378, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(244, 379, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(245, 380, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(246, 383, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(247, 385, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(248, 387, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(249, 388, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(250, 390, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(251, 391, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(252, 392, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(253, 393, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(254, 394, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(255, 396, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(256, 397, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(257, 398, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(258, 399, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(259, 400, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(260, 400, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(261, 402, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(262, 403, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(263, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(264, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(265, 403, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(266, 405, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(267, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(268, 397, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(269, 407, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(270, 408, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(271, 408, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(272, 409, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(273, 410, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(274, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(275, 409, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(276, 412, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(277, 412, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(278, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(279, 413, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(280, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(281, 299, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(282, 414, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(283, 415, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(284, 416, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(285, 417, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(286, 418, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(287, 419, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(288, 420, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(289, 420, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(290, 421, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(291, 422, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(292, 423, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(293, 424, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(294, 426, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(295, 427, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(296, 428, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(297, 429, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(298, 430, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(299, 431, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(300, 433, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(301, 434, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(302, 435, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(303, 436, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(304, 437, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(305, 439, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(306, 441, 'keywork', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(307, 443, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(308, 444, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(309, 445, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(310, 446, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(311, 447, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(312, 448, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(313, 449, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(314, 451, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(315, 451, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(316, 452, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(317, 453, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(318, 454, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(319, 455, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(320, 456, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(321, 457, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(322, 457, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(323, 459, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(324, 459, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(325, 461, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(326, 445, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(327, 445, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(328, 445, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(329, 462, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(330, 463, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(331, 464, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(332, 465, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(333, 466, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(334, 467, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(335, 468, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(336, 469, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(337, 469, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(338, 471, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(339, 474, 'keyword, test, tag', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(340, 475, 'test, keyword', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(341, 477, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(342, 478, 'test,webdeveloper', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(343, 478, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(344, 481, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(345, 477, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(346, 477, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(347, 477, 'repair and fix', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(348, 482, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(349, 483, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(350, 484, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(351, 485, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(352, 485, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(353, 485, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(354, 485, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(355, 486, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(356, 487, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(357, 488, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(358, 489, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(359, 490, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(360, 491, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(361, 492, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(362, 493, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(363, 494, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(364, 495, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(365, 496, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(366, 497, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(367, 498, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(368, 499, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(369, 500, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(370, 502, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(371, 502, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(372, 502, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(373, 507, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(374, 508, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(375, 509, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(376, 510, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(377, 511, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(378, 512, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(379, 513, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(380, 514, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(381, 515, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(382, 516, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(383, 517, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(384, 519, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(385, 520, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(386, 521, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(387, 522, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(388, 523, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(389, 524, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(390, 525, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(391, 526, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(392, 527, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(393, 528, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(394, 529, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(395, 530, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(396, 531, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(397, 532, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(398, 533, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(399, 564, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(400, 566, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(401, 567, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(402, 569, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(403, 569, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(404, 569, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(405, 569, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(406, 569, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(407, 530, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(408, 530, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(409, 530, 'dcd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(410, 570, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(411, 571, 'test', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(412, 572, 'rental', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(413, 573, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(414, 573, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(415, 574, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(416, 575, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(417, 577, '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_item_sound_url`
--

DROP TABLE IF EXISTS `bsp_item_sound_url`;
CREATE TABLE IF NOT EXISTS `bsp_item_sound_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=793 ;

--
-- Dumping data for table `bsp_item_sound_url`
--

INSERT INTO `bsp_item_sound_url` (`id`, `item_id`, `name`, `url`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(787, 441, NULL, '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F88645620"></iframe>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(788, 441, NULL, '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37248912"></iframe>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(789, 441, NULL, '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F88645620"></iframe>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(790, 575, NULL, 'd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(791, 577, NULL, 'dsds', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(792, 577, NULL, 'dssd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_message`
--

DROP TABLE IF EXISTS `bsp_message`;
CREATE TABLE IF NOT EXISTS `bsp_message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_send` int(11) DEFAULT '0',
  `user_receive` int(11) DEFAULT '0',
  `is_view` int(2) DEFAULT '0',
  `detail` text COLLATE utf8_unicode_ci,
  `sFile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `date_time` datetime DEFAULT '0000-00-00 00:00:00',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=122 ;

--
-- Dumping data for table `bsp_message`
--

INSERT INTO `bsp_message` (`Id`, `user_send`, `user_receive`, `is_view`, `detail`, `sFile`, `subject`, `date_time`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(6, 44, 46, 0, 'FBI Agent Richard DesLauriers warned members of the public not to approach the two men.\n\nThree people were killed and more than 170 wounded when the two bombs exploded near the finish line of the race.\n\nPolice are carrying out a major operation in Watertown, six miles (9km) from Boston, after witnesses reported hearing explosions and gunfire in the town.\n\nA police officer was shot dead late on Thursday at the Massachusetts Institute of Technology (MIT) campus in between Watertown and Boston.\n\nContinue reading the main story\nAnalysis\n\n\nGordon Corera\nSecurity correspondent, BBC News\nThe FBI is relying on the public to be its eyes and ears, said the man in charge of the Boston investigation. Someone out there knows these individuals as friends, co-workers or family members.\n\nThe video and still photos of the two suspects are now being played on an endless loop on US TV stations. The chances are that the FBI will now be deluged with information especially because the photos are not entirely clear and so many people may think they spot someone. Out of all this they will be hoping to find one pearl which would drive the investigation forward through an identification and then hopefully towards getting hold of the individuals.\n\nThe thought that two people are involved also shifts the perspective away from this being the work of a so-called lone wolf and towards it being some kind of conspiracy.\n\nThat, experts reckon, makes it more likely that this was more of a thought-through plan, including perhaps involving a plan to get away. That might of course mean they have left the country. And even if they didn''t, the experience of these investigations shows America is a big country with many places to hide. The photos are a major step forward but it''s not yet clear how close they take this investigation to its conclusion.\n\nIn pictures: Boston suspects\nAt least one man has been arrested in Watertown, and the FBI has told US broadcaster CNN it is trying to establish whether there is a connection.\n\nSome 14 victims, including three children, remain in hospital in a critical condition after Monday''s bomb attack.\n\nMr DesLauriers told a news conference on Thursday that the two suspects were "armed and extremely dangerous".\n\nHe said footage showed the suspect in the', NULL, 'sssssssss', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 45, 48, 1, 'asdsadsad', 'img2013051713avatapro.jpg', 'asda', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 52, 53, 0, 'dsdsdsdsddsfdfsdfsdfsdfdsf', NULL, 'dsdsdsdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 52, 31, 0, 'fdsfdsfdsfdsfds', NULL, 'dfdfdfdfdsfs', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 52, 31, 0, 'fdsfdsfdsfdsfds', NULL, 'dfdfdfdfdsfs', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 54, 48, 0, 'kjgkjgkjgjgkjgjk', NULL, 'kfgjhhjfjhfj', '2013-07-26 23:22:58', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 54, 48, 0, 'jddjdhjdjdjdhjdhjfj hlkhlhlglhl', NULL, 'jhfjfjhfjfjfjfkjfjf', '2013-07-26 23:26:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 54, 48, 0, 'fdagsdfg gs gfsdgs sfgfdgfdgs', NULL, 'sfgsgsfgsgsgs', '2013-07-26 23:30:49', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 54, 48, 0, 'ffsgsgsgfsgfsgfsgfsgfsfsfsf', NULL, 'kririrururureuyeryeye', '2013-07-26 23:33:09', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 54, 48, 0, 'ffsgsgsgfsgfsgfsgfsgfsfsfsf', NULL, 'kririrururureuyeryeye', '2013-07-26 23:33:26', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 54, 48, 0, 'yjgfjfhjfhfhfghfhjfh', NULL, 'nn.,n,n,n,n,n', '2013-07-26 23:35:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 54, 48, 0, 'sdaSdsadasdasdasdsad', NULL, 'dfadsadsadsad', '2013-07-27 00:03:45', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 54, 48, 0, 'xdsdsdasdas', NULL, 'cdscdc', '2013-07-27 00:22:36', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 54, 44, 0, 'hgcbvcbvcbcbcbcbcb', NULL, 'mbmnbmnvmvv', '2013-07-27 09:04:15', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 54, 54, 1, 'cxcxzczxcxzczc', NULL, 'dsfdsfsdafdafdsf', '2013-07-27 18:41:16', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 54, 54, 1, 'cxcxzczxcxzczc', NULL, 'dsfdsfsdafdafdsf', '2013-07-27 18:41:16', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 54, 44, 0, '', NULL, '', '2013-08-24 16:38:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 54, 44, 0, '', NULL, 'test subject', '2013-08-24 16:41:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 54, 44, 0, 'this is a test message', NULL, 'test suject', '2013-08-24 16:58:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 54, 44, 0, 'this is a test message', NULL, 'test suject', '2013-08-24 17:06:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 08:56:38', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 08:58:40', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 09:03:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 09:32:38', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 09:34:01', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 54, 44, 0, 'lorem ipsum dollor lorem ipsum dollorlorem ipsum dollor lorem ipsum dollorlorem ipsum dollorlorem ipsum dollor', NULL, 'test', '2013-08-26 09:39:16', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 54, 44, 0, 'test1....', NULL, 'test1', '2013-08-26 12:18:59', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 54, 44, 0, 'test1....', NULL, 'test1', '2013-08-26 12:23:41', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 54, 44, 0, 'ddd', NULL, 'ddd', '2013-08-26 12:59:23', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 54, 44, 0, 'ddd', NULL, 'ddd', '2013-08-26 13:00:38', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 54, 44, 0, 'ddd', NULL, 'ccccccccccc', '2013-08-26 13:08:29', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 54, 44, 0, 'aaaaaaaaa', NULL, 'aaaaaaaa', '2013-08-26 13:10:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 54, 44, 0, 'aaaaaaaaa', NULL, 'aaaaaaaa', '2013-08-26 13:12:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 54, 44, 0, 'zzzzzzzzz', NULL, 'aaaaaaaa', '2013-08-26 13:13:30', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 54, 44, 0, 'zzzzzzzzz', 'mmmm', 'aaaaaaaa', '2013-08-26 13:16:29', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 54, 44, 0, 'zzzzzzzzz', 'mmmm', 'aaaaaaaa', '2013-08-26 13:17:45', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 54, 44, 0, 'ffffff.........', 'atch108528success.jpg', 'fffff', '2013-08-26 13:28:54', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 54, 44, 0, 'test mail with attachment....', 'atch327787success.jpg', 'testing...', '2013-08-26 14:27:07', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 52, 48, 0, 'test message\n', '', 'test', '2013-08-26 14:35:48', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 54, 48, 0, 'cdbxzncbnzx', '', 'dbbdnbn', '2013-08-31 10:24:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 54, 48, 0, 'cdbxzncbnzx', '', 'dbbdnbn', '2013-08-31 10:24:43', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, NULL, NULL, 0, NULL, NULL, NULL, '2013-08-31 13:13:57', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, NULL, NULL, 0, NULL, NULL, NULL, '2013-08-31 20:30:23', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, NULL, NULL, 0, NULL, NULL, NULL, '2013-08-31 23:15:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-01 05:24:16', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-01 16:09:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-02 21:16:02', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-03 05:24:40', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-03 11:16:34', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-03 17:06:01', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-03 20:54:44', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-04 05:08:25', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-04 11:24:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-04 17:44:29', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-04 17:47:30', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-04 20:24:28', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-05 14:09:51', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-05 20:12:39', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-06 02:43:19', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-06 05:16:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-06 14:00:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-06 16:43:02', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-07 20:11:12', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-07 20:31:11', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 04:04:49', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 04:05:10', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 06:31:05', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 12:04:29', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 15:10:57', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 17:30:07', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-08 20:24:18', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-10 01:44:37', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-10 09:38:46', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-10 12:00:28', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-11 00:14:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, NULL, NULL, 0, NULL, NULL, NULL, '2013-09-11 03:18:25', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 66, 54, 0, 'test', '', 'test', '2013-09-21 11:34:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(96, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 16:14:15', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(97, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 16:24:43', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(98, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 16:24:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(99, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 23:09:15', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(100, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 23:12:04', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(101, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-16 23:13:07', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(102, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 01:12:37', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(103, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 07:52:22', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(104, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 07:52:55', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(105, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 07:55:33', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(106, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 13:08:41', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(107, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 13:13:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(108, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-17 13:14:50', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(109, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-19 07:28:55', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(110, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-19 13:10:31', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(111, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-19 19:44:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(112, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-20 01:43:52', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(113, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-20 07:44:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(114, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-21 00:26:11', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(115, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-21 08:07:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(116, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-21 10:16:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(117, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-21 16:53:23', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(118, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-21 22:08:41', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(119, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-22 23:24:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(120, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-23 06:54:51', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(121, NULL, NULL, 0, NULL, NULL, NULL, '2013-10-23 13:15:55', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_newfeed`
--

DROP TABLE IF EXISTS `bsp_newfeed`;
CREATE TABLE IF NOT EXISTS `bsp_newfeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0:deactive, 1:active',
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `detail_de` text COLLATE utf8_unicode_ci NOT NULL,
  `description_de` text COLLATE utf8_unicode_ci,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bsp_newfeed`
--

INSERT INTO `bsp_newfeed` (`id`, `status`, `detail`, `description`, `detail_de`, `description_de`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(5, 0, 'The Puzzzle I ALPHA', '# ', '', NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 1, 'jkjj', 'ddd ', 'hhh  sdffsd', 'ffdd  dsf', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_notify`
--

DROP TABLE IF EXISTS `bsp_notify`;
CREATE TABLE IF NOT EXISTS `bsp_notify` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date_time` datetime DEFAULT '0000-00-00 00:00:00',
  `isview` int(1) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bsp_order`
--

DROP TABLE IF EXISTS `bsp_order`;
CREATE TABLE IF NOT EXISTS `bsp_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `date_order` datetime DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `pph` float NOT NULL,
  `comission` float NOT NULL,
  `amount` float NOT NULL,
  `payment` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_order_item` (`item_id`),
  KEY `FK_order_buyer` (`buyer_id`),
  KEY `FK_order_seller` (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bsp_order`
--

INSERT INTO `bsp_order` (`id`, `item_id`, `buyer_id`, `seller_id`, `date_order`, `date_start`, `date_finish`, `description`, `pph`, `comission`, `amount`, `payment`, `status`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 431, 54, 48, '2013-09-10 09:35:30', '2013-09-11 00:00:00', NULL, 'bnbnbn', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 431, 54, 48, '2013-09-10 11:11:37', '2013-09-11 00:00:00', NULL, 'bbjjj', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 288, 54, 48, '0000-00-00 00:00:00', '2013-09-12 00:00:00', NULL, 'fhdjahfkhdsjhfkd', 0, 0, 360, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 445, 54, 48, '2013-09-11 09:25:10', '2013-09-12 00:00:00', NULL, 'cajsdjahdhsad', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 445, 54, 48, '2013-09-11 09:28:46', '2013-09-12 00:00:00', NULL, 'cajsdjahdhsad', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 445, 54, 48, '2013-09-11 09:29:29', '2013-09-12 00:00:00', NULL, 'cajsdjahdhsad', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 445, 54, 48, '2013-09-11 09:31:14', '2013-09-12 00:00:00', NULL, 'hdfajhfjghdjahgsagh', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 445, 54, 48, '2013-09-11 09:33:50', '2013-09-12 00:00:00', NULL, 'cdadsadsadas', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 445, 54, 48, '2013-09-11 09:35:36', '2013-09-12 00:00:00', NULL, 'sdsds', 0, 0, 288, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 445, 54, 48, '0000-00-00 00:00:00', '2013-09-12 00:00:00', NULL, 'dfdsf fsdfesdfsdf sdfsefsdf sdf fd sfsdfsdfrs ', 0, 0, 288, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 530, 66, 54, '0000-00-00 00:00:00', '2013-09-28 00:00:00', NULL, 'test', 0, 0, 12, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 477, 66, 52, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'dsdsd', 0, 0, 10, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 572, 66, 66, '2013-09-23 12:06:09', '2013-09-25 00:00:00', NULL, 'ress', 0, 0, 48, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 530, 66, 54, '2013-10-04 14:53:48', '2013-10-19 00:00:00', NULL, 'test', 0, 0, 36, 0, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_order2`
--

DROP TABLE IF EXISTS `bsp_order2`;
CREATE TABLE IF NOT EXISTS `bsp_order2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `amount` float NOT NULL,
  `status` int(1) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `bsp_order2`
--

INSERT INTO `bsp_order2` (`id`, `buyer_id`, `seller_id`, `item_id`, `date_order`, `date_start`, `date_finish`, `description`, `amount`, `status`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 48, 0, 282, '2013-04-05 00:00:00', '0000-00-00 00:00:00', '2013-04-05 00:00:00', '123', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 48, 0, 283, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '123', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 48, 0, 297, '2013-04-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 44, 0, 302, '2013-04-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 44, 0, 280, '2013-04-23 00:00:00', '2013-03-12 00:00:00', '2013-07-10 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 44, 0, 280, '2013-04-23 00:00:00', '2013-03-12 00:00:00', '2013-07-10 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 44, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 31, 0, 441, '2013-05-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 31, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 1, 0, 305, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 1, 0, 306, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 1, 0, 442, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 1, 0, 308, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(57, 1, 0, 308, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(58, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(59, 1, 0, 305, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(60, 1, 0, 308, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(61, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(62, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(63, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(64, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(65, 1, 0, 314, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(66, 1, 0, 442, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(67, 1, 0, 442, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(68, 1, 0, 309, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(69, 1, 0, 441, '2013-05-17 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(70, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(71, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(72, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(73, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(74, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(75, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(76, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(77, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(78, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(79, 1, 0, 441, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(80, 1, 0, 297, '2013-05-18 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(81, 1, 0, 278, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(82, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(83, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(84, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(85, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(86, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(87, 1, 0, 441, '2013-05-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(88, 1, 0, 292, '2013-05-21 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(89, NULL, 0, 313, '2013-05-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(90, 48, 0, 290, '2013-06-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(91, 48, 0, 290, '2013-06-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(92, 48, 0, 290, '2013-06-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(93, 48, 0, 290, '2013-06-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(94, 52, 0, 308, '2013-06-10 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(95, 52, 0, 306, '2013-06-10 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' k?m theo d?ch v?', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_price_panel`
--

DROP TABLE IF EXISTS `bsp_price_panel`;
CREATE TABLE IF NOT EXISTS `bsp_price_panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `price` varchar(30) DEFAULT NULL COMMENT '1 day(saturday-sunday)\n',
  `discount` varchar(30) DEFAULT NULL COMMENT '1 day(mon-friday), \n1 day(sat-sun)\n1day(fri 18:00 - sun 18:00)\n1 week\n',
  `per_price` int(11) DEFAULT NULL,
  `money` varchar(20) DEFAULT NULL,
  `special_deal` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `bsp_price_panel`
--

INSERT INTO `bsp_price_panel` (`id`, `item_id`, `price`, `discount`, `per_price`, `money`, `special_deal`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 445, '12', '2', 2, '$', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 444, '12', '2', 2, '$', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 441, '2000', '18', 1, '?', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 446, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 447, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 448, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 449, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 451, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 451, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 452, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 453, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 454, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 455, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 456, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 457, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 457, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 459, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 459, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 461, '1000', '', 1, '?', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_rating`
--

DROP TABLE IF EXISTS `bsp_rating`;
CREATE TABLE IF NOT EXISTS `bsp_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `num_rating` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `bsp_rating`
--

INSERT INTO `bsp_rating` (`id`, `user_id`, `item_id`, `num_rating`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 1, 305, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 1, 2, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 1, 5, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 2, 4, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 2, 2, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 2, 5, 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 2, 3, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 2, 308, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 2, 309, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 2, 311, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 44, 309, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 44, 308, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 44, 278, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 45, 291, 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 44, 303, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 44, 280, 4, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 45, 279, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 44, 302, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 45, 309, 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 44, 300, 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 48, 285, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 48, 441, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 48, 282, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_time`
--

DROP TABLE IF EXISTS `bsp_time`;
CREATE TABLE IF NOT EXISTS `bsp_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(45) DEFAULT NULL,
  `hour` varchar(45) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `bsp_time`
--

INSERT INTO `bsp_time` (`id`, `time`, `hour`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'Time', 'Hour', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, '00:00', '00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, '01:00', '01:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '02:00', '02:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '03:00', '03:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, '04:00', '04:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, '05:00', '05:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, '06:00', '06:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, '07:00', '07:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, '08:00', '08:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, '09:00', '09:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, '10:00', '10:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, '11:00', '11:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, '12:00', '12:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, '13:00', '13:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, '14:00', '14:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, '15:00', '15:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, '16:00', '16:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, '17:00', '17:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, '18:00', '18:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, '19:00', '19:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, '20:00', '20:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, '21:00', '21:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, '22:00', '22:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, '23:00', '23:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bsp_user`
--

DROP TABLE IF EXISTS `bsp_user`;
CREATE TABLE IF NOT EXISTS `bsp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `type` enum('admin','non-admin') DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `avatar` varchar(300) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `store_url` varchar(255) NOT NULL,
  `paypal_mail` varchar(50) DEFAULT NULL,
  `fbmail` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password_hint` varchar(200) DEFAULT NULL,
  `description` text,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `lat` float NOT NULL DEFAULT '0',
  `lng` float NOT NULL DEFAULT '0',
  `background` varchar(300) DEFAULT NULL,
  `sRecentList` text,
  `sWishList` text,
  `lastActiveTime` datetime NOT NULL,
  `email_authenticate` varchar(255) DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `bsp_user`
--

INSERT INTO `bsp_user` (`id`, `first_name`, `second_name`, `username`, `user_email`, `type`, `phone`, `avatar`, `birthday`, `gender`, `store_url`, `paypal_mail`, `fbmail`, `password`, `password_hint`, `description`, `address`, `country`, `city`, `zipcode`, `lat`, `lng`, `background`, `sRecentList`, `sWishList`, `lastActiveTime`, `email_authenticate`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(53, 'Alexander', 'fgfgfg', 'istamendil@gmail.com', 'istamendil@gmail.com', 'non-admin', '43543543', NULL, '2013-06-05', '1', '', 'istamendil@gmail.com', NULL, '123456', NULL, 'hjhgj', NULL, 'jghjhgj', 'fgfdg', '435345', 0, 0, NULL, NULL, NULL, '2013-06-13 09:07:40', '1', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(54, 'sumantra', 'd.', 'deysumantra@yahoo.com', 'deysumantra@yahoo.com', 'non-admin', '', '606289472118sourav dey jpeg.jpg', '1976-07-29', '1', 'sumantra', 'deysumantra@yahoo.com', NULL, '6803a6147d4d20561b13b4d47ca55430', NULL, 'lorem ipsum dollor', 'kjkj', 'kjk', 'kmnm', '7676767', 46.8392, -96.6631, '550253089652DSC_0000046.jpg', NULL, '285', '2013-09-14 08:31:08', 'rVrSihn5Rnpd58bel3uPrSSzehRkjzKWhcPngdE7M4wToUizzYoBZpKeSCvcLg9QEldunhe98XdJSHiPGSDGioRb0nzXPUNth1As', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(55, 'Shahzad', '', 'shahzadthathal@gmail.com', 'shahzadthathal@gmail.com', 'non-admin', '', NULL, '0000-00-00', '1', '', 'shahzadthathal@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Web Developer', 'Islamabad', 'Pakistan', 'Islamabad', '44000', 10245, 5019, NULL, NULL, NULL, '2013-07-07 06:30:09', '7gZkBK6IeYax7HoI8T3zB2nu4kCT49xoCxUdi1uoeiui0v1kzhezvs4MZSP41nFPuz3pNaZYFuhRCuccXhXtW1fWe507FRzMrcbe', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(56, '', '', 'ist.kazan@gmail.com', 'ist.kazan@gmail.com', 'non-admin', '', NULL, '0000-00-00', '1', '', 'ist.kazan@gmail.com', NULL, '4297f44b13955235245b2497399d7a93', NULL, '', NULL, '', '', '', 0, 0, NULL, NULL, NULL, '2013-07-16 02:49:45', 'cZUnzMEhL63RyAGI4CyciUukgXBAjTRITL50yWtj3JbNkTwAG4Zlluurr62X9eFdQXpoUeUzP6X99tVSKUeUoGmPZAZ8GEywCluw', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(64, 'sumantra', 'd.', 'romisumantra@gmail.com', 'romisumantra@gmail.com', 'non-admin', NULL, NULL, '2013-09-25', '1', '', 'romisumantra@gmail.com', NULL, '6803a6147d4d20561b13b4d47ca55430', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '474,278', '2013-09-20 07:36:24', '1', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(66, '', 'test', 'kontakt@1348.eu', 'kontakt@1348.eu', 'non-admin', '900912121', '5527565213380827779596790392797089606289472118sourav dey jpeg.png', '0000-00-00', '1', 'test', 'kontakt@1348.eu', NULL, '2f1f39e0cb6dd46597050789d21d768e', NULL, 'Test', '', 'Germany', 'Munich', '80469', 48.1367, 11.5768, '255862505104550253089652DSC_0000046.jpg', NULL, '530', '2013-11-17 17:53:48', '1', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(67, 'Sourav Dey', NULL, 'sourav.dey.180@facebook.com', 'sourav.dey.180@facebook.com', 'non-admin', NULL, 'https://graph.facebook.com/sourav.dey.180/picture', NULL, NULL, '', NULL, 'sourav.dey.180@facebook.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'https://graph.facebook.com/sourav.dey.180?fields=cover', NULL, NULL, '0000-00-00 00:00:00', '0', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(68, NULL, NULL, '', '', 'non-admin', NULL, NULL, '0000-00-00', NULL, '', NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2013-10-16 05:03:32', '0', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(73, 'Michael Seyum', NULL, 'Brian', 'kontakt@1348.eu', 'admin', NULL, '', '1975-10-30', '2', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1),
(74, 'Puzzzle', NULL, 'ThePuzzzle', 'contact@thepuzzzle.com', 'admin', NULL, 'no_image', '1990-11-11', '1', '', NULL, NULL, '269f506ec7ed907115796c3e10de0c6f', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0', '2013-11-24 10:28:39', 1, '2013-11-24 10:28:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ha_logins`
--

DROP TABLE IF EXISTS `ha_logins`;
CREATE TABLE IF NOT EXISTS `ha_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `loginProvider` varchar(50) NOT NULL,
  `loginProviderIdentifier` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginProvider_2` (`loginProvider`,`loginProviderIdentifier`),
  KEY `loginProvider` (`loginProvider`),
  KEY `loginProviderIdentifier` (`loginProviderIdentifier`),
  KEY `userId` (`userId`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paypalaction`
--

DROP TABLE IF EXISTS `paypalaction`;
CREATE TABLE IF NOT EXISTS `paypalaction` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `action_type` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `paypalaction`
--

INSERT INTO `paypalaction` (`id`, `action_type`, `timestamp`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'start_purchase', '2013-09-09 15:48:59', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 'start_purchase', '2013-09-09 15:52:54', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'start_purchase', '2013-09-09 16:00:14', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 'start_purchase', '2013-09-09 16:24:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 'start_purchase', '2013-09-09 16:26:01', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 'start_purchase', '2013-09-09 19:05:40', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 'start_purchase', '2013-09-09 20:07:18', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 'start_purchase', '2013-09-09 20:11:01', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 'start_purchase', '2013-09-09 20:13:10', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 'start_purchase', '2013-09-09 20:31:32', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 'start_purchase', '2013-09-09 20:41:39', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 'start_purchase', '2013-09-10 07:22:46', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 'start_purchase', '2013-09-10 07:24:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 'start_purchase', '2013-09-10 07:25:41', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 'start_purchase', '2013-09-10 08:07:50', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 'start_purchase', '2013-09-10 08:11:18', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 'start_purchase', '2013-09-10 08:12:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 'start_purchase', '2013-09-10 08:17:18', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 'start_purchase', '2013-09-10 08:18:19', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 'start_purchase', '2013-09-10 08:19:38', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 'start_purchase', '2013-09-10 08:26:50', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 'start_purchase', '2013-09-10 08:28:15', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 'start_purchase', '2013-09-10 09:35:30', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 'start_purchase', '2013-09-10 11:11:37', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 'start_purchase', '2013-09-11 07:18:43', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 'start_purchase', '2013-09-11 09:29:29', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 'start_purchase', '2013-09-11 09:31:14', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 'start_purchase', '2013-09-11 09:33:50', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 'start_purchase', '2013-09-11 09:35:36', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 'start_purchase', '2013-09-11 10:59:22', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 'start_purchase', '2013-09-21 11:20:35', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 'start_purchase', '2013-09-23 11:59:08', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 'start_purchase', '2013-09-23 12:06:09', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 'start_purchase', '2013-10-04 14:53:48', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypalerror`
--

DROP TABLE IF EXISTS `paypalerror`;
CREATE TABLE IF NOT EXISTS `paypalerror` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paypal_response_id` int(11) unsigned NOT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Domain` varchar(255) DEFAULT NULL,
  `ErrorID` varchar(255) DEFAULT NULL,
  `ExceptionID` varchar(255) DEFAULT NULL,
  `Message` text,
  `Parameter` varchar(255) DEFAULT NULL,
  `Severity` varchar(255) DEFAULT NULL,
  `Subdomain` varchar(255) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paypal_response_id` (`paypal_response_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `paypalerror`
--

INSERT INTO `paypalerror` (`id`, `paypal_response_id`, `Category`, `Domain`, `ErrorID`, `ExceptionID`, `Message`, `Parameter`, `Severity`, `Subdomain`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 5, 'Application', 'PLATFORM', '560022', '', 'The X-PAYPAL-APPLICATION-ID header contains an invalid value', 'X-PAYPAL-APPLICATION-ID', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 7, 'Application', 'PLATFORM', '560022', '', 'The X-PAYPAL-APPLICATION-ID header contains an invalid value', 'X-PAYPAL-APPLICATION-ID', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 8, 'Application', 'PLATFORM', '520003', '', 'Authentication failed. API credentials are incorrect.', '', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 9, 'Application', 'PLATFORM', '579033', '', 'The sender and each receiver must have different accounts', 'deysum_1288597763_biz@yahoo.com', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 10, 'Application', 'PLATFORM', '579033', '', 'The sender and each receiver must have different accounts', 'deysum_1288597763_biz@yahoo.com', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 11, 'Application', 'PLATFORM', '579033', '', 'The sender and each receiver must have different accounts', 'deysum_1288597763_biz@yahoo.com', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 12, 'Application', 'PLATFORM', '579033', '', 'The sender and each receiver must have different accounts', 'deysum_1288597763_biz@yahoo.com', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 13, 'Application', 'PLATFORM', '579033', '', 'The sender and each receiver must have different accounts', 'deysum_1288597763_biz@yahoo.com', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 19, 'Application', 'PLATFORM', '560022', '', 'The X-PAYPAL-APPLICATION-ID header contains an invalid value', 'X-PAYPAL-APPLICATION-ID', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 22, 'Application', 'PLATFORM', '520003', '', 'Authentication failed. API credentials are incorrect.', '', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 23, 'Application', 'PLATFORM', '520003', '', 'Authentication failed. API credentials are incorrect.', '', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 24, 'Application', 'PLATFORM', '520003', '', 'Authentication failed. API credentials are incorrect.', '', 'Error', 'Application', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypalipn`
--

DROP TABLE IF EXISTS `paypalipn`;
CREATE TABLE IF NOT EXISTS `paypalipn` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `test_ipn` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `payer_email` varchar(255) DEFAULT NULL,
  `receiver_email` varchar(255) DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `ipn_track_id` varchar(255) DEFAULT NULL,
  `payer_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `raw_response` text NOT NULL,
  `paypal_action_id` int(11) unsigned NOT NULL,
  `timestamp` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paypal_action_id` (`paypal_action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paypalorder`
--

DROP TABLE IF EXISTS `paypalorder`;
CREATE TABLE IF NOT EXISTS `paypalorder` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `paypal_action_id` int(11) unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `paypal_action_id` (`paypal_action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paypalresponse`
--

DROP TABLE IF EXISTS `paypalresponse`;
CREATE TABLE IF NOT EXISTS `paypalresponse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paypal_action_id` int(11) unsigned NOT NULL,
  `Ack` varchar(255) DEFAULT NULL,
  `Build` varchar(255) DEFAULT NULL,
  `CorrelationID` varchar(255) DEFAULT NULL,
  `Timestamp` varchar(255) DEFAULT NULL,
  `PayKey` varchar(255) DEFAULT NULL,
  `PaymentExecStatus` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `RedirectURL` text,
  `XMLRequest` text,
  `XMLResponse` text,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paypal_action_id` (`paypal_action_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `paypalresponse`
--

INSERT INTO `paypalresponse` (`id`, `paypal_action_id`, `Ack`, `Build`, `CorrelationID`, `Timestamp`, `PayKey`, `PaymentExecStatus`, `Status`, `RedirectURL`, `XMLRequest`, `XMLResponse`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 1, 'Success', '6941298', 'bde56242a552f', '2013-09-09T06:49:00.996-07:00', 'AP-5PT50471DF350825D', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-5PT50471DF350825D', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.174.131</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">134</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T06:49:00.996-07:00</timestamp><ack>Success</ack><correlationId>bde56242a552f</correlationId><build>6941298</build></responseEnvelope><payKey>AP-5PT50471DF350825D</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 2, 'Success', '6941298', 'ae0f9563ecf3c', '2013-09-09T06:52:55.708-07:00', 'AP-6FJ203001M130474K', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-6FJ203001M130474K', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.174.131</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">135</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T06:52:55.708-07:00</timestamp><ack>Success</ack><correlationId>ae0f9563ecf3c</correlationId><build>6941298</build></responseEnvelope><payKey>AP-6FJ203001M130474K</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 3, 'Success', '6941298', '307efff740077', '2013-09-09T07:00:15.875-07:00', 'AP-11N7168042622393B', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-11N7168042622393B', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.174.131</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">136</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T07:00:15.875-07:00</timestamp><ack>Success</ack><correlationId>307efff740077</correlationId><build>6941298</build></responseEnvelope><payKey>AP-11N7168042622393B</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 6, 'Success', '6941298', '7ef9be19e70e0', '2013-09-09T10:05:41.827-07:00', 'AP-2PV91430YA538842S', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-2PV91430YA538842S', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/431-kha-test</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">145</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T10:05:41.827-07:00</timestamp><ack>Success</ack><correlationId>7ef9be19e70e0</correlationId><build>6941298</build></responseEnvelope><payKey>AP-2PV91430YA538842S</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 7, 'Failure', '6941298', '49be9a5f957fb', '2013-09-09T11:07:19.304-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/431-kha-test</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">API-Signatur</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">146</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T11:07:19.304-07:00</timestamp><ack>Failure</ack><correlationId>49be9a5f957fb</correlationId><build>6941298</build></responseEnvelope><error><errorId>560022</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The X-PAYPAL-APPLICATION-ID header contains an invalid value</message><parameter>X-PAYPAL-APPLICATION-ID</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 8, 'Success', '6941298', '08a6ef03a9e6a', '2013-09-09T11:11:02.522-07:00', 'AP-8JD94631WR795045X', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-8JD94631WR795045X', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/431-kha-test</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">147</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T11:11:02.522-07:00</timestamp><ack>Success</ack><correlationId>08a6ef03a9e6a</correlationId><build>6941298</build></responseEnvelope><payKey>AP-8JD94631WR795045X</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 9, 'Failure', '6941298', '7d5cbf5ec2693', '2013-09-09T11:13:11.545-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/444-test-calendar</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">24000</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">148</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T11:13:11.545-07:00</timestamp><ack>Failure</ack><correlationId>7d5cbf5ec2693</correlationId><build>6941298</build></responseEnvelope><error><errorId>560022</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The X-PAYPAL-APPLICATION-ID header contains an invalid value</message><parameter>X-PAYPAL-APPLICATION-ID</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 10, 'Failure', '6941298', 'e3b70c85f7bf3', '2013-09-09T11:31:33.098-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/444-test-calendar</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-5GH9738703619930Y</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">24000</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">149</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T11:31:33.098-07:00</timestamp><ack>Failure</ack><correlationId>e3b70c85f7bf3</correlationId><build>6941298</build></responseEnvelope><error><errorId>520003</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>Authentication failed. API credentials are incorrect.</message></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 11, 'Failure', '6941298', 'e1005e16682bc', '2013-09-09T11:41:40.385-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/444-test-calendar</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.250.80.172</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">24000</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">151</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl><senderEmail xmlns="">deysum_1288597763_biz@yahoo.com</senderEmail></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T11:41:40.385-07:00</timestamp><ack>Failure</ack><correlationId>e1005e16682bc</correlationId><build>6941298</build></responseEnvelope><error><errorId>579033</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The sender and each receiver must have different accounts</message><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>Sender and receiver PayPal accounts must be unique.</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 12, 'Failure', '6941298', 'f99e2fe105c3e', '2013-09-09T22:22:47.718-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">152</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl><senderEmail xmlns="">deysum_1288597763_biz@yahoo.com</senderEmail></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T22:22:47.718-07:00</timestamp><ack>Failure</ack><correlationId>f99e2fe105c3e</correlationId><build>6941298</build></responseEnvelope><error><errorId>579033</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The sender and each receiver must have different accounts</message><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>Sender and receiver PayPal accounts must be unique.</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 13, 'Failure', '6941298', '9950d8f167565', '2013-09-09T22:24:48.878-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">153</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl><senderEmail xmlns="">deysum_1288597763_biz@yahoo.com</senderEmail></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T22:24:48.878-07:00</timestamp><ack>Failure</ack><correlationId>9950d8f167565</correlationId><build>6941298</build></responseEnvelope><error><errorId>579033</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The sender and each receiver must have different accounts</message><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>Sender and receiver PayPal accounts must be unique.</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 14, 'Failure', '6941298', '121035bf72822', '2013-09-09T22:25:42.646-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">154</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl><senderEmail xmlns="">deysum_1288597763_biz@yahoo.com</senderEmail></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T22:25:42.646-07:00</timestamp><ack>Failure</ack><correlationId>121035bf72822</correlationId><build>6941298</build></responseEnvelope><error><errorId>579033</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The sender and each receiver must have different accounts</message><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>Sender and receiver PayPal accounts must be unique.</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 15, 'Failure', '6941298', 'ea21081f99656', '2013-09-09T23:07:51.317-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">155</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl><senderEmail xmlns="">deysum_1288597763_biz@yahoo.com</senderEmail></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:07:51.317-07:00</timestamp><ack>Failure</ack><correlationId>ea21081f99656</correlationId><build>6941298</build></responseEnvelope><error><errorId>579033</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The sender and each receiver must have different accounts</message><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>deysum_1288597763_biz@yahoo.com</parameter><parameter>Sender and receiver PayPal accounts must be unique.</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 16, 'Success', '6941298', '2ab1526fce07a', '2013-09-09T23:11:19.007-07:00', 'AP-0LJ181157D922630U', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-0LJ181157D922630U', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">156</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:11:19.007-07:00</timestamp><ack>Success</ack><correlationId>2ab1526fce07a</correlationId><build>6941298</build></responseEnvelope><payKey>AP-0LJ181157D922630U</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 17, 'Success', '6941298', 'd47f28d3de654', '2013-09-09T23:12:21.943-07:00', 'AP-14X86055V9891710T', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-14X86055V9891710T', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysum_1288597763_biz@yahoo.com</email><invoiceId xmlns="">157</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:12:21.943-07:00</timestamp><ack>Success</ack><correlationId>d47f28d3de654</correlationId><build>6941298</build></responseEnvelope><payKey>AP-14X86055V9891710T</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 18, 'Success', '6941298', '1026d558661fb', '2013-09-09T23:17:19.751-07:00', 'AP-36621068GG350922G', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-36621068GG350922G', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">158</invoiceId><paymentType xmlns="">GOODS</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:17:19.751-07:00</timestamp><ack>Success</ack><correlationId>1026d558661fb</correlationId><build>6941298</build></responseEnvelope><payKey>AP-36621068GG350922G</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 19, 'Success', '6941298', '28839e0b77d8a', '2013-09-09T23:18:20.065-07:00', 'AP-72P49288G7446671A', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-72P49288G7446671A', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">159</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:18:20.065-07:00</timestamp><ack>Success</ack><correlationId>28839e0b77d8a</correlationId><build>6941298</build></responseEnvelope><payKey>AP-72P49288G7446671A</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 20, 'Success', '6941298', 'a273abf744b1d', '2013-09-09T23:19:39.483-07:00', 'AP-3R925428451848056', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-3R925428451848056', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">160</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:19:39.483-07:00</timestamp><ack>Success</ack><correlationId>a273abf744b1d</correlationId><build>6941298</build></responseEnvelope><payKey>AP-3R925428451848056</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 21, 'Failure', '6941298', '8cdfdbcdc31a3', '2013-09-09T23:26:51.019-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">161</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:26:51.019-07:00</timestamp><ack>Failure</ack><correlationId>8cdfdbcdc31a3</correlationId><build>6941298</build></responseEnvelope><error><errorId>560022</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>The X-PAYPAL-APPLICATION-ID header contains an invalid value</message><parameter>X-PAYPAL-APPLICATION-ID</parameter></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 22, 'Success', '6941298', '7125ff1fc56ee', '2013-09-09T23:28:16.493-07:00', 'AP-1RA895027T514522T', 'CREATED', NULL, 'https://www.paypal.com/webscr?cmd=_ap-payment&paykey=AP-1RA895027T514522T', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.109.124</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">162</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-09T23:28:16.493-07:00</timestamp><ack>Success</ack><correlationId>7125ff1fc56ee</correlationId><build>6941298</build></responseEnvelope><payKey>AP-1RA895027T514522T</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 25, 'Success', '7630618', 'dc5264b9522a7', '2013-09-10T22:18:44.638-07:00', 'AP-7RM4393649533201A', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-7RM4393649533201A', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/288-do-as-phone-center</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">360</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">3</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-10T22:18:44.638-07:00</timestamp><ack>Success</ack><correlationId>dc5264b9522a7</correlationId><build>7630618</build></responseEnvelope><payKey>AP-7RM4393649533201A</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 26, 'Failure', '7630618', '0612d357c890f', '2013-09-11T00:29:30.838-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">&pound;</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">6</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-11T00:29:30.838-07:00</timestamp><ack>Failure</ack><correlationId>0612d357c890f</correlationId><build>7630618</build></responseEnvelope><error><errorId>520003</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>Authentication failed. API credentials are incorrect.</message></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 27, 'Failure', '7630618', '8ea04118e56d6', '2013-09-11T00:31:15.673-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">&pound;</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">7</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-11T00:31:15.673-07:00</timestamp><ack>Failure</ack><correlationId>8ea04118e56d6</correlationId><build>7630618</build></responseEnvelope><error><errorId>520003</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>Authentication failed. API credentials are incorrect.</message></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 28, 'Failure', '7630618', '08b56df70f8d9', '2013-09-11T00:33:51.264-07:00', '', '', NULL, '', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">8</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns3:FaultMessage xmlns:ns3="http://svcs.paypal.com/types/common" xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-11T00:33:51.264-07:00</timestamp><ack>Failure</ack><correlationId>08b56df70f8d9</correlationId><build>7630618</build></responseEnvelope><error><errorId>520003</errorId><domain>PLATFORM</domain><subdomain>Application</subdomain><severity>Error</severity><category>Application</category><message>Authentication failed. API credentials are incorrect.</message></error></ns3:FaultMessage>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 29, 'Success', '7630618', 'e99ae1e222165', '2013-09-11T00:35:37.055-07:00', 'AP-7VT44446J0512432V', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-7VT44446J0512432V', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">USD</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">9</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-11T00:35:37.055-07:00</timestamp><ack>Success</ack><correlationId>e99ae1e222165</correlationId><build>7630618</build></responseEnvelope><payKey>AP-7VT44446J0512432V</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 30, 'Success', '7630618', '75631b8df5c8f', '2013-09-11T01:59:23.172-07:00', 'AP-3MV242296Y102363X', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-3MV242296Y102363X', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://thepuzzzle.com/offer-detail/445-test-price</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">115.253.123.4</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">GBP</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">288</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">10</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-11T01:59:23.172-07:00</timestamp><ack>Success</ack><correlationId>75631b8df5c8f</correlationId><build>7630618</build></responseEnvelope><payKey>AP-3MV242296Y102363X</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 31, 'Success', '7767516', 'e6919194402ae', '2013-09-21T02:20:36.085-07:00', 'AP-6K314392MP413610N', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-6K314392MP413610N', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://www.thepuzzzle.com/offer-detail/530-my-new-offer</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">77.47.69.93</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">EUR</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">12</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">11</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://www.thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-21T02:20:36.085-07:00</timestamp><ack>Success</ack><correlationId>e6919194402ae</correlationId><build>7767516</build></responseEnvelope><payKey>AP-6K314392MP413610N</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 32, 'Success', '7767516', '3c11fb8cba40e', '2013-09-23T02:59:09.229-07:00', 'AP-43T4215972634863F', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-43T4215972634863F', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://en.thepuzzzle.com/offer-detail/477-my-sample-puzzles-test</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">77.4.102.77</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">EUR</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">10</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">12</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://en.thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-23T02:59:09.229-07:00</timestamp><ack>Success</ack><correlationId>3c11fb8cba40e</correlationId><build>7767516</build></responseEnvelope><payKey>AP-43T4215972634863F</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 33, 'Success', '7767516', 'f5830484130b3', '2013-09-23T03:06:10.128-07:00', 'AP-0R676835AA6613232', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-0R676835AA6613232', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://en.thepuzzzle.com/offer-detail/572-rental</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">77.4.102.77</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">EUR</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">48</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">13</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://en.thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-09-23T03:06:10.128-07:00</timestamp><ack>Success</ack><correlationId>f5830484130b3</correlationId><build>7767516</build></responseEnvelope><payKey>AP-0R676835AA6613232</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 34, 'Success', '7935900', 'bd4ae06ffbb31', '2013-10-04T05:53:49.645-07:00', 'AP-9HW246182D577613E', 'CREATED', NULL, 'https://www.sandbox.paypal.com/webscr?cmd=_ap-payment&paykey=AP-9HW246182D577613E', '<?xml version="1.0" encoding="utf-8"?><PayRequest xmlns="http://svcs.paypal.com/types/ap"><requestEnvelope xmlns=""><detailLevel>ReturnAll</detailLevel><errorLanguage>en_US</errorLanguage></requestEnvelope><actionType xmlns="">PAY</actionType><cancelUrl xmlns="">http://de.thepuzzzle.com/offer-detail/530-my-new-offer</cancelUrl><clientDetails xmlns=""><applicationId xmlns="">APP-80W284485P519543T</applicationId><ipAddress xmlns="">93.134.205.58</ipAddress><partnerName xmlns="">The Puzzzle</partnerName></clientDetails><currencyCode xmlns="">EUR</currencyCode><feesPayer xmlns="">EACHRECEIVER</feesPayer><receiverList xmlns=""><receiver xmlns=""><amount xmlns="">36</amount><email xmlns="">deysumantra-facilitator@yahoo.com</email><invoiceId xmlns="">14</invoiceId><paymentType xmlns="">SERVICE</paymentType></receiver></receiverList><returnUrl xmlns="">http://de.thepuzzzle.com/order/success</returnUrl></PayRequest>', '<?xml version=''1.0'' encoding=''UTF-8''?><ns2:PayResponse xmlns:ns2="http://svcs.paypal.com/types/ap"><responseEnvelope><timestamp>2013-10-04T05:53:49.645-07:00</timestamp><ack>Success</ack><correlationId>bd4ae06ffbb31</correlationId><build>7935900</build></responseEnvelope><payKey>AP-9HW246182D577613E</payKey><paymentExecStatus>CREATED</paymentExecStatus></ns2:PayResponse>', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypalsettings`
--

DROP TABLE IF EXISTS `paypalsettings`;
CREATE TABLE IF NOT EXISTS `paypalsettings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Sandbox` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `DeveloperAccountEmail` varchar(255) NOT NULL,
  `ApplicationID` varchar(255) NOT NULL,
  `APIUsername` varchar(255) NOT NULL,
  `APIPassword` varchar(255) NOT NULL,
  `APISignature` varchar(255) NOT NULL,
  `APISubject` varchar(255) DEFAULT NULL,
  `app_account_email` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `paypalsettings`
--

INSERT INTO `paypalsettings` (`id`, `Sandbox`, `DeveloperAccountEmail`, `ApplicationID`, `APIUsername`, `APIPassword`, `APISignature`, `APISubject`, `app_account_email`, `timestamp`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(2, 1, 'deysumantra-facilitator.yahoo.com', 'APP-80W284485P519543T', 'deysumantra-facilitator_api1.yahoo.com', '1378735421', 'AFcWxV21C7fd0v3bYYYRCpSSRl31ATgmUuYcElyk1WPsZAJ0qaCzcJlu', NULL, 'deysumantra-facilitator@yahoo.com', '2013-09-07 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

DROP TABLE IF EXISTS `tblcomment`;
CREATE TABLE IF NOT EXISTS `tblcomment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `objectID` int(11) NOT NULL COMMENT 'ID cua doi tuong dc vote, doi tuong co the la Film,article,comment...',
  `object_type` smallint(6) NOT NULL COMMENT '1:Film,2: article, 3: comment',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` int(1) DEFAULT NULL,
  `date_create` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tblcomment`
--

INSERT INTO `tblcomment` (`ID`, `accountID`, `objectID`, `object_type`, `content`, `is_hidden`, `date_create`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(21, 93, 308, 1, 'akshakd', 0, '2013-04-18 07:07:19', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 44, 303, 1, 'aaaaaaaa', 0, '2013-04-18 09:10:33', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 44, 303, 1, 'cknslcnka', 0, '2013-04-18 09:16:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 44, 303, 1, 'asadasdadad', 0, '2013-04-18 09:39:31', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 44, 303, 1, 'sadsad', 0, '2013-04-18 09:41:26', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 44, 303, 1, 'hieu', 0, '2013-04-18 09:41:30', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 44, 303, 1, 'asadasd', 0, '2013-04-18 09:43:17', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 44, 303, 1, 'aaaaaaaaaaaaaaabg', 0, '2013-04-18 09:45:03', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 44, 303, 1, 'contra bacbra', 0, '2013-04-18 09:48:07', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 44, 303, 1, 'greenlance', 0, '2013-04-18 09:49:30', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 44, 303, 1, 'cocacola', 0, '2013-04-18 09:51:40', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 44, 303, 1, 'manu', 0, '2013-04-18 09:53:54', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 44, 303, 1, 'tutirkc,aca', 0, '2013-04-18 09:54:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 44, 303, 1, 'aaaaaaaaaaaaa', 0, '2013-04-18 10:02:32', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 44, 303, 1, 'ccccccccccccccc', 0, '2013-04-18 10:02:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 44, 303, 1, 'sad', 0, '2013-04-18 10:03:04', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 44, 303, 1, 'aaaaaaaaaa', 0, '2013-04-18 13:21:48', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 44, 303, 1, 'aaaaaaaaaaaaa', 0, '2013-04-18 13:21:50', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 44, 303, 1, 'aaaaaaaaaaaaa', 0, '2013-04-18 13:21:54', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 44, 303, 1, 'aaaaaaaaa', 0, '2013-04-18 13:23:28', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 44, 303, 1, 'aaaaaaaaaaaa', 0, '2013-04-18 13:23:31', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 44, 284, 1, 'saljaf', 0, '2013-04-19 12:28:14', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 44, 284, 1, 'aldjiefjv', 0, '2013-04-19 12:28:20', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 48, 308, 1, 'test', 0, '2013-05-04 04:11:47', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 48, 439, 1, 'test', 0, '2013-05-06 05:48:10', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 49, 442, 1, 'hehe', 0, '2013-05-09 06:59:19', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 49, 442, 1, 'kaka', 0, '2013-05-09 06:59:22', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(48, 45, 441, 1, 'adadad', 0, '2013-05-14 14:54:08', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(49, 45, 441, 1, 'dadada', 0, '2013-05-14 14:54:12', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(50, 45, 48, 3, 'sdandksnad', 0, '2013-05-14 15:01:13', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(51, 45, 46, 3, 'lajdlad', 0, '2013-05-15 05:24:05', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(52, 48, 49, 3, 'hj', 0, '2013-05-15 05:32:56', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(53, 48, 441, 1, 'test', 0, '2013-05-15 05:43:31', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(54, 48, 49, 3, 'a', 0, '2013-05-15 05:43:52', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(55, 48, 49, 3, 'test', 0, '2013-05-15 05:43:59', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(56, 48, 292, 1, 'test', 0, '2013-05-21 12:43:53', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbllike`
--

DROP TABLE IF EXISTS `tbllike`;
CREATE TABLE IF NOT EXISTS `tbllike` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `objectID` int(11) NOT NULL COMMENT 'ID cua doi tuong dc vote, doi tuong co the la Film,article,comment...',
  `object_type` smallint(6) NOT NULL COMMENT '1:Film,2: article, 3: comment',
  `date_create` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL COMMENT '1: like, 2: dislike',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbllike`
--

INSERT INTO `tbllike` (`ID`, `accountID`, `objectID`, `object_type`, `date_create`, `status`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 128, 1, 1, '2013-03-14 16:23:12', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 179, 319, 1, '2013-03-14 18:24:01', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 93, 8, 1, '2013-03-14 22:22:25', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 128, 8, 1, '2013-03-15 01:38:45', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, 132, 8, 1, '2013-03-15 01:40:05', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 182, 77, 1, '2013-03-15 08:20:00', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 182, 60, 1, '2013-03-15 08:51:11', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(8, 128, 224, 1, '2013-03-15 08:57:24', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 93, 226, 1, '2013-03-15 13:51:31', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 93, 224, 1, '2013-03-15 13:51:33', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 179, 4, 2, '2013-03-15 17:32:44', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 186, 1, 2, '2013-03-16 15:00:14', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 93, 326, 1, '2013-03-16 17:42:27', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 178, 324, 1, '2013-03-16 18:35:46', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 189, 324, 1, '2013-03-17 19:17:25', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 189, 325, 1, '2013-03-17 19:29:07', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 189, 327, 1, '2013-03-17 19:56:55', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 128, 324, 1, '2013-03-18 18:13:24', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 128, 327, 1, '2013-04-02 14:10:27', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 128, 325, 1, '2013-03-17 19:57:38', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 127, 324, 1, '2013-03-17 22:01:21', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 127, 327, 1, '2013-03-17 21:58:59', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 179, 329, 1, '2013-03-18 22:50:51', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 128, 335, 1, '2013-03-20 14:34:37', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 128, 334, 1, '2013-04-02 10:47:13', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 128, 328, 1, '2013-04-02 10:47:36', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 128, 338, 1, '2013-04-02 14:05:32', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 1010, 1, 2, '2013-04-02 16:36:22', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(29, 93, 334, 1, '2013-04-18 09:56:18', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 44, 34, 3, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 44, 35, 3, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 44, 36, 3, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 44, 33, 3, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(34, 44, 303, 1, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(35, 44, 284, 1, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(36, 44, 42, 3, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(37, 45, 279, 1, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(38, 45, 280, 1, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(39, 48, 306, 1, NULL, 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(40, 48, 21, 3, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(41, 48, 44, 3, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(42, 48, 309, 1, NULL, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(43, 45, 49, 3, '2013-05-14 15:00:08', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(44, 45, 48, 3, '2013-05-14 15:00:09', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(45, 48, 49, 3, '2013-05-15 05:32:58', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(46, 48, 52, 3, '2013-05-20 15:16:18', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(47, 48, 56, 3, '2013-05-21 12:44:05', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1385230401),
('m131123_180206_addingFourColumns', 1385230425),
('m131123_181920_addFourColumnsineverytable', 1385231109),
('m131124_085613_addUserNameTypeemailColumn', 1385283768),
('m131124_090354_InserDataFromAdmin', 1385285319);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

DROP TABLE IF EXISTS `tbl_profiles`;
CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

DROP TABLE IF EXISTS `tbl_profiles_fields`;
CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'deysumantra', '93ba6b4bad01d0d42631e264ef524e21', 'deysumantra@yahoo.com', 'a743c7c20babaea2ff21a85f77657e4e', '2013-08-31 02:02:16', '2013-09-03 12:02:13', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bsp_notify`
--
ALTER TABLE `bsp_notify`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `bsp_user` (`id`);

--
-- Constraints for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
