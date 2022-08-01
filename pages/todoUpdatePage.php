<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../styles/todoListStyle.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="Page">
        <div class='title'>
            <h1>Edit Your Task</h1>
        </div>
        <div id="Box">
            <div class="TableTask">
                <form method="post" action="../database/functions/updateTask.php?id=<?php echo $_GET['id']; ?>">
                    <div id="inputForTask">

                        <input type="text" name="taskForUpdate">

                        </input>
                    </div>
                    <div id="btn-container">
                        <input type='submit' value="Save " name='update'>

                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>