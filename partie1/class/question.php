<?php

class Question {
    private $Corps;
    private array $Answers=[];
    private $Bonnereponse;
    private $Explications;
    
    public function __construct($Corps)
    {
        $this->Corps=$Corps;
    }
    
    public function addAnswer(Answer $Answer){
       
        $this->Answers[] = $Answer; 
            
    }
    
    public function setExplications($Explications){
        $this->Explications=$Explications;
        // echo $this->Explications;
    }
    public function getExplications(){
        return $this->Explications;
     
    }
    public function getCorps(){
        return $this->Corps;
    }
    public function getAnswers():array{
        return $this->Answers;
    }

    }
    
?>