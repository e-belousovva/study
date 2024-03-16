<?php

declare(strict_types=1);

namespace App;

abstract class Developer
{
    public function taskAssessment():int
    {
        return rand(1, 10);
    }
}