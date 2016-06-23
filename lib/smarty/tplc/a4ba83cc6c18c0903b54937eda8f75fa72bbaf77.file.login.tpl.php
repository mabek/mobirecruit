<?php /* Smarty version Smarty-3.1.13, created on 2013-07-24 15:08:57
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2419451efd1e9616d50-62734721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ba83cc6c18c0903b54937eda8f75fa72bbaf77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\login.tpl',
      1 => 1336393976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2419451efd1e9616d50-62734721',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd1e965db10_63429761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd1e965db10_63429761')) {function content_51efd1e965db10_63429761($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=iso-8859-1? http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>mCRM</title>
</head>
<body>

<div id='topbar'>
	<div id='title'>
	MobiRecruit
	</div>
</div>
<li class='center'>
<div>
 <form id="loginseite" method="post" action="logincontroller">
 <fieldset>
 Bitte Benutzername eingeben:<br/>
 <input type="text" name="login"/><br/>
  Bitte Passwort eingeben:<br/>
 <input type="password" name="password"/><br/>			
 <input type="hidden" name="task" value="login"/>
 <input id='submit-btn' type='submit' value='Anmelden'>
 
 </li>
</div>
 </fieldset>
 </form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>