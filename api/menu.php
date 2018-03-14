<?php

if($_GET['menuid'] == "settings")
{
	include('../views/menus/settings.php');
}
elseif($_GET['menuid'] == "character")
{
	include('../views/menus/character.php');
}

?>