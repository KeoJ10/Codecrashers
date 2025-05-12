<?php

namespace overerving\opdracht4;

require_once 'animal.php';
class human extends animal{
    private string $education;
    private string $job;

    public function celebrateBirthday() {
        $this->setage($this->getage() + 1);
        if ($this->getage() >= 50) {
            $this->contemplateLife();
        }
    }

    public function geteducation(){
        return $this->education;
    }
    public function getjob(){
        return $this->job;
    }

    public function seteducation($education){
        $this->education = $education;
    }

    public function setjob($job){
        $this->job = $job;
    }

    public function contemplateLife(){
        exit("Why am I here?");
    }
    public function constructor($age, $education, $job){
        parent::__construct($age);
        $this->education = $education;
        $this->job = $job;
    }
    public function sayHello(){
        echo "Hello!";
    }
}

?>