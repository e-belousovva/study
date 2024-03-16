<?php

declare(strict_types=1);

namespace App;

class ManagerProject implements ProjectManagerInterface
{
    public const int HOURS_NUMBER = 2;

    public function taskAssessment(int $time): int
    {
        return  $time * self::HOURS_NUMBER;
    }
}




