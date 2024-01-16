<?php
class Answer{
    private $text;
    private $BonneOuNon;
    const BONNE_REPONSE=true;
    
    public function __construct($text, $BonneOuNon=false){
        $this->text=$text;
        $this->BonneOuNon=$BonneOuNon;
        
    }
    public function gettext(){
        return $this->text;
    }
    
}


?>
