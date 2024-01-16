<?php

class qcm
{

 private PDO $db;
 private array $questions = [];
 public function __construct(PDO $db)
{
     $this->db = $db;
}


public function getQuestions() {
    $request = $this->db->query('SELECT * FROM questions'); 
    $questions = $request->fetchAll(); 
    $this->addQuestion($questions);
}

public function addQuestion($questions)
{ 
    foreach ($questions as $question) 
    {
        $Question = new Question($question);
      
        $answers = $this->getAnswers($Question);
        foreach ($answers as $answer) 
        {
            $newAnswer = new Answer($answer);
            $Question->addAnswer($newAnswer);
        }
        $this->questions[] = $Question; 
    }
       
}

public function getAnswers(Question $question)  {
    
    $request = $this->db->prepare('SELECT * FROM answer WHERE answer.Question_id = :id');
    $request->execute([
        'id' => $question->getId()
    ]);
    $answersfetch = $request->fetchAll();  
    return $answersfetch;
}

public function generate()
{
    foreach($this->questions as $question)
    {
       echo "<br>". $question->getCorps()."<br>"; 
       foreach($question->getAnswers() as $answer)
       {
       echo "*". $answer->getText(). "<br>";
       }
    echo $question->getExplications();
   }
}
}

?>
