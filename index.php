<!doctype HTML>
<?php
ini_set('display_errors', 1);
include 'db_connection.php';
include 'get_students.php';


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

            echo '<pre>', htmlentities($student->response()), '</pre>';
        ?>
    </body>
</html>