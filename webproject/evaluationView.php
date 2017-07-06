<h1>Evaluation</h1>


<form action="questions.php" method="post">

    <p><input type="hidden" name="eval_id" value="<?=$data["eval"]["evaluation_id"]?>"/>Evaluation : <?=$data["eval"]["evaluation_id"]?></p>
    <p>Start time : <?=$data["eval"]["scheduled_at"]?></p>
    <p>Time duration : <?=$data["eval"]["nb_minutes"]?></p>
    <p>Teacher : <?=$data["eval"]["trainer"]?></p>
    <p>Class : <?=$data["eval"]["class_name"]?></p>
    <p>Quiz title : <?=$data["eval"]["title"]?></p>
    
    

    <button type="submit">Start quiz</button>
</form>
