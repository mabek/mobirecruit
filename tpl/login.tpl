<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="text/html; charset=iso-8859-1? http-equiv="Content-Type" />
		<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<title>Mobirecruit</title>
	</head>
	<body>
		<div id='topbar'>
			<div id='title'>MobiRecruit</div>
		</div>
		<li class='center'>
			<div>
 				<form id="loginseite" method="post" action="logincontroller">
 					<fieldset>
 						Bitte Benutzername eingeben:<br>
 						<input type="text" name="login"/><br>
						Bitte Passwort eingeben:<br>
 						<input type="password" name="password"/><br>
						<input type="hidden" name="task" value="login"/>
 						<input id='submit-btn' type='submit' value='Anmelden'>
 					</fieldset>
				</form>
 			</div>
 		</li>

{include file='footer.tpl'}