<?php 

class employee {

private int $employeeId;
private string $tieColor;

public function __construct( string $tieColor) {
    $this->employeeId = rand(1, 1000);
    $this->tieColor = $tieColor;
}

public function setImployeeid(int $employeeId): void {
    $this->employeeId = $employeeId;
}

public function setTieColor(string $tieColor): void {
    $this->tieColor = $tieColor;
}

public function getImployeeid(): int {
    return $this->employeeId;
}

public function getTieColor(): string {
    return $this->tieColor;
}

}