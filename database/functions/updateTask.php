<?php
include '../config/config_database.php';


if(isset($_POST['update'])){

 $newTask = $_POST['taskForUpdate'];
 $idToUpdate=$_GET['id'];

            $sql = "UPDATE todoData SET task=? WHERE Id=$idToUpdate";

if($newTask !=null){
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s', $newTask);
    $stmt->execute();
}  
            $db->close();
            header('Location: ../../pages/todoListPage.php');

}



   
?>