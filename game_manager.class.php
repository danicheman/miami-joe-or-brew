<?php
/**
 * Game Manager Class
 *
 * Usage:
 *
 * 	   //to start game
 *     $game_manager = new game_manager();
 * 
 * 	   //to check answer once game is started
 *     $game_manager = new game_manager();
 *     $array = $game_manager->check_answer("test",1);
 * 
 * 	   //many methods for scores, status etc
 *
 */
class game_manager{
	
	public $session = array(
		"qa" 		=> array(),
		"started" 	=> FALSE,
		"finished"	=> FALSE,
		"correct"	=> 0,
		"wrong"		=> 0,
		"score"		=> 0,
		"q" => "Test Question?",
		"a" => "Test Answer",
		"lat" => "25.884954",
		"lng" => "-80.45454",
		"question_index" => 0,
	);
	public $qa = array();
	public $started = FALSE;
	public $finished = FALSE;
	public $correct = 0;
	public $wrong = 0;
	public $score = 0;
	public $current_question_index = 0;
	
	public function __construct(){
		if (session_id() == '') { //already started
		    session_start();
		}
		
		if(is_array($_SESSION["game"]) && count($_SESSION["game"]) > 0 ){
			$this->session = $_SESSION["game"];
			$this->qa = $this->session["qa"];
			$this->started = $this->session["started"];
			$this->finished = $this->session["finished"];
			$this->correct = $this->session["correct"];
			$this->wrong = $this->session["wrong"];
			$this->score = $this->session["score"];
			$this->current_question_index = $this->session["question_index"];
			$this->update_browser_session();
		}else{
			$this->set_questions_answers();
		}
	}
	
	public function get_score(){
		return $this->score;
	}
	
	public function set_score(){
		if($this->wrong > $this->correct){
			$this->score = 0;
		}
		else{
			$this->score = ($this->correct - $this->wrong);
		}
		$this->update_browser_session();
	}
	
	public function get_correct(){
		return $this->correct;
	}
	
	public function get_wrong(){
		return $this->wrong;
	}
	
	public function is_started(){
		if($this->started && $this->finished == FALSE){
			return TRUE;
		}
		return FALSE;
	}
	
	public function get_current_question(){
		return $this->qa[$this->current_question_index]["q"];
	}
	
	public function get_current_answer(){
		return $this->qa[$this->current_question_index]["a"];
	}
	
	public function get_current_latitude(){
		return $this->qa[$this->current_question_index]["lat"];
	}
	
	public function get_current_longitude(){
		return $this->qa[$this->current_question_index]["lng"];
	}
	
	public function get_next_question(){
		$this->current_question_index++;
		$this->update_browser_session();
		return $this->qa[$this->current_question_index]["q"];
	}
	
	public function check_answer($answer,$question_index = FALSE){
		if($this->is_started() == FALSE) exit;
		
		if($question_index == FALSE){
			$question_index = $this->current_question_index;
		}
		
		if($this->qa[$question_index]["a"] == $answer){
			$this->correct++;
		}
		else{
			$this->wrong++;
		}
		
		$this->set_score();
		$this->get_next_question();
		$this->update_browser_session();
	}
	
	public function set_questions_answers(){
		$fs_config = include_once("fs_config.php");
		$fs_api = new Foursquare_API($fs_config["fs_key"], $fs_config["fs_secret"]);
		$this->qa = $fs_api->fetchBrewVenues();
		$this->session["qa"] = $this->qa;
		$this->started = TRUE;
		$this->current_question_index++;
		$this->update_browser_session();
	}
	
	public function update_browser_session(){
		$this->session = array(
			"qa" 		=> $this->qa,
			"started" 	=> $this->started,
			"finished"	=> $this->finished,
			"correct"	=> $this->correct,
			"wrong"		=> $this->wrong,
			"score"		=> $this->score,
			"q" => $this->get_current_question(),
			"a" => $this->get_current_answer(),
			"lat" => $this->get_current_latitude(),
			"lng" => $this->get_current_longitude(),
			"question_index" => $this->current_question_index,
		);
		$_SESSION["game"] = $this->session;
	}
	
}

?>