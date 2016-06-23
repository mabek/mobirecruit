<?xml version="1.0" encoding="ISO-8859-1"?>

{include file='header.tpl'}

<div id="content">
	<form action="stellencontroller?task=create" method="post">
 	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Stellendaten hinzufügen</span>
    	</li>

		<li class="smallfield">
			<span class="name">Titel</span>
			<input placeholder="hinzufügen" type="text" name="title" />
		</li>
		<li class="smallfield">
			<span class="name">Beschreibung</span>
			<input placeholder="hinzufügen" type="text" name="description" />
		</li>
		<li class="smallfield">
			<span class="name">Personalbetreuer</span>
			<input placeholder="hinzufügen" type="text" name="personnel" />
		</li>
		<li class="smallfield">
			<span class="name">Grad des Abschlusses</span>
			<input placeholder="hinzufügen" type="text" name="degree" />
		</li>
		<li class="smallfield">
			<span class="name">Fachrichtung</span>
			<input placeholder="hinzufügen" type="text" name="profession" />
		</li>
 		<input type="hidden" name="task" value="create"/><p>
	</ul>
 
	<ul class="pageitem">
		<li class="button"><input type="submit" value="Speichern"/>
			<input type="hidden" name="task" value="create" />
		</li>
 	</ul>
 
</div>

{include file='footer.tpl'}