<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type" />
		<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
		{if ($context.activity eq "51")}
			<link href="css/stylenoradio.css" rel="stylesheet" type="text/css" />
		{else}
			<link href="css/style.css" rel="stylesheet" type="text/css" />
		{/if}
		
		<script src="js/functions.js" type="text/javascript"></script>
		<meta name="format-detection" content="telephone=yes"/>
		<title>MobiRecruit</title>
	</head>
	<body>
		<div id='topbar'>
			<div id="leftnav">
				<a href="logincontroller"><img alt="home" src="images/home.png"/></a>
			</div>
			<div id='title'>
				{$username|default:"MobiRecruit"}
			</div>
			<div id="rightnav">
				<a href="logincontroller?task=logout">Logout</a>
			</div>
		</div>
		<style type="text/css">
			a:link { text-decoration:none; font-weight:bold; color:#000000; }
			a:visited { text-decoration:none; font-weight:bold; color:#000000; } * visited link */
		</style>
