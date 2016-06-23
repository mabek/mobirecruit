<?php

/**
 * Nebencontroller fuer alles in Zusammenhang mit Bewerbern 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

// Klassen
require_once("model/database.inc.php");
require_once("model/contact.inc.php");
require_once("model/post.inc.php");

//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start();
/**
 * Allgemeine Funktionen
 */

/**
 * Seitenaufruffunktionen 
 * �ber die Funktionen werden die einzelnen Seiten, welche zu den Kunden existieren, aufgerufen.
 */

		/**
		 * Daten
		 * Ruft die Seite "Daten" zu einem Kunden auf.
		 */
		function showData($id, $smarty){
			global $config;
			global $template;
			$contact = new contact($id);
			$information=$contact->getdata();
			if ($information==""){
				$template='contacts\contact_search.tpl';
			}
			// �bermittlung der abgerufenen Daten an das Smarty-template zur Anzeige.
			else{
				$smarty->assign("info", $information);
				$smarty->assign("id", $information['contactid']);
				$smarty->assign("dates", $information['events']);
						
				// Template setzen, auf welchem die Daten angezeigt werden.
				$template='contacts/contact_showdata.tpl';
			}
		}

		/**
		 * Daten
		 * Ruft die Seite zum �ndern der Bewerberdaten auf.
		 */
		function editData($id, $smarty){
			global $config;
			global $template;
			$contact = new contact($id);
			$information=$contact->getdata();
			if ($information==""){
				$template='contacts\contact_search.tpl';
			}
			// �bermittlung der abgerufenen Daten an das Smarty-template zur Anzeige.
			else{
				$smarty->assign("info", $information);
				$smarty->assign("id", $information['contactid']);
				$smarty->assign("dates", $information['events']);
		
				// Template setzen, auf welchem die Daten angezeigt werden.
				$template='contacts/contact_editdata.tpl';
			}
		}		
		/**
		 * Historie/Notizen
		 * Ruft die Seite "Historie/Notizen" zu einem Bewerber auf.
		 */
		function showHistory($id, $smarty){
			global $config;
			global $template;
			$event = new event(0);
			$information = $event->getevents($id,'contact','pastevents');
			$smarty->assign("info", $information);
			$smarty->assign('id', $id);
			$template='contacts/contact_history.tpl';
		}
		
		/**
		 * Kundendaten �ndern
		 * Ruft die Seite "Kundendaten �ndern" auf.
		 */
		function showUpdateCustomer($id, $smarty){
			global $config;
			global $template;
			$contact = new contact($id);
			$information = $contact->getdata($id);
			$smarty->assign("info", $information);
			$smarty->assign("id", $id);
			$template='contacts/contact_update.tpl';
		}
		
/**
 * Controller-Kerntaetigkeit
 */

		/**
		 * Wird bei jeder Eingabe in das Suchfeld neu ausgef�hrt.
		 * Asynchroner Aufruf �ber AJAX (�Asynchronous JavaScript and XML�). (ajax.js und suggest.js)
		 */
		if ($_POST['eingabe'] && $_SESSION['status']=='logged'){
			$db = new database();
			$result =$db->sendsql2("Select contactid, lastname, firstname from contact WHERE firstname like '%". $_POST["eingabe"] ."%' OR lastname like '%". $_POST["eingabe"] ."%' ORDER BY lastname");
				
			$smarty->assign("erg", $result);
			$smarty->display($config['BASE_DIR']."tpl/contacts/contact_showsearch.tpl");
			
			return;
		}
		
		/**
		 * Aufruf der Seite Kundendaten
		 * $_GET['task']=='CustomerData' f�r den Aufruf �ber die direkte Auswahl einer Firma aus der Suche
		 * $_POST['task']=='CustomerData' f�r die Auswahl durch Eingabe des Namens in das Suchfeld und Best�tigung �ber ENTER
		 */
		if (($_GET['task']=='CustomerData'||$_POST['task']=='CustomerData') && $_SESSION['status']=='logged'){
			$id=$_GET['id'];
			showData($id, $smarty);
		}
		
		if (($_GET['task']=='edit'||$_POST['task']=='edit') && $_SESSION['status']=='logged'){
			$id=$_GET['id'];
			editData($id, $smarty);
		}		
		
		/**
		 * �ndern der Kundendaten
		 */
		if (($_GET['task']=='updatecustomerdata'||$_POST['task']=='updatecustomerdata') && $_SESSION['status']=='logged'){
			$contact = new contact($_GET['id']);
			$contact->updatecontact($_POST['firstname'],$_POST['lastname'],$_POST['address1_line1'],$_POST['address1_city'],$_POST['telephone1'],$_POST['emailaddress1'],$_POST['address1_postalcode'],$_POST['degree'],$_POST['profession']);
			showData($_GET['id'], $smarty);
		}
		
		/**
		 * Aufruf der Historie/Notizen-Seite eines Kunden
		 */
		if ($_GET['task']=='historie' && $_SESSION['status']=='logged'){
			showHistory($_GET['id'], $smarty);
		}
		
		/**
		 * Eine neue Notiz hinzuf�gen
		 */
		if ($_POST['task']=='addnote'&& $_SESSION['status']=='logged'){
			$contact = new contact($_GET['id']);
			$contact->addnote($_POST['TextArea']);
			showHistory($_GET['id'], $smarty);
		}
		
		/**
		 * ausgew�hlte Notiz l�schen
		 */
		if ($_GET['no']&& $_SESSION['status']=='logged'){
			$db->savesql("DELETE FROM notizen WHERE no like '%".$_GET['no']."%'");
			showHistory($_GET['id'], $smarty);
		}
		
		/**
		 * Seite zum Anlegen eines neuen Kunden aufrufen
		 */	
		if ($_GET['task']=='neu' && $_SESSION['status']=='logged'){			
			$template='contacts\contact_create.tpl';
		} 
		
		/**
		 * Neuen Kontakt anlegen
		 */
		if ($_GET['task']=='create' && $_SESSION['status']=='logged'){			
			$contact = new contact(0);
			$contactid = $contact->createcontact($_POST['firstname'],$_POST['lastname']);
			// Daten einf�gen					
			$contact->updatecontact($_POST['firstname'],$_POST['lastname'],$_POST['address1_line1'],$_POST['address1_city'],$_POST['telephone1'],$_POST['emailaddress1'],$_POST['address1_postalcode'],$_POST['degree'],$_POST['profession']);
			showData($contactid, $smarty);
		}

		if ($_GET['task']=='update' && $_SESSION['status']=='logged'){
			$contact = new contact($_GET['$id']);
			$contactid = $_GET['$id'];
			// Daten einf�gen
			$contact->updatecontact($_POST['firstname'],$_POST['lastname'],$_POST['address1_line1'],$_POST['address1_city'],$_POST['telephone1'],$_POST['emailaddress1'],$_POST['address1_postalcode'],$_POST['degree'],$_POST['profession']);
			showData($contactid, $smarty);
		}
		
		/**
		 * Aufrufen der Stellen, welche einem Kunden zugewiesen werden k�nnen.
		 * Geh�rt zu der Seite "Kundendaten �ndern"
		 */
		if ($_GET['task']=='setpost' && $_SESSION['status']=='logged'){		
			showSetPost($_GET['id'], $smarty);
		} 
		
		/**
		 * Einem Kunden eine neue Stelle zuweisen
		 */
		if ($_GET['task']=='setposttocontact' && $_SESSION['status']=='logged'){		
			$contact = new contact($_GET['id']);
			$contact->setpost($_GET['postid']);
			showUpdateCustomer($_GET['id'], $smarty);
		}
		
		/**
		 * Auf die Seite "Kundendaten �ndern" weiterleiten
		 */
		if ($_GET['task']=='updatecustomer' && $_SESSION['status']=='logged'){	
			showUpdateCustomer($_GET['id'], $smarty);
		}

//Standard-Fall, wenn keine andere Routine gegriffen hat
if ($template==""){
	header("location:index.php");
} 

//Generelle Variablen weiterreichen
$smarty->assign("page_uri", $config['page_uri']);
//Umleiten
$smarty->display($config['BASE_DIR']."tpl/".$template);

?>