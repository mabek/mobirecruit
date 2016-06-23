{include file='header.tpl'}
<script type="text/javascript" src="js/suggest.js"></script>

<div id="content">
	<form action="workflowcontroller?task=approve" method="post">
		<span class="graytitle">Bewerberauswahl</span>
			<ul class="pageitem">
				{foreach item=a from=$data.chosen}
					{if ($a.firstname)}
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id={$a.contactid}" target="_blank" >{$a.firstname} {$a.lastname}</a></strong>
							<br>{$a.degree} {$a.profession}</br>
							<br><a href="{$a.application}" target="_blank" >Bewerbung</a> </br>

						</li>
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="{$a.contactid}" type="checkbox" checked="checked" />
					  	</li>
					{/if}
				{/foreach}
				
				{foreach item=a from=$data.notchosen}
					{if ($a.firstname)}
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id={$a.contactid}" target="_blank" >{$a.firstname} {$a.lastname}</a></strong>
							<br>{$a.degree} {$a.profession}</br>
							<br><a href="{$a.application}" target="_blank" >Bewerbung</a> </br>
						</li>
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="{$a.contactid}" type="checkbox" />
					  	</li>
					{/if}
				{/foreach}
			</ul>		
		
		<span class="graytitle">Auswahl</span>
			<ul class="pageitem">
				<li class="radiobutton">
					<span class="name">Genehmigen</span>
					<input name="choice" type="radio" value="approve"checked="checked" />
				</li>
				<li class="radiobutton">
					<span class="name">Ablehnen</span>
					<input name="choice" type="radio" value="disprove" />
				</li>
			</ul>
			
			<span class="graytitle">Link zur Stelle</span>
			<ul class="pageitem">
					<li class="textbox">
						<a href="stellencontroller?id={$context.subjectid}&task=postdata" target="_blank" >{$context.title}</a>
					</li>
			
			</ul>
			
		<span class="graytitle">Kommentar</span>
			<ul class="pageitem">
				{if ($context.comment)}
					<li class="textbox">
						{$context.comment}
					</li>
				{/if}
					<li class="textbox">
						<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
					</li>
			</ul>
			<ul class="pageitem">
				<input type="hidden" name="id" value="{$workitem}">
				<input type="hidden" name="workitem" value="{$workitem}">
				<li class="button">
					<input name="Submit input" type="submit" value="Abschicken"/>
				</li>
			</ul>
	</form>
</div>
{include file='footer.tpl'}