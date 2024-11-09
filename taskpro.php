<?php

$cn = mysqli_connect("localhost","root","","company2");

if(isset($_POST['submit']))
{
    $emp_id = $_POST['emp_id'];
    $task_name = $_POST['task_name'];
    $assign_date = $_POST['assign_date'];
    $deadline_date = $_POST['deadline_date'];
    $stat = $_POST['stat'];

    $q = mysqli_query($cn,"insert into tasks values ('','$emp_id','$task_name','$assign_date','$deadline_date','pending')");
    session_start();
    $_SESSION['message']="Task assign succesfully....";
    
    header("Location: taskdisplay.php");
}
echo "</tr>";
echo "</table>";
?>