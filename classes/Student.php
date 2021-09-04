<?php

class Student {
    public $id;
    public $name;
    public $grades;
    public $average;

    public function __construct($dbStudent)
    {
        $this->id = $dbStudent->id;
        $this->name = $dbStudent->name;
        $this->grades = $this->getGrades($dbStudent->grades);
        $this->average = $this->average();
    }

    private function getGrades($grades)
    {
        $grades = json_decode($grades, true);

        if(count($grades) < 1 || count($grades) > 4) {
            die('A student can have 1 to 4 grades.');
        }

        return $grades;
    }
}