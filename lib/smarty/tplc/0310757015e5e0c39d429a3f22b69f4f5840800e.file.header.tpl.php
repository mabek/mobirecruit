<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 16:52:38
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048651efd0a70784b0-23041932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0310757015e5e0c39d429a3f22b69f4f5840800e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\header.tpl',
      1 => 1380709272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048651efd0a70784b0-23041932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd0a70bdd36_79114722',
  'variables' => 
  array (
    'context' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd0a70bdd36_79114722')) {function content_51efd0a70bdd36_79114722($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type" />
		<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
		<?php if (($_smarty_tpl->tpl_vars['context']->value['activity']=="51")){?>
			<link href="css/stylenoradio.css" rel="stylesheet" type="text/css" />
		<?php }else{ ?>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
		<?php }?>
		
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
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? "MobiRecruit" : $tmp);?>

			</div>
			<div id="rightnav">
				<a href="logincontroller?task=logout">Logout</a>
			</div>
		</div>
		<style type="text/css">
			a:link { text-decoration:none; font-weight:bold; color:#000000; }
			a:visited { text-decoration:none; font-weight:bold; color:#000000; } * visited link */
		</style>
<?php }} ?>