<?xml version="1.0" encoding="ISO-8859-1"?>

{* Seitenheader einbauen *}
{include file='header.tpl'}

<div id="content">
		<span class="graytitle">Auswahlmethode wählen</span>
			<ul class="pageitem">
			 <li class="checkbox">
					<span class="name">Assessment Center </span>
					
					{if ($data.assessment)}
					<input name="assessment" type="checkbox" checked="checked"/>
					{else}
					<input name="assessment" type="checkbox" />
					{/if}
					
					
					
			</li>	
			<li class="checkbox">		
				<span class="name">Bewerbungsgespräche</span>				
				
				
				{if ($data.interview)}
					<input name="interview" type="checkbox" checked="checked"/>
					{else}
					<input name="interview" type="checkbox" />
					{/if}
					
					
			</li>			
			<li class="checkbox">		
					<span class="name">Auswahltest </span>	
					
					
					{if ($data.test)}
					<input name="test" type="checkbox" checked="checked"/>
					{else}
					<input name="test" type="checkbox" />
					{/if}
					
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
			</ul>
			
			</ul>
		
</div>

{* Seitenfooter einbauen *}
{include file='footer.tpl'}