<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 16:59:16
         compiled from "tpl\posts\post_searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14089521253213a15f2-86170024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc2ab37cd96584709505b0e14b2a930d7f614d8' => 
    array (
      0 => 'tpl\\posts\\post_searchresult.tpl',
      1 => 1380812351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14089521253213a15f2-86170024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521253214258f8_74186197',
  'variables' => 
  array (
    'erg' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521253214258f8_74186197')) {function content_521253214258f8_74186197($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>


<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['erg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
<li class="menu"><a class="darstellung" href="stellencontroller?id=<?php echo $_smarty_tpl->tpl_vars['b']->value['postid'];?>
&task=postdata">&nbsp; &nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['b']->value['title'];?>
</i><span class="arrow"></span></a></li>
<?php } ?>

<?php }} ?>