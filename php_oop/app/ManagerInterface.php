<?php

namespace App;

interface ManagerInterface
{
    public function evaluateTheTask(int $hours): int;
}