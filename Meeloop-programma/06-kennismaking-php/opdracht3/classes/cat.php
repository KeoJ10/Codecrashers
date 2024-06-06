<?php
	class Cat {
		private string $name;
		private int $age;
        private string $furr;
		
		public function __construct($name, $age, $furr){
			$this->name = $name;
			$this->age = $age;
            $this->furr = $furr;


		}
		
		public function meow(){
			echo '<p>'.$this->name.' zegt: <q>Meow, meow, meow</q>.</p>';
		}
        public function showInfo(){
            echo '<p>'.$this->name.' is een kat van '.$this->age.' jaar oud. En zijn vacht is '.$this->furr.'.</p>';

        }
        public function ageing(){
            $this->age+=1;
            echo '<p>'.$this->name.' is 1 jaar ouder geworden en is nu '.$this->age.'</p>';
        }
        
	}
?>