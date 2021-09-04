<?php
require('Student.php');
require('Board.php');

class CSM_Student extends Student implements Board {
    public function average()
    {
        return (array_sum($this->grades) / count($this->grades));
    }

    public function finalResult()
    {
        return $this->average >= 7 ? 'pass' : 'fail';
    }

    public function response()
    {
        return json_encode([
           'id' => $this->id,
           'name' => $this->name,
           'grades' => $this->grades,
           'average' => $this->average,
           'final_result' => $this->finalResult(),
        ]);
    }
}