<?php
$cn = mysqli_connect("localhost","root","","company2");

if(isset($_POST['submit']))
{
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
    
    $q = mysqli_query($cn,"insert into employees values('','$emp_no','$emp_name')");
    session_start();
    $_SESSION['message'] = "Record Insert Succesfully....";

    header("Location: index.php");

}

?>