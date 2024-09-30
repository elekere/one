<?php 
class manners {

    private $greeting = "Hello.";
    public function greet($name)
  {echo "$this->greeting, $name";
    }
}
$name = "Ebuka";
manners.greet("$name");
?>