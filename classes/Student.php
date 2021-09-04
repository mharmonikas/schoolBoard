<?php
class Student {
    public $id;
    public $name;
    public $grades;

    public function __construct($id, $name, $grades)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grades = $grades;
    }
}