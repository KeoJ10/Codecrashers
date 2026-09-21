<?php
    namespace classes\Organisms\Fauna {
        class Dog extends Animal {
            // properties
            private string $breed;

            // constructor
            public function __construct(string $var, int $age) {
                $this->breed = $var;
                parent::__construct($age);
            }

            // getter
            public function getBreed() : string {
                return $this->breed;
            }
            // setter
            public function setBreed(string $var) {
                $this->breed = $var;
            }

            public function bork() {
                return '<p>Bork!</p>';
            }

            public function sayHello() {
                return '<p>Woof.</p>';
            }
        }
    }
?>