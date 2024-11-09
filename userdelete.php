<?php
    $cn = mysqli_connect("localhost","root","","company2");

    $emp_id = $_GET['emp_id'];

    $q = mysqli_query($cn,"delete from employees where emp_id = '$emp_id'");
    session_start();
    $_SESSION['message'] = "Record Delete Succesfully....";
    header("Location: index.php");

?>