<?php

include_once("foursquare.php");
include_once("game_manager.class.php");

$type = $_POST["type"];
$answer = $_POST["answer"];
$question_index = $_POST["question_index"];
if($type != ""){
	if($type == "start"){
		$game_manager = new game_manager("start");
		echo json_encode($_SESSION["game"]);
	}
	elseif($type == "answer" && $answer != "" && $question_index != ""){
		$game_manager = new game_manager();
		$game_manager->check_answer($answer,$question_index);
		echo json_encode($_SESSION["game"]);
	}
}

exit;
?>