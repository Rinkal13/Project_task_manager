<?php
$cn = mysqli_connect("localhost","root","","company2");

    $task_id = $_GET['task_id'];

    $q = mysqli_query($cn,"SELECT * FROM tasks WHERE task_id = $task_id");

    $task = mysqli_fetch_assoc($q);
    
?>
<html>
<head>
    <title>Update Task</title>
</head>
<body>

<h2>Update Task Information</h2>
<form action="update_task.php" method="post">
    <input type="hidden" name="task_id" value="<?php echo $task['task_id']; ?>">

    <label >Assign Employee:</label>
    <select name="emp_id" required>
    
        <?php

        $cn = mysqli_connect("localhost","root","","company2");

        if(isset($_POST['submit']))
        {
            $emp_id = $_POST['emp_id'];
            $emp_name = $_POST['emp_name'];
        }        
        $q = mysqli_query($cn,"select emp_id, emp_name from employees");

        echo "<table border='1' align='center'>";
        while($r = mysqli_fetch_assoc($q))
        {  
            $selected = ($task['emp_id'] == $r['emp_id']) ? 'selected' : '';
            echo "<option value='" . $r['emp_id'] . "' $selected>" . $r['emp_name'] . "</option>"; 
        }  
        ?>
        
    </select><br><br>
    
    <label>Task Name:<label>          
    <input type="text" name="task_name" value="<?php echo $task['task_name']; ?>"><br><br>

    <label>Assign Date:</label>
    <input type="date" name="assign_date" value="<?php echo $task['assign_date']; ?>" required><br><br>

    <label>Deadline:</label>
    <input type="date" name = "deadline_date" value="<?php echo $task['deadline_date']; ?>" required><br><br>

    <input type="submit" value="Update Task"  name="submit">
</form>

</body>
</html>


