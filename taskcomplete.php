<?php

$cn = mysqli_connect("localhost", "root", "", "company2");

$task_id = $_GET['task_id'];

$q = mysqli_query($cn, "SELECT * FROM tasks WHERE task_id = '$task_id'");
$r = mysqli_fetch_assoc($q);

if (isset($_POST['submit'])) {
    $emp_id = $_POST['emp_id'];
    $task_name = $_POST['task_name'];
    $assign_date = $_POST['assign_date'];
    $deadline_date = $_POST['deadline_date'];
    $stat = $_POST['stat'];
}

$q1 = "update tasks SET stat = 'complete' where tasks.task_id = '$task_id'";

$r1 = mysqli_query($cn, $q1);





session_start();
$_SESSION['message'] = "Task Complete successfully....";

header("Location: taskdisplay.php");

?>
