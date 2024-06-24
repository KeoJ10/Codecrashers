<?php

class Dog extends Animals{
	private string $name;
	private string $race;
	private int $age;
	
	public function __construct($name, $race, $age){
		$this->name = $name;
		$this->race = $race;
		$this->age = $age;
		echo '<p>De hond '.$this->name.', een '.$this->race.' van '.$this->age.' jaar, is aangemaakt.</p>';
	}
	
	public function bark() {
		echo '<p>'.$this->name.' zegt: <q>Bork, bork, bork</q>.</p>';
	}
	public function showInfo(){
		echo '<p>'.$this->name.' is een hond van '.$this->age.' jaar oud. En zijn race is '.$this->race.'</p>';

	}


    
}
?>