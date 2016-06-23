{include file='header.tpl'}

<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<div class="searchbox">
	<form action="bewerbercontroller" method="post">			
		<fieldset>
			<input id="eingabe" placeholder="Name eingeben" type="text" name="Suche" onkeyup="load('controller_bewerber.php')"/>
			<input type="hidden" name="task" value="CustomerData"/>
		</fieldset>
	</form>
</div>

<ul class="pageitem">
	<li class="textbox">
		<span class="header">Suchergebnis</span>
	</li>
	<div id="suchergebnisse"></div>
</ul>

<div>
	<ul class="pageitem">
		<li class="textbox">
			<span class="header">Bewerber anlegen</span>
		</li>
		<li class="menu">
			<a href="bewerbercontroller?task=neu">
				<img alt="kunde" src="images/ico_16_2.gif"/>
				<span class="name">Neuer Bewerber</span>
				<span class="arrow"></span>
			</a>
		</li>
	</ul>
</div>

{include file='footer.tpl'}