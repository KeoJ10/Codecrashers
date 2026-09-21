<?php

class Office {

private string $location;
private string $sector;
private array $employees = [];

public function __construct(string $location, string $sector, array $employees = []) {
    $this->location = $location;
    $this->sector = $sector;
    $this->employees = $employees;
}

public function setLocation(string $location): void {
    $this->location = $location;
}

public function setSector(string $sector): void {
    $this->sector = $sector;
}

public function getLocation(): string {
    return $this->location;
}

public function getSector(): string {
    return $this->sector;
}

public function setEmployees(array $employees): void {
    $this->employees = $employees;
}

public function getEmployees(): array {
    return $this->employees;
}

public function officeTieChange(string $tieColor) : void {
        foreach($this->employees as $employee){
            $employee->setTieColor($tieColor);
    }
}

public function __clone(){
        $employees = $this->employees;
        $this->employees = [];
        for($i = 0; $i < count($employees); $i ++){
            $this->employees[] = new Employee($employees[$i]->getTieColor());
    }
}

}