<?php

if($_GET['attribute'] == 'health')
{
	$h = rand(6,8);
	$hp = ($h/10)*100;
	echo '
		<div class="attribute progress health" style="width: '.$hp.'%;"></div>
	    <div class="attribute label">Health: '.$h.'</div>
    ';
}
if($_GET['attribute'] == 'stamina')
{
	$s = rand(5,6);
	$sp = ($s/10)*100;
	echo '
		<div class="attribute progress stamina" style="width: '.$sp.'%;"></div>
	    <div class="attribute label">Stamina: '.$s.'</div>
    ';
}
if($_GET['attribute'] == 'will')
{
	$w = rand(5,8);
	$wp = ($w/8)*100;
	echo '
		<div class="attribute progress will" style="width: '.$wp.'%;"></div>
	    <div class="attribute label">Will: '.$w.'</div>
    ';
}

?>