<?php
require_once("./class/Answer.php");
require_once("./class/question.php");
require_once("./base_de_donner.php");
require_once('./class/qcm.php');


$qcm = new Qcm($db);
$qcm->getQuestions();
$qcm->generate();
?>