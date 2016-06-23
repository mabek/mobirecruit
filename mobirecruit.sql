-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Sep 2013 um 20:28
-- Server Version: 5.6.11
-- PHP-Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `mobirecruit`
--
CREATE DATABASE IF NOT EXISTS `mobirecruit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mobirecruit`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address1_line1` varchar(30) NOT NULL,
  `address1_city` varchar(30) NOT NULL,
  `telephone1` varchar(30) NOT NULL,
  `emailaddress1` varchar(30) NOT NULL,
  `address1_postalcode` varchar(30) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `degree` varchar(30) NOT NULL DEFAULT 'Abitur',
  `profession` varchar(30) NOT NULL DEFAULT 'Kaufmann',
  `application` varchar(100) NOT NULL,
  `skill_a` int(11) NOT NULL,
  `skill_b` int(11) NOT NULL,
  `skill_c` int(11) NOT NULL,
  `skill_d` int(11) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Daten für Tabelle `contact`
--

INSERT INTO `contact` (`contactid`, `firstname`, `lastname`, `address1_line1`, `address1_city`, `telephone1`, `emailaddress1`, `address1_postalcode`, `creationdate`, `degree`, `profession`, `application`, `skill_a`, `skill_b`, `skill_c`, `skill_d`) VALUES
(2, 'Michael', 'Meier', '', '', '432', 'mail', 'Plz', '0000-00-00 00:00:00', 'Hochschule', 'Elektrotechnik', 'http://localhost/mobirecruit/bewerbung.pdf', 52, 63, 100, 100),
(3, 'Franz', 'Geier', '', '', '', '', '', '0000-00-00 00:00:00', 'Hochschule', 'Betriebswirtschaftslehre', 'http://localhost/mobirecruit/bewerbung.pdf', 100, 75, 50, 50),
(4, 'Peter', 'Novak', 'Peterstrasse', 'Wien', '', '', '1030', '0000-00-00 00:00:00', 'Abitur', 'Kaufmann', 'http://localhost/mobirecruit/bewerbung.pdf', 50, 75, 75, 75),
(11, 'Peter', 'Lehmkuhl', 'Peterstrasse', 'Mumps', '', '', '3123', '0000-00-00 00:00:00', 'Hochschule', 'Informatik', 'http://localhost/mobirecruit/bewerbung.pdf', 74, 85, 78, 88);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_post`
--

CREATE TABLE IF NOT EXISTS `contact_post` (
  `contactid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `PRIMARY` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `selected` tinyint(4) NOT NULL,
  PRIMARY KEY (`PRIMARY`),
  KEY `contactid` (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `contact_post`
--

INSERT INTO `contact_post` (`contactid`, `postid`, `PRIMARY`, `timestamp`, `selected`) VALUES
(3, 28, 15, '2013-09-28 18:04:03', 1),
(4, 28, 16, '2013-09-28 18:04:03', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `contact` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Place` text NOT NULL,
  `scheduledstart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Daten für Tabelle `event`
--

INSERT INTO `event` (`ID`, `contact`, `post`, `user`, `Title`, `Description`, `Place`, `scheduledstart`) VALUES
(47, 0, 0, 'root', 'Titel ', 'Beasd', '', '2012-05-24 11:23:37'),
(48, 0, 0, 'root', '123423', 'Beasd', '', '2012-05-24 11:23:52'),
(49, 15, 5, 'root', 'MARIUS', 'MARIUS', '', '2012-07-07 17:46:11'),
(50, 10, 0, 'root', 'expedit', 'besch123', '', '2012-06-05 17:32:09'),
(51, 0, 0, 'root', 'AW: Neue Atom-Prozessoren bere', 'Beschreibung', '', '2012-05-24 11:25:47'),
(52, 0, 0, 'root', 'AW: Neue Atom-Prozessoren bere', 'Beschreibung', '', '2012-05-29 08:42:21'),
(53, 15, 0, 'root', 'AW: I5 2520m taktet zu niedrig', 'besch123 15', '', '1988-07-30 08:38:00'),
(54, 25, 0, 'root', 'Bewerber angelegt', 'Bewerber angelegt', '', '2012-06-05 15:36:13'),
(55, 26, 0, 'root', 'Bewerber angelegt', 'Bewerber angelegt', '', '2012-06-05 15:41:06'),
(56, 10, 0, 'root', 'Notiz', 'neue', '', '2012-06-05 17:42:06'),
(57, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:51:40'),
(58, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:51:43'),
(59, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:52:48'),
(60, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:54:19'),
(61, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:55:17'),
(62, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:55:28'),
(63, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:55:59'),
(64, 10, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:56:35'),
(65, 10, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:56:49'),
(66, 0, 0, 'root', 'Notiz', 'Test', '', '2012-06-05 17:57:25'),
(67, 0, 5, 'root', 'Notiz', 'Test', '', '2012-06-05 17:57:42'),
(68, 0, 5, 'root', 'Notiz', 'Test', '', '2012-06-05 17:58:01'),
(69, 0, 5, 'root', 'Notiz', '6', '', '2012-06-05 17:58:10'),
(70, 27, 0, 'root', 'Bewerber angelegt', 'Bewerber angelegt', '', '2012-06-05 18:01:23'),
(71, 28, 0, 'root', 'Bewerber angelegt', 'Bewerber angelegt', '', '2012-06-05 18:02:17'),
(72, 7, 0, 'root', 'expedit', 'besch123', '', '1988-07-30 08:38:00'),
(73, 7, 0, 'root', 'expedit', 'Beasd', '', '1988-07-30 08:38:00'),
(74, 10, 0, 'root', 'Notiz', '04.06.12 Georg-August-Universität Göttingen\r\n1/2 file:///G:/rds.htm\r\nAn die\r\nGeorg-August-Universität Göttingen\r\n-Studium und Lehre / Studierendenbüro-Postfach 3744\r\n \r\n37027 Göttingen\r\nSond. antr.: Zweitstudium\r\nEhemals eingeschrieben\r\nMatrikelnummer unbekannt\r\n \r\n   ZUL erled.\r\nAbsender: Krasnitski, Raisa\r\nName, Vorname\r\nStumpfebiel 2a\r\nStrasse\r\n37073, Göttingen\r\nPLZ, Ort\r\n \r\nBearbeitungsfeld der Uni Göttingen:\r\nBW höh. FS:\r\nHZB-Jahr:\r\n \r\n2008 \r\nHZB-Art: ----------------- \r\nMedizin/107 - VP\r\n \r\n \r\nBewerbung zum Wintersemester 12/13 \r\n- Frist: 15. Juli 2012, Eingang bei der Universität -Sehr geehrte Damen und Herren,\r\nhiermit beantrage ich die Zuteilung eines Studienplatzes (Zulassung) nach Maßgabe meiner Angaben.\r\n \r\nBewerbernummer:   21201729\r\nAbschluss Studienfach/Studienfächer Fachsemester\r\nStaatsexamen Medizin / Vollplatz 5\r\nDie erforderlichen Unterlagen für die Bearbeitung meines Bewerbungsantrages lege ich bei (bitte ankreuzen x):\r\n Hochschulzugangsberechtigung (z.B. Abiturzeugnis) in einfacher und vollständiger Kopie\r\n ausgefülltes Formular "Zusatzangaben zum Bewerbungsantrag", einschließlich der erforderlichen\r\nNachweise in einfacher Kopie\r\n ggf. eine Dienstzeitbescheinigung (Wehr-, Zivildienst, Soziales Jahr,...)\r\n ggf. eine ausführliche Begründung für das angestrebte Zweitstudium (Abschluss Erststudium in Kopie)\r\n ggf. "Beiblatt für Medizin oder Zahnmedizin", wenn Sie sich hier für bewerben\r\n ggf. eine ausführliche Begründung und Nachweise (Atteste, Gutachten,...), wenn Sie einen Antrag auf\r\nZulassung wegen einer außergewöhnlichen Härte stellen -Härtefallantrag- Einverständniserklärung der Erziehungsberechtigten für Minderjährige\r\n besondere Hinweise: Zu meiner Immatrikulation habe ich folgende Anlage(n) beigefügt bzw. möchte\r\nfolgendes mitteilen:\r\n_________________________________________________________________________________\r\n_________________________________________________________________________________\r\nOhne die vorstehenden Unterlagen kann Ihr Bewerbungsantrag nicht bearbeitet werden.\r\nIch versichere, dass ich die Angaben in diesem Antrag vollständig und wahrheitsgemäß gemacht habe. Mir ist\r\nbekannt, dass fahrlässig oder vorsätzlich falsche Angaben ordnungswidrig sind und zum Ausschluss vom\r\nVergabeverfahren oder bei Feststellung nach der Einschreibung zum Widerruf der Einschreibung führen.\r\nBewerbungen, die nicht vollständig, form- oder fristgerecht eingehen, sind vom weiteren Verfahren\r\nausgeschlossen. Die Zulassung ist zu versagen.\r\n \r\nDatum und Unterschrift \r\ndes/der\r\nStudienbewerbers/Studienbewerberin\r\n \r\nDatum und Unterschrift\r\ndes/der Erziehungsberechtigten bei minderjährigen\r\nBewerbern\r\nInformation zu Ihrer Bewerbung:\r\nSie haben die Möglichkeit, Ihre Bewerbung nachzuverfolgen, sich Ihre Daten\r\nund Angaben anzuschauen und sich über den Bearbeitungsstand Ihres Antrages zu informieren.\r\n04.06.12 Georg-August-Universität Göttingen\r\n2/2 file:///G:/rds.htm\r\nund Angaben anzuschauen und sich über den Bearbeitungsstand Ihres Antrages zu informieren.\r\nDer Link dazu: https://immatrikulation.zvw.uni-goettingen.de/infozurbewerbung.html', '', '2012-06-05 21:16:24'),
(75, 10, 0, 'root', 'Notiz', '04.06.12 Georg-August-Universität Göttingen\r\n1/2 file:///G:/rds.htm\r\nAn die\r\nGeorg-August-Universität Göttingen\r\n-Studium und Lehre / Studierendenbüro-Postfach 3744\r\n \r\n37027 Göttingen\r\nSond. antr.: Zweitstudium\r\nEhemals eingeschrieben\r\nMatrikelnummer unbekannt\r\n \r\n   ZUL erled.\r\nAbsender: Krasnitski, Raisa\r\nName, Vorname\r\nStumpfebiel 2a\r\nStrasse\r\n37073, Göttingen\r\nPLZ, Ort\r\n \r\nBearbeitungsfeld der Uni Göttingen:\r\nBW höh. FS:\r\nHZB-Jahr:\r\n \r\n2008 \r\nHZB-Art: ----------------- \r\nMedizin/107 - VP\r\n \r\n \r\nBewerbung zum Wintersemester 12/13 \r\n- Frist: 15. Juli 2012, Eingang bei der Universität -Sehr geehrte Damen und Herren,\r\nhiermit beantrage ich die Zuteilung eines Studienplatzes (Zulassung) nach Maßgabe meiner Angaben.\r\n \r\nBewerbernummer:   21201729\r\nAbschluss Studienfach/Studienfächer Fachsemester\r\nStaatsexamen Medizin / Vollplatz 5\r\nDie erforderlichen Unterlagen für die Bearbeitung meines Bewerbungsantrages lege ich bei (bitte ankreuzen x):\r\n Hochschulzugangsberechtigung (z.B. Abiturzeugnis) in einfacher und vollständiger Kopie\r\n ausgefülltes Formular "Zusatzangaben zum Bewerbungsantrag", einschließlich der erforderlichen\r\nNachweise in einfacher Kopie\r\n ggf. eine Dienstzeitbescheinigung (Wehr-, Zivildienst, Soziales Jahr,...)\r\n ggf. eine ausführliche Begründung für das angestrebte Zweitstudium (Abschluss Erststudium in Kopie)\r\n ggf. "Beiblatt für Medizin oder Zahnmedizin", wenn Sie sich hier für bewerben\r\n ggf. eine ausführliche Begründung und Nachweise (Atteste, Gutachten,...), wenn Sie einen Antrag auf\r\nZulassung wegen einer außergewöhnlichen Härte stellen -Härtefallantrag- Einverständniserklärung der Erziehungsberechtigten für Minderjährige\r\n besondere Hinweise: Zu meiner Immatrikulation habe ich folgende Anlage(n) beigefügt bzw. möchte\r\nfolgendes mitteilen:\r\n_________________________________________________________________________________\r\n_________________________________________________________________________________\r\nOhne die vorstehenden Unterlagen kann Ihr Bewerbungsantrag nicht bearbeitet werden.\r\nIch versichere, dass ich die Angaben in diesem Antrag vollständig und wahrheitsgemäß gemacht habe. Mir ist\r\nbekannt, dass fahrlässig oder vorsätzlich falsche Angaben ordnungswidrig sind und zum Ausschluss vom\r\nVergabeverfahren oder bei Feststellung nach der Einschreibung zum Widerruf der Einschreibung führen.\r\nBewerbungen, die nicht vollständig, form- oder fristgerecht eingehen, sind vom weiteren Verfahren\r\nausgeschlossen. Die Zulassung ist zu versagen.\r\n \r\nDatum und Unterschrift \r\ndes/der\r\nStudienbewerbers/Studienbewerberin\r\n \r\nDatum und Unterschrift\r\ndes/der Erziehungsberechtigten bei minderjährigen\r\nBewerbern\r\nInformation zu Ihrer Bewerbung:\r\nSie haben die Möglichkeit, Ihre Bewerbung nachzuverfolgen, sich Ihre Daten\r\nund Angaben anzuschauen und sich über den Bearbeitungsstand Ihres Antrages zu informieren.\r\n04.06.12 Georg-August-Universität Göttingen\r\n2/2 file:///G:/rds.htm\r\nund Angaben anzuschauen und sich über den Bearbeitungsstand Ihres Antrages zu informieren.\r\nDer Link dazu: https://immatrikulation.zvw.uni-goettingen.de/infozurbewerbung.html', '', '2012-06-06 21:16:26'),
(76, 0, 8, 'root', 'Notiz', 'testnotiz', '', '2012-06-09 17:37:01'),
(77, 0, 8, 'root', 'Notiz', 'testnotiz', '', '2012-06-09 17:37:04'),
(78, 0, 8, 'root', 'Notiz', 'testnotiz', '', '2012-06-09 17:38:36'),
(79, 0, 8, 'root', 'expedit', 'Beasd', '', '1988-07-30 08:38:00'),
(80, 0, 8, 'root', 'AW: Neue Atom-Prozessoren bere', 'wqeqwe', '', '2011-01-27 22:00:00'),
(81, 0, 8, 'root', 'AW: Neue Atom-Prozessoren bere', 'erwrew', '', '2012-06-09 17:43:58'),
(82, 0, 8, 'root', 'AW: Neue Atom-Prozessoren bere', 'erwrew', '', '2012-06-09 17:44:04'),
(83, 0, 7, 'root', 'Winterreifen 195 / 65 R15  Con', 'Beasd', '', '2011-01-27 22:00:00'),
(84, 0, 7, 'root', '234 bereits im nächsten Quarta', 'Beschreibung', '', '2013-06-29 20:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'manager',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `date`, `role`) VALUES
(1, 'root', 'mobirecruit', '2012-05-06', 'manager'),
(2, 'manager', 'manager', '2013-05-05', 'manager'),
(3, 'hrm', 'hrm', '2013-05-05', 'hrm');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `manager` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `occupied` tinyint(4) NOT NULL,
  `stellenaus` int(1) NOT NULL,
  `ansprache` int(1) NOT NULL,
  `anfrage` int(1) NOT NULL,
  `internet` int(1) NOT NULL,
  `personalberater` int(1) NOT NULL,
  `zeitarbeit` int(1) NOT NULL,
  `baa` int(1) NOT NULL,
  `skill_a` int(11) NOT NULL,
  `skill_b` int(11) NOT NULL,
  `skill_c` int(11) NOT NULL,
  `skill_d` int(11) NOT NULL,
  `assessment` int(11) NOT NULL,
  `interview` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Daten für Tabelle `post`
--

INSERT INTO `post` (`postid`, `manager`, `title`, `description`, `creationdate`, `occupied`, `stellenaus`, `ansprache`, `anfrage`, `internet`, `personalberater`, `zeitarbeit`, `baa`, `skill_a`, `skill_b`, `skill_c`, `skill_d`, `assessment`, `interview`, `test`) VALUES
(25, 'manager', 'Junior Controller KFZ', 'Für unser kaufmännisches Team suchen wir zum nächstmöglichen Zeitpunkt eine/n:\nController (m/w)\nIhre Aufgaben:\nErstellung der Budget- und Forecast-Pläne sowie den dazugehörigen Reportings und Soll-Ist-Analysen\nMitwirkung bei der Erstellung der Jahresabschlüsse nach HGB durch Wirtschaftsprüfer\nEntwicklung und Implementierung von Controlling-Standards und Kennzahlensysteme über alle Geschäftsbereiche des Unternehmens\nWeiterentwicklung und Betreuung der Controlling-Software für Planung und Abrechnung\nDurchführen von ad-hoc Analysen für die Geschäftsführung\nErstellen von Investitionsrechnungen und Businessplänen für neue Geschäftsfelder\nKaufm. Begleitung von Due Diligence Prozessen\nIhr Profil', '2013-04-09 20:51:36', 0, 1, 1, 1, 0, 1, 1, 0, 50, 70, 60, 90, 1, 1, 1),
(28, 'manager', 'Financial Controller US-GAAP', 'Abgeschlossenes wirtschaftliches Studium oder entsprechende Qualifikationen\r\nMehrjährige berufliche Erfahrung im Financial Controlling eines nach US-GAAP bilanzierenden Finanzdienstleisters sowie eine entsprechend belegte theoretische Ausbildung\r\nGute Kenntnisse des deutschen Handelsrechts', '2013-04-09 20:53:41', 0, 1, 1, 1, 1, 0, 1, 1, 70, 80, 90, 60, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wf_activity`
--

CREATE TABLE IF NOT EXISTS `wf_activity` (
  `activity_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `task` varchar(30) NOT NULL,
  `group` varchar(30) NOT NULL,
  `variable` varchar(50) NOT NULL,
  `nextplace` varchar(30) NOT NULL,
  `nextactivity` int(11) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `dirty` tinyint(1) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Daten für Tabelle `wf_activity`
--

INSERT INTO `wf_activity` (`activity_id`, `name`, `task`, `group`, `variable`, `nextplace`, `nextactivity`, `owner`, `dirty`) VALUES
(1, 'Stelle anlegen', 'callscreen', 'workflow', 'workflow\\post_create.tpl', 'post_created', 2, 'manager', 0),
(2, 'stelle speichern', 'createpost', 'post', '', 'post_created', 4, 'manager', 1),
(4, 'Stelle genehmigen', 'getdata', 'post', '', 'post_created', 5, 'hrm', 0),
(5, 'Stelle genehmigen', 'callscreen', 'workflow', 'workflow\\approve_post.tpl', 'post_approved', 6, 'hrm', 1),
(6, 'Stelle genehmigen', 'approve', 'workflow', '', 'post_approved', 16, 'hrm', 1),
(16, 'Beschaffungswege wählen', 'getdata', 'post', '', 'post_approved', 17, 'manager', 0),
(17, 'Beschaffungswege wählen', 'callscreen', 'workflow', 'workflow\\wf_chose_process.tpl', 'process_chosen', 18, 'manager', 1),
(18, 'Beschaffungswege speichern', 'save_process', 'post', '', 'process_chosen\n', 22, 'manager', 1),
(22, 'Beschaffungswege genehmigen', 'getdata', 'post', '', 'process_chosen\n', 23, 'hrm', 0),
(23, 'Beschaffungswege genehmigen', 'callscreen', 'workflow', 'workflow\\approve_process.tpl', 'proc_approved', 24, 'hrm', 1),
(24, 'Beschaffungswege genehmigen', 'getdata', 'post', '', 'proc_approved', 27, 'hrm', 1),
(27, 'Vorselektion der Bewerber', 'get_allocation', 'post', '', 'proc_approved', 28, 'hrm', 0),
(28, 'Vorselektion der Bewerber', 'callscreen', 'workflow', 'workflow\\contact_assignpost.tpl', 'preselection_completed', 29, 'hrm', 1),
(29, 'Ausgewählte speichern', 'save_allocation', 'post', '', 'preselection_completed', 30, 'hrm', 1),
(30, 'Vorselektion genehmigen', 'get_allocation', 'post', '', 'preselection_completed', 31, 'manager', 0),
(31, 'Vorselektion genehmigen', 'callscreen', 'workflow', 'workflow\\approve_allocation.tpl', 'preselection_approved', 32, 'manager', 1),
(32, 'Vorselektion  genehmigen', 'getdata', 'post', '', 'preselection_approved', 40, 'manager', 1),
(40, 'Auswahlverfahren wählen', 'callscreen', 'workflow', 'workflow\\wf_chose_mode.tpl', 'mode_chosen', 41, 'hrm', 0),
(41, 'Auswahlverfahren wählen', 'save_mode', 'post', '', 'mode_chosen', 50, 'hrm', 1),
(50, 'Bewerber bewerten', 'get_allocation', 'post', '', 'mode_chosen', 51, 'manager', 0),
(51, 'Bewerber bewerten', 'callscreen', 'workflow', 'workflow\\rate_contact.tpl', 'rating_complete', 52, 'manager', 1),
(52, 'Bewerber bewerten', 'saveskills', 'post', '', 'rating_complete', 60, 'manager', 1),
(60, 'Bewertung anzeigen', 'get_rating', 'post', '', 'rating_complete', 61, 'manager', 0),
(61, 'Bewertung anzeigen', 'callscreen', 'workflow', 'workflow\\view_rating.tpl', 'finish', 62, 'manager', 1),
(62, 'Bewertung anzeigen', 'approve', 'workflow', '', 'finish', 99, 'manager', 1),
(99, 'Finish', '', 'workflow', '', 'finish', 99, 'manager', 1),
(100, 'Stelle auswählen', 'getposts', 'post', '', 'post_created', 101, 'manager', 0),
(101, 'Stelle auswählen', 'callscreen', 'workflow', 'workflow\\post_chose.tpl', 'post_created', 102, 'manager', 1),
(102, 'Stelle auswählen', 'choosepost', 'post', '', 'post_created', 16, 'manager', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wf_place`
--

CREATE TABLE IF NOT EXISTS `wf_place` (
  `workflow_id` smallint(5) unsigned NOT NULL,
  `place_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `place_type` char(1) NOT NULL DEFAULT '5',
  `place_name` varchar(80) NOT NULL DEFAULT '',
  `place_desc` text,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_user` varchar(16) DEFAULT NULL,
  `revised_date` datetime DEFAULT NULL,
  `revised_user` varchar(16) DEFAULT NULL,
  `nextstep` varchar(30) NOT NULL,
  `pai` int(11) NOT NULL,
  PRIMARY KEY (`workflow_id`,`place_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `wf_place`
--

INSERT INTO `wf_place` (`workflow_id`, `place_id`, `place_type`, `place_name`, `place_desc`, `created_date`, `created_user`, `revised_date`, `revised_user`, `nextstep`, `pai`) VALUES
(1, 1, '5', 'start', 'Start Node', '0000-00-00 00:00:00', NULL, NULL, NULL, '1', 2),
(1, 2, '5', 'post_created', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '4', 6),
(1, 3, '5', 'post_approved', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '16', 18),
(1, 8, '5', 'preselection_completed', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '31', 31),
(1, 5, '5', 'process_chosen', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '22', 24),
(1, 10, '5', 'mode_chosen', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '50', 52),
(1, 7, '5', 'proc_approved', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '27', 29),
(1, 9, '5', 'preselection_approved', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '40', 41),
(1, 11, '5', 'rating_complete', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '60', 99),
(1, 20, '5', 'finish', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '99', 99),
(2, 1, '5', 'start_oldpost', 'Start Node oldpost', '0000-00-00 00:00:00', NULL, NULL, NULL, '100', 102);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wf_workitem`
--

CREATE TABLE IF NOT EXISTS `wf_workitem` (
  `workitem_id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `activity` int(11) NOT NULL,
  `subjectid` int(30) NOT NULL,
  `oldwi` int(15) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`workitem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=525 ;

--
-- Daten für Tabelle `wf_workitem`
--

INSERT INTO `wf_workitem` (`workitem_id`, `place`, `timestamp`, `active`, `activity`, `subjectid`, `oldwi`, `owner`, `title`, `user`, `comment`) VALUES
(505, 'start_oldpost', '2013-09-28 18:01:03', 0, 101, 0, 0, 'manager', '', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a>'),
(506, 'post_created', '2013-09-28 18:01:17', 0, 5, 28, 505, 'hrm', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a>'),
(507, 'post_approved', '2013-09-28 18:02:08', 0, 17, 28, 506, 'manager', 'Financial Controller US-GAAP', 'hrm', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a>'),
(508, 'process_chosen', '2013-09-28 18:03:31', 0, 23, 28, 507, 'hrm', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a>'),
(509, 'proc_approved', '2013-09-28 18:04:03', 0, 28, 28, 508, 'hrm', 'Financial Controller US-GAAP', 'hrm', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a>'),
(510, 'preselection_completed', '2013-09-28 18:04:14', 0, 31, 28, 509, 'manager', 'Financial Controller US-GAAP', 'hrm', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a>'),
(511, 'preselection_approved', '2013-09-28 18:04:20', 0, 40, 28, 510, 'hrm', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a>'),
(512, 'mode_chosen', '2013-09-28 18:08:27', 0, 51, 28, 511, 'manager', 'Financial Controller US-GAAP', 'hrm', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a>'),
(513, 'rating_complete', '2013-09-28 18:13:03', 0, 61, 28, 512, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a>'),
(514, 'rating_complete', '2013-09-28 18:15:40', 0, 61, 28, 512, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=514&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(515, 'rating_complete', '2013-09-28 18:18:05', 0, 61, 28, 513, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(516, 'rating_complete', '2013-09-28 18:18:19', 0, 61, 28, 514, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=514&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=516&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(517, 'rating_complete', '2013-09-28 18:18:22', 0, 61, 28, 515, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(518, 'rating_complete', '2013-09-28 18:18:29', 0, 61, 28, 516, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=514&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=516&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=518&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(519, 'rating_complete', '2013-09-28 18:18:49', 0, 61, 28, 517, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=519&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(520, 'rating_complete', '2013-09-28 18:20:30', 0, 61, 28, 518, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=514&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=516&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=518&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=520&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(521, 'rating_complete', '2013-09-28 18:19:04', 0, 61, 28, 519, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=519&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=521&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(522, 'rating_complete', '2013-09-28 18:19:11', 0, 61, 28, 521, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=519&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=521&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=522&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(523, 'rating_complete', '2013-09-28 18:19:43', 0, 61, 28, 522, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=519&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=521&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=522&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=523&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>'),
(524, 'rating_complete', '2013-09-28 18:28:15', 1, 61, 28, 523, 'manager', 'Financial Controller US-GAAP', 'manager', '<a href="workflowcontroller?id=505&task=inquiry&subject=Stelle auswählen" target="_blank" >28.9.2013,20:09 manager, Stelle auswählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=506&task=inquiry&subject=Stelle genehmigen" target="_blank" >28.9.2013,20:09 hrm, Stelle genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=507&task=inquiry&subject=Beschaffungswege wählen" target="_blank" >28.9.2013,20:09 manager, Beschaffungswege wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=508&task=inquiry&subject=Beschaffungswege genehmigen" target="_blank" >28.9.2013,20:09 hrm, Beschaffungswege genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=509&task=inquiry&subject=Vorselektion der Bewerber" target="_blank" >28.9.2013,20:09 hrm, Vorselektion der Bewerber : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=510&task=inquiry&subject=Vorselektion genehmigen" target="_blank" >28.9.2013,20:09 manager, Vorselektion genehmigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=511&task=inquiry&subject=Auswahlverfahren wählen" target="_blank" >28.9.2013,20:09 hrm, Auswahlverfahren wählen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=512&task=inquiry&subject=Bewerber bewerten" target="_blank" >28.9.2013,20:09 manager, Bewerber bewerten : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=513&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Abgeschickt</i> </a> <br> <a href="workflowcontroller?id=515&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=517&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=519&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=521&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=522&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=523&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a> <br> <a href="workflowcontroller?id=524&task=inquiry&subject=Bewertung anzeigen" target="_blank" >28.9.2013,20:09 manager, Bewertung anzeigen : <i> Genehmigt</i> </a>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
