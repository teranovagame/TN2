<?php
require_once('../init.php');

//OUTPUT EASY TO READ
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

      if($counter == 5 || $counter == 10 || $counter == 15 || $counter == 20 || $counter == 25 )
      {
        echo '<br>';
      }
      if($counter == "24")
      {
        echo $map_shards[0].','.$map_shards[1].','.$map_shards[2].'<br/>';
      }
      else
      {
        echo $map_shards[0].','.$map_shards[1].','.$map_shards[2].';<br/>';
      }

      

      $counter++;
    }
  }
}

echo "<br><br><br><br>";

//OUTPUT MACHINE
$sql2 = "SELECT map FROM areas WHERE id = '".$_SESSION['location']."'";
$result2 = $conn->query($sql2);
$counter = 0;
if ($result2->num_rows > 0) 
{
  while($row = $result2->fetch_assoc()) 
  {
    $map_pieces = explode(";",$row['map']);
    foreach ($map_pieces as $pieces)
    {
      $map_shards = explode(",",$pieces);

      if($counter == "24")
      {
        echo $map_shards[0].','.$map_shards[1].','.$map_shards[2];
      }
      else
      {
        echo $map_shards[0].','.$map_shards[1].','.$map_shards[2].';';
      } 

      $counter++;
    }
  }
}
