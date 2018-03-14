
$(function() 
{
	$("#dialog-1").dialog({
   		autoOpen:false,
   		resizable:false,
   		draggable:false,
   		dialogClass: "no-close menu-dialog"
	});

	// ##   MOVEMENT BUTTONS   ##//
	$("#movement-north-menu-button").click(function() 
	{
		$.get( "/api/move.php?dir=north" );
	});
	$("#movement-east-menu-button").click(function() 
	{
		$.get( "/api/move.php?dir=east" );
	});
	$("#movement-south-menu-button").click(function() 
	{
		$.get( "/api/move.php?dir=south" );
	});
	$("#movement-west-menu-button").click(function() 
	{
		$.get( "/api/move.php?dir=west" );
	});	

	// MAIN MENUS
	$("#settings-menu-button").click(function() 
	{
		$("#dialog-1").load("/api/menu.php?menuid=settings");
		$("#dialog-1").dialog("open");
	});
	$("#character-menu-button").click(function() 
	{
		$("#dialog-1").load("/api/menu.php?menuid=character");
		$("#dialog-1").dialog("open");
	});

});