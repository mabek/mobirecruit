<?xml version="1.0" encoding="ISO-8859-1"?>

{* Seitenheader einbauen *}
{include file='header.tpl'}

<div id="content">
		<form action="workflowcontroller?task=input" method="post">
				<ul class="pageitem">
				<li class="textbox"><span class="header">Stelle auswählen</span><p>
				Bitte die gewünschte Stelle markieren.</p>
				</ul>
						
						{foreach item=a from=$data}
							{if ($a.title)}

							<span class="graytitle">{$a.title}</span>
								<ul class="pageitem">
										<li class="textbox">
										{$a.description} 
										</li>
										<li class="radiobutton">
											<span class="name">Auswählen</span>
											<input name="postid" type="radio" value="{$a.postid}"/>
										</li>
								</ul>
							{/if}
						{/foreach}
					
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
						<input type="hidden" name="workitem" value="{$workitem}"">
						<input type="hidden" name="id" value="{$workitem}"">
						<li class="button"><input type="submit" value="Speichern"/>
						</li>
					</ul>
			</form>
</div>

{* Seitenfooter einbauen *}
{include file='footer.tpl'}