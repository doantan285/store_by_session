<?php

class User
{
    public $id;
    public $name;
    public $age;
    public $gender;
    // public $schedule; // thời khóa biểu

    // set information
    public function set_infor($id, $name, $age, $gender)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}