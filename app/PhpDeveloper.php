<?php

declare(strict_types=1);

namespace App;

class PhpDeveloper extends Developer
{
    public string $name;

    public int $age;

    public string $level;

    public function setName(string $name): string
    {
       return $this->name = $name;
    }

    public function setAge(int $age): int
    {
        return $this->age =$age;
    }

    public function setLevel(string $level): string
    {
        return $this->level = $level;
    }
}

