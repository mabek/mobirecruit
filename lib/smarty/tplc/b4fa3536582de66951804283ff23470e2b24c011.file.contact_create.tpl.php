<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 20:07:15
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181565218f653f037c4-02552613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4fa3536582de66951804283ff23470e2b24c011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_create.tpl',
      1 => 1377262450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181565218f653f037c4-02552613',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5218f654010d82_54763827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5218f654010d82_54763827')) {function content_5218f654010d82_54763827($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<form action="bewerbercontroller?task=create" method="post">
 		<ul class="pageitem">
        	<li class="textbox">
        		<span class="header">Bewerberdaten hinzufügen</span>
        	</li>
			<li class="smallfield">
				<span class="name">Vorname</span>
				<input placeholder="hinzufügen" type="text" name="firstname"/>
			</li>
 			<li class="smallfield">
 				<span class="name">Nachname</span>
 				<input placeholder="hinzufügen" type="text" name="lastname"/>
 			</li>
			<li class="smallfield">
				<span class="name">Straße/Hausnummer</span>
				<input placeholder="hinzufügen" type="text" name="address1_line1"/>
			</li>
			<li class="smallfield">
				<span class="name">Postleitzahl</span>
				<input placeholder="hinzufügen" type="text" name="address1_postalcode"/>
			</li>
			<li class="smallfield">
				<span class="name">Ort</span>
				<input placeholder="hinzufügen" type="text" name="address1_city"/>
			</li>
			<li class="smallfield">
				<span class="name">Telefonnummer</span>
				<input placeholder="hinzufügen" type="text" name="telephone1"/>
			</li>
			<li class="smallfield">
				<span class="name">E-Mail</span>
				<input placeholder="hinzufügen" type="text" name="emailaddress1"/>
			</li>
			<li class="smallfield">
				<span class="name">Firma</span>
				<input placeholder="hinzufügen" type="text" name="accountidname"/>
			</li>
			<li class="smallfield">
				<span class="name">Position</span>
				<input placeholder="hinzufügen" type="text" name="fr_positionid"/>
			</li>
 			<input type="hidden" name="task" value="create"/>
		</ul>
 		
 		<ul class="pageitem">
			<li class="button">
				<input type="submit" value="Speichern"/>
				<input type="hidden" name="task" value="create"/>
			</li>
		</ul>
	</form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>