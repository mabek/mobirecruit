<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 22:07:13
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_editdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2622852191271468c18-30387990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ca1a714f77db2b9f32d1e10ca116f83d10cbf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_editdata.tpl',
      1 => 1377275089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2622852191271468c18-30387990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'dates' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5219127163ca42_50982980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5219127163ca42_50982980')) {function content_5219127163ca42_50982980($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/suggest.js"></script>
<div id="tributton">
	<div class="links">
		<a id="pressed" href="#">Daten</a><a href="bewerbercontroller?task=historie&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Historie/Notizen</a><a href="bewerbercontroller?task=funktionen&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Funktionen</a>
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
		<a href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Anzeigen</a><a id="pressed" href="bewerbercontroller?task=historie&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Ändern</a>
	</div>

	<form action="bewerbercontroller?task=update" method="post">
	<ul class="pageitem">
		<li class="textbox">
    		<span class="header">Bewerberdaten</span>
    	</li>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['firstname'])){?>			
			<li class="smallfield">
				<span class="name1">
					<strong>Vorname: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['firstname'];?>
" type="text" name="firstname"/>
				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['lastname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Nachname: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['lastname'];?>
" type="text" name="lastname"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_line1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Straße/Hausnummer: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_line1'];?>
" type="text" name="address1_line1"/>
				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_postalcode'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Postleitzahl: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_postalcode'];?>
" type="text" name="address1_postalcode"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['address1_city'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Ort: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['address1_city'];?>
" type="text" name="address1_city"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['telephone1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Telefonnummer: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['telephone1'];?>
" type="text" name="telephone1"/>
				</span>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['mobilephone'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Mobil: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['mobilephone'];?>
" type="text" name="mobilephone"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['emailaddress1'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>E-Mail: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['emailaddress1'];?>
" type="text" name="emailaddress1"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['fr_positionidname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Position: </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['fr_positionidname'];?>
" type="text" name="fr_positionidname"/>
				</span>
			</li> 
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['info']->value['owneridname'])){?>
			<li class="smallfield">
				<span class="name1">
					<strong>Verantwortliche(r): </strong>
					<input placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['owneridname'];?>
" type="text" name="owneridname"/>
				</span>
			</li> 
		<?php }?>
		<input type="hidden" name="task" value="edit"/>
	</ul>
	<ul class="pageitem">
		<li class="button">
			<input type="submit" value="Speichern"/>
			<input type="hidden" name="task" value="update"/>
		</li>
	</ul>
	</form>
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