{include file='header.tpl'}


<div id="content">
		{if ({$role}) == 'manager'}

		<ul class="pageitem">
			
			<li class="menu"><a href="workflowcontroller?task=start">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Neue Stelle anlegen</span><span class="arrow"></span></a></li>
			
			<li class="menu"><a href="workflowcontroller?task=start_oldpost">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Vorhandene Stelle besetzen</span><span class="arrow"></span></a></li>
			
				
			<li class="menu"><a href="workflowcontroller">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Aktualisieren</span><span class="arrow"></span></a></li>
		</ul>
		{else}
		<ul class="pageitem">
			<li class="menu"><a href="workflowcontroller">
			<img alt="list" src="images/workflow.jpg" /><span class="name">Aktualisieren</span><span class="arrow"></span></a></li>
		</ul>
		{/if}
	
		
		<span class="graytitle">Meine Workitems</span>
		<ul class="pageitem">
									
				{foreach item=a from=$workitems name=loop}
					{if ($a.workitem_id)}
						<li class="textbox">
						<a href="workflowcontroller?task=process&id={$a.workitem_id}">
						<span class="header">  {$a.name} </span><p>
								
						{$a.title}</p>
						<span class="arrow"></span></a></li>
					{/if}
				{/foreach}
		</ul>
		
		{if ({$role}) == 'manager'}
		
			<span class="graytitle">Workflows meiner Stellen</span>
			<ul class="pageitem">
										
					{foreach item=b from=$workitems.myposts name=loop}

					<li class="textbox">
					<span class="header">  {$b.name} </span><p>
						
					{$b.title}</p>
					<span class="arrow"></span></a></li>
					{/foreach}
			</ul>
		{/if}

		
</div>
{include file='footer.tpl'}
