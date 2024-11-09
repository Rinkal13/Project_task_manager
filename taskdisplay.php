<h1>All Assign Users</h1>

<a href="user.php">Add New User</a>
<br>
<a href="task.php">Add Assign User</a><br>
<a href="index.php">All User</a><br><br>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Employee Name</th>
        <th>Task Name</th>
        <th>Assign Date</th>
        <th>Deadline Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
<?php
        session_start();

        $cn = mysqli_connect("localhost","root","","company2");

        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            echo '<meta http-equiv="refresh" content="1">';
        }

        if (isset($_POST['submit'])) {
            $emp_id = $_POST['emp_id'];
            $task_name = $_POST['task_name'];
            $assign_date = $_POST['assign_date'];
            $deadline_date = $_POST['deadline_date'];
            $stat = $_POST['stat'];
        }

        $q = mysqli_query($cn, "SELECT tasks.*, employees.emp_name FROM tasks JOIN employees ON tasks.emp_id = employees.emp_id where tasks.stat = 'pending'");


        $count = 1;
        while ($r = mysqli_fetch_assoc($q)) {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $r['emp_name'] . "</td>";
            echo "<td>" . $r['task_name'] . "</td>";
            echo "<td>" . $r['assign_date'] . "</td>";
            echo "<td>" . $r['deadline_date'] . "</td>";
            echo "<td>" . $r['stat'] . "</td>";
            echo "<td><a href='taskcomplete.php?task_id=" . $r['task_id'] . "'>Complete</a></td>";
            echo "</tr>";
            $count++;
        }

        echo "</table>";

?>
<h1>Confirm Table </h1>

<table border="1">
    <tr>
        <th>NO</th>
        <th>Employee Name</th>
        <th>Task Name</th>
        <th>Assign Date</th>
        <th>Deadline Date</th>
        <th>Status</th>
        
    </tr>
<?php
        
        $cn = mysqli_connect("localhost","root","","company2");

        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            echo '<meta http-equiv="refresh" content="1">';
        }

        if (isset($_POST['submit'])) {
            $emp_id = $_POST['emp_id'];
            $task_name = $_POST['task_name'];
            $assign_date = $_POST['assign_date'];
            $deadline_date = $_POST['deadline_date'];
            $stat = $_POST['stat'];
        }

        
        $q = mysqli_query($cn, "SELECT tasks.*, employees.emp_name FROM tasks JOIN employees ON tasks.emp_id = employees.emp_id WHERE tasks.stat = 'complete'");


        $count = 1;
        while ($r = mysqli_fetch_assoc($q)) {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $r['emp_name'] . "</td>";
            echo "<td>" . $r['task_name'] . "</td>";
            echo "<td>" . $r['assign_date'] . "</td>";
            echo "<td>" . $r['deadline_date'] . "</td>";
            echo "<td>" . $r['stat'] . "</td>";
            echo "<td><a href='taskedit.php?task_id=" . $r['task_id'] . "'>Pending</a></td>";
            echo "</tr>";
            $count++;
        }

        echo "</table>";
?>

</table>
</body>
</html>