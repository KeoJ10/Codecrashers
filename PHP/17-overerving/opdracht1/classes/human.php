<?php

class human extends animal {
    private string $education;
    private string $job;

    public function __construct(int $age, string $education, string $job) {
        parent::__construct($age);
        $this->education = $education;
        $this->job = $job;
    }

    public function getEducation(): string {
        return $this->education;
    }

    public function getJob(): string {
        return $this->job;
    }

    public function setEducation(string $education){
        $this->education = $education;
    }

    public function setJob(string $job){
        $this->job = $job;
    }

    public function contemplateLife() {
        echo "Is there a meaning to life?";
        exit;
    }

    public function celebrateBirthday()
    {
        if ($this->age >= 50){
            $this->contemplateLife();
        }
    }

    public function sayHello() {
        echo "Hello, human here!";
    }
}