<?php
global $conn;
include("db.php");

// Insert task
if (isset($_POST['task']) && !empty($_POST['task'])) {
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    mysqli_query($conn, $sql);
}

// Fetch tasks
$result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>My Task List</h2>

    <form method="POST" action="">
        <input type="text" name="task" placeholder="Enter new task">
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <li><?php echo $row['task_name']; ?></li>
        <?php } ?>
    </ul>
</div>
</body>
</html>
