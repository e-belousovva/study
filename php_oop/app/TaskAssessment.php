<?php

namespace App;

class TaskAssessment
{
    public static function getAnAssessmentFromTheDeveloper(string $programmingLanguage): int
    {
        switch ($programmingLanguage) {
            case 'Php':
                $phpDeveloper = new \App\PhpDeveloper();
                $phpDeveloper->setName('Maxim');
                $phpDeveloper->setAge('24');
                $phpDeveloper->setPosition('Senior');
                return $phpDeveloper->evaluateTheTask();
            case "Java":
                $javaDeveloper = new \App\JavaDeveloper();
                $javaDeveloper->setName('Daniil');
                $javaDeveloper->setAge('21');
                $javaDeveloper->setPosition('TeamLead');
                return $javaDeveloper->evaluateTheTask();
            case "Delphi":
                $delphiDeveloper = new \App\DelphiDeveloper('Pavel', 27, 'Middle');
                return $delphiDeveloper->evaluateTheTask();
            case "Python":
                $pythonDeveloper = new \App\PythonDeveloper('Misha', 22, 'Junior');
                return $pythonDeveloper->evaluateTheTask();
            default:
                return 0;
        }
    }

    public static function getGenerateFinalGrade(string $programmingLanguage): int
    {
        $projectManager = new ProjectManager();
        return $projectManager->evaluateTheTask(self::getAnAssessmentFromTheDeveloper($programmingLanguage));
    }
}