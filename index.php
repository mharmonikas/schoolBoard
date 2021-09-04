<!doctype HTML>
<?php
ini_set('display_errors', 1);
include 'get_student.php';

?>
<html lang="en">
    <head class="<?php echo time()?>">
        <title>School Board</title>
    </head>

    <body>
        <?php
        echo '<pre>', htmlentities($student ? $student->response() : ''), '</pre>';
        ?>
    </body>
</html>