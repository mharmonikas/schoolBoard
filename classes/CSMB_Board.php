<?php
require('Board.php');

class CSMB_Board implements Board{
    public function average($grades)
    {
        return $grades;
    }
}