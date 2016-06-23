<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:15:34
         compiled from "tpl\workflow\view_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18952521a24884fd5b3-14589903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5500d2bfddbba9d67f464c0dfa58f158e63ac0d5' => 
    array (
      0 => 'tpl\\workflow\\view_rating.tpl',
      1 => 1380392130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18952521a24884fd5b3-14589903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521a248859ca47_41628317',
  'variables' => 
  array (
    'data' => 0,
    'a' => 0,
    'context' => 0,
    'workitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521a248859ca47_41628317')) {function content_521a248859ca47_41628317($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="workflowcontroller?task=approve" method="post">
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
							<br><i> Fachlich-Methodische Kompetenz </i>
							
							  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_a'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_a'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1<$_tmp2){?>
									<font color="red"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_a'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_a'];?>
% </br></font>
								<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_a'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_a'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3>$_tmp4){?>
									<font color="green"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_a'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_a'];?>
% </br></font>
								<?php }else{ ?>
									<br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_a'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_a'];?>
% </br>		
							<?php }}?>
															
						    
							
							<br><i>Sozial-Kommunikative Kompetenz </i>
							 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_b'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_b'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp5<$_tmp6){?>
									<font color="red"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_b'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_b'];?>
% </br></font>
								<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_b'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_b'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp7>$_tmp8){?>
									<font color="green"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_b'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_b'];?>
% </br></font>
								<?php }else{ ?>
									<br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_b'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_b'];?>
% </br>		
							 <?php }}?>

							
							<br><i>Aktivität– und umsetzungsorientierte Kompetenz</i>
							 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_c'];?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_c'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp9<$_tmp10){?>
									<font color="red"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_c'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_c'];?>
% </br></font>
								<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_c'];?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_c'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_tmp11>$_tmp12){?>
									<font color="green"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_c'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_c'];?>
% </br></font>
								<?php }else{ ?>
									<br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_c'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_c'];?>
% </br>		
							 <?php }}?>
							
							<br><i>Personale Kompetenz</i>
							 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_d'];?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_d'];?>
<?php $_tmp14=ob_get_clean();?><?php if ($_tmp13<$_tmp14){?>
									<font color="red"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_d'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_d'];?>
% </br></font>
								<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['skill_d'];?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_d'];?>
<?php $_tmp16=ob_get_clean();?><?php if ($_tmp15>$_tmp16){?>
									<font color="green"><br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_d'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_d'];?>
% </br></font>
								<?php }else{ ?>
									<br>Bewerber <?php echo $_smarty_tpl->tpl_vars['a']->value['skill_d'];?>
% Anforderung <?php echo $_smarty_tpl->tpl_vars['data']->value['postdata']['skill_d'];?>
% </br>		
							 <?php }}?>
							 <br><strong>Gesamt <?php echo $_smarty_tpl->tpl_vars['a']->value['avg'];?>
% </strong></br>	


						</li>
						
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="<?php echo $_smarty_tpl->tpl_vars['a']->value['contactid'];?>
" type="checkbox" />
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
				<input type="hidden" name="choice" value="approve">
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