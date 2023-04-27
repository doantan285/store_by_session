<?php

class Student extends User
{
    public $math_score; // điểm toán
    public $physic_score; //điểm vật lý
    public $chemistry_score; // điểm hóa
    public $average_score; // GPA
    public $training_point; // điểm rèn luyện
    public $ranked_academic; // học lực: excellent, good, avarage, poor, very poor

    //set data
    public function set_data(float $math_score, float $physic_score, float $chemistry_score, float $training_point)
    {
        $this->math_score = $math_score;
        $this->physic_score = $physic_score;
        $this->chemistry_score = $chemistry_score;
        $this->training_point = $training_point;
    }

    //get average
    public function get_average_score()
    {
        $this->average_score = ($this->math_score + $this->physic_score + $this->chemistry_score) / 3;
    }

    // get rank
    public function get_ranked_academic()
    {
        if ($this->average_score >= 9 && $this->training_point >= 80) {
            $this->ranked_academic = "excellent";
        } elseif ($this->average_score >= 8 && $this->training_point >= 70) {
            $this->ranked_academic = "good";
        } elseif ($this->average_score >= 6.5) {
            $this->ranked_academic = "average";
        } elseif ($this->average_score >= 4) {
            $this->ranked_academic = "poor";
        } else {
            $this->ranked_academic = "very poor";
        }
    }
}