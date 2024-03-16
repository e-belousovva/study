<?php

namespace App;

class PythonDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $position;

    public function __construct($name, $age,$position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;

    }

    public function evaluateTheTask(): int
    {
        return rand(1, 10);
    }

}