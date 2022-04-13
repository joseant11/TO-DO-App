<?php
    require_once 'config/database.php';

    $sql = " DELETE FROM tasks WHERE status = 'complete' ";
    $query = $db->query($sql);

    header('Location: index.php');
?>
