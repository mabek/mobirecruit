<?php

/**
 * Startcontroller fuer alles in Zusammenhang mit dem Login 
 */

//Laden der Konfiguration
require("inc/config.inc.php");
require_once('/model/login.inc.php');
require_once('/model/event.inc.php');
require_once('/model/contact.inc.php');
//Instanzieren der Template-Engine
require("inc/smarty.inc.php");

//Variable zur Auswahl des Templates
$template="";

//Session initiieren
session_start(); 


//Standard-Fall, wenn keine andere Routine gegriffen hat -> i.d.r. beim ersten aufruf und autologin

if ($template=="") 

	{	
			// Login Klasse für autologin verwenden		
			$login = new login();
			$logged = $login->autologin();
			
			// Autologin erfolgreich
			if ($logged)
				{
					
					// Benutzername und Termine smarty übergeben
					if(!isset($_SESSION['act']))
						{
							$event = new event (0);
							$array = $event->getevents($_SESSION['user'],'user','futureevents');
							$_SESSION['act'] =  array_slice($array, 0, 3);
							
							
						}
						
					if(!isset($_SESSION['role']))
						{
							$contact = new contact ();
							$_SESSION['role'] = $contact->getrole($_SESSION['user']);								
							
						}	
						
					$smarty->assign("act",$_SESSION['act']);
					$smarty->assign("username",$_SESSION['user']);					
								
					//Template setzen	
					$template="start.tpl";
				
				}
				
			else 
				{
					//Autologin nicht erfolgreich, Eingabe von Logindaten erforderlich
					//Template setzen
					$template="login.tpl";
				}
	}
	
	
// Wenn Login template den Controller aufruft, Logindaten eingegeben wurden

if (isset($_POST['task']))
{
if ($_POST['task']=="login") 
{			
	if(($_POST['login']=="") OR ($_POST['password']==""))
			{
						//Falsche Eingabe
						$template='login.tpl';
				
			}
	else
			{
				//Richtige Eingabe -> Daten prüfen
				$log = new login();
				$logged=$log->doLogin($_POST['login'],$_POST['password']);
				
				
					if ($logged)
							{ 
								
								// Benutzername und Termine smarty übergeben
								if(!isset($_SESSION['act']))
									{
										$event = new event (0);
										$array = $event->getevents($_SESSION['user'],'user','futureevents');
										$_SESSION['act'] =  array_slice($array, 0, 3);
																			
									}
									
								if(!isset($_SESSION['role']))
								{
									$contact = new contact ();
									$_SESSION['role'] = $contact->getrole($_SESSION['user']);
																		
								}	
								$smarty->assign("act",$_SESSION['act']);
								$smarty->assign("user",$_SESSION['user']);									 
								
								//Template setzen	
								$template="start.tpl";
							}		
						else 
							{
									//Falsche Logindaten, zurück zur Eingabeseite
									$template='login.tpl';
							}
			}
	
}
}
// Logout 
if (isset($_GET['task']))
{
if ($_GET['task']=='logout') 
{			
						//Zerstören von Session und Cookies
						$_SESSION['status']=='not';
						session_destroy();
						
						if (isset($_COOKIE['UserID'], $_COOKIE['Md5Password']))
						{
						setcookie('UserID', "", time()-60*60*24);
						setcookie('Md5Password', "", time()-60*60*24);
						}
						$template='login.tpl';
}
}



//Generelle Variablen weiterreichen
$smarty->assign("page_uri", $config['page_uri']);
$smarty->assign("username",$_SESSION['user']);	

//Umleiten

$smarty->display($config['BASE_DIR']."tpl/".$template);

?>
