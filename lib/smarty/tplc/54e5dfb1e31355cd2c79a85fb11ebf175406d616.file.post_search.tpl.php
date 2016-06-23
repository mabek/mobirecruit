<?php /* Smarty version Smarty-3.1.13, created on 2013-10-03 16:56:54
         compiled from "tpl\posts\post_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18471524d85b6eef613-50724436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e5dfb1e31355cd2c79a85fb11ebf175406d616' => 
    array (
      0 => 'tpl\\posts\\post_search.tpl',
      1 => 1336485758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18471524d85b6eef613-50724436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524d85b6f33d29_08942675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d85b6f33d29_08942675')) {function content_524d85b6f33d29_08942675($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<div class="searchbox">
	<form action="stellencontroller" method="post">			
		<fieldset><input id="eingabe" placeholder="Stelle suchen" type="text" name="Suche" onkeyup="load('controller_stellen.php')"/>
		<input type="hidden" name="task" value="postdata" />
</fieldset>
</form>
</div>

<ul class="pageitem">
<li class="textbox"><span class="header">Suchergebnis</span></li>

<div id="suchergebnisse"></div>
</ul>



<div>
<ul class="pageitem">
<li class="textbox"><span class="header">Stelle neu anlegen</span></li>
<li class="menu">
<a href="stellencontroller?task=neu">		
		<img alt="kunde" src="images/ico_16_1.gif" />
		<span class="name">Neue Stelle</span>
		<span class="arrow"></span>
		</a>
		</li>
		</ul>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>