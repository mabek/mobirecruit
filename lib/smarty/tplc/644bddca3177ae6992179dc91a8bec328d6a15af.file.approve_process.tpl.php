<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 14:52:33
         compiled from "tpl\workflow\approve_process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710251f11e1f2b74e7-85269831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644bddca3177ae6992179dc91a8bec328d6a15af' => 
    array (
      0 => 'tpl\\workflow\\approve_process.tpl',
      1 => 1378567711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710251f11e1f2b74e7-85269831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51f11e1f307fd5_84758602',
  'variables' => 
  array (
    'data' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f11e1f307fd5_84758602')) {function content_51f11e1f307fd5_84758602($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="workflowcontroller?task=approve" method="post">
		<span class="graytitle">Interne Personalbeschaffung</span>
			<ul class="pageitem">
				<li class="checkbox">
					<span class="name">Ausschreibung</span>
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
	
		<span class="graytitle">Auswahl</span>
			<ul class="pageitem">
				<li class="radiobutton">
					<span class="name">Genehmigen</span>
					<input name="choice" type="radio" value="approve"checked="checked" />
				</li>
				<li class="radiobutton">
					<span class="name">Ablehnen</span>
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
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
">
				<li class="button">
					<input name="Submit input" type="submit" value="Abschicken" />
				</li>
			</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>