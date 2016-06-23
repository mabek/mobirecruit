<?xml version="1.0" encoding="ISO-8859-1"?>

{* Seitenheader einbauen *}
{include file='header.tpl'}

<div id="content">
	<form action="workflowcontroller?task=input" method="post">
 		<ul class="pageitem">
        	<li class="textbox">
        		<span class="header">Stellendaten hinzufügen</span>
        	</li>
			<li class="smallfield">
				<span class="name">Titel</span>
				<input placeholder="hinzufügen" type="text" name="title"/>
			</li>
			<li class="smallfield">
				<span class="name">Beschreibung</span>
				<input placeholder="hinzufügen" type="text" name="description"/>
			</li>
		</ul>
 		<ul class="pageitem">
			<li class="button">
				<input type="submit" value="Speichern"/>
				<input type="hidden" name="id" value="{$workitem}"/>
			</li>
		</ul>
 	</form>
</div>

{* Seitenfooter einbauen *}
{include file='footer.tpl'}