<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    public CONST int TIME_COSTS = 5;

    public function evaluateTheTask(int $hours): int
    {
        return $hours * self::TIME_COSTS;
    }
}