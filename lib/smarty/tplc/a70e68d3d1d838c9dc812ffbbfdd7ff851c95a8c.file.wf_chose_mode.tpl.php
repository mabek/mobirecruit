<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 17:19:08
         compiled from "tpl\workflow\wf_chose_mode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11357520a372e332b70-19578951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70e68d3d1d838c9dc812ffbbfdd7ff851c95a8c' => 
    array (
      0 => 'tpl\\workflow\\wf_chose_mode.tpl',
      1 => 1380295146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11357520a372e332b70-19578951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520a372e3b01a2_68332608',
  'variables' => 
  array (
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520a372e3b01a2_68332608')) {function content_520a372e3b01a2_68332608($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="workflowcontroller?task=input" method="post">
		<span class="graytitle">Auswahlmethode wählen</span>
			<ul class="pageitem">
			 <li class="checkbox">
					<span class="name">Assessment Center </span>
					<input name="assessment" type="checkbox" />
			</li>	
			<li class="checkbox">		
				<span class="name">Bewerbungsgespräche</span>				
				<input name="interview" type="checkbox" />
			</li>			
			<li class="checkbox">		
					<span class="name">Auswahltest </span>	
					<input name="test" type="checkbox" />
					
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
<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
			</ul>
			
			</ul>
			<ul class="pageitem">
				<input type="hidden" name="workitem" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
				<input type="hidden" name="choice" value="approve"">
				<li class="button"><input type="submit" value="Speichern"/>
				</li>
			</ul>
	</form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>