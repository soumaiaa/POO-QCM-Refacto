<?php
require_once("./partie1/class/Answer.php");
require_once("./partie1/class/Qcm.php");
require_once("./partie1/class/question.php");

$qcm = new QcmPart1();
$question1 = new Question('POO signifie :');
echo "<br>";
$question1->addAnswer(new Answer('Php Orienté Objet'));
echo "<br>";
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
echo "<br>";
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
echo "<br>";
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
echo "<br>";
$question1->setExplications('Sans commentaires si vous avez eu faux :-°');
echo "<br>";
$qcm->addQuestion($question1);
echo "<br>";
$qcm->generate();
?>