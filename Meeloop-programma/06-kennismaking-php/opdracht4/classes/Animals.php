<?php
abstract class Animals{
    protected string $name;
	protected int $age;
    protected mixed $furr;
    protected mixed $race;

    public function __construct($name, $age, mixed $furr, mixed $race){
        $this->name = $name;
        $this->age = $age;
        $this->furr = $furr;
        $this->race = $race;
    }

    public function showInfo(){
        if(get_called_class() == 'Dog'){
            echo '<p>De hond '. $this->name . 'een '.$this->race.' van '.$this->age.' jaar, is aangemaakt.</p>';
        }
        else if(get_called_class() == 'Cat'){
            echo '<p>'. $this->name . 'is een kat van ' . $this->age . 'zijn vacht is '. $this->furr . '</p>';
        }
    }
    public function ageing(){
        $this->age += 1;
        echo '<p>'.$this->name.' is 1 jaar ouder geworden en is nu '.$this->age.'</p>';
    }
}

?>