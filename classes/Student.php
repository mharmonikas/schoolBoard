<?php
require('CSM_Board.php');
require('CSMB_Board.php');

class Student {
    public $id;
    public $name;
    public $grades;
    public $boardClass;

    public function __construct($dbStudent)
    {
        $this->id = $dbStudent->id;
        $this->name = $dbStudent->name;
        $this->grades = $dbStudent->grades;
        $this->boardClass = $this->getBoard($dbStudent->board);
    }

    protected function getBoard($board)
    {
        switch ($board) {
            case 'csm':
                return new CSM_Board();
            case 'csmb':
                return new CSMB_Board();
            default:
                die("Wrong board name.");
        }
    }

    public function getAverage(){
        return $this->boardClass->average($this->grades);
    }
}