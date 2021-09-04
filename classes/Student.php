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
        $this->grades = json_decode($dbStudent->grades, true);
        $this->average = $this->average();
    }



//    protected function getBoard($board)
//    {
//        switch ($board) {
//            case 'csm':
//                return new CSM_Board1();
//            case 'csmb':
//                return new CSMB_Board();
//            default:
//                die("Wrong board name.");
//        }
//    }

//    public function getAverage(){
//        return $this->boardClass->average($this->grades);
//    }
}