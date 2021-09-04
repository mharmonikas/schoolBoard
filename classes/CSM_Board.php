<?php
require('Board.php');

class CSM_Board implements Board{
    public function average($grades)
    {
        return $grades;
    }
}