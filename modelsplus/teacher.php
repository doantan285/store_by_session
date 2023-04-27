<?php
// require_once dir_root . "/modelsplus/user.php";

class Teacher extends User {
    public $salary_q1; // salary quater 1: lương quý 1
    public $salary_q2; // salary quater 2: lương quý 2
    public $salary_q3; // salary quater 3: lương quý 3
    public $salary_q4; // salary quater 4: lương quý 4
    public $average_salary; // lương trung bình

    public function set_data($salary_q1, $salary_q2, $salary_q3, $salary_q4) {
        $this->salary_q1 = $salary_q1;
        $this->salary_q2 = $salary_q2;
        $this->salary_q3 = $salary_q3;
        $this->salary_q4 = $salary_q4;
    }

    public function get_average_salary() {
        $this->average_salary = ($this->salary_q1 + $this->salary_q2 + $this->salary_q3 + $this->salary_q4)/4;
    }
}