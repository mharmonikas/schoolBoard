<!doctype HTML>
<?php
include 'db_connection.php';
require_once('classes/DB_Student.php'); ?>
<html lang="en">
    <head class="<?php echo time()?>">
        <title>School Board</title>
    </head>

    <body>
        <div style="margin: auto; max-width: 400px;">
            <h3>
                List of students
            </h3>

          <table>
              <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>grades</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach(DB_Student::all() as $student) {?>
                      <tr>
                          <td><?php echo $student->id ?></td>
                          <td><?php echo $student->name ?></td>
                          <td><?php echo $student->grades ?></td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
<!--                --><?php //print_r(DB_Student::get()) ?>


        </div>
    </body>
</html>