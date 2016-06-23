<?xml version="1.0" encoding="ISO-8859-1"?>

{* Seitenheader einbauen *}
{include file='header.tpl'}

<div id="content">
	<form action="workflowcontroller?task=input" method="post">
		<span class="graytitle">Auswahlmethode wählen</span>
			<ul class="pageitem">
			 <li class="checkbox">
					<span class="name">Assessment Center </span>
					<input name="assessment" type="checkbox" />
			</li>	
			<li class="checkbox">		
				<span class="name">Bewerbungsgespräche</span>				
				<input name="interview" type="checkbox" />
			</li>			
			<li class="checkbox">		
					<span class="name">Auswahltest </span>	
					<input name="test" type="checkbox" />
					
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
<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
			</ul>
			
			</ul>
			<ul class="pageitem">
				<input type="hidden" name="workitem" value="{$workitem}"">
				<input type="hidden" name="id" value="{$workitem}"">
				<input type="hidden" name="choice" value="approve"">
				<li class="button"><input type="submit" value="Speichern"/>
				</li>
			</ul>
	</form>
</div>

{* Seitenfooter einbauen *}
{include file='footer.tpl'}