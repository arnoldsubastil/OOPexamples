<?php

require 'Foo.php';
require 'Bar.php';

$foo = new Foo;
$bar = new Bar;

echo $bar->myFoo();
echo $foo->myFoo();

?>