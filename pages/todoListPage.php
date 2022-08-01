<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../styles/todoListStyle.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>
</head>

<body>

    <div class="Page">
        <div class='title'>
            <h1>TodoApp</h1>
        </div>
        <div class='Box'>
            <div class="TableTask">
                <form method="post" action="../database/functions/addTask.php">
                    <input type="text" name="task"></input>
                    <button class='btnToAdd' name="add"><i class='fa fa-plus'></i></button>
                </form>
                <?php

                    include '../view/task.php';
                ?>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>