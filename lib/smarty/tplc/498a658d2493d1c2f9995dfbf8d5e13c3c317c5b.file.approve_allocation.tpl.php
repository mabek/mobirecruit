<?php /* Smarty version Smarty-3.1.13, created on 2013-09-27 17:06:37
         compiled from "tpl\workflow\approve_allocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6825520a3b32c72f12-59341161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498a658d2493d1c2f9995dfbf8d5e13c3c317c5b' => 
    array (
      0 => 'tpl\\workflow\\approve_allocation.tpl',
      1 => 1378572110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6825520a3b32c72f12-59341161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520a3b32d23020_31075153',
  'variables' => 
  array (
    'data' => 0,
    'a' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520a3b32d23020_31075153')) {function content_520a3b32d23020_31075153($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="js/suggest.js"></script>

<div id="content">
	<form action="workflowcontroller?task=approve" method="post">
		<span class="graytitle">Bewerberauswahl</span>
			<ul class="pageitem">
				<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['chosen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
					<?php if (($_smarty_tpl->tpl_vars['a']->value['firstname'])){?>
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['a']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value['lastname'];?>
</a></strong>
							<br><?php echo $_smarty_tpl->tpl_vars['a']->value['degree'];?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value['profession'];?>
</br>
							<br><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['application'];?>
" target="_blank" >Bewerbung</a> </br>

						</li>
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" type="checkbox" checked="checked" />
					  	</li>
					<?php }?>
				<?php } ?>
				
				<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['notchosen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
					<?php if (($_smarty_tpl->tpl_vars['a']->value['firstname'])){?>
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['a']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value['lastname'];?>
</a></strong>
							<br><?php echo $_smarty_tpl->tpl_vars['a']->value['degree'];?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value['profession'];?>
</br>
							<br><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['application'];?>
" target="_blank" >Bewerbung</a> </br>
						</li>
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" type="checkbox" />
					  	</li>
					<?php }?>
				<?php } ?>
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
				<input type="hidden" name="workitem" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
">
				<li class="button">
					<input name="Submit input" type="submit" value="Abschicken"/>
				</li>
			</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>