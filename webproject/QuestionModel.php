<?php

require_once("DB.php");

/** Access to the person table.
 * Put here the methods like getBySomeCriteriaSEarch */
class QuestionModel {

    /** Get person data for id $personId
     * (here demo with a SQL request about an existing table)
     * @param int $personId id of the quiz to be retrieved
     * @return associative_array table row
     */
    public static function get($evaluationId) {
        $db = DB::getConnection();
        $sql = "select quizes.question_id,quizes.quiz_id, sql_question.question_text from (select * from quiz_question where quiz_id = 
	(select quiz_id from evaluation where evaluation_id = :eval_id) ) quizes
    inner join sql_question on quizes.question_id = sql_question.question_id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":eval_id", $evaluationId);
        $ok = $stmt->execute();
        $result = null;
        if ($ok) {
            $result = $stmt->fetchAll();
        }
        return $result;
    }

 }
 
 ?>
