<?php
require_once('../init.php');

$sql = "SELECT map FROM areas WHERE id = '".$_SESSION['location']."'";
$result = $conn->query($sql);
$counter = 0;
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
    $map_pieces = explode(";",$row['map']);
    foreach ($map_pieces as $pieces)
    {
      $map_shards = explode(",",$pieces);
      $map_shards_no_whitespace = preg_replace('/\s+/', '', $map_shards);

      echo '
      <div class="map-cell" style="background-size: cover; background: url(\'/assets/map/'.$map_shards_no_whitespace[0].'.png\');">
        <img src="/assets/map/'.$map_shards[1].'.png" class="map-'.$map_shards[2].'">
      </div>';
    }
  }

}
