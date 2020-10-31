<?php
require 'Mammal.php';
require 'Lion.php';

$lion = new Lion();

$lion->setMammalType();
echo $lion->getType();

?>