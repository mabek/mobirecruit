<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 22:07:16
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10141521912748cbc25-23256883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9176531b4ba43145bd0a3931329c8cec4565cb66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_history.tpl',
      1 => 1377256365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10141521912748cbc25-23256883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'info' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52191274972ab1_08912249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52191274972ab1_08912249')) {function content_52191274972ab1_08912249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/suggest.js"></script>

<div id="tributton">
	<div class="links">
		<a href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Daten</a><a id="pressed" href="#">Historie/Notizen</a><a href="bewerbercontroller?task=funktionen&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Funktionen</a>
	</div>
</div>

<div id="content">
	<ul class="pageitem">
    	<li class="textbox"><span class="header">Historie</span></li>
			<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['h']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['h']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['h']->iteration++;
 $_smarty_tpl->tpl_vars['h']->last = $_smarty_tpl->tpl_vars['h']->iteration === $_smarty_tpl->tpl_vars['h']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['last'] = $_smarty_tpl->tpl_vars['h']->last;
?>
					<li class="text">
						<b><?php echo $_smarty_tpl->tpl_vars['h']->value['scheduledstart'];?>
</b>
						<br><?php echo $_smarty_tpl->tpl_vars['h']->value['Title'];?>
 
						<br/>
						<i><?php echo $_smarty_tpl->tpl_vars['h']->value['Description'];?>
</i>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['last']){?>
							</li>
						<?php }else{ ?>
							</li>
							<hr/>
						<?php }?>
				<?php } ?>
			<?php }else{ ?>
				<li class="text">Keine Einträge vorhanden!</li>
			<?php }?>
		</ul>

		<hr>

		<ul class="pageitem">
 			<li class="textbox">
 				<span class="header">Notizen</span>
 			</li>
			<form action="bewerbercontroller?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
				<li class="textbox">
					<span class="header">Neue Notiz</span>
					<textarea name="TextArea" rows="auto"></textarea>
				</li>
			
		</ul>
	 <ul class="pageitem">
			<li class="button"><input type="submit" value="Notiz hinzufügen"/>
			<input type="hidden" name="task" value="addnote" />
			</li>
			 </ul>
			</form>
		
			</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>