<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 14:52:41
         compiled from "tpl\workflow_view\post_chose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3030252457f996e8da1-35739475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee48f1bcad4644934597e89e6d98b0cca14308ff' => 
    array (
      0 => 'tpl\\workflow_view\\post_chose.tpl',
      1 => 1378567357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3030252457f996e8da1-35739475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'a' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52457f9973bfd0_77430644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52457f9973bfd0_77430644')) {function content_52457f9973bfd0_77430644($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
		<form action="workflowcontroller?task=input" method="post">
				<ul class="pageitem">
				<li class="textbox"><span class="header">Stelle auswählen</span><p>
				Bitte die gewünschte Stelle markieren.</p>
				</ul>
						
						<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
							<?php if (($_smarty_tpl->tpl_vars['a']->value['title'])){?>

							<span class="graytitle"><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</span>
								<ul class="pageitem">
										<li class="textbox">
										<?php echo $_smarty_tpl->tpl_vars['a']->value['description'];?>
 
										</li>
										<li class="radiobutton">
											<span class="name">Auswählen</span>
											<input name="postid" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['postid'];?>
"/>
										</li>
								</ul>
							<?php }?>
						<?php } ?>
					
					<span class="graytitle">Kommentar</span>
					<ul class="pageitem">
						<?php if (($_smarty_tpl->tpl_vars['context']->value['comment'])){?>
							<li class="textbox">
								<?php echo $_smarty_tpl->tpl_vars['context']->value['comment'];?>

							</li>
						<?php }?>
						<li class="textbox">
							<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
						</li>
					</ul>
					
					<ul class="pageitem">
						<input type="hidden" name="workitem" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
						<li class="button"><input type="submit" value="Speichern"/>
						</li>
					</ul>
			</form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>