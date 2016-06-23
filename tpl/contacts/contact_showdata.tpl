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
		<a id="pressed" href="">Anzeigen</a><a href="bewerbercontroller?task=edit&id={$id}">Ändern</a>
	</div>
	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Bewerberdaten</span>
    	</li>
		{if ($info.firstname)}			
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Vorname: </strong><br>
					&ensp;{$info.firstname}
				</span>
			</li>
		{/if}
		{if ($info.lastname)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Nachname: </strong><br>
					&ensp;{$info.lastname}
				</span>
			</li> 
		{/if}
		{if ($info.address1_line1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Straße/Hausnummer: </strong><br>
					&ensp;{$info.address1_line1}
				</span>
			</li>
		{/if}
		{if ($info.address1_postalcode)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Postleitzahl: </strong><br>
					&ensp;{$info.address1_postalcode}
				</span>
			</li> 
		{/if}
		{if ($info.address1_city)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Ort: </strong><br>
					&ensp;{$info.address1_city}
				</span>
			</li> 
		{/if}
		{if ($info.telephone1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Telefonnummer: </strong><br>
					&ensp;{$info.telephone1}
				</span>
			</li>
		{/if}
		{if ($info.mobilephone)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Mobil: </strong><br>
					&ensp;{$info.mobilephone}
				</span>
			</li> 
		{/if}
		{if ($info.emailaddress1)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;E-Mail: </strong><br>
					&ensp;{$info.emailaddress1}
				</span>
			</li> 
		{/if}
		{if ($info.degree)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Abschluss: </strong><br>
					&ensp;{$info.degree}
				</span>
			</li> 
		{/if}
		{if ($info.profession)}
			<li class="smallfield">
				<span class="name1">
					<strong>&ensp;Fachrichtung: </strong><br>
					&ensp;{$info.profession}
				</span>
			</li> 
		{/if}
	</ul>
	
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

{include file='footer.tpl'}