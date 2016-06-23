<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 16:52:38
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:859351efd0a6ef3e21-89561998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37844da4d57f91e1d7765b1a855fec536813110' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\start.tpl',
      1 => 1380709770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859351efd0a6ef3e21-89561998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51efd0a704b885_76459088',
  'variables' => 
  array (
    'act' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51efd0a704b885_76459088')) {function content_51efd0a704b885_76459088($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<!-- Marius Becker 24.08.2013: Vorerst auskommentiert da unfunktional
	<ul class="pageitem">
		<li class="textbox">
			<span class="header">Termine</span>
		</li>
		<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['a']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['a']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->iteration++;
 $_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration === $_smarty_tpl->tpl_vars['a']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['last'] = $_smarty_tpl->tpl_vars['a']->last;
?>
			<li class="text">
				<b><?php echo $_smarty_tpl->tpl_vars['a']->value['scheduledstart'];?>
</b>
				<br><?php echo $_smarty_tpl->tpl_vars['a']->value['Title'];?>

				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['last']){?>
					</li>
				<?php }else{ ?>
					<hr/>
					</li>
				<?php }?>
		<?php } ?>
	</ul>
	-->
	
	<span class="graytitle">Willkommen</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Willkommen im Mobirecruit!</span><p>
			Mit Mobirecruit können Sie jederzeit auf Ihre Recruting-Prozesse zugreifen und sind somit stets bestens informiert.</p>
		</li>
	</ul>
	
	<span class="graytitle">Aktionen</span>
	<ul class="pageitem">
		<li class="menu">
			<a href="maincontroller?task=Workflow">
				<img alt="list" src="images/workflow.jpg" />
				<span class="name">Workflow</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Bewerber">
				<img alt="list" src="images/ico_16_2.gif" />
				<span class="name">Bewerber</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Stellen">
				<img alt="wordpress" src="images/ico_16_1.gif" />
				<span class="name">Stellen</span>
				<span class="arrow"></span>
			</a>
		</li>
		<!-- Marius Becker 24.08.2013: Vorerst auskommentiert da unfunktional
		<li class="menu">
			<a href="maincontroller?task=Applications">
				<img alt="music" src="images/ico_18_productcatalog.gif" />
				<span class="name">Bewerbungen</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Kalender">
				<img alt="store" src="images/18_calendar.gif" />
				<span class="name">Kalender</span>
				<span class="arrow"></span>
			</a>
		</li>
		-->
	</ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>