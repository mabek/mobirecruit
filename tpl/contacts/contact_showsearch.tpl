{foreach item=b from=$erg}
	<li class="menu">
		<a class="darstellung" href="bewerbercontroller?task=CustomerData&id={$b.contactid}">
			&ensp;{$b.firstname} <i>{$b.lastname}</i>
			<span class="arrow"></span>
		</a>
	</li>
{/foreach}