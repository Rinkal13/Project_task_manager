<head>
    <link rel="stylesheet" href="style.css">
    <title>All User</title>
</head>

<h1>All Employess </h1>
<a href="user.php">Add New Employee </a>
<a href="task.php">Assign Task</a>
<table border="1">
    <tr>
		<th>NO</th>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>
        <th>Assign Task</th>
	</tr>
<?php
session_start();

if (isset($_SESSION['message'])){

    echo  $_SESSION['message'] ;
   
    unset($_SESSION['message']);
   
    echo '<meta http-equiv="refresh" content="1">';

}
$cn = mysqli_connect("localhost","root","","company2");

if(isset($_POST['submit']))
{
    $emp_id = $_POST['emp_id'];
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
}

$q = mysqli_query($cn,"select * from employees");


$count = 1;
while($r = mysqli_fetch_assoc($q))
{
        echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td>".$r['emp_no']."</td>";
            echo "<td>".$r['emp_name']."</td>";
        
            echo "<td><a href='useredit.php?emp_id=".$r['emp_id']."'>Update</a>|| <a href='userdelete.php?emp_id=".$r['emp_id']."'>Delete</a></td>";
            echo "<td><a href='task.php?emp_id=".$r['emp_id']."'>Assign task</td>";
       echo "</tr>";

       $count++;
}
echo "</table>";
?>  




