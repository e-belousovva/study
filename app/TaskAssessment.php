<?php

declare(strict_types=1);

namespace App;

class TaskAssessment
{
    public static function developerMark(string $programmingLanguage): int
    {
        switch ($programmingLanguage) {
            case 'php':
                $developer = new PhpDeveloper();
                break;
            case "python":
                $developer = new PythonDeveloper();
                break;
            case "java":
                $developer = new JavaDeveloper('Alex', 16, 'Junior');
                break;
            default:
                $developer = new PhpDeveloper();
        }

        return $developer->taskAssessment();
    }

    public static function generationMark(string $programmingLanguage): int
    {
        $manager = new ManagerProject();
        $developerMark = TaskAssessment::developerMark($programmingLanguage);
        return $manager->taskAssessment($developerMark);
    }
}