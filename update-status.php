<?php
    require_once 'config/database.php';

    if ($_GET) {
        $id = $_GET['id'];
        $status = $_GET['status'];

        if ($status == 'incomplete') {
            $sql = " UPDATE tasks SET status = 'complete' WHERE id = $id ";
            $query = $db->query($sql);
        } else {
            $sql = " UPDATE tasks SET status = 'incomplete' WHERE id = $id ";
            $query = $db->query($sql);
        }

        header('Location: index.php');
    }
?>
