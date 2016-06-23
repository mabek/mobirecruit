<?php

/**
 * Nebencontroller fuer alles in Zusammenhang mit Kunden 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

// Klassen
require_once("model/event.inc.php");
//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start(); 
/**
 * Allgemeine Funktionen
 */
 
 
 
/*
 * Seitenaufruffunktionen 
 * Über die Funktionen werden die einzelnen Seiten, welche zu den Kunden existieren, aufgerufen.
 */

// Neuer Allgmeiner Termin
if ($_GET['task']=='newEvent' && $_SESSION['status']=='logged' ) 
{			
						$template='events/newEvent.tpl';
						
}
// Termin/Aufgabe erstellen
if ($_GET['task']=='createEvent' && $_SESSION['status']=='logged' ) 
{			
						if(isset($_POST['title']))
						{
						
							$timestamp = strtotime($_POST['scheduledstart']);
							$event = new event(0);
							$result=$event->createEvent($timestamp,$_POST['title'], $_POST['description'],$_GET['id'],$_GET['type']);
						}
						$smarty->assign("id",$_GET['id']);						
						// Zurück auf die Ausgangsseite
						if($_GET['type']=="")
						$template='events/Kalender.tpl';
						if($_GET['type']=="post")
						$template='posts/post_functions.tpl';
						if($_GET['type']=="contact")
						$template='contacts/contact_functions.tpl';
									
						
}	

// Aufgaben anzeigen
if ($_GET['task']=='showEvent' && $_SESSION['status']=='logged' ) 
{						
						$event = new event (0);
						$result = $event->getevents($_SESSION['user'],'user','');
						$smarty->assign("tasks",$result);	
						$template='events/showEvent.tpl';
						
}
//Standard-Fall, wenn keine andere Routine gegriffen hat
if ($template=="") 
{
	header("location:index.php");
} 

//Generelle Variablen weiterreichen
$smarty->assign("page_uri", $config['page_uri']);
//Umleiten
$smarty->display($config['BASE_DIR']."tpl/".$template);

?>