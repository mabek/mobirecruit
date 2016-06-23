<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 17:17:47
         compiled from "tpl\posts\post_showdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238225212532c42d6a8-68479013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '150c70c4156118fbdc29550ef77c9f0bd7b3f1f3' => 
    array (
      0 => 'tpl\\posts\\post_showdata.tpl',
      1 => 1380813459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238225212532c42d6a8-68479013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5212532c6124b9_08299473',
  'variables' => 
  array (
    'id' => 0,
    'dates' => 0,
    'info' => 0,
    'bewerber' => 0,
    'b' => 0,
    'processes' => 0,
    'process' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5212532c6124b9_08299473')) {function content_5212532c6124b9_08299473($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="duoselectionbuttons">
	<div class="links">
		<a id="pressed" href="#">Daten</a><a href="stellencontroller?task=historie&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Historie/Notizen</a>
	</div>
</div>

<div id="content">
	<?php if (($_smarty_tpl->tpl_vars['dates']->value[0]['Title']||$_smarty_tpl->tpl_vars['dates']->value[1]['Title']||$_smarty_tpl->tpl_vars['dates']->value[2]['Title'])){?>
		<ul class="pageitem">
			<li class="textbox">
				<span class="header">kommende Termine</span>
			</li>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[0]['Title'])){?>
				<li class="text">
					<b>$dates.0.scheduledstart}<b><br>
					<?php echo $_smarty_tpl->tpl_vars['dates']->value[0]['Title'];?>
<br>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[0]['Description'];?>
</i>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[1]['Title'])){?>
				<hr/>
				<li class="text">
					<b><?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['scheduledstart'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['Title'];?>
<br>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['Description'];?>
</i>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[3]['Title'])){?>
				<hr/>
				<li class="text">
					<b><?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['scheduledstart'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['Title'];?>
<br>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['Description'];?>
</i>
				</li>  
			<?php }?>
		</ul>
	<?php }?>

	<hr>

  	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Stellendaten</span>
    	</li>
			
		<?php if (($_smarty_tpl->tpl_vars['info']->value['title'])){?>	
			<li class="textbox">
				<span class="name1">
					<strong>Titel:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>

				</span>
			</li>
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['info']->value['description'])){?>
			<li class="textbox">
				<span class="name1">
					<strong>Beschreibung:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

				</span>
			</li>
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['info']->value['executive'])){?>
			<li class="textbox">
				<span class="name1">
					<strong>Verantw. Führungskraft:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['executive'];?>

				</span>
			</li> 
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['info']->value['personnel'])){?>
			<li class="textbox">
				<span class="name1">
					<strong>Personalbetruer:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['personnel'];?>

				</span>
			</li> 
		<?php }?>
		
		<?php if (($_smarty_tpl->tpl_vars['info']->value['degree'])){?>
			<li class="textbox">
				<span class="name1">
					<strong>Abschluss:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['degree'];?>

				</span>
			</li> 
		<?php }?>
		
		<?php if (($_smarty_tpl->tpl_vars['info']->value['profession'])){?>
			<li class="textbox">
				<span class="name1">
					<strong>Fachrichtung:</strong><br>
					<?php echo $_smarty_tpl->tpl_vars['info']->value['profession'];?>

				</span>
			</li> 
		<?php }?>
		
 		<input type="hidden" name="task" value="create"/>
 	</ul>
  	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Kontakte - zum Weiterleiten bitte klicken</span>
    	</li>
		<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bewerber']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
			<li class="menu">
				<a class="darstellung" href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['contactid'];?>
">&ensp;<?php echo $_smarty_tpl->tpl_vars['b']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['b']->value['lastname'];?>
 <span class="arrow"></span></a>
			</li>
		<?php } ?> 
	</ul>
	

		<?php  $_smarty_tpl->tpl_vars['process'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['process']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['processes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['process']->key => $_smarty_tpl->tpl_vars['process']->value){
$_smarty_tpl->tpl_vars['process']->_loop = true;
?>
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['process']->value['active'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>
					<span class="graytitle">zugehöriger aktiver Prozesse</span>

		<?php }else{ ?>
					<span class="graytitle">zugehöriger abgeschlossener Prozesse</span>

		<?php }?>
				<ul class="pageitem">
					<li class="textbox">
						<?php echo $_smarty_tpl->tpl_vars['process']->value['comment'];?>

					</li>
			</ul>
		<?php } ?> 
	</ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>