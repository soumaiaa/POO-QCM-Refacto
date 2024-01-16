<?php

class QcmPart1 {
    private array $Questions=[];
    
    public function addQuestion(Question $Question)
    { 
       $this->Questions[] = $Question;
       
    }
    public function generate(){
     
     foreach($this->Questions as $Question){
        echo $Question->getCorps()."<br>";
        foreach($Question->getAnswers() as $Answer){
        echo"*" .$Answer->gettext(). "<br>";
     }
     echo $Question->getExplications();
    }

}

}

?>