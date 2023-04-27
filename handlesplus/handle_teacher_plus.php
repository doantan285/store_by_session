<?php

class HandleTeacher
{

    // set data infor teacher
    public function set_user_data(array $data = [])
    {
        $new_teacher = new  Teacher();

        // get infor from form
        $new_teacher->set_infor($data['id_teacher'] ?? '', $data['name_teacher'] ?? '', $data['age_teacher'] ?? '', $data['gender_teacher'] ?? '');

        //get data from form
        $new_teacher->set_data($data['salary1'] ?? '', $data['salary2'] ?? '', $data['salary3'] ?? '', $data['salary4'] ?? '');

        // get average salaray
        $new_teacher->get_average_salary();

        return $new_teacher;
    }

    public function add_user_to_list(array $list_teacher, Teacher $teacher)
    {
        $list_teacher[] = $teacher;

        return $list_teacher;
    }

    // update teacher
    public function update_teacher_in_list(array $list_teacher, Teacher $teacher, $teacher_id)
    {
        foreach ($list_teacher as $key => $tc) {

            $tc = $this->convert_to_teacher_obj($tc);

            if ($tc->id == $teacher_id) {
                $list_teacher[$key] = $teacher;
            }
        }
        return $list_teacher;
    }

    // convert function
    public function convert_to_teacher_obj($var)
    {
        return (unserialize(serialize($var)));
    }

    // remove student
    public function remove_teacher_from_list(array $list_teacher, $teacher_id)
    {
        foreach ($list_teacher as $key => $delete_teacher) {
            $delete_teacher = $this->convert_to_teacher_obj($delete_teacher);
            if ($delete_teacher->id == $teacher_id) {
                unset($list_teacher[$key]);
            }
        }
        return $list_teacher;
    }
}

// initialize the list_teacher array
if (isset($_SESSION['list_teacher'])) {
    $list_teacher = $_SESSION['list_teacher'];
} else {
    $list_teacher = [];
}

// event after click submit
if (!empty($_POST['add_teacher'])) {

    $handle_user = new HandleTeacher();
    $new_teacher = $handle_user->set_user_data($_POST);
    $list_teacher = $handle_user->add_user_to_list($list_teacher, $new_teacher);
    $_SESSION['list_teacher'] = $list_teacher;
    header('Location:http://localhost/task1/?page=List+Teacher');
} elseif (!empty($_POST['update_teacher'])) {

    $handle_user = new HandleTeacher();
    $new_teacher = $handle_user->set_user_data($_POST);
    $list_teacher = $handle_user->update_teacher_in_list($list_teacher, $new_teacher, $_POST['id_teacher']);
    $_SESSION['list_teacher'] = $list_teacher;
    header('Location:http://localhost/task1/?page=List+Teacher');
} elseif (!empty($_POST['delete_teacher'])) {

    $handle_user = new HandleTeacher();
    $list_teacher = $handle_user->remove_teacher_from_list($list_teacher, $_POST['id_teacher']);
    $_SESSION['list_teacher'] = $list_teacher;
    header('Location:http://localhost/task1/?page=List+Teacher');
}

$list_teacher = $_SESSION['list_teacher'] ?? [];

?>