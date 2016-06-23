<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:08:19
         compiled from "tpl\workflow\rate_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169545218eed01e1164-95718495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f141956ad435fd7fd12e0a91662c7cc2c05739' => 
    array (
      0 => 'tpl\\workflow\\rate_contact.tpl',
      1 => 1380391591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169545218eed01e1164-95718495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5218eed024a3e1_53116073',
  'variables' => 
  array (
    'data' => 0,
    'a' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5218eed024a3e1_53116073')) {function content_5218eed024a3e1_53116073($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="workflowcontroller?task=input" method="post">
		<span class="graytitle">Kompetenzen bewerten</span>
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

							<br><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['application'];?>
" target="_blank">Bewerbung</a> </br>
							
							<br><i> Fachlich-Methodische Kompetenz </i> </br>
							Schlecht
							<input type="radio" name="a_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="1">
							<input type="radio" name="a_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="25">
							<input type="radio" name="a_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="50">
							<input type="radio" name="a_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="75">
							<input type="radio" name="a_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="100">
							Gut
							
							<br><i>Sozial-Kommunikative Kompetenz </i> </br>
							Schlecht
							<input type="radio" name="b_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="1">
							<input type="radio" name="b_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="25">
							<input type="radio" name="b_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="50">
							<input type="radio" name="b_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="75">
							<input type="radio" name="b_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="100">
							Gut
							
														
							<br><i>Aktivität– und umsetzungsorientierte Kompetenz</i> </br>
							Schlecht
							<input type="radio" name="c_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="1">
							<input type="radio" name="c_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="25">
							<input type="radio" name="c_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="50">
							<input type="radio" name="c_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="75">
							<input type="radio" name="c_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="100">
							Gut
						
							
							<br><i>Personale Kompetenz</i> </br>
							Schlecht
							<input type="radio" name="d_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="1">
							<input type="radio" name="d_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="25">
							<input type="radio" name="d_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="50">
							<input type="radio" name="d_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="75">
							<input type="radio" name="d_<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" value="100">
							Gut
						
						</li>
					 
					<?php }?>
				<?php } ?>
					
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

			<ul class="pageitem">
				<input type="hidden" name="workitem" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['workitem']->value;?>
"">
				<li class="button">
					<input type="submit" value="Speichern"/>
				</li>
			</ul>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>