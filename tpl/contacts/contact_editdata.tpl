{include file='header.tpl'}

<script type="text/javascript" src="js/suggest.js"></script>
<div id="content">
	{if ($dates.0.Title||$dates.1.Title||$dates.2.Title)}
		<ul class="pageitem">
			<li class="textbox">
				<span class="header">Historie</span>
			</li>
			{if ($dates.0.Title)}
				<li class="text">
					<b>{$dates.0.scheduledstart}</b>
					<br>{$dates.0.Title} <br/>
					<i>{$dates.0.description}</i>
				</li>
			{/if}
			{if ($dates.1.Title)}
				<hr/>
				<li class="text">
					<b>{$dates.1.scheduledstart}</b>
					<br>{$dates.1.Title} <br/>
					<i>{$dates.1.description}</i>
				</li>
			{/if}
			{if ($dates.2.Title)}
				<hr/>
				<li class="text">
					<b>{$dates.2.scheduledstart}</b>
					<br>{$dates.2.Title} <br/>
					<i>{$dates.2.description}</i>
				</li>  
			{/if}
		</ul>
	{/if}

	<div id="duoselectionbuttons">
		<a href="bewerbercontroller?task=CustomerData&id={$id}">Anzeigen</a><a id="pressed" href="bewerbercontroller?task=historie&id={$id}">Ändern</a>
	</div>

	<form action="bewerbercontroller?task=update" method="post">
	<ul class="pageitem">
		<li class="textbox">
    		<span class="header">Bewerberdaten</span>
    	</li>
		{if ($info.firstname)}			
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Vorname: </strong>
					<input placeholder="{$info.firstname}" type="text" name="firstname"/>
				</span>
			</li>
		{/if}
		{if ($info.lastname)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Nachname: </strong>
					<input placeholder="{$info.lastname}" type="text" name="lastname"/>
				</span>
			</li> 
		{/if}
		{if ($info.address1_line1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Straße/Hausnummer: </strong>
					<input placeholder="{$info.address1_line1}" type="text" name="address1_line1"/>
				</span>
			</li>
		{/if}
		{if ($info.address1_postalcode)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Postleitzahl: </strong>
					<input placeholder="{$info.address1_postalcode}" type="text" name="address1_postalcode"/>
				</span>
			</li> 
		{/if}
		{if ($info.address1_city)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Ort: </strong>
					<input placeholder="{$info.address1_city}" type="text" name="address1_city"/>
				</span>
			</li> 
		{/if}
		{if ($info.telephone1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Telefonnummer: </strong>
					<input placeholder="{$info.telephone1}" type="text" name="telephone1"/>
				</span>
			</li>
		{/if}
		{if ($info.mobilephone)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Mobil: </strong>
					<input placeholder="{$info.mobilephone}" type="text" name="mobilephone"/>
				</span>
			</li> 
		{/if}
		{if ($info.emailaddress1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;E-Mail: </strong>
					<input placeholder="{$info.emailaddress1}" type="text" name="emailaddress1"/>
				</span>
			</li> 
		{/if}
		{if ($info.degree)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Abschluss: </strong>
					<input placeholder="{$info.degree}" type="text" name="degree"/>
				</span>
			</li> 
		{/if}
		{if ($info.profession)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Fachrichtung: </strong>
					<input placeholder="{$info.profession}" type="text" name="profession"/>
				</span>
			</li> 
		{/if}
		<input type="hidden" name="task" value="edit"/>
	</ul>
	<ul class="pageitem">
		<li class="button">
			<input type="submit" value="Speichern"/>
			<input type="hidden" name="task" value="update"/>
		</li>
	</ul>
	</form>
	{if ($info.postid)}
		<ul class="pageitem">
        	<li class="textbox">
        		<span class="header">Stelle - zum Weiterleiten bitte klicken</span>
        	</li>
			<li class="menu">
				<a class="darstellung" href="stellencontroller?id={$info.postid}&task=postdata">{$info.posttitle}<span class="arrow"></span></a>
			</li>
		</ul>
	{/if}
</div>

{* Seitenfooter einbauen *}
{include file='footer.tpl'}