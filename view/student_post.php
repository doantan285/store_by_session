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
    <form action=" <?php echo dir_URL_index; ?>" method="post">

        <!-- input infor student -->
        <h2>Infor</h2>
        ID student: <br> <input type="text" name="id"> <br>
        Name: <br> <input type="text" name="name"> <br>
        Age: <br> <input type="number" name="age"> <br>
        Gender: <br>
        Nam:<input type="radio" name="gender" checked="checked" value="male">
        Nữ:<input type="radio" name="gender" value="female">
        Khác:<input type="radio" name="gender" value="other"><br>

        <!-- input data student -->
        <h2>Data</h2>
        Math score: <br> <input type="number" name="math" min="0" max="10"> <br>
        Physic score: <br> <input type="number" name="physic" min="0" max="10"> <br>
        Chemistry score: <br> <input type="number" name="chemistry" min="0" max="10"> <br>
        Training point: <br> <input type="number" name="training" min="0" max="100"> <br>

        <input type="submit" name="add_student" value="Add Student" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
        <input type="submit" name="update_student" value="Update Student" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
        <input type="submit" name="delete_student" value="Delete Student" style="margin-top: 10px; padding: 5px; background-color: aqua; border: none;">
    </form>

</body>

</html>