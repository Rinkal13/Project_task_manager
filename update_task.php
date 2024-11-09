<?php
    $cn = mysqli_connect("localhost", "root", "", "company2");

    if (isset($_POST['submit']))
    {
        $task_id = $_POST['task_id'];
        $emp_id = $_POST['emp_id'];
        $task_name = $_POST['task_name'];
        $assign_date = $_POST['assign_date'];
        $deadline_date = $_POST['deadline_date'];
        $stat = $_POST['stat'];

        $update_query = "UPDATE tasks SET emp_id='$emp_id', task_name='$task_name', assign_date='$assign_date', deadline_date='$deadline_date', stat='pending' WHERE task_id='$task_id'";
        mysqli_query($cn, $update_query);


        session_start();
        $_SESSION['message']="Task Uncomplete...";
            
        header("Location: taskdisplay.php");

    }

    
?>






