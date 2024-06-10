<?php
abstract class Animals{    
    private string $name;
	private string $race;
	private int $age;
    private String $furr;

    public function __construct($name, $age, $furr,$race){
        $this->name = $name;
        $this->age = $age;
        $this->furr = $furr;
        $this->race = $race;


    }
    
    public function ageing(){
        $this->age+=1;
        echo '<p>'.$this->name.' is 1 jaar ouder geworden en is nu '.$this->age.'</p>';
    }
}
?>