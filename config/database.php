<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $base_de_datos = 'todo_tasks';
    $db = mysqli_connect($servidor, $usuario, $password, $base_de_datos);

    mysqli_query($db, 'SET NAMES "utf8"');
?>
