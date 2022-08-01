

<?php

$db = mysqli_connect("localhost", "root", "", "todo");
if ($db->mysqli_connect_error) {
    error_log('bad connection  with database');
    echo 'bad connection  with database';
}
?>