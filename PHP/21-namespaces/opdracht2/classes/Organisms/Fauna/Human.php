<?php
    namespace classes\Organisms\Fauna {
        class Human extends Animal {
            // properties
            private string $education;
            private string $job;

            // constructor
            public function __construct(string $edu, string $job, int $age) {
                $this->education = $edu;
                $this->job = $job;
                parent::__construct($age);
            }

            // getter
            public function getEdu() : string {
                return $this->education;
            }
            public function getJob() : string {
                return $this->job;
            }

            // setter
            public function setEdu(string $var) {
                $this->education = $var;
            }
            public function setJob(string $var) {
                $this->job = $var;
            }

            public function contemplateLife() {
                exit();
            }

            public function celebrateBirthday() {
                $this->age = $this->age + 1;
                if ($this->age >= 50) {
                    $this->contemplateLife();
                } else {
                    return '<p>age is: '.$this->age.'</p>';
                }
            }

            public function sayHello() {
                return '<p>Hello.</p>';
            }
        }
    }
?>