<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 17:32:13
         compiled from "tpl\workflow_view\wf_chose_mode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201985245a480136021-22410923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f33c4b8498145738749893d5ec7558be2e0b5310' => 
    array (
      0 => 'tpl\\workflow_view\\wf_chose_mode.tpl',
      1 => 1380295931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201985245a480136021-22410923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5245a48016ae44_85308920',
  'variables' => 
  array (
    'data' => 0,
    'context' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5245a48016ae44_85308920')) {function content_5245a48016ae44_85308920($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
		<span class="graytitle">Auswahlmethode wählen</span>
			<ul class="pageitem">
			 <li class="checkbox">
					<span class="name">Assessment Center </span>
					
					<?php if (($_smarty_tpl->tpl_vars['data']->value['assessment'])){?>
					<input name="assessment" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="assessment" type="checkbox" />
					<?php }?>
					
					
					
			</li>	
			<li class="checkbox">		
				<span class="name">Bewerbungsgespräche</span>				
				
				
				<?php if (($_smarty_tpl->tpl_vars['data']->value['interview'])){?>
					<input name="interview" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="interview" type="checkbox" />
					<?php }?>
					
					
			</li>			
			<li class="checkbox">		
					<span class="name">Auswahltest </span>	
					
					
					<?php if (($_smarty_tpl->tpl_vars['data']->value['test'])){?>
					<input name="test" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="test" type="checkbox" />
					<?php }?>
					
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
			
			</ul>
		
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>