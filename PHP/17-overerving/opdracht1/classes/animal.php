<?php

abstract class animal {

    protected int $age;

    public function __construct(int $age) {
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    final function eat() {
        echo "nom nom nom";
    }

    public function celebrateBirthday(){
        $this->age++;
    }

    public abstract function sayHello();
}