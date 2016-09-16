<?php

class Grader
{
    private $score = 0;
    private $studentId = '';

    public function __construct($studentId, $score)
    {
    }

    public function studentId()
    {
        return $this->studentId;
    }

    public function grading()
    {
        $gradeLetter = '';

        if ($score > 80) {
            $gradeLatter = 'A';
        } elseif ($score > 70) {
            $gradeLatter = 'B';
        } elseif ($score > 60) {
            $gradeLatter = 'C';
        } elseif ($score > 50) {
            $gradeLatter = 'D';
        }

        return $gradeLetter;
    }
}
