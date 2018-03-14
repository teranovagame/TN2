<script type="text/javascript" 
src="/interface/main.js"></script>

<script language="javascript" type="text/javascript">
//jQuery
(function ($) {
  $(document).ready(function() {
			function reloadLog()
			{
				$('#player-log').load('/api/log-player.php');
				$('#location-details').load('/api/log-location.php');
				$('#map').load('/api/map.php');
			}
			function reloadBg()
			{
				$('.health').load('/api/player.php?attribute=health');
				$('.stamina').load('/api/player.php?attribute=stamina');
				$('.will').load('/api/player.php?attribute=will');
			}

			reloadLog();
			reloadBg();

			setInterval(
				function()
				{
					reloadLog()
				},
				380
			);
			setInterval(
				function()
				{
					reloadBg()
				},
				4000
			);
	});
})(jQuery);
</script>

<!--construct menu dialog-->
<div id="dialog-1"></div>
<div id="dialog-2"></div>

</body>
</html>