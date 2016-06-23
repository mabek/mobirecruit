<?php

/**
 * Nebencontroller fuer alles in Zusammenhang mit Bewerbungen 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

//Klassen
require_once("model/application.inc.php");

//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start(); 
/**
 * Allgemeine Funktionen
 */
 
/**
 * Seitenaufruffunktionen 
 * Über die Funktionen werden die einzelnen Seiten, welche zu den Kunden existieren, aufgerufen.
 */

		/**
		 * Daten
		 * Ruft die Seite "Daten" zu einer Firma auf.
		 */
		function showData($id, $smarty)
		{
			global $config;
			global $template;
			$db = new database();
			$sqlstring="Select name, productnumber, price, vendorname, vendorpartnumber, stockweight from dbo.Product WHERE productid like '%". $id ."%'";
			$information = $db->sendsql($sqlstring, 'CRM');
			if ($information=="")
			{
				$template='Produktsuche.tpl';
			}
			else
			{
				$smarty->assign("info", $information);
				$template='Produkte.tpl';
				$smarty->assign("page_title", $config['page_title']." | "."Produktdaten");
			}
		}
/**
 * Controller-Kerntaetigkeit#
 */

		/**
		 * Wird bei jeder Eingabe in das Suchfeld für Kunden neu ausgeführt.
		 * Asynchroner Aufruf über AJAX („Asynchronous JavaScript and XML“). (ajax.js und suggest.js)
		 */
		if ($_POST['eingabe'])
		{	
			$application = new application();
			$result = $application->search($POST['eingabe']);
					
			$smarty->assign("erg", $result);
			$smarty->display($config['base_dir']."tpl/"."applications/application_search_result.tpl");
			return;
		}
		/**
		 * Aufruf der Seite Produktdaten
		 * $_GET['task']=='ProductData' für den Aufruf über die direkte Auswahl eines Produktes aus der Suche
		 * $_POST['task']=='ProductData' für die Auswahl durch Eingabe des Namens in das Suchfeld und Bestätigung über ENTER
		 */
		 if (($_GET['task']=='ProductData' || $_POST['task']=='ProductData') && $_SESSION['status']=='logged') 
		{
			$id=$_GET['Suche'];
			// Bei Wahl der Eingabe über ENTER - Ermittlung der ID
			if ($_POST['Suche'])
			{
				$db = new database();
				$sqlstring="Select (productid as varchar(36)) as productid from dbo.Products WHERE name like '%". $_POST['Suche'] ."%'";
				$id = $db->sendsql($sqlstring, 'CRM');
			}
			showData($id, $smarty);	
		}
//Standard-Fall, wenn keine andere Routine gegriffen hat
if ($template=="") 
{
	header("location:index.php");
}
//Generelle Variablen weiterreichen
$smarty->assign("page_uri", $config['page_uri']);

//Umleiten
$smarty->display($config['base_dir']."tpl/".$template);

?>
