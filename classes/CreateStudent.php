<?php
require('CSM_STUDENT.php');
require('CSMB_STUDENT.php');

class CreateStudent {
    public static function create($dbStudent)
    {
       switch ($dbStudent->board) {
           case 'csm':
               return new CSM_Student($dbStudent);
           case 'csmb':
               return new CSMB_Student($dbStudent);
           default:
                die("Wrong board name.");
       }
    }
}