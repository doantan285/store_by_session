<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>


<body>
    <form action="" method="get">
        <label for="page">Choose object list:</label>
        <input name="page" type="submit" value="List Student">
        <input name="page" type="submit" value="List Teacher">
    </form>

    <br>
    <br>

    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'List Student':
    ?>
                <a href="view/student_post.php" style="text-decoration:none; background-color: brown; color: aqua; padding: 5px;">Edit List Student</a>

            <?php
                echo "<br>";
                echo "======================= LIST STUDENT =======================";
                echo "<br>";

                echo "<pre>";
                print_r($list_student);
                echo  "</pre>";
                break;
            case 'List Teacher':
            ?>
                <a href="view/teacher_post.php" style="text-decoration:none; background-color: brown; color: aqua; padding: 5px;">Edit List Teacher</a>
    <?php
                echo "<br>";
                echo "======================= LIST TEACHER =======================";
                echo "<br>";

                echo "<pre>";
                print_r($list_teacher);
                echo  "</pre>";
                break;
        }
    }

    ?>


</body>

</html>