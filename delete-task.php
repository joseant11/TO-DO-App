<?php
    require_once 'config/database.php';

    if($_GET) {
        $id = $_GET['id'];

        $sql = " DELETE FROM tasks WHERE id = $id ";
        $query = $db->query($sql);

        if ($query) {
            header('Location: index.php');
        } else {
            header('Location: index.php');
        }
    }
?>
