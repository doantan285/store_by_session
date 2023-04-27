<?php
require '../constant.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo dir_URL_index; ?>" method="post">

        <!-- input infor student -->
        <h2>Infor</h2>
        ID teacher: <br> <input type="text" name="id_teacher"> <br>
        Name: <br> <input type="text" name="name_teacher"> <br>
        Age: <br> <input type="number" name="age_teacher"> <br>
        Gender: <br>
        Nam:<input type="radio" name="gender_teacher" checked="checked" value="Nam">
        Nữ:<input type="radio" name="gender_teacher" value="Nữ">
        Khác:<input type="radio" name="gender_teacher"><br>

        <!-- input data teacher -->
        <h2>Data</h2>
        Salary quater 1: <br> <input type="number" name="salary1"> <br>
        Salary quater 2: <br> <input type="number" name="salary2"> <br>
        Salary quater 3: <br> <input type="number" name="salary3"> <br>
        Salary quater 4: <br> <input type="number" name="salary4"> <br>

        <input type="submit" name="add_teacher" value="Add Teacher" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
        <input type="submit" name="update_teacher" value="Update Teacher" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
        <input type="submit" name="delete_teacher" value="Delete Teacher" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
    </form>
</body>

</html>