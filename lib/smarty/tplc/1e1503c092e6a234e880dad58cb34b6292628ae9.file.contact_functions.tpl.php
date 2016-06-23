<?php /* Smarty version Smarty-3.1.13, created on 2013-08-30 10:08:05
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_functions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9633522052e50a8164-32261568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1503c092e6a234e880dad58cb34b6292628ae9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_functions.tpl',
      1 => 1377256494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9633522052e50a8164-32261568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522052e5197437_90067494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522052e5197437_90067494')) {function content_522052e5197437_90067494($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>


<div id="tributton">
	<div class="links">
		<a href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Daten</a><a href="bewerbercontroller?task=historie&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Historie/Notizen</a><a id="pressed" href="#">Funktionen</a>
	</div>
</div>
<ul class="pageitem">
	<li class="menu">
		<a href="bewerbercontroller?task=newCustomerTask&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<span class="name">Neuer Termin</span><span class="arrow"></span>
		</a>
	</li>
	<li class="menu">
		<a href="bewerbercontroller?task=getOrders&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<span class="name">Aktive Bestellungen</span><span class="arrow"></span>
		</a>
	</li>
	<li class="menu">
		<a href="bewerbercontroller?task=newCustomerOrder&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<span class="name">Neuer Auftrag</span><span class="arrow"></span>
		</a>
	</li>
	<li class="menu">
		<a href="bewerbercontroller?task=updatecustomer&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<span class="name">Kundendaten ändern</span><span class="arrow"></span>
		</a>
	</li>
</ul>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>