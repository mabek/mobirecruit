<?php /* Smarty version Smarty-3.1.13, created on 2013-09-07 17:10:42
         compiled from "tpl\workflow\approve_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1786951efd0aa383539-44393151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e67ba65683e7d93a2dbe705e2c4f1c0dc827aa0' => 
    array (
      0 => 'tpl\\workflow\\approve_post.tpl',
      1 => 1378566632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1786951efd0aa383539-44393151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd0aa3dccf7_99794382',
  'variables' => 
  array (
    'data' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd0aa3dccf7_99794382')) {function content_51efd0aa3dccf7_99794382($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
			
		<form action="workflowcontroller?task=approve" method="post">
				
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
					<li class="textbox">
						<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
					</li>
			</ul>

		<ul class="pageitem">
			<li class="button">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
">
			<input name="Submit input" type="submit" value="Abschicken" /></li>
		</ul>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>