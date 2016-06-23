<?xml version="1.0" encoding="ISO-8859-1"?>

{foreach item=b from=$erg}
<li class="menu"><a class="darstellung" href="stellencontroller?id={$b.postid}&task=postdata">&nbsp; &nbsp; {$b.title}</i><span class="arrow"></span></a></li>
{/foreach}

