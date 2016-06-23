{include file='header.tpl'}

<div id="content">
	<span class="graytitle">Titel</span>
		<ul class="pageitem">
			<li class="textbox">
				{$data.title}
			</li>
		</ul>
		
	<span class="graytitle">Beschreibung</span>
		<ul class="pageitem">
			<li class="textbox">
				{$data.description}
			</li>
		</ul>
			
		<form action="workflowcontroller?task=approve" method="post">
				
		<span class="graytitle">Auswahl</span>
			<ul class="pageitem">
				<li class="radiobutton"><span class="name">Genehmigen</span>
					<input name="choice" type="radio" value="approve"checked="checked" />
				</li>
				<li class="radiobutton"><span class="name">Ablehnen</span>
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
			<li class="button">
				<input type="hidden" name="id" value="{$workitem}">
			<input name="Submit input" type="submit" value="Abschicken" /></li>
		</ul>

</div>
{include file='footer.tpl'}
