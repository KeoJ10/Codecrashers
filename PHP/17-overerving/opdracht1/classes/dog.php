<?php

class Dog extends animal {
    
    private string $breed;

    public function __construct(int $age, string $breed)
    {
        parent::__construct($age);
        $this->breed = $breed;
    }

    public function getBreed(): string {
        return $this->breed;
    }

    public function setBreed(string $breed){
        $this->breed = $breed;
    }

    public function bork() {
        echo "Bork bork bork!";
    }

    public function sayHello() {
        echo "Woof! Woof!";
    }

}