<?php
    require_once 'config/database.php';

    if ($_POST) {
        if (!empty(trim($_POST['input-task']))) {
            $input = mysqli_real_escape_string($db, $_POST['input-task']);
            $sql = " INSERT INTO tasks VALUES(NULL, '$input', 'incomplete', NOW()) ";
            $query = $db->query($sql);
        } else {
            echo 'LA INPUT VACÍA NO, IDIOTA';
        }

        header('Location: index.php');
    }
?>
