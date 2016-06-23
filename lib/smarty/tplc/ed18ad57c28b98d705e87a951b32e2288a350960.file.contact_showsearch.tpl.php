<?php /* Smarty version Smarty-3.1.13, created on 2013-08-24 22:06:56
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\contacts\contact_showsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32007521258482c1254-71370596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed18ad57c28b98d705e87a951b32e2288a350960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\contacts\\contact_showsearch.tpl',
      1 => 1377274793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32007521258482c1254-71370596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5212584834b7e1_79926124',
  'variables' => 
  array (
    'erg' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5212584834b7e1_79926124')) {function content_5212584834b7e1_79926124($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>


<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['erg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
	<li class="menu">
		<a class="darstellung" href="bewerbercontroller?task=CustomerData&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['contactid'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['b']->value['firstname'];?>
 <i><?php echo $_smarty_tpl->tpl_vars['b']->value['lastname'];?>
</i>
			<span class="arrow"></span>
		</a>
	</li>
<?php } ?><?php }} ?>