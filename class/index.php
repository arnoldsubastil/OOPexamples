<?php

require 'Mammal.php';

$mammal = new Mammal();
$mammal->mammalType = 'carnivore';
echo $mammal->getType();

?>