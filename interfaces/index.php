<?php
require 'Template.php';

$Compute = new Template();
$Compute->setVariable('test', 54);
var_dump($Compute->showVariable());

?>