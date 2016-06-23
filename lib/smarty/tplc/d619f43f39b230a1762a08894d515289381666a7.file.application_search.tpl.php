<?php /* Smarty version Smarty-3.1.13, created on 2013-08-19 19:45:55
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\applications\application_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5213521259d39bb376-39922796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd619f43f39b230a1762a08894d515289381666a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\applications\\application_search.tpl',
      1 => 1339599858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5213521259d39bb376-39922796',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521259d3a30487_32319271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521259d3a30487_32319271')) {function content_521259d3a30487_32319271($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<div class="searchbox">
	<form action="applicationcontroller" method="post">			
		<fieldset><input id="eingabe" placeholder="Name eingeben" type="text" name="Suche" onkeyup="load('controller_applications.php')"/>
		<input type="hidden" name="task" value="ApplicationData" />
</fieldset>
</form>
</div>
<ul class="pageitem">
<li class="textbox"><span class="header">Suchergebnis</span></li>

<div id="suchergebnisse"></div>
</ul>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>