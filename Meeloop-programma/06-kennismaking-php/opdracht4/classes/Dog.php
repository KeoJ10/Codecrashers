<?php

class Dog extends Animals{
	
	

	public function __construct($name, $age, $race){
		parent::__construct($name, $age, null , $race);
		$this->race = $race;
	}
	
	public function bark() {
		echo '<p>'.$this->name.' zegt: <q>Bork, bork, bork</q>.</p>';
	}
	
    
}
?>