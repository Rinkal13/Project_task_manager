<?php
$cn = mysqli_connect("localhost","root","","company2");

    $selected_emp_id = isset($_GET['emp_id']) ? $_GET['emp_id'] : '';

    $q = mysqli_query($cn,"select * from tasks");

    $task = mysqli_fetch_assoc($q);
    
?>
<html>
<head>
    <title>Task Management</title>
</head>
<body>
<h2>Task Management</h2>

<form action="taskpro.php" method="POST">
<label>Employee Name:</label>
    <select name="emp_id" value="<?php $emp_id; ?>">
    <option value="">--Select Employee--</option>

    <?php

        $q = mysqli_query($cn, "select emp_id, emp_name from employees");

        while ($r = mysqli_fetch_assoc($q)) {
     
            $selected = ($r['emp_id'] == $selected_emp_id) ? 'selected' : '';
            echo "<option value='" . $r['emp_id'] . "' $selected>" . $r['emp_name'] . "</option>";
        }
        ?>

    </select><br><br>

    <label>Task Name:</label>
    <input type="text" name="task_name"><br><br>

    <label>Assign Date:</label>
    <input type="date" name="assign_date"  value="<?php echo date("Y-m-d");?>"required><br><br>

    <label>Deadline Date:</label>
    <input type="date" name="deadline_date"  required><br><br>

    <button type="submit" name="submit">Submit</button><br><br>

    <a href="taskdisplay.php">Task Display</a>
   
</form>


