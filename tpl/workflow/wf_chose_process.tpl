		<?xml version="1.0" encoding="ISO-8859-1"?>

{* Seitenheader einbauen *}
{include file='header.tpl'}

<div id="content">
  <form action="workflowcontroller?task=input" method="post">
	
	<span class="graytitle">Interne Personalbeschaffung</span>
				<ul class="pageitem">
				  <li class="checkbox">
					<span class="name">Ausschreibung </span>
					{if ($data.stellenaus)}
					<input name="stellenaus" type="checkbox" checked="checked"/>
					{else}
					<input name="stellenaus" type="checkbox" />
					{/if}
								
				  </li>
				  <li class="checkbox">
					<span class="name">direkte Ansprache</span>
					
					
					{if ($data.ansprache)}
					<input name="ansprache" type="checkbox" checked="checked"/>
					{else}
					<input name="ansprache" type="checkbox" />
					{/if}
					
				  </li>
				  <li class="checkbox">
				  
					<span class="name">Anfrage eines Mitarbeiters</span>
					
					{if ($data.anfrage)}
					<input name="anfrage" type="checkbox"  checked="checked"/>
					{else}
					<input name="anfrage" type="checkbox" />
					{/if}
					
					
				  </li>
				</ul>

			 <span class="graytitle">Externe Personalbeschaffung</span>
			<ul class="pageitem">
			  <li class="checkbox">
				<span class="name">Internetanzeige </span>
				
				{if ($data.internet)}
					<input name="internet" type="checkbox" checked="checked"/>
					{else}
				<input name="internet" type="checkbox" />
					{/if}
				
				
			  </li>
			  <li class="checkbox">
				<span class="name">Personalberater</span>
				
					{if ($data.personalberater)}
						<input name="personalberater" type="checkbox" checked="checked"/>
					{else}
					<input name="personalberater" type="checkbox" />
					{/if}
			
				
			  </li>
			  <li class="checkbox">
				<span class="name">Zeitarbeitsfirmen</span>
				
				{if ($data.zeitarbeit)}
						<input name="zeitarbeit" type="checkbox"  checked="checked"/>
					{else}
						<input name="zeitarbeit" type="checkbox" />
					{/if}
			
				
			  </li>
			   <li class="checkbox">
				<span class="name">Bundesagentur f�r Arbeit</span>
				
					{if ($data.baa)}
						<input name="baa" type="checkbox"   checked="checked"/>
					{else}
						<input name="baa" type="checkbox" />
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
						<li class="textbox">
							<textarea placeholder="Kommentar" name="TextArea" rows="4"></textarea>
						</li>
				</ul>
			
			
				 <input type="hidden" name="workitem" value="{$workitem}">
				 <input type="hidden" name="id" value="{$workitem}">
				 <input type="hidden" name="task" value="input">
				<ul class="pageitem">
						<li class="button"><input type="submit" value="Speichern"/>
				</li>
			</ul>
			
			 </form>
 
</div>{* Seitenfooter einbauen *}
{include file='footer.tpl'}
