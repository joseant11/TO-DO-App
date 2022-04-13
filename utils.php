<?php
    function getAllTasks($db, $active = null, $completed = null) {
        $sql = " SELECT * FROM tasks ";
        
        if ($active) {
            $sql .= "WHERE status = 'incomplete' ";
        }

        if ($completed) {
            $sql .= "WHERE status = 'complete' ";
        }

        $sql .= "ORDER BY id ASC ";
        $tasks = $db->query($sql);

        return $tasks;
    }
?>
