<?php
include '../database/config/config_database.php';
$rows = $db->query("select * from todoData");

if (mysqli_num_rows($rows) == 0) {
    echo "<h3>EMPTY LIST</h3>";
}
while ($row = mysqli_fetch_assoc($rows)) 
{
$id=$row['Id'];

$updateButton="<button class='btn' onclick=location.href='../pages/todoUpdatePage.php?action=update&id=$id' name='edit'><i class='fa fa-edit'></i></button>";

$deleteButton="<button  onclick=location.href='../database/functions/deleteTask.php?action=delete&id=$id' <i class='fa fa-trash'></i></button>";


echo 
"<ul> 
<li>

<div class='task'>
" . $row["task"] . " 

</div>

<div class='buttons'> " . $updateButton . " " . $deleteButton . "  </div>

</li>
 
</ul>";
}
?>