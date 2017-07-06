<?php
require_once("HttpResource.php");
require_once("model/EvaluationModel.php");

$_SESSION["user_id"] = 1;

class EvaluationResource extends HttpResource {
	protected $user;
	
	function init() {
		$user = array("id" => 1, "email" => "subhash@epita.fr");
	}
	
	function do_get() {
		// Get data from the model
                $var = $_GET["eval_id"];
		$data = array();
		$data['eval'] = EvaluationModel::get($var);
		// Checks something (the user has rights)
		
		// Send to the view
		require_once("view/evaluationView.php");
	}
}
EvaluationResource::run();