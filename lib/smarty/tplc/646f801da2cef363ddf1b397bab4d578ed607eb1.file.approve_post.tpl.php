<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 14:34:59
         compiled from "tpl\workflow_view\approve_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915452457b736ce499-90170224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646f801da2cef363ddf1b397bab4d578ed607eb1' => 
    array (
      0 => 'tpl\\workflow_view\\approve_post.tpl',
      1 => 1380285276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915452457b736ce499-90170224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52457b73795893_41152443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52457b73795893_41152443')) {function content_52457b73795893_41152443($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<span class="graytitle">Titel</span>
		<ul class="pageitem">
			<li class="textbox">
				<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

			</li>
		</ul>
		
	<span class="graytitle">Beschreibung</span>
		<ul class="pageitem">
			<li class="textbox">
				<?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>

			</li>
		</ul>
			
		
				
		<span class="graytitle">Auswahl</span>
			<ul class="pageitem">
				<li class="radiobutton"><span class="name">Genehmigen</span>
					<input name="choice" type="radio" value="approve"checked="checked" />
				</li>
				<li class="radiobutton"><span class="name">Ablehnen</span>
					<input name="choice" type="radio" value="disprove" />
				</li>
			</ul>
		
		<span class="graytitle">Link zur Stelle</span>
			<ul class="pageitem">
					<li class="textbox">
						<a href="stellencontroller?id=<?php echo $_smarty_tpl->tpl_vars['context']->value['subjectid'];?>
&task=postdata" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['context']->value['title'];?>
</a>
					</li>
			
			</ul>
		
		<span class="graytitle">Kommentar</span>
			<ul class="pageitem">
				<?php if (($_smarty_tpl->tpl_vars['context']->value['comment'])){?>
					<li class="textbox">
						<?php echo $_smarty_tpl->tpl_vars['context']->value['comment'];?>

					</li>
				<?php }?>
	
			</ul>

	

</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>