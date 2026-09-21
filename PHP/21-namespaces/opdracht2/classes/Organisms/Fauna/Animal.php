<?php
    namespace classes\Organisms\Fauna {
        abstract class Animal {
            protected int $age;
            
            public function __construct(int $age) {
                $this->age = $age;
            }
                
            public final function eat() {
                return '<p>Nom Nom Nom.</p>';
            }
            public function celebrateBirthday() {
                $this->age = $this->age + 1;
                return '<p>age is: '.$this->age.'</p>';
            }
                
            public abstract function sayHello();
                
            // getter
            public function getAge() : string {
                return $this->age;
            }
            // setter
            public function setAge(string $var) {
                $this->age = $var;
            }
        }
    }
?>