<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      var questions = <?php echo json_encode($data)?>;
      function update(id){
          $("#question").html(questions[id]["question_text"]);
      }
  </script>
</head>
<h1>Evaluation <?=$var?></h1>

<h2 id="question"><?=$data[0]["question_text"]?></h2>

<textarea id="answer"></textarea>
<br>
<?php
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$question_nb; $i++) {  
             $pagLink .= "<li><a onclick='return update(".$i.")'>".$i."</a></li>";  
};  
echo $pagLink . "</ul>";  
?>
<br>
<button>Submit</button>

