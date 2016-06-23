{include file='header.tpl'}

<div id="content">
	<!-- Marius Becker 24.08.2013: Vorerst auskommentiert da unfunktional
	<ul class="pageitem">
		<li class="textbox">
			<span class="header">Termine</span>
		</li>
		{foreach item=a from=$act name=loop}
			<li class="text">
				<b>{$a.scheduledstart}</b>
				<br>{$a.Title}
				{if $smarty.foreach.loop.last}
					</li>
				{else}
					<hr/>
					</li>
				{/if}
		{/foreach}
	</ul>
	-->
	
	<span class="graytitle">Willkommen</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Willkommen im Mobirecruit!</span><p>
			Mit Mobirecruit können Sie jederzeit auf Ihre Recruting-Prozesse zugreifen und sind somit stets bestens informiert.</p>
		</li>
	</ul>
	
	<span class="graytitle">Aktionen</span>
	<ul class="pageitem">
		<li class="menu">
			<a href="maincontroller?task=Workflow">
				<img alt="list" src="images/workflow.jpg" />
				<span class="name">Workflow</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Bewerber">
				<img alt="list" src="images/ico_16_2.gif" />
				<span class="name">Bewerber</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Stellen">
				<img alt="wordpress" src="images/ico_16_1.gif" />
				<span class="name">Stellen</span>
				<span class="arrow"></span>
			</a>
		</li>
		<!-- Marius Becker 24.08.2013: Vorerst auskommentiert da unfunktional
		<li class="menu">
			<a href="maincontroller?task=Applications">
				<img alt="music" src="images/ico_18_productcatalog.gif" />
				<span class="name">Bewerbungen</span>
				<span class="arrow"></span>
			</a>
		</li>
		<li class="menu">
			<a href="maincontroller?task=Kalender">
				<img alt="store" src="images/18_calendar.gif" />
				<span class="name">Kalender</span>
				<span class="arrow"></span>
			</a>
		</li>
		-->
	</ul>
</div>

{include file='footer.tpl'}