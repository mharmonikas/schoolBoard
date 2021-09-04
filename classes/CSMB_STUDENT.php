<?php

class CSMB_Student extends Student implements Board{
    public function average()
    {
        return (array_sum($this->grades) / count($this->grades));
    }

    public function finalResult()
    {
        return $this->average() >= 8 && count($this->grades) > 2 ? 'pass' : 'fail';
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