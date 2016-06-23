<?php

/**
 * Nebencontroller fuer alles in Zusammenhang mit Firmen 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

//Klassen
require_once("model/post.inc.php");
require_once("model/contact.inc.php");
require_once("model/database.inc.php");


//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start(); 

/**
 * Seitenaufruffunktionen 
 * Über die Funktionen werden die einzelnen Seiten, welche zu den Kunden existieren, aufgerufen.
 */

		/**
		 * Daten
		 * Ruft die Seite "Daten" zu einer Stelle auf.
		 */
		function showData($id, $smarty){
			global $config;
			global $template;
			$post = new post($id);
			$information= $post->getdata();
			
			if ($information==""){
				$template='posts\post_search.tpl';
			}
			else{
				$contactdata = $post->getassignedcontacts();
				$processes = $post->get_processes();
				$smarty->assign("processes", $processes);
				$smarty->assign("info", $information);
				$smarty->assign("bewerber", $contactdata);
				$smarty->assign("id", $information['postid']);
				$smarty->assign("dates",$information['events'] );
				$template='posts\post_showdata.tpl';
			}
		}
		
		/**
		 * Historie/Notizen
		 * Ruft die Seite "Historie/Notizen" zu einer Firma auf.
		 */
		function showHistory($id, $smarty){
			global $config;
			global $template;
			$event = new event(0);
			$information = $event->getevents($id,'post','pastevents');
			$smarty->assign("info", $information);
			$smarty->assign('id', $id);
			$template='posts/post_history.tpl';
		}
		
		/**
		 * Funktionen
		 * Ruft die Seite "Funktionen" zu einer Firma auf.
		 */
		function showFunctions($id, $smarty){
			global $config;
			global $template;
			$smarty->assign('id',$id);
			$template='posts/post_functions.tpl';
		}
		
		/**
		 * Neuer Termin
		 * Ruft die Seite "Neuer Termin" zum erstellen eines neuen Termins auf.
		 */
		function showNewpostevent($id, $smarty){
			global $config;
			global $template;	
			$smarty->assign('id',$id);
			$template='posts/post_newtask.tpl';
		}
		
		/**
		 * Stellendaten ändern
		 * Ruft die Seite "Stellendaten ändern" auf.
		 */
		function showUpdatePost($id, $smarty){
			global $config;
			global $template;
			$post = new post($id);
			$information= $post->getdata();
			$smarty->assign("info", $information);
			$smarty->assign("id", $id);
			$template='posts/post_update.tpl';
		}

	/**
	 * Ruft die Prozesse einer Stelle auf
	 */
		function showProcesses($id, $smarty){
			global $config;
			global $template;
			$smarty->assign('processes',$result);
			$smarty->assign('id',$id);
			$template='posts/post_showprocesses.tpl';
		}
	 
/**
 * Controller-Kerntaetigkeit#
 */
 
		/**
		 * Wird bei jeder Eingabe in das Suchfeld für Firmen neu ausgeführt.
		 * Asynchroner Aufruf über AJAX („Asynchronous JavaScript and XML“). (ajax.js und suggest.js)
		 */
		if ($_POST['eingabe'] && $_SESSION['status']=='logged')
		{
			
			$post = new post(0);
			$result = $post->search($_POST["eingabe"]);
			$smarty->assign("erg", $result);
			$smarty->display($config['base_dir']."tpl/posts/post_searchresult.tpl");
			return;
		}
		/**
		 * Aufruf der Seite Firmendaten
		 * $_GET['task']=='postdata' für den Aufruf über die direkte Auswahl einer Firma aus der Suche
		 */
		if (($_GET['task']=='postdata') && $_SESSION['status']=='logged') 
		{
			$id=$_GET['id'];
			showData($id, $smarty);	
		}
		/**
		 * Ändern der Firmendaten
		 */
		if ($_GET['task']=='updatepostdata' && $_SESSION['status']=='logged')
		{
			$post = new post($_GET['id']);
			$post->updatepost($_POST['title'],$_POST['description']);
			showData($_GET['id'], $smarty);	
		}
		/**
		 * Aufruf der Historie/Notizen-Seite eines Kunden
		 */
		 if ($_GET['task']=='historie'&& $_SESSION['status']=='logged')
		{
			showHistory($_GET['id'], $smarty);
		}
		/**
		 * Eine neue Notiz hinzufügen
		 */
		if ($_POST['task']=='addnote'&& $_SESSION['status']=='logged')
		{
			$post = new post($_GET['id']);
			$post->addnote($_POST['TextArea']);
			showHistory($_GET['id'], $smarty);
		}
		/**
		 * ausgewählte Notiz löschen
		 */
		if ($_GET['no']&& $_SESSION['status']=='logged')
		{
			$db->savesql("DELETE FROM notizen WHERE no like '%".$_GET['no']."%'");
			showHistory($_GET['id'], $smarty);
		}
		/**
		 *  Funktionen einer Firma aufrufen
		 */
		if ($_GET['task']=='funktionen' && $_SESSION['status']=='logged' )
		{
			showFunctions($_GET['id'], $smarty);
		}
		/**
		 * Leitet auf die Seite zur Eingabe und Erstellung neuer Firmen weiter. 
		 */	
		 if ($_GET['task']=='neu' && $_SESSION['status']=='logged' ) 
		{			
				$template='posts\post_create.tpl';
		}
		/**
		 * Neue Stelle anlegen
		 */
		if ($_GET['task']=='create' && $_SESSION['status']=='logged'){			
			$post = new post(0);
			$id = $post->createpost($_POST);
			showData($id, $smarty);
		} 

		/**
		 * Leitet auf die Seite zur Eingabe eines neuen Termins mit einer Firma weiter.
		 * Weiterleitung von der Seite "Funktionen".
		 */
		if ($_GET['task']=='newpostevent' && $_SESSION['status']=='logged' ){		
			showNewpostevent($_GET['id'], $smarty);
		} 

		/**
		 * Anzeigen zugehöriger Prozesse
		 */
		 if ($_GET['task']=='getProcesses' && $_SESSION['status']=='logged' ){		
			showProcesses($_GET['id'], $smarty);
		} 

		/**
		 * Auf die Seite "Stellendaten ändern" weiterleiten
		 */
		if ($_GET['task']=='updatepost' && $_SESSION['status']=='logged' ){		
			showUpdatepost($_GET['id'], $smarty);
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
