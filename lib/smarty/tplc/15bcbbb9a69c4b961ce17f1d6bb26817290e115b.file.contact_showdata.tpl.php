<?php /* Smarty version Smarty-3.1.13, created on 2013-09-22 13:05:00
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_showdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36365212584c6805f9-42975663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15bcbbb9a69c4b961ce17f1d6bb26817290e115b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_showdata.tpl',
      1 => 1379024045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36365212584c6805f9-42975663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5212584c75e8c8_71909958',
  'variables' => 
  array (
    'id' => 0,
    'dates' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5212584c75e8c8_71909958')) {function content_5212584c75e8c8_71909958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/suggest.js"></script>
<div id="duoselectionbuttons">
	<div class="links">
		<a id="pressed" href="#">Daten</a><a href="bewerbercontroller?task=historie&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Historie/Notizen</a>
	</div>
</div>

<div id="content">
	<?php if (($_smarty_tpl->tpl_vars['dates']->value[0]['Title']||$_smarty_tpl->tpl_vars['dates']->value[1]['Title']||$_smarty_tpl->tpl_vars['dates']->value[2]['Title'])){?>
		<ul class="pageitem">
			<li class="textbox">
				<span class="header">Historie</span>
			</li>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[0]['Title'])){?>
				<li class="text">
					<b><?php echo $_smarty_tpl->tpl_vars['dates']->value[0]['scheduledstart'];?>
</b>
					<br><?php echo $_smarty_tpl->tpl_vars['dates']->value[0]['Title'];?>
 <br/>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[0]['description'];?>
</i>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[1]['Title'])){?>
				<hr/>
				<li class="text">
					<b><?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['scheduledstart'];?>
</b>
					<br><?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['Title'];?>
 <br/>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[1]['description'];?>
</i>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['dates']->value[2]['Title'])){?>
				<hr/>
				<li class="text">
					<b><?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['scheduledstart'];?>
</b>
					<br><?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['Title'];?>
 <br/>
					<i><?php echo $_smarty_tpl->tpl_vars['dates']->value[2]['description'];?>
</i>
				</li>  
			<?php }?>
		</ul>
	<?php }?>

	<hr>

	<div id="duoselectionbuttons">
		<a id="pressed" href="">Anzeigen</a><a href="bewerbercontroller?task=edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Ändern</a>
	</div>
	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Bewerberdaten</span>
    	</li>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['firstname'])){?>			
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Vorname: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['firstname'];?>

				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['lastname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Nachname: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['lastname'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_line1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Straße/Hausnummer: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_line1'];?>

				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_postalcode'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Postleitzahl: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_postalcode'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_city'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Ort: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_city'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['telephone1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Telefonnummer: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['telephone1'];?>

				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['mobilephone'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Mobil: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['mobilephone'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['emailaddress1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;E-Mail: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['emailaddress1'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['fr_positionidname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Position: </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['fr_positionidname'];?>

				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['owneridname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Verantwortliche(r): </strong><br>
					&ensp;<?php echo $_smarty_tpl->tpl_vars['info']->value['owneridname'];?>

				</span>
			</li> 
		<?php }?>
	</ul>
	
	<?php if (($_smarty_tpl->tpl_vars['info']->value['postid'])){?>
		<ul class="pageitem">
        	<li class="textbox">
        		<span class="header">Stelle - zum Weiterleiten bitte klicken</span>
        	</li>
			<li class="menu">
				<a class="darstellung" href="stellencontroller?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['postid'];?>
&task=postdata"><?php echo $_smarty_tpl->tpl_vars['info']->value['posttitle'];?>
<span class="arrow"></span></a>
			</li>
		</ul>
	<?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>