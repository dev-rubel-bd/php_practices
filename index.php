<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <form class="crud_container" action="" method="$_POST">
        <div class="form-data">
            <label for="task-name" placeholder="Task Name">Fill Task Name:</label>
            <input type="Text">
        </div>

        <div class="form-data">
            <label for="date">Select Task Date:</label>
            <input type="date">
        </div>
        <div>
            <button>Add</button>
        </div>

    </form>
    
    <div class="crud_container">
    <h2>MY Task</h2>
        <div class="print-data">
            <h3>Task name:</h3>
            <button>Edit</button>
        </div>
        <div class="print-data">
            <h3>Date:</h3>
            <button>Edit</button>
        </div>
    </div>

    
</body>
</html>