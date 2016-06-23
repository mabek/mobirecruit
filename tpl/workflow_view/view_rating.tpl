{include file='header.tpl'}
<script>
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function() { printValue('slider1', 'rangeValue1'); printValue('slider2', 'rangeValue2'); printValue('slider3', 'rangeValue3'); printValue('slider4', 'rangeValue4'); }
</script>
<div id="content">
		<span class="graytitle">Kompetenzen bewerten</span>
			<ul class="pageitem">
			
				{foreach item=a from=$data.chosen}
					{if ($a.firstname)}
						<li class="textbox">
							<strong> <a href="bewerbercontroller?task=CustomerData&id={$a.contactid}" target="_blank" >{$a.firstname} {$a.lastname}</a></strong>
							<br>{$a.degree} {$a.profession}
							<br><a href="{$a.application}" target="_blank">Bewerbung</a> </br>
							<br><i> Fachlich-Methodische Kompetenz </i>
							
							  {if {$a.skill_a} < {$data.postdata.skill_a}}
									<font color="red"><br>Bewerber {$a.skill_a}% Anforderung {$data.postdata.skill_a}% </br></font>
								{elseif {$a.skill_a} > {$data.postdata.skill_a}}
									<font color="green"><br>Bewerber {$a.skill_a}% Anforderung {$data.postdata.skill_a}% </br></font>
								{else}
									<br>Bewerber {$a.skill_a}% Anforderung {$data.postdata.skill_a}% </br>		
							{/if}
															
						    
							
							<br><i>Sozial-Kommunikative Kompetenz </i>
							 {if {$a.skill_b} < {$data.postdata.skill_b}}
									<font color="red"><br>Bewerber {$a.skill_b}% Anforderung {$data.postdata.skill_b}% </br></font>
								{elseif {$a.skill_b} > {$data.postdata.skill_b}}
									<font color="green"><br>Bewerber {$a.skill_b}% Anforderung {$data.postdata.skill_b}% </br></font>
								{else}
									<br>Bewerber {$a.skill_b}% Anforderung {$data.postdata.skill_b}% </br>		
							 {/if}

							
							<br><i>Aktivität– und umsetzungsorientierte Kompetenz</i>
							 {if {$a.skill_c} < {$data.postdata.skill_c}}
									<font color="red"><br>Bewerber {$a.skill_c}% Anforderung {$data.postdata.skill_c}% </br></font>
								{elseif {$a.skill_c} > {$data.postdata.skill_c}}
									<font color="green"><br>Bewerber {$a.skill_c}% Anforderung {$data.postdata.skill_c}% </br></font>
								{else}
									<br>Bewerber {$a.skill_c}% Anforderung {$data.postdata.skill_c}% </br>		
							 {/if}
							
							<br><i>Personale Kompetenz</i>
							 {if {$a.skill_d} < {$data.postdata.skill_d}}
									<font color="red"><br>Bewerber {$a.skill_d}% Anforderung {$data.postdata.skill_d}% </br></font>
								{elseif {$a.skill_d} > {$data.postdata.skill_d}}
									<font color="green"><br>Bewerber {$a.skill_d}% Anforderung {$data.postdata.skill_d}% </br></font>
								{else}
									<br>Bewerber {$a.skill_d}% Anforderung {$data.postdata.skill_d}% </br>		
							 {/if}
							 <br><strong>Gesamt {$a.avg}% </strong></br>	


						</li>
						
						<li class="checkbox">
							<span class="name"> Auswählen </span>
							<input name="{$a.contactid}" type="checkbox" />
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
			</ul>

</div>

{include file='footer.tpl'}