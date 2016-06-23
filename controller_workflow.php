<?php

/**
 * Nebencontroller fuer alles in Zusammenhang mit Firmen 
 */

//Laden der Konfiguration
require_once("inc/config.inc.php");

//Instanzieren der Template-Engine
require_once("inc/smarty.inc.php");

//Klassen
require_once("model/workflow.inc.php");

//Variable zur Auswahl des Templates
$template="";
//Session initiieren
session_start(); 


/**
 * Controller-Kerntaetigkeit#
 */
 

 
		/**
		 * Workflow behandlung
		 * $_GET['task'] Aufgabe
		 */
		if (($_GET['task']=='start') && $_SESSION['status']=='logged') 
		{
			$wf = new workflow();
			$wf->createworkitem("start");
		}
		
		if (($_GET['task']=='start_oldpost') && $_SESSION['status']=='logged') 
		{
			$wf = new workflow();
			$wf->createworkitem("start_oldpost");			
		}
		
		if (($_GET['task']=='process') && $_SESSION['status']=='logged') 
		{
			$wf = new workflow($_GET['id']);
			$wf->repairdirty();
			$result = $wf->process();
			if($result['type'] == 'display')
			{
				
				$smarty->assign("context", $result['workitem_context']);
				$smarty->assign("data", $result['data']);
				$smarty->assign("workitem", $result['workitem']);
				$template = $result['template'];
			}
		}
		
		// Nach einer Eingabe wird das Formular per "Input" gespeichert.
		if (($_GET['task']=='input' or $_POST['task']=='input' ) && $_SESSION['status']=='logged') 
		{	
		
					
			if($_POST['id'] <> 0)
				{ 
					// Daten werden über Post geliefert
					if($_POST['TextArea'] == '')
						$_POST['TextArea'] = 'Abgeschickt';
					$wf = new workflow($_POST['id']);
					$wf->input($_POST);
					
				}
			else
				{ 
					echo "_PROBLEM: $_POST ID NICHT GEFÜLLT BEIM INPUT, VERSUCHE GET";
					// Daten werden über Get geliefert
					$wf = new workflow($_GET['id']);
					$wf->input($_GET);
				}
								
		}
		
		if (($_GET['task']=='approve') && $_SESSION['status']=='logged') 
		{
			$wf = new workflow($_POST['id']);
			
		
			if($_POST['choice'] == 'approve' or $_GET['choice'] == 'approve'  )
				{
				
					if($_POST['TextArea'] == '')
						$_POST['TextArea'] = 'Genehmigt';
					$wf->approve($_POST);
				}
			else
				{	
					if($_POST['TextArea'] == '')
						$_POST['TextArea'] = 'Abgelehnt';
					$wf->rollback($_POST['TextArea'] );
					$wf->repairdirty();
					$wf->rollback();
				}
	
		}
		
		// Auskunft eines Prozessschritts
		
		if (($_GET['task']=='inquiry') && $_SESSION['status']=='logged') 
		{
			$wf = new workflow($_GET['id']);
			$result = $wf->inquiry($_GET['subject']);
			$smarty->assign("context", $result['workitem_context']);
			$smarty->assign("data", $result['data']);
			$smarty->assign("workitem", $result['workitem']);
			$template = $result['template'];
		}
		
	
			
//Standard-Fall, wenn keine andere Routine gegriffen hat
if ($template=="") 
{
						$wf1 = new workflow();
						$wi = $wf1->getworkitems();
						$smarty->assign("workitems", $wi);
						$smarty->assign("role",$_SESSION['role']);
						$template='workflow/workflow_start.tpl';
}

//Generelle Variablen weiterreichen
$smarty->assign("username", $_SESSION['user']);
$smarty->assign("page_uri", $config['page_uri']);

//Umleiten
$smarty->display($config['base_dir']."tpl/".$template);

?>
