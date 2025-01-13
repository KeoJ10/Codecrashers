<?php 
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

class dog extends animal{
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

$myDog = new dog(4, "Golden Retriever");
$myHuman = new human(42, "MBO", "Developer");
$myDog->celebrateBirthday();
$myHuman->sayHello();
$myDog->sayHello();
$myHuman2 = new human(47, "HBO", "Teacher");
$myHuman2->celebrateBirthday();
$myHuman2->celebrateBirthday();
$myHuman2->celebrateBirthday();


?>