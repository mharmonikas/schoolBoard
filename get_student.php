<?php

require('classes/DB_Student.php');
require('classes/CreateStudent.php');

$student_id = $_GET['student'];
$student = null;
if(isset($_GET['student']) && ($student_id = $_GET['student'])) {
    $dbStudent = (new DB_Student)->find($student_id);

    $student = CreateStudent::create($dbStudent);
}