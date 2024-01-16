<?php
class Question 
{
private int $id;
private string $corps;
private string $Explications;
private array $answers=[];

public function __construct(array $data){
    $this->id = $data['id'];
    $this->corps= $data['Corps'];
    $this->Explications = $data['Explications'];
}
public function addAnswer(Answer $answer)
{      
    $this->answers[] = $answer;        
}
public function setExplications($Explications)
{
    $this->Explications=$Explications;
    // echo $this->Explications;
}
public function getExplications()
{
    return $this->Explications;
}
public function setId($id){
    $this->id=$id;
}
public function getId()
{
    return $this->id;
}
public function getCorps()
{
    return $this->corps;
}
public function getAnswers():array{
    return $this->answers;
}    
}
?>