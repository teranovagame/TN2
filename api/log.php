<?php
	// Include config file
    require_once '../database.php';

    session_start();
    $player_id = $_SESSION['player_id'];

	// MAIN LOOP
	include('log-location.php');
	echo '<hr></hr>';
	include('log-player.php');


?>
























<!--<p class="area-title previous-area">Erat Nisl</p>
<p class="previous-area">The westerly path veers off to the north, into some low hills. The entrance to a dense pine forest flanks you to the south and east.</p>
<p class="previous-area">A <button id="npc-btn" npcid="1" class="log-btn npc"><img src="/public/ui/passive-elite.png" width="14px" height="14px"> traveller</button> is resting here.</p>           
<p class="previous-area">A <button id="" class="log-btn item" npcid="1"><img src="/public/ui/item.png" width="15px" height="14px"> chunk of fermentum</button> is lying on the ground.</p>
<p class="previous-area">You walk east.</p>

<p class="area-title">Augue Cursus</p>
<p>The path continues to wind through the hills as the dense forest closes in on you.</p>
<p>A <button id="" class="log-btn mob" npcid="1"><img src="/public/ui/hostile-elite.png" width="14px" height="14px"> pharetra</button> comes racing towards you.</p>
<p>The pharetra attacks you for 18 damage.</p>
<p>You target the pharetra.</p>
<p>You attack the pharetra for 23 damage.</p>
<p>You attack the pharetra for 23 damage.</p>-->

<script type="text/javascript" 
src="/interface/menu.js"></script>
