{include file='header.tpl'}

<div id="content">
	{if ($dates.0.Title||$dates.1.Title||$dates.2.Title)}
		<ul class="pageitem">
			<li class="textbox">
				<span class="header">kommende Termine</span>
			</li>
			{if ($dates.0.Title)}
				<li class="text">
					<b>$dates.0.scheduledstart}<b><br>
					{$dates.0.Title}<br>
					<i>{$dates.0.Description}</i>
				</li>
			{/if}
			{if ($dates.1.Title)}
				<hr/>
				<li class="text">
					<b>{$dates.1.scheduledstart}</b><br>
					{$dates.1.Title}<br>
					<i>{$dates.1.Description}</i>
				</li>
			{/if}
			{if ($dates.3.Title)}
				<hr/>
				<li class="text">
					<b>{$dates.2.scheduledstart}</b><br>
					{$dates.2.Title}<br>
					<i>{$dates.2.Description}</i>
				</li>  
			{/if}
		</ul>
	{/if}

  	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Stellendaten</span>
    	</li>
			
		{if ($info.title)}	
			<li class="textbox">
				<span class="name1">
					<strong>Titel:</strong><br>
					{$info.title}
				</span>
			</li>
		{/if}

		{if ($info.description)}
			<li class="textbox">
				<span class="name1">
					<strong>Beschreibung:</strong><br>
					{$info.description}
				</span>
			</li>
		{/if}

		{if ($info.executive)}
			<li class="textbox">
				<span class="name1">
					<strong>Verantw. Führungskraft:</strong><br>
					{$info.executive}
				</span>
			</li> 
		{/if}

		{if ($info.personnel)}
			<li class="textbox">
				<span class="name1">
					<strong>Personalbetruer:</strong><br>
					{$info.personnel}
				</span>
			</li> 
		{/if}
		
		{if ($info.degree)}
			<li class="textbox">
				<span class="name1">
					<strong>Abschluss:</strong><br>
					{$info.degree}
				</span>
			</li> 
		{/if}
		
		{if ($info.profession)}
			<li class="textbox">
				<span class="name1">
					<strong>Fachrichtung:</strong><br>
					{$info.profession}
				</span>
			</li> 
		{/if}
		
 		<input type="hidden" name="task" value="create"/>
 	</ul>
  	<ul class="pageitem">
    	<li class="textbox">
    		<span class="header">Kontakte - zum Weiterleiten bitte klicken</span>
    	</li>
		{foreach item=b from=$bewerber}
			<li class="menu">
				<a class="darstellung" href="bewerbercontroller?task=CustomerData&id={$b.contactid}">&ensp;{$b.firstname} {$b.lastname} <span class="arrow"></span></a>
			</li>
		{/foreach} 
	</ul>
	

		{foreach item=process from=$processes}
		{if {$process.active} == 1}
					<span class="graytitle">zugehörige aktive Prozesse</span>

		{else}
					<span class="graytitle">zugehörige abgeschlossene Prozesse</span>

		{/if}
				<ul class="pageitem">
					<li class="textbox">
						{$process.comment}
					</li>
			</ul>
		{/foreach} 
	</ul>
</div>

{include file='footer.tpl'}