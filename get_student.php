<?php

require('classes/DB_Student.php');
require('classes/CreateStudent.php');

$student_id = $_GET['student'];
if($student_id) {
    $dbStudent = (new DB_Student)->find($student_id);

    $student = CreateStudent::create($dbStudent);
}