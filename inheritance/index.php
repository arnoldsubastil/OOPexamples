<?php
require 'Mammal.php';
require 'Lion.php';

$lion = new Lion();
$lion->mammalType = 'carnivore';
echo $lion->getType();

?>      