<?php
include '../config/config_database.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $idToDelete = $_GET['id'];
        $db->query("DELETE  FROM todoData where Id=$idToDelete");

    }
    $db->close();
    header('Location: ../../pages/todoListPage.php');

}