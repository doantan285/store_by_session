<?php

class HandleStudent
{
    // set data infor student
    public function set_user_data(array $data = [])
    {
        $new_student = new Student();
        // get infor from form
        $new_student->set_infor($data['id'] ?? '', $data['name'] ?? '', $data['age'] ?? '', $data['gender'] ?? '');

        //get data from form
        $new_student->set_data($data['math'] ?? '', $data['physic'] ?? '', $data['chemistry'] ?? '', $data['training'] ?? '');

        // get average score student
        $new_student->get_average_score();

        // get rank student
        $new_student->get_ranked_academic();

        return $new_student;
    }

    // add student
    public function add_user_to_list(array $list_student, Student $student)
    {
        $list_student[] = $student;

        return $list_student;
    }

    // update student
    public function update_student_in_list(array $list_student, Student $student, $student_id)
    {
        foreach ($list_student as $key => $st) {

            $st = $this->convert_to_student_obj($st);

            if ($st->id == $student_id) {
                $list_student[$key] = $student;
            }
        }
        return $list_student;
    }

    // convert function
    public function convert_to_student_obj($var)
    {
        return (unserialize(serialize($var)));
    }

    // remove student
    public function remove_student_from_list(array $list_student, $student_id)
    {
        foreach ($list_student as $key => $delete_student) {
            $delete_student = $this->convert_to_student_obj($delete_student);
            if ($delete_student->id == $student_id) {
                unset($list_student[$key]);
            }
        }
        return $list_student;
    }
}

// initialize the list_student array
if (isset($_SESSION['list_student'])) {
    $list_student = $_SESSION['list_student'];
} else {
    $list_student = [];
}

// event after click submit
if (!empty($_POST['add_student'])) {

    $handle_user = new HandleStudent();
    $new_student = $handle_user->set_user_data($_POST);
    $list_student = $handle_user->add_user_to_list($list_student, $new_student);
    $_SESSION['list_student'] = $list_student;
    header('Location:http://localhost/task1/?page=List+Student');
} elseif (!empty($_POST['update_student'])) {

    $handle_user = new HandleStudent();
    $new_student = $handle_user->set_user_data($_POST);
    $list_student = $handle_user->update_student_in_list($list_student, $new_student, $_POST['id']);
    $_SESSION['list_student'] = $list_student;
    header('Location:http://localhost/task1/?page=List+Student');
} elseif (!empty($_POST['delete_student'])) {

    $handle_user = new HandleStudent();
    $list_student = $handle_user->remove_student_from_list($list_student, $_POST['id']);
    $_SESSION['list_student'] = $list_student;
    header('Location:http://localhost/task1/?page=List+Student');
}

$list_student = $_SESSION['list_student'] ?? [];

?>