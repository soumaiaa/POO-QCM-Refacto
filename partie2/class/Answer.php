<?php
class Answer
{

    private string $text;
    private string $BonneOuNon;

    public function __construct(array $answers)
    {
        $this->text=$answers['text'];
        $this->BonneOuNon=$answers['BonneOuNon'];
     }


     public function getText()
     {
         return $this->text;
     }
     public function getBonneOuNon()
     {
         return $this->BonneOuNon;
     }
   



}