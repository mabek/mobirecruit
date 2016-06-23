{include file='header.tpl'}

<div id="content">
	<form action="workflowcontroller?task=input" method="post">
		<span class="graytitle">Kompetenzen bewerten</span>
			<ul class="pageitem">
			
			
				{foreach item=a from=$data.chosen}
					{if ($a.firstname)}
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id={$a.contactid}" target="_blank" >{$a.firstname} {$a.lastname}</a></strong>
							<br>{$a.degree} {$a.profession}
							<br><a href="{$a.application}" target="_blank">Bewerbung</a> </br>
							
							<br><i> Fachlich-Methodische Kompetenz </i> </br>
							Schlecht
							<input type="radio" name="a_{$a.contactid}" value="1">
							<input type="radio" name="a_{$a.contactid}" value="25">
							<input type="radio" name="a_{$a.contactid}" value="50">
							<input type="radio" name="a_{$a.contactid}" value="75">
							<input type="radio" name="a_{$a.contactid}" value="100">
							Gut
							
							<br><i>Sozial-Kommunikative Kompetenz </i> </br>
							Schlecht
							<input type="radio" name="b_{$a.contactid}" value="1">
							<input type="radio" name="b_{$a.contactid}" value="25">
							<input type="radio" name="b_{$a.contactid}" value="50">
							<input type="radio" name="b_{$a.contactid}" value="75">
							<input type="radio" name="b_{$a.contactid}" value="100">
							Gut
							
														
							<br><i>Aktivität– und umsetzungsorientierte Kompetenz</i> </br>
							Schlecht
							<input type="radio" name="c_{$a.contactid}" value="1">
							<input type="radio" name="c_{$a.contactid}" value="25">
							<input type="radio" name="c_{$a.contactid}" value="50">
							<input type="radio" name="c_{$a.contactid}" value="75">
							<input type="radio" name="c_{$a.contactid}" value="100">
							Gut
						
							
							<br><i>Personale Kompetenz</i> </br>
							Schlecht
							<input type="radio" name="d_{$a.contactid}" value="1">
							<input type="radio" name="d_{$a.contactid}" value="25">
							<input type="radio" name="d_{$a.contactid}" value="50">
							<input type="radio" name="d_{$a.contactid}" value="75">
							<input type="radio" name="d_{$a.contactid}" value="100">
							Gut
						
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