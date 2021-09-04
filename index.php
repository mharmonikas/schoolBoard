<!doctype HTML>
<?php
ini_set('display_errors', 1);
include 'db_connection.php';
require('classes/DB_Student.php');
require('classes/Student.php');

$student_id = $_GET['student'];
?>
<html lang="en">
    <head class="<?php echo time()?>">
        <title>School Board</title>
    </head>

    <body>
<!--        --><?php //if(!$student) {?>
<!--        <div style="margin: auto; max-width: 400px;">-->
<!--            <h3>-->
<!--                List of students-->
<!--            </h3>-->
<!---->
<!--          <table>-->
<!--              <thead>-->
<!--                <tr>-->
<!--                    <th>id</th>-->
<!--                    <th>name</th>-->
<!--                    <th>grades</th>-->
<!--                </tr>-->
<!--              </thead>-->
<!--              <tbody>-->
<!--                  --><?php //foreach((new DB_Student)->all() as $student) {?>
<!--                      <tr>-->
<!--                          <td>--><?php //echo $student->id ?><!--</td>-->
<!--                          <td>--><?php //echo $student->name ?><!--</td>-->
<!--                          <td>--><?php //echo $student->grades ?><!--</td>-->
<!--                      </tr>-->
<!--                  --><?php //} ?>
<!--              </tbody>-->
<!--          </table>-->
<!--        </div>-->
        <?php
            $dbStudent = (new DB_Student)->find($student_id);
            $student = new Student($dbStudent);
            print_r($student);
        ?>
    </body>
</html>