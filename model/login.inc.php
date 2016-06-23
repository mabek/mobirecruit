<?php

 /**
  * Objektklasse "Login" 
  * Hier ist sämtliche Login enthalten
  */  
  require_once("model/database.inc.php");
  
  class login {

 /**
  * 
  * Login mit bekannten Daten
  *
  */
  
  function dologin($login,$password)
	  {
		//Prüfen der eingegebenen Daten per Datenbank
		$db = new database();
		$row =$db->sendsql("Select * from Login where Username = '" .$login ."' ",'Dummy');
	   	$row[2]=trim($row[2]);
		
		
	  if ($row[2]==$password)
				{
					//Daten stimmen zur Datenbank->Setzen der Cookies für autologin
					
					$Hash = md5($password);
					setcookie('UserID', $row[0], time()+(3600*24*30));
					setcookie('Md5Password', $Hash, time()+(3600*24*30));
					
					// Speichern der Daten in der Session
					
					$_SESSION['user'] = trim($row[1]);
					$_SESSION['password'] = trim($row[2]);
					$_SESSION['status'] = 'logged';
					
					//Abrufen des Benutzernamens und der nächsten 3 Termine
				
					return true;
				}

	  
	  return false;
	  
	  }
  
  
  // Funktion um Login zu erstellen
  function createlogin($login,$password)
  
  {
	$db = new database();
	$row=$db->sendsql("INSERT INTO Login (Username, Password) VALUES ( '". $login ."', '". $password ."')");
	
  }
  
  
  
  // Autologin mit Cookies
  function autologin($login="",$password="")
			{
			
		  	// Wenn schon eine Session existiert einloggen
			if(isset($_SESSION['status']))
				{
					if ($_SESSION['status']=='logged')
					return true;
				}
			//Wenn keine Cookies existieren nicht einloggen
		   if (!isset($_COOKIE['UserID'], $_COOKIE['Md5Password'])) 
				{
					return false;				
				}
			
			
			// Logindaten zu Cookies aus  Datenbank holen
			$db = new database();
			$row =$db->sendsql("Select * from Login where ID = '" .$_COOKIE['UserID'] ."' ",'dummy');
			$row[2]=trim($row[2]);
			
			// Überprüfen der MD5 Summe von Cookie und Datenbank Passwort
		  if (md5($row[2])==$_COOKIE['Md5Password'])
				{
					//Cookie Daten richtig, Session setzen
					session_start();
					$_SESSION['user'] = trim($row[1]);
					$_SESSION['password'] = trim($row[2]);
					$_SESSION['status'] = 'logged';
					
														
					return true;
				}
				
		  else return false;
		  
			}
  

}


?>
