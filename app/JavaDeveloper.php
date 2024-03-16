<?php

declare(strict_types=1);

namespace App;

class JavaDeveloper extends Developer
{
    public string $name123;

    public int $age;

    public string $level;

    public function __construct(string $name, int $age, string $level)
    {
        $this->name123 = $name;
        $this->age = $age;
        $this->level = $level;
    }
}