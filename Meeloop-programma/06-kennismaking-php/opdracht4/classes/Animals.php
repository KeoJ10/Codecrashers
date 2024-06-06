<?php
class Animals{    
    private string $name;
	private string $race;
	private int $age;

    public function __construct($name, $age, $furr){
        $this->name = $name;
        $this->age = $age;
        $this->furr = $furr;


    }
    public function showInfo(){
        echo '<p>'.$this->name.' is een kat van '.$this->agse.' jaar oud. En zijn vacht is '.$this->furr.'.</p>';

    }
    public function ageing(){
        $this->age+=1;
        echo '<p>'.$this->name.' is 1 jaar ouder geworden en is nu '.$this->age.'</p>';
    }
}
    ?>