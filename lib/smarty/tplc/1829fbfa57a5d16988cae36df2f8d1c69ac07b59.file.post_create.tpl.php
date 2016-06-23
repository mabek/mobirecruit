<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 13:31:40
         compiled from "tpl\workflow\post_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125151f11a593df6d6-38469237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1829fbfa57a5d16988cae36df2f8d1c69ac07b59' => 
    array (
      0 => 'tpl\\workflow\\post_create.tpl',
      1 => 1377252299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125151f11a593df6d6-38469237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51f11a59554eb7_15198024',
  'variables' => 
  array (
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f11a59554eb7_15198024')) {function content_51f11a59554eb7_15198024($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="workflowcontroller?task=input" method="post">
 		<ul class="pageitem">
        	<li class="textbox">
        		<span class="header">Stellendaten hinzufügen</span>
        	</li>
			<li class="smallfield">
				<span class="name">Titel</span>
				<input placeholder="hinzufügen" type="text" name="title"/>
			</li>
			<li class="smallfield">
				<span class="name">Beschreibung</span>
				<input placeholder="hinzufügen" type="text" name="description"/>
			</li>
		</ul>
 		<ul class="pageitem">
			<li class="button">
				<input type="submit" value="Speichern"/>
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"/>
			</li>
		</ul>
 	</form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>