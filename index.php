<?php 
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email']))
{
  header("location: login.php");
  exit;
} 
if(!isset($_SESSION['player_id']) || empty($_SESSION['player_id']))
{
  header("location: player.php");
  exit;
} 


require_once('init.php');

include('views/header.php');
include('views/game_layout.php');
include('views/footer.php'); 


?>