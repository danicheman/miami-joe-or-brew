<?php

//include_once("game_manager.class.php");
include_once("foursquare.php");

//$game_manager = new game_manager();
echo "<pre>";
print_r($_POST);
if($start){
	
	echo json_encode($_SESSION["game"]);
}
else{
	
}





?>