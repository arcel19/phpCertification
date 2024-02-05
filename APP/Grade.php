<?php 

declare(strict_types=1);

Class Grade {

    public $students = [];
    public function add(string $name, int $grad) : void {
        $this->students[$grad][] = $name;
    }

    public function grades($grad): array {
        return $this->students[$grad] ?? [];
    }

    public function studentsByGrade(): array{
        ksort($this->students);
        return array_map( function($grad){
            sort($grad);
        },  $this->students);
    }
}