<?php /* Smarty version Smarty-3.1.13, created on 2013-09-07 17:25:28
         compiled from "tpl\workflow\wf_chose_process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245151efd37de2a648-72211642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef78eff6957d4373154ac3ca974b04c737ea6f9' => 
    array (
      0 => 'tpl\\workflow\\wf_chose_process.tpl',
      1 => 1378567497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245151efd37de2a648-72211642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd37de88131_18011833',
  'variables' => 
  array (
    'data' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd37de88131_18011833')) {function content_51efd37de88131_18011833($_smarty_tpl) {?>		<?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
  <form action="workflowcontroller?task=input" method="post">
	
	<span class="graytitle">Interne Personalbeschaffung</span>
				<ul class="pageitem">
				  <li class="checkbox">
					<span class="name">Ausschreibung </span>
					<?php if (($_smarty_tpl->tpl_vars['data']->value['stellenaus'])){?>
					<input name="stellenaus" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="stellenaus" type="checkbox" />
					<?php }?>
								
				  </li>
				  <li class="checkbox">
					<span class="name">direkte Ansprache</span>
					
					
					<?php if (($_smarty_tpl->tpl_vars['data']->value['ansprache'])){?>
					<input name="ansprache" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="ansprache" type="checkbox" />
					<?php }?>
					
				  </li>
				  <li class="checkbox">
				  
					<span class="name">Anfrage eines Mitarbeiters</span>
					
					<?php if (($_smarty_tpl->tpl_vars['data']->value['anfrage'])){?>
					<input name="anfrage" type="checkbox"  checked="checked"/>
					<?php }else{ ?>
					<input name="anfrage" type="checkbox" />
					<?php }?>
					
					
				  </li>
				</ul>

			 <span class="graytitle">Externe Personalbeschaffung</span>
			<ul class="pageitem">
			  <li class="checkbox">
				<span class="name">Internetanzeige </span>
				
				<?php if (($_smarty_tpl->tpl_vars['data']->value['internet'])){?>
					<input name="internet" type="checkbox" checked="checked"/>
					<?php }else{ ?>
				<input name="internet" type="checkbox" />
					<?php }?>
				
				
			  </li>
			  <li class="checkbox">
				<span class="name">Personalberater</span>
				
					<?php if (($_smarty_tpl->tpl_vars['data']->value['personalberater'])){?>
						<input name="personalberater" type="checkbox" checked="checked"/>
					<?php }else{ ?>
					<input name="personalberater" type="checkbox" />
					<?php }?>
			
				
			  </li>
			  <li class="checkbox">
				<span class="name">Zeitarbeitsfirmen</span>
				
				<?php if (($_smarty_tpl->tpl_vars['data']->value['zeitarbeit'])){?>
						<input name="zeitarbeit" type="checkbox"  checked="checked"/>
					<?php }else{ ?>
						<input name="zeitarbeit" type="checkbox" />
					<?php }?>
			
				
			  </li>
			   <li class="checkbox">
				<span class="name">Bundesagentur für Arbeit</span>
				
					<?php if (($_smarty_tpl->tpl_vars['data']->value['baa'])){?>
						<input name="baa" type="checkbox"   checked="checked"/>
					<?php }else{ ?>
						<input name="baa" type="checkbox" />
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
						<li class="textbox">
							<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
						</li>
				</ul>
			
			
				 <input type="hidden" name="workitem" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
">
				 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
">
				 <input type="hidden" name="task" value="input">
				<ul class="pageitem">
						<li class="button"><input type="submit" value="Speichern"/>
				</li>
			</ul>
			
			 </form>
 
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>