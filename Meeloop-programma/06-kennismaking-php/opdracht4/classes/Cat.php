<?php
	class Cat extends Animals{
		
		public function __construct($name, $age, $furr){
		
		parent::__construct($name, $age, $furr,null);
		$this->furr = $furr;
}
		
		public function meow(){
			echo '<p>'.$this->name.' zegt: <q>Meow, meow, meow</q>.</p>';
		}
        
	}
?>