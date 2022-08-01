<?php
include '../config/config_database.php';

$sql =
    'INSERT INTO todoData(task) VALUES(?)';

if (isset($_POST['add'])) {
    $stmt = $db->prepare($sql);

    if($_POST['task'] !=null){
        $stmt->bind_param('s', $_POST["task"]);
        $stmt->execute();
        
    }
    $db->close();
    header('Location: ../../pages/todoListPage.php');

}
