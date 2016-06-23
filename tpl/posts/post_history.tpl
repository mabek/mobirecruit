
{include file='header.tpl'}


<div id="duoselectionbuttons">
	<div class="links">
		<a href="stellencontroller?task=postdata&id={$id}">Daten</a><a id="pressed" href="#">Historie/Notizen</a></div>
</div>

<div id="content">
 <ul class="pageitem">
           <li class="textbox"><span class="header">Stellenhistorie</span></li>
			{if ($info)}
			{foreach item=h from=$info name=loop}
			<li class="text"><b>{$h.scheduledstart}</b>
			<br>{$h.Title} <br/><i>{$h.Description}</i>
			{if $smarty.foreach.loop.last}
			</li>
			{else}
			</li>
			<hr/>
			{/if}
			
			{/foreach}
			{else}
			<li class="text">Keine Einträge vorhanden!</li>
			{/if}
</ul>
<hr>
 <ul class="pageitem">
		<li class="textbox"><span class="header">Notizen</span></li>
			
					
            <form action="stellencontroller?id={$id}" method="post">

			<li class="textbox"><span class="header">Neue Notiz</span><textarea name="TextArea" rows="auto"></textarea></li>
			
			</ul>
			
			<ul class="pageitem">
			<li class="button"><input type="submit" value="Notiz hinzufügen"/>
			<input type="hidden" name="task" value="addnote" />
			</li>
			 </ul>
			
			
			</form>
</div>

{include file='footer.tpl'}