<?php
class Answer{
    private $text;
    private $BonneOuNon;
    const BONNE_REPONSE=true;
    // public static function BONNE_REPONSE($BonneOuNon=true) { 
    //     echo $BonneOuNon;
        
    //     }
    
    public function __construct($text, $BonneOuNon=false){
        $this->text=$text;
        $this->BonneOuNon=$BonneOuNon;
        // Answer::BONNE_REPONSE();
    }
    public function gettext(){
        return $this->text;
    }

    // public function detectbonne($text,$BonneOuNon) { 
    //     $this->text=$text; 
    //  $this->BonneOuNon=$BonneOuNon;
    //  if($this->BonneOuNon===1){
    //     echo "$this->text. c est le bonne repense";
    //  }else if($this->BonneOuNon===0){
    //   echo "$this->text. c est pas le bonne reponse";
    //  }
    // }
     

}


?>
