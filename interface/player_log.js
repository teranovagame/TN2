$(function() 
{
	$("#dialog-2").dialog({
   		autoOpen:false,
   		resizable:false,
   		draggable:false,
   		dialogClass: "no-close menu-dialog"
	});

	// LOG DETAILS
	var npcid = $("#npc-btn").attr("npcid");
	$("#npc-btn").click(function() 
	{
		$("#dialog-2").load("/api/npc.php?npcid="+npcid);
		$("#dialog-2").dialog("open");
	});

	var itemid = $("#item-btn").attr("itemid");
	$("#item-btn").click(function() 
	{
		$("#dialog-2").load("/api/item.php?itemid="+itemid);
		$("#dialog-2").dialog("open");
	});

	var mobid = $("#mob-btn").attr("mobid");
	$("#mob-btn").click(function() 
	{
		$("#dialog-2").load("/api/mob.php?mobid="+mobid);
		$("#dialog-2").dialog("open");
	});
});