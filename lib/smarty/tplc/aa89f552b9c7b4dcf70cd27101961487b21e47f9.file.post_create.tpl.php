<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 16:54:49
         compiled from "tpl\posts\post_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24038524d84bdf01272-03956796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa89f552b9c7b4dcf70cd27101961487b21e47f9' => 
    array (
      0 => 'tpl\\posts\\post_create.tpl',
      1 => 1380812018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24038524d84bdf01272-03956796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524d84be0153e5_96588304',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d84be0153e5_96588304')) {function content_524d84be0153e5_96588304($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>


<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="stellencontroller?task=create" method="post">
 	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Stellendaten hinzufügen</span>
    	</li>

		<li class="smallfield">
			<span class="name">Titel</span>
			<input placeholder="hinzufügen" type="text" name="title" />
		</li>
		<li class="smallfield">
			<span class="name">Beschreibung</span>
			<input placeholder="hinzufügen" type="text" name="description" />
		</li>
		<li class="smallfield">
			<span class="name">Personalbetreuer</span>
			<input placeholder="hinzufügen" type="text" name="personnel" />
		</li>
		<li class="smallfield">
			<span class="name">Grad des Abschluss</span>
			<input placeholder="hinzufügen" type="text" name="degree" />
		</li>
		<li class="smallfield">
			<span class="name">Fachrichtung</span>
			<input placeholder="hinzufügen" type="text" name="profession" />
		</li>
 		<input type="hidden" name="task" value="create"/><p>
	</ul>
 
	<ul class="pageitem">
		<li class="button"><input type="submit" value="Speichern"/>
			<input type="hidden" name="task" value="create" />
		</li>
 	</ul>
 
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>