<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 13:53:27
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1836651efd0b08f2702-88103719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379c0c9951191e6bd4a373440db70ce659e033a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_search.tpl',
      1 => 1377255246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836651efd0b08f2702-88103719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd0b092e6c0_65006032',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd0b092e6c0_65006032')) {function content_51efd0b092e6c0_65006032($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<div class="searchbox">
	<form action="bewerbercontroller" method="post">			
		<fieldset>
			<input id="eingabe" placeholder="Name eingeben" type="text" name="Suche" onkeyup="load('controller_bewerber.php')"/>
			<input type="hidden" name="task" value="CustomerData"/>
		</fieldset>
	</form>
</div>

<ul class="pageitem">
	<li class="textbox">
		<span class="header">Suchergebnis</span>
	</li>
	<div id="suchergebnisse"></div>
</ul>

<div>
	<ul class="pageitem">
		<li class="textbox">
			<span class="header">Bewerber anlegen</span>
		</li>
		<li class="menu">
			<a href="bewerbercontroller?task=neu">
				<img alt="kunde" src="images/ico_16_2.gif"/>
				<span class="name">Neuer Bewerber</span>
				<span class="arrow"></span>
			</a>
		</li>
	</ul>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>