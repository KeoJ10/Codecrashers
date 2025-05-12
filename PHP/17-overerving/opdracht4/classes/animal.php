<?php

namespace overerving\opdracht4;

abstract class animal{
private int $age;
    final public function eat(){
        echo "nom nom nom";
    }

    public function getage(){
        return $this->age;
    }

    public function setage($age){
        $this->age = $age;
    }

    public function celebrateBirthday(){
        $this->age++;
        echo $this->age;
    }
    public function __construct($age){
        $this->age = $age;
    }

    public abstract function sayHello();
}

?>