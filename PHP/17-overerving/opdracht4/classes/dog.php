<?php

namespace overerving\opdracht4;

require_once 'animal.php';
class Dog extends animal{
    private string $breed;

    public function getbreed(){
        return $this->breed;
    }
    
    public function setbreed($breed){
        $this->breed = $breed;
    }

    public function bork(){
        echo "Bork!";
    }
    public function constructor($age, $breed){
        parent::__construct($age);
        $this->breed = $breed;
    }
    public function sayHello(){
        echo "Woof!";
    }
}