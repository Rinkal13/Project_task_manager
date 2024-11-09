<?php

    $cn = mysqli_connect("localhost","root","","company2");

    $task_id = $_GET['task_id'];

    $q = mysqli_query($cn,"delete from tasks where task_id = '$task_id '");
    session_start();
    $_SESSION['message']="Task Delete Succesfully...";
    header("Location: taskdisplay.php");
?>