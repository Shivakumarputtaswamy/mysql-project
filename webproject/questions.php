<?php
require_once("HttpResource.php");
require_once("model/QuestionModel.php");

class QuestionResource extends HttpResource {
	protected $user;
	
	function init() {
		//$user = array("id" => 1, "email" => "kondal@epita.fr");
                $var = $_POST["eval_id"];
		$data = array();
		$data = QuestionModel::get($var);
                $question_nb = sizeOf($data);
                require_once("view/QuestionsView.php");
		//echo $data[0]["question_id"];
	}
	
	function do_get() {
		// Get data from the model
                
		// Send to the view
		//
	}
}
QuestionResource::run();