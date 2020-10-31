<?php
require 'TemplateInterface.php';

class Template implements TemplateInterface {
    private $vars = array();
    public function setVariable($name, $num) {
        $this->vars[$name] = $num;
    }

    public function showVariable() {
       return $this->vars;
    }

}

?>