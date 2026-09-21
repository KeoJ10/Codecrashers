<?php
    namespace Sem\Toys {
        class Dice {
            // properties
            private int $eyes;
            private static int $amountRolled = 0;

            // constructor
            public function __construct(?int $eyes = 6) {
                $this->eyes = $eyes;
            }

            // getter
            public function getEyes() : int {
                return $this->eyes;
            }
            // setter
            public function setEyes(int $eyes) {
                $this->eyes = $eyes;
            }

            // functions

            public function roll() : int {
                self::$amountRolled++;
                return rand(1, $this->eyes);
            }

            public function amountRolled() : int {
                return self::$amountRolled;
            }
        }
    }
?>