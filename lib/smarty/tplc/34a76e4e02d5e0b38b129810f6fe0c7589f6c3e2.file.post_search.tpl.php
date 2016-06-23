<?php /* Smarty version Smarty-3.1.13, created on 2013-08-19 19:17:16
         compiled from "C:\xampp\htdocs\mobirecruit\tpl\posts\post_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82085212531cc91279-44698217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a76e4e02d5e0b38b129810f6fe0c7589f6c3e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mobirecruit\\tpl\\posts\\post_search.tpl',
      1 => 1336485758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82085212531cc91279-44698217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5212531ccfc425_57337525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5212531ccfc425_57337525')) {function content_5212531ccfc425_57337525($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>



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