<?php

class CSMB_Student extends Student implements Board{
    public function average()
    {
        return (array_sum($this->grades) / count($this->grades));
    }

    public function finalResult()
    {
        $grades = $this->grades;

        if(count($grades) > 2) {
            // Discard the lowest grade.
            sort($grades, SORT_NUMERIC);
            array_shift($grades);
        }

        return $grades[count($grades) - 1] > 8 ? 'pass' : 'fail';
    }

    public function response()
    {
        $grades = json_encode($this->grades);

        $response = '<id>'.$this->id.'</id>';
        $response .= '<name>'.$this->name.'</name>';
        $response .= '<grades>'.$grades.'</grades>';
        $response .= '<average>'.$this->average.'</average>';
        $response .= '<final_result>'.$this->finalResult().'</final_result>';

        return $response;
    }
}