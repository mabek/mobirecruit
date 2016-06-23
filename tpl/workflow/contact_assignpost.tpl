{include file='header.tpl'}

<script type="text/javascript" src="js/suggest.js"></script>
<div id="content">
	<form action="workflowcontroller?task=input" method="post">
		<span class="graytitle">Bewerber auswählen</span>
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
<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
			</ul>

			<ul class="pageitem">
				<input type="hidden" name="workitem" value="{$workitem}"">
				<input type="hidden" name="id" value="{$workitem}"">
				<li class="button">
					<input type="submit" value="Speichern"/>
				</li>
			</ul>
	</form>
</div>

{include file='footer.tpl'}