<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:03:23
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\workflow\workflow_start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2442051efd0a80d1675-34860981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2804babeafcb14e5908adde15d4ffdb12f1d65af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\workflow\\workflow_start.tpl',
      1 => 1380391398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442051efd0a80d1675-34860981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd0a8138ba6_92600515',
  'variables' => 
  array (
    'role' => 0,
    'workitems' => 0,
    'a' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd0a8138ba6_92600515')) {function content_51efd0a8138ba6_92600515($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="content">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1)=='manager'){?>

		<ul class="pageitem">
			
			<li class="menu"><a href="workflowcontroller?task=start">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Neue Stelle anlegen</span><span class="arrow"></span></a></li>
			
			<li class="menu"><a href="workflowcontroller?task=start_oldpost">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Vorhandene Stelle besetzen</span><span class="arrow"></span></a></li>
			
				
			<li class="menu"><a href="workflowcontroller">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Aktualisieren</span><span class="arrow"></span></a></li>
		</ul>
		<?php }else{ ?>
		<ul class="pageitem">
			<li class="menu"><a href="workflowcontroller">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Aktualisieren</span><span class="arrow"></span></a></li>
		</ul>
		<?php }?>
	
		
		<span class="graytitle">Meine Workitems</span>
		<ul class="pageitem">
									
				<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
					<?php if (($_smarty_tpl->tpl_vars['a']->value['workitem_id'])){?>
						<li class="textbox">
						<a href="workflowcontroller?task=process&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['workitem_id'];?>
">
						<span class="header">  <?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
 </span><p>
								
						<?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</p>
						<span class="arrow"></span></a></li>
					<?php }?>
				<?php } ?>
		</ul>
		
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2)=='manager'){?>
		
			<span class="graytitle">Workflows meiner Stellen</span>
			<ul class="pageitem">
										
					<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workitems']->value['myposts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>

					<li class="textbox">
					<span class="header">  <?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
 </span><p>
						
					<?php echo $_smarty_tpl->tpl_vars['b']->value['title'];?>
</p>
					<span class="arrow"></span></a></li>
					<?php } ?>
			</ul>
		<?php }?>

		
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>