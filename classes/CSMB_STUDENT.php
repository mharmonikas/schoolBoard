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
        // Todo: needs to be xml.
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'grades' => $this->grades,
            'average' => $this->average,
            'final_result' => $this->finalResult(),
        ]);
    }
}