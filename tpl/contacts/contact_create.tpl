{include file='header.tpl'}

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
				<span class="name">Abschluss</span>
				<input placeholder="hinzufügen" type="text" name="degree"/>
			</li>
			<li class="smallfield">
				<span class="name">Fachrichtung</span>
				<input placeholder="hinzufügen" type="text" name="profession"/>
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

{include file='footer.tpl'}