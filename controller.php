<?php

/**
 * Hauptcontroller als Zentrale 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");
require_once("model/workflow.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start(); 

//Controller-Kerntaetigkeit#
if ($_GET['task']=='Bewerber' && $_SESSION['status']=='logged' ) 
{			
						$template='contacts\contact_search.tpl';
}			
 
// Stellen
if ($_GET['task']=='Stellen' && $_SESSION['status']=='logged' ) 
{			
						$template='posts\post_search.tpl';
						
}	
//Bewerbungen
if ($_GET['task']=='Applications' && $_SESSION['status']=='logged' ) 
{			
						$template='applications\application_search.tpl';
						
					
}	
//Kalender
if ($_GET['task']=='Kalender' && $_SESSION['status']=='logged' ) 
{			
						$template='events\Kalender.tpl';
						
}

//Workflow
if ($_GET['task']=='Workflow' && $_SESSION['status']=='logged' ) 
{			
						
						$wf1 = new workflow();
						$wi = $wf1->getworkitems();
						$smarty->assign("workitems", $wi);
						$smarty->assign("role",$_SESSION['role']);
						$template='workflow/workflow_start.tpl';
}

//Standard-Fall, wenn keine andere Routine gegriffen hat
if ($template=="") 

	{
					header("location:index.php");
	}


//Generelle Variablen weiterreichen
$smarty->assign("username", $_SESSION['user']);
$smarty->assign("page_uri", $config['page_uri']);

//Umleiten
$smarty->display($config['BASE_DIR']."tpl/".$template);

?>
